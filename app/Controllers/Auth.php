<?php

namespace App\Controllers;

use App\Models\M_User;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }

    // ====== PROSES REGISTER ======
    public function registerProcess()
    {
        $model = new M_User();

        $data = [
            'naran_kompletu' => $this->request->getPost('naran_kompletu'),
            'username'       => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password'       => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
        $model->insert($data);

        return redirect()->to('/auth')->with('success', 'Register susesu! Favor login.');
    }


    public function loginProcess()
    {
        $model = new M_User();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $model->where('username', $username)->first();

        if ($user && md5($password, $user['password'])) {
            // Set session data
            session()->set('loggedIn', true);
            session()->set('username', $user['username']);
            session()->set('naran_kompletu', $user['naran_kompletu']);

            return redirect()->to('dashboard');
        } else {
            return redirect()->back()->with('flash', 'Ita bot user name ou password salah!');
        }
    }

    public function create()

    {
        $model = new M_User();
        $data['user'] = $model->findAll();
        return view('auth/add');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }
}
