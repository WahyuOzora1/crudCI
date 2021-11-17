<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\Session\Session;

class MahasiswaController extends BaseController
{

    public $mahasiswa;

    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        $data = $this->mahasiswa->findAll();
        // dd($data);
        return view('mahasiswa/index.php', [
            'data' => $data
        ]);
    }


    public function create()
    {
        return view('mahasiswa/create.php');
    }

    public function store()
    {
        $request = [
            'nama_mahasiswa' => $this->request->getPost('nama_lengkap'),
            'jenis' => $this->request->getPost('jenis'),
            'nim' => $this->request->getPost('nim'),

        ];

        $this->mahasiswa->insert($request);
        session()->setFlashdata('success', 'Data mahasiswa berhasil di tambah');

        echo '
        <script>
            window.location="' . base_url('mahasiswa') . '";
        </script>
        ';
    }




    public function edit($id = null)
    {

        $data = $this->mahasiswa->find($id);

        return view('mahasiswa/edit.php', compact('data'));
    }

    public function update($id)
    {
        $request = [
            "nama_mahasiswa" => $this->request->getPost("nama_lengkap"),
            "jenis" => $this->request->getPost("jenis"),
            "nim" => $this->request->getPost("nim")

        ];

        $this->mahasiswa->update($id, $request);

        session()->setFlashdata('success', 'Data mahasiswa berhasil di update');

        return redirect('mahasiswa');
    }

    public function destroy($id = null)
    {

        $this->mahasiswa->delete($id);
        session()->setFlashdata('success', 'Data mahasiswa berhasil di hapus');
        return redirect('mahasiswa');
    }
}
