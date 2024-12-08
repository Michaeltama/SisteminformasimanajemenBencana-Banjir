
</head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
       
     
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="beranda.php">
                    <strong><span>Banjir</span> Pedia</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="sign-in.php" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail.php" class="bi-bag custom-icon"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="data.php">
        Data</a>
                            </li>


                        


<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "databencana";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$waktu        = "";
$jumlah       = "";
$korban1    = "";
$korban2    = "";
$kerusakan1   = "";
$kerusakan2   = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from data where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from data where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $waktu        = $r1['waktu'];
    $jumlah       = $r1['jumlah'];
    $korban1     = $r1['korban1'];
    $korban2     = $r1['korban2'];
    $kerusakan1   = $r1['kerusakan1'];
    $kerusakan2   = $r1['kerusakan2'];


    if ($nim == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $waktu       = $_POST['waktu'];
    $jumlah       = $_POST['jumlah'];
    $korban1     = $_POST['korban1'];
    $korban2     = $_POST['korban2'];
    $kerusakan1   = $_POST['kerusakan1'];
    $kerusakan2   = $_POST['kerusakan2'];

    if ($waktu && $jumlah && $korban1 && $korban2 && $kerusakan1 && $kerusakan2) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update data set waktu = '$waktu',jumlah='$jumlah',korban1 = '$korban1',korban2 = '$korban2',kerusakan1='$kerusakan1',kerusakan2 = '$kerusakan2' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into data(waktu,jumlah,korban1,korban2,kerusakan1,kerusakan2) values ('$waktu','$jumlah','$korban1','$korban2','$kerusakan1','$kerusakan2')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="waktu" name="waktu" value="<?php echo $waktu ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $jumlah ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Korban meninggal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="korban1" name="korban1" value="<?php echo $korban1 ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Korban Menderita</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="korban2" name="korban2" value="<?php echo $korban2 ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Kerusakan Rumah</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="kerusakan1" name="kerusakan1" value="<?php echo $kerusakan1 ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Kerusakan Bangunan lain</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="kerusakan2" name="kerusakan2" value="<?php echo $kerusakan2 ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data 
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Korban meninggal</th>
                            <th scope="col">Korban menderita</th>
                            <th scope="col">Kerusakan Rumah</th>
                            <th scope="col">Kerusakan Bangunan Lain</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from data order by id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $waktu       = $r2['waktu'];
                            $jumlah       = $r2['jumlah'];
                            $korban1     = $r2['korban1'];
                            $korban2     = $r2['korban2'];
                            $kerusakan1   = $r2['kerusakan1'];
                            $kerusakan2   = $r2['kerusakan2'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $waktu ?></td>
                                <td scope="row"><?php echo $jumlah ?></td>
                                <td scope="row"><?php echo $korban1 ?></td>
                                <td scope="row"><?php echo $korban2 ?></td>
                                <td scope="row"><?php echo $kerusakan1 ?></td>
                                <td scope="row"><?php echo $kerusakan2 ?></td>
                                <td scope="row">
                                    <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>

</html>
