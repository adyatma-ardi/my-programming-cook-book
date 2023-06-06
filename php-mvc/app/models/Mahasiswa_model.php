<?php
error_reporting (E_ALL ^ E_NOTICE);

class Mahasiswa_model
{
    private $table = 'mahasiswa',
            $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function _getAllMahasiswa()
    {
        $this->db->query(' SELECT * FROM ' . $this->table);
        return $this->db->_fetchAll();
    }

    public function _getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' .$this->table. " WHERE id=:id ");
        $this->db->bind('id', $id);

        return $this->db->_fetchUnit();
    }

    public function _tambahDataMahasiswa($data)
    {
        // return false;
        // var_dump($_POST);

        $query = "INSERT INTO
                    mahasiswa (
                        nama,
                        nrp,
                        email,
                        jurusan
                    )
                  VALUES (
                    :nama,
                    :nrp,
                    :email,
                    :jurusan
                  )";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->_rowCount();
    }

    public function _hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->_rowCount();
    }

    public function _ubahDataMahasiswa($data)
    {

        $query = "UPDATE mahasiswa
                  SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                  WHERE id = :id
                  ";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->_rowCount();
    }

    public function _findDataMahasiswa()
    {
        // var_dump($_POST['keyword']);

        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        } else {
            $keyword = '';
        }

        $query = "SELECT *
                  FROM mahasiswa
                  WHERE
                    nama LIKE :keyword OR
                    email LIKE :keyword OR
                    nrp LIKE :keyword OR
                    jurusan LIKE :keyword";

        $keyword = "%$keyword%";

        $this->db->query($query);
        $this->db->bind('keyword', $keyword);

        return $this->db->_fetchAll();
    }

    // private $mhs = [
    //     [
    //         "nama" => "Achmad Adyatma Ardi",
    //         "nrp" => "721701",
    //         "email" => "adyatmaardi@gmail.com",
    //         "jurusan" => "teknik geologi"
    //     ],
    //     [
    //         "nama" => "Qonita Wulandari",
    //         "nrp" => "721702",
    //         "email" => "qonitawulandari@gmail.com",
    //         "jurusan" => "pendidikan bahasa inggris"
    //     ]
    // ];

    // public function _getAllMahasiswa()
    // {
    //     return $this->mhs;
    // }

    // private $dbh; // database handler
    // private $stmt;
    //
    // public function __construct()
    // {
    //     // data source name
    //     $dsn = 'mysql:host=localhost;dbname=phpmvc';
    //
    //     try {
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

}
