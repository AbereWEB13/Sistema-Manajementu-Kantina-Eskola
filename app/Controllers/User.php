<?php

namespace App\Controllers;

use App\Models\M_User;
use App\Models\M_Role;

class User extends BaseController
{
    protected $user;

    public function __construct()
    {
        $this->user = new M_User();
    }

    public function index()
    {
        $dptM = new M_User();
        $builder = $dptM->builder('tbl_user as au');
        $builder->join('tbl_role as ro', 'ro.id_role = au.id_role');
        $builder->select('au.id_user, au.naran_kompletu,au.username,au.password,au.email, ro.naran_role,au.ativu');

        $query = $builder->get();
        $data["user"] = $query->getResult();
        return view("auth/index", $data);
    }

    public function add()
    {
        return view("auth/add");
    }

    public function create()
    {
        $model = new M_Role();
        $data["role"] = $model->findAll();
        return view("auth/add", $data);
    }

    public function store()
    {
        $this->user->insertUser([
            "id_user" => $this->request->getPost("id_user"),
            "naran_kompletu" => $this->request->getPost("naran_kompletu"),
            "username" => $this->request->getPost("username"),
            "password" => password_hash(
                $this->request->getPost("password"),
                PASSWORD_DEFAULT,
            ),
            "email" => $this->request->getPost("email"),
            "id_role" => $this->request->getPost("id_role"),
            "ativu" => $this->request->getPost("ativu"),
        ]);

        return redirect()->to("user")->with("flash", "Dadus aumenta ho susesu!");
    }

    public function edit($id)
    {
        $model = new M_User();
        $model2 = new M_Role();
        $data["user"] = $model->find($id);
        $data["role"] = $model2->findAll();
        return view("auth/update", $data);
    }

    public function update()
    {
        $model = new M_User();

        $id = $this->request->getPost("id_user");

        $model->update($id, [
            "naran_kompletu" => $this->request->getPost("naran_kompletu"),
            "username" => $this->request->getPost("username"),
            "password" => password_hash(
                $this->request->getPost("password"),
                PASSWORD_DEFAULT,
            ),
            "email" => $this->request->getPost("email"),
            "id_role" => $this->request->getPost("id_role"),
            "ativu" => $this->request->getPost("ativu"),
        ]);

        return redirect()->to("/user")->with("flash", "Dadus hadia ho susesu!");
    }

    public function delete($id)
    {
        $model = new M_User();
        $model->delete($id);
        return redirect()->to("/user")->with('flash', 'Dadus hamoos ho susesu!');
    }
}
