<?php

namespace App\Controllers;

use App\Models\M_Costumer;

class costumer extends BaseController
{
    protected $costumer;

    public function __construct()
    {
        $this->costumer = new M_Costumer();
    }


    public function index()
    {

        $data['costumer'] = $this->costumer->findAll();
        return view('costumer/index', $data);
    }

    // parte add 
    public function add()
    {
        return view('costumer/add');
    }

    public function create()
    {
        return view('costumer/add');
    }

    // Parte Store
    public function store()
    {


        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName(); // Kria naran random
            $file->move('uploads', $newName); // Rai iha pasta uploads
        } else {
            $newName = null; // Se la upload imajen
        } {

            $this->costumer->insertCostumer([

                'id_costumer' => $this->request->getPost('id_costumer'),
                'naran' => $this->request->getPost('naran'),
                'seksu' => $this->request->getPost('seksu'),
                'numeru_telemovel' => $this->request->getPost('numeru_telemovel'),
                'enderesu' => $this->request->getPost('enderesu'),
                'email' => $this->request->getPost('email'),
                'image' => $newName, // Rai naran imajen iha database
            ]);

            return redirect()->to('costumer')->with('flash', 'Dadus aumenta ho susesu!');
        }
    }


    // Parte Edit 
    public function edit($id)
    {
        $model = new M_Costumer();
        $data['costumer'] = $model->find($id);
        return view('costumer/update', $data);
    }


    // Parte Update
    public function update()
    {

        $id = $this->request->getPost('id_costumer');
        $file = $this->request->getFile('image');
        $oldImage = $this->request->getPost('old_image');
        $imageName = $oldImage;

        if ($file->isValid() && !$file->hasMoved()) {

            $imageName = $file->getRandomName();
            $file->move('uploads', $imageName);
            if ($oldImage && file_exists('uploads/' . $oldImage)) {
                unlink('uploads/' . $oldImage);
            }
        }

        $this->costumer->update($id, [
            'naran' => $this->request->getPost('naran'),
            'seksu' => $this->request->getPost('seksu'),
            'numeru_telemovel' => $this->request->getPost('numeru_telemovel'),
            'enderesu' => $this->request->getPost('enderesu'),
            'email' => $this->request->getPost('email'),
            'image' => $imageName
        ]);

        return redirect()->to('/costumer')->with('flash', 'Dadus hadia ho susesu!');
    }


    // parte delete
    public function delete($id)

    {
        $model = new M_Costumer();
        $model->delete($id);
        return redirect()->to('/costumer')->with('flash', 'Dadus hamoos ho susesu!');
    }


    // parte View Data
    public function note($id_costumer)
    {
        $costumerModel = new M_Costumer();
        $costumer = $costumerModel->find($id_costumer);

        if (!$costumer) {
            return redirect()->to('/costumer')->with('flash', 'costumer la hetan!');
        }

        return view('costumer/note', ['costumer' => $costumer]);
    }
}
