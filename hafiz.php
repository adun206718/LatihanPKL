<?php
//membuat koneksi ke database
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'rumah sewa';  
 
  $konek_db = mysqli_connect($host, $user, $password); 
  $find_db = mysql_select_db($database) ;

// Perintah untuk menampilkan data
$queri="Select * From aset ray" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['ID'];
 echo "  
  
  NAMA : ".$data['nama']." </br>
  KONTAK : ".$data['kontak']." </br> 
  ALAMAT : ".$data['alamat']." </br>
  KOTA : ".$data['kota']." </br>
  WAKTU : ".$data['waktu']." </br>
  
  ---------------------------------------- </br>
  ";
   
}
echo " Berhasil Mengambil data dari database";
?>  