<?php
include "koneksi.php";
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
} else {
    echo "id no selected";
}

$hapus = "DELETE FROM user WHERE nim='$nim'";
$query = mysqli_query($con, $hapus);
if ($query) {
    header("location:index.php");
}
