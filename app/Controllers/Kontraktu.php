<?php

namespace App\Controllers;

use App\Models\M_Kontraktu;
use App\Models\M_Costumer;
use App\Models\M_Fatin;

class Kontraktu extends BaseController
{
    protected $kontraktu;

    public function __construct()
    {
        $this->kontraktu = new M_Kontraktu();
    }

    public function index()
    {
        $kontraktuModel = new \App\Models\M_Kontraktu();

        $data['kontraktu'] = $kontraktuModel
            ->select('tbl_kontraktu.id_kontraktu, tbl_costumer.naran, tbl_fatin.naran_fatin, tbl_kontraktu.data_hahu, tbl_kontraktu.data_remata, tbl_kontraktu.total_osan')
            ->join('tbl_costumer', 'tbl_costumer.id_costumer = tbl_kontraktu.id_costumer')
            ->join('tbl_fatin', 'tbl_fatin.id_fatin = tbl_kontraktu.id_fatin')
            ->findAll();

        return view('kontraktu/index', $data);
    }


    public function add()
    {
        return view('kontraktu/add');
    }

    public function create()
    {
        $model1 = new M_Fatin();
        $model2 = new M_Costumer();
        $data['fatin'] = $model1->findAll();
        $data['costumer'] = $model2->findAll();
        return view('kontraktu/add', $data);
    }

    public function store()

    {
        $this->kontraktu->insertKontraktu([

            'id_kontraktu' => $this->request->getPost('id_kontraktu'),
            'id_costumer' => $this->request->getPost('id_costumer'),
            'id_fatin' => $this->request->getPost('id_fatin'),
            'data_hahu' => $this->request->getPost('data_hahu'),
            'data_remata' => $this->request->getPost('data_remata'),
            'total_osan' => $this->request->getPost('total_osan'),


        ]);
        return redirect()->to('kontraktu')->with('flash', 'Dadus aumenta ho susesu!');
    }


    // Parte Edit + Join Tabel
    public function edit($id)
    {
        $model = new M_Kontraktu();
        $model2 = new M_Fatin();
        $model3 = new M_Costumer();

        $data['kontraktu'] = $model->find($id);
        $data['fatin'] = $model2->findAll(); // Ambil data Edukasi
        $data['costumer'] = $model3->findAll(); // Ambil data Alumni

        return view('kontraktu/update', $data);
    }

    // Parte Update
    public function update()
    {
        $model = new M_Kontraktu();

        $id = $this->request->getPost('id_kontraktu');

        $model->update($id, [


            'id_costumer' => $this->request->getPost('id_costumer'),
            'id_fatin' => $this->request->getPost('id_fatin'),
            'data_hahu' => $this->request->getPost('data_hahu'),
            'data_remata' => $this->request->getPost('data_remata'),
            'total_osan' => $this->request->getPost('total_osan'),
            'estatutu' => $this->request->getPost('estatutu')

        ]);

        return redirect()->to('/kontraktu')->with('flash', 'Dadus hadia ho susesu!');
    }
    //Controller Delete
    public function delete($id)
    {
        $model = new M_Kontraktu();

        // Fetch data to confirm it exists
        $data = $model->select('kon.id_kontraktu, cs.naran, ft.naran_fatin, kon.data_hahu, kon.data_remata, kon.total_osan')
            ->from('tbl_kontraktu as kon ')
            ->join('tbl_costumer as cs', 'cs.id_costumer = kon.id_costumer')
            ->join('tbl_fatin as ft', 'ft.id_fatin = kon.id_fatin')
            ->where('kon.id_kontraktu', $id)
            ->first();

        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/kontraktu')->with('flash', 'Dadus hamoos ho susesu!');
        }
    }

    // Parte Nota View
    public function note($id_kontraktu)
    {
        $kontraktuModel = new M_kontraktu();
        $kontraktu = $kontraktuModel->select('kon.id_kontraktu, cs.naran, ft.naran_fatin, kon.data_hahu, kon.data_remata, kon.total_osan')
            ->from('tbl_kontraktu as kon')
            ->join('tbl_costumer as cs', 'cs.id_costumer = kon.id_costumer')
            ->join('tbl_fatin as ft', 'ft.id_fatin = kon.id_fatin')
            ->where('kon.id_kontraktu', $id_kontraktu)
            ->first();

        if (!$kontraktu) {
            return redirect()->to('/kontraktu')->with('flash', 'kontraktu la hetan!');
        }
        return view('kontraktu/note', ['kontraktu' => $kontraktu]);
    }

    public function print()
    {
        $builder = $this->kontraktu->builder('tbl_kontraktu as kon');
        $builder->join('tbl_costumer as cs', 'cs.id_costumer = kon.id_costumer');
        $builder->join('tbl_fatin as ft', 'ft.id_fatin = kon.id_fatin');
        $builder->select('kon.id_kontraktu, cs.naran,ft.naran_fatin, kon.data_hahu, kon.data_remata, kon.total_osan');
        $query = $builder->get();
        $data['kontraktu'] = $query->getResult();

        // Pass the data to the print view
        return view('kontraktu/print', $data);
    }
}
