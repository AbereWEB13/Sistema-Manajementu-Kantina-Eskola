<?php

namespace App\Controllers;

use App\Models\M_Produtu;
use App\Models\M_Kategoria;

class Produtu extends BaseController
{
    protected $produtu;

    public function __construct()
    {
        $this->produtu = new M_Produtu();
    }

    public function index()
    {
        $produtuModel = new \App\Models\M_Produtu();

        $data['produtu'] = $produtuModel
            ->select('tbl_produtu.id_produtu,  tbl_produtu.naran_produtu,  tbl_kategoria.naran_kategoria,  tbl_produtu.presu')
            ->join('tbl_kategoria', 'tbl_kategoria.id_kategoria = tbl_produtu.id_kategoria')
            ->findAll();

        return view('produtu/index', $data);
    }

    public function add()
    {
        return view("produtu/add");
    }

    public function create()
    {
        $model = new M_kategoria();
        $data["kategoria"] = $model->findAll();
        return view("produtu/add", $data);
    }

    public function store()
    {
        $this->produtu->insertProdutu([
            "id_produtu" => $this->request->getPost("id_produtu"),
            "naran_produtu" => $this->request->getPost("naran_produtu"),
            "id_kategoria" => $this->request->getPost("id_kategoria"),
            "presu" => $this->request->getPost("presu"),
        ]);
        return redirect()
            ->to("produtu")
            ->with("flash", "Dadus aumenta ho susesu!");
    }

    // prrte Edit + Join Tabel
    public function edit($id)
    {
        $model = new M_Produtu();
        $model2 = new M_kategoria();

        $data["produtu"] = $model->find($id);
        $data["kategoria"] = $model2->findAll(); // Ambil data fakultas

        return view("produtu/update", $data);
    }

    // prrte Update
    public function update()
    {
        $model = new M_Produtu();

        $id = $this->request->getPost("id_produtu");

        $model->update($id, [
            "id_produtu" => $this->request->getPost("id_produtu"),
            "naran_produtu" => $this->request->getPost("naran_produtu"),
            "id_kategoria" => $this->request->getPost("id_kategoria"),
            "presu" => $this->request->getPost("presu"),
        ]);

        return redirect()
            ->to("/produtu")
            ->with("flash", "Dadus hadia ho susesu!");
    }
    //Controller Delete
    public function delete($id)
    {
        $model = new M_Produtu();

        // Fetch data to confirm it exists
        $data = $model
            ->select(
                "pr.id_produtu,pr.naran_produtu,ka.naran_kategoria,pr.presu",
            )
            ->from("tbl_produtu as pr")
            ->join("tbl_kategoria as ka", "ka.id_kategoria = pr.id_kategoria")
            ->where("pr.id_produtu", $id)
            ->first();

        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to("/produtu")->with('flash', 'Dadus hamoos ho susesu!');
        }
    }

    // parte nota

    public function note($id_produtu)
    {
        $produtuModel = new M_Produtu();
        $produtu = $produtuModel
            ->select(
                "pr.id_produtu,pr.naran_produtu,ka.naran_kategoria,pr.presu",
            )
            ->from("tbl_produtu as pr")
            ->join("tbl_kategoria as ka", "ka.id_kategoria = pr.id_kategoria")
            ->where("pr.id_produtu", $id_produtu)
            ->first();

        if (!$produtu) {
            return redirect()
                ->to("/produtu")
                ->with("flash", "produtu la hetan!");
        }

        return view("produtu/note", ["produtu" => $produtu]);
    }
}
