<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $input = "INSERT INTO user (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')";
    $query = mysqli_query($con, $input);

    if ($query) {
        header("location: index.php");
    } else {
        echo "data gagal di input";
        echo $nama, $nim, $jurusan;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>TAMBAH DATA</title>
</head>

<body>
    <div class="container">
        <center>
            <div class="container">
                <h1>PT. PERCOBAAN SEMATA</h1>
            </div>
        </center>

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-lg-6">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                                <div class="col-lg">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Tambah data</h1>
                                        </div>

                                        <form method="POST" action="tambahdata.php">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="nim" name="nim" placeholder="masukan NIM disini...">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Mahasiswa">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" placeholder="jurusann">
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                                                Simpan
                                            </button>
                                            <hr>

                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="index.php">BATAL DAN KEMBALI ?</a>
                                        </div>
                                        <div class="text-center">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <?php

    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>