<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends BaseController
{
    public function submit()
    {
        // Ambil data yang dikirimkan melalui form
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        // Tampilkan view hasil dengan data yang telah dikumpulkan
        return view('result', compact('nama', 'nim', 'kelas', 'matakuliah', 'dosen', 'asisten'));
    }
}
?>