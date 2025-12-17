<?php

namespace App\Controllers;

use App\Models\M_Produtu;
use App\Models\M_Order;
use App\Models\M_Kontraktu;
use App\Models\M_Pagamentu;

class Dashboard extends BaseController
{
    public function index()
    {
        $produto = new M_Produtu();
        $order = new M_Order();
        $kontraktu = new M_Kontraktu();
        $pagamentu = new M_Pagamentu();

        $data = [
            'total_produto'   => $produto->countAllResults(),
            'total_order'     => $order->countAllResults(),
            'total_kontraktu' => $kontraktu->countAllResults(),
            'total_pagamentu' => $pagamentu->countAllResults(),
        ];

        return view('dashboard', $data);
    }
}
