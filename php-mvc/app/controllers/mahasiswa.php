<?php

class mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->_getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->_getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->_tambahDataMahasiswa($_POST) > 0) {
            header('Refresh:0; url=' . BASEURL . '/mahasiswa/index');
            Flasher::setFlash('berhasil','ditambahkan', 'success');
            // header('Location: '. BASEURL . '/home/index');
            // header('Location: '. BASEURL . '/mahasiswa/index');
            exit;
        } else {
            header('Refresh:0; url=' . BASEURL . '/mahasiswa/index');
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            // header('Location: '. BASEURL . '/home/index');
            // header('Location: '. BASEURL . '/mahasiswa/index');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->_hapusDataMahasiswa($id) > 0) {
            header('Refresh:0; url=' . BASEURL . '/mahasiswa/index');
            Flasher::setFlash('berhasil','dihapus', 'success');
            // header('Location: '. BASEURL . '/home/index');
            // header('Refresh:0; url=' . BASEURL . '/mahasiswa/index');
            exit;
        } else {
            header('Refresh:0; url=' . BASEURL . '/mahasiswa/index');
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            // header('Location: '. BASEURL . '/home/index');
            // header('Location: '. BASEURL . '/mahasiswa/index');
            // header('Refresh:0; url=' . BASEURL . '/mahasiswa/index');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mahasiswa_model')->_getMahasiswaById($_POST['id']));
        // echo "$_POST['id']";
    }

    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->_ubahDataMahasiswa($_POST) > 0) {
            header('Refresh:0; url=' . BASEURL . '/mahasiswa/index');
            Flasher::setFlash('berhasil','diubah', 'success');
            // to reload ajax, prevent empty update query
            // header('Location: '. BASEURL . '/home/index');
            // header('Location: '. BASEURL . '/mahasiswa/index');
            exit;
        } else {
            header('Refresh:0; url=' . BASEURL . '/mahasiswa/index');
            Flasher::setFlash('gagal', 'diubah', 'danger');
            // header('Location: '. BASEURL . '/home/index');
            // header('Location: ' .BASEURL. '/mahasiswa/index');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->_findDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

}
