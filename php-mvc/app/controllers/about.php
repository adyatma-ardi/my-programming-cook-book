<?php

class about extends Controller
{
    public function index($nama="Achmad Adyatma Ardi", $pekerjaan="Programmer", $umur=26)
    {
        $data['judul'] = 'About Me';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }


}
