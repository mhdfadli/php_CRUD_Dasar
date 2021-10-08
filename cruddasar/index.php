<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>HOME</title>
</head>

<body>
    <div class="container">


        <center>
            <div class="container">
                <h1>PT. PERCOBAAN SEMATA</h1>
            </div>
        </center>

        <a href="tambahdata.php"><button type="button" class="btn btn-primary">Tambah data</button></a>
        <p></p>
        <table class="table ">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NIM</th>
                    <th scope="col">JURUSAN</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tampil = "SELECT * FROM user";
                $query = mysqli_query($con, $tampil);
                $no     = 1;

                if (mysqli_num_rows($query) == 0) {
                    echo "<tr><td colspan='4' align='center'>data tidak ada</td></tr>";
                } else {
                    while ($hasil = mysqli_fetch_array($query)) {

                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $hasil['nim']; ?> </td>
                            <td><?= $hasil['nama']; ?> </td>
                            <td><?= $hasil['jurusan']; ?> </td>
                            <td>
                                <a href="editdata.php?nim=<?= $hasil['nim']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                <a href="hapusdata.php?nim=<?= $hasil['nim']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
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