<?php

namespace App\Controllers;

use App\Models\M_Frontend;



class Frontend extends BaseController
{
    protected $frontend;

    public function __construct()
    {
        $this->frontend = new M_Frontend();
    }

    public function frontend()

    {

        $dptD = new M_Frontend();
        return view('frontend/frontend');
    }
}
