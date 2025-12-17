<?php

namespace App\Controllers;

use App\Models\M_Order;
use App\Models\M_Costumer;
use App\Models\M_Produtu;

class Order extends BaseController
{

    protected $order;

    public function __construct()
    {
        $this->order = new M_Order();
    }


    public function index()
    {
        $orderModel = new \App\Models\M_Order();

        $data['order'] = $orderModel
            ->select('tbl_order.id_order, tbl_costumer.naran, tbl_produtu.naran_produtu, tbl_order.presu, tbl_order.kuantidade, tbl_order.total_presu')
            ->join('tbl_costumer', 'tbl_costumer.id_costumer = tbl_order.id_costumer')
            ->join('tbl_produtu', 'tbl_produtu.id_produtu = tbl_order.id_produtu')
            ->findAll();

        return view('order/index', $data);
    }


    // Parte Create
    public function create()
    {
        $model = new M_Costumer();
        $model2 = new M_Produtu();
        $data['costumer'] = $model->findAll();
        $data['produtu'] = $model2->findAll();
        return view('order/add', $data);
    }

    public function store()

    {
        $this->order->insertOrder([

            'id_order' => $this->request->getPost('id_order'),
            'id_costumer' => $this->request->getPost('id_costumer'),
            'id_produtu' => $this->request->getPost('id_produtu'),
            'presu' => $this->request->getPost('presu'),
            'kuantidade' => $this->request->getPost('kuantidade'),
            'total_presu' => $this->request->getPost('total_presu'),
        ]);
        return redirect()->to('order')->with('flash', 'Dadus aumenta ho susesu!');
    }

    // Parte Edit + Join Tabe l
    public function edit($id)
    {
        $model = new M_Order();
        $model2 = new M_Costumer();
        $model3 = new M_Produtu();
        $data['order'] = $model->find($id);
        $data['costumer'] = $model2->findAll();
        $data['produtu'] = $model3->findAll(); // Ambil data fakultas

        return view('order/update', $data);
    }

    // Parte Update
    public function update()
    {
        $model = new M_Order();

        $id = $this->request->getPost('id_order');

        $model->update($id, [

            'id_order' => $this->request->getPost('id_order'),
            'id_costumer' => $this->request->getPost('id_costumer'),
            'id_produtu' => $this->request->getPost('id_produtu'),
            'presu' => $this->request->getPost('presu'),
            'kuantidade' => $this->request->getPost('kuantidade'),
            'total_presu' => $this->request->getPost('total_presu')
        ]);

        return redirect()->to('/order')->with('flash', 'Dadus hadia ho susesu!');
    }


    //Parte Delete//
    public function delete($id)
    {
        $model = new M_Order();

        // Fetch data to confirm it exists
        $data = $model->select('or.id_order,co.naran,pr.naran_produtu,or.presu,or.kuantidade,or.total_presu')
            ->from('tbl_order as or')
            ->join('tbl_costumer as co',  'co.id_costumer = or.id_costumer')
            ->join('tbl_produtu as pr',  'pr.id_produtu = or.id_produtu')
            ->where('or.id_order', $id)
            ->first();

        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/order')->with('flash', 'Dadus hamoos ho susesu!');
        }
    }

    // Parte Nota View
    public function note($id_order)
    {
        $orderModel = new M_Order();
        $order = $orderModel->select('or.id_order,co.naran,pr.naran_produtu,or.presu,or.kuantidade,or.total_presu')
            ->from('tbl_order as or')
            ->join('tbl_costumer as co', 'co.id_costumer = or.id_costumer')
            ->join('tbl_produtu as pr', 'pr.id_produtu = or.id_produtu')
            ->where('or.id_order', $id_order)
            ->first();

        if (!$order) {
            return redirect()->to('/order')->with('flash', 'Order la hetan!');
        }

        return view('order/note', ['order' => $order]);
    }


    public function print()
    {
        $orderModel = new \App\Models\M_Order();

        $data['order'] = $orderModel
            ->select('tbl_order.id_order, tbl_costumer.naran, tbl_produtu.naran_produtu, tbl_order.presu, tbl_order.kuantidade, tbl_order.total_presu')
            ->join('tbl_costumer', 'tbl_costumer.id_costumer = tbl_order.id_costumer')
            ->join('tbl_produtu', 'tbl_produtu.id_produtu = tbl_order.id_produtu')
            ->findAll();

        // Pass the data to the print view
        return view("order/print", $data);
    }
}
