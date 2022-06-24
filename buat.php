<?php

include 'koneksi.php';

if(isset($_POST['submit']))
    $NAMA = $_POST['NAMA'];
    $KONTAK = $_POST['KONTAK'];
    $ALAMAT = $_POST['ALAMAT'];
    $KOTA = $_POST['KOTA'];

    $query_insert = mysqli_query($conn,"INSERT INTO rumah_sewa(NAMA,KONTAK,ALAMAT,KOTA) VALUES('$NAMA','$KONTAK','$ALAMAT','$KOTA')");

    header('Location : index.php');
    ?>