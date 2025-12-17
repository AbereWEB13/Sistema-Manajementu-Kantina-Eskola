<?php

namespace App\Controllers;

use App\Models\M_Fatin;



class Fatin extends BaseController
{
    protected $fatin;

    public function __construct()
    {
        $this->fatin = new M_Fatin();
    }


    public function index()
    {

        $data['fatin'] = $this->fatin->findAll();
        return view('fatin/index', $data);
    }

    public function add()
    {
        return view('fatin/add');
    }

    public function create()
    {
        return view('fatin/add');
    }

    public function store()

    {

        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName(); // Kria naran random
            $file->move('uploads', $newName); // Rai iha pasta uploads
        } else {
            $newName = null; // Se la upload imajen
        } {

            $this->fatin->insertFatin([

                'id_fatin' => $this->request->getPost('id_fatin'),
                'kode_fatin' => $this->request->getPost('kode_fatin'),
                'naran_fatin' => $this->request->getPost('naran_fatin'),
                'oras_loke' => $this->request->getPost('oras_loke'),
                'oras_taka' => $this->request->getPost('oras_taka'),
                'image' => $newName,
            ]);
            return redirect()->to('fatin')->with('flash', 'Dadus aumenta ho susesu!');
        }
    }


    // Parte Edit
    public function edit($id)
    {
        $model = new M_Fatin();
        $data['fatin'] = $model->find($id);
        return view('fatin/update', $data);
    }

    // update
    public function update()
    {

        $id = $this->request->getPost('id_fatin');
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

        $this->fatin->update($id, [
            'kode_fatin' => $this->request->getPost('kode_fatin'),
            'naran_fatin' => $this->request->getPost('naran_fatin'),
            'oras_loke' => $this->request->getPost('oras_loke'),
            'oras_taka' => $this->request->getPost('oras_taka'),
            'image' => $imageName
        ]);


        return redirect()->to('/fatin ')->with('flash', 'Dadus hadia ho susesu!');
    }

    //Parte Delete//

    public function delete($id)

    {
        $model = new M_Fatin();
        $model->delete($id);
        return redirect()->to('/fatin')->with('flash', 'Dadus hamoos ho susesu!');
    }

    // Parte Nota View

    public function note($id_fatin)
    {
        $fatinModel = new M_Fatin();
        $fatin = $fatinModel->find($id_fatin);

        if (!$fatin) {
            return redirect()->to('/fatin')->with('flash', 'fatin la hetan!');
        }

        return view('fatin/note', ['fatin' => $fatin]);
    }
}
