<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar2");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// error message apabila table tidak ada pada database
if (!$result) {
    echo mysqli_error($conn);
}

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() -> mengembalikan array numeric
// mysqli_fetch_assoc() -> mengembalikan array associative
// mysqli_fetch_array() -> mengembalikan keduanya
// mysqli_fetch_object() -> mengembalikan object

// mysqli_fetch_row()
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs);
// var_dump($mhs[3]);

// mysqli_fetch_assoc()
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);
// var_dump($mhs["jurusan"]);

// mysqli_fetch_array()
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);
// var_dump($mhs[5]);
// var_dump($mhs["jurusan"]);

// mysqli_fetch_object()
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs);
// var_dump($mhs -> gambar);

// menampilkan database dari semua data perlu dilakukan perulangan
// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <!--lakukan perulangan fetch data pada dokumen HTML -->
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td style="text-align:center;"><?= $i;?></td>
            <td>
                <a href="">change</a> |
                <a href="">delete</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="100" alt=""></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
        
    </table>

</body>
</html>