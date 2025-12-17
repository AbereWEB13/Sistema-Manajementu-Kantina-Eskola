<?php

namespace App\Controllers;

use App\Models\M_Role;

class Role extends BaseController
{
    protected $role;

    public function __construct()
    {
        $this->role = new M_Role();
    }

    public function index()
    {

        $data['role'] = $this->role->findAll();
        return view('role/index', $data);
    }

    public function add()
    {
        return view('role/add');
    }

    public function create()
    {
        return view('role/add');
    }
    public function store()

    {
        $this->role->insertrole([

            'id_role' => $this->request->getPost('id_role'),
            'naran_role' => $this->request->getPost('naran_role')
        ]);

        return redirect()->to('role')->with('flash', 'Dadus aumenta ho susesu!');
    }

    // Parte Edit 
    public function edit($id)
    {
        $model = new M_Role();
        $data['role'] = $model->find($id);
        return view('role/update', $data);
    }

    // Parte Update
    public function update()
    {

        $model = new M_Role();

        $id = $this->request->getPost('id_role');

        $model->update($id, [

            'naran_role' => $this->request->getPost('naran_role')

        ]);

        return redirect()->to('/role')->with('flash', 'Dadus hadia ho susesu!');
    }

    // controller delete
    public function delete($id)

    {
        $model = new M_Role();
        $model->delete($id);
        return redirect()->to('/role')->with('flash', 'Dadus hamoos ho susesu!');
    }
}
