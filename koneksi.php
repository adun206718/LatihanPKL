<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'rumah_sewa';

$conn = mysqli_connect($host,$user,$password,$db);

if(!$conn) {
    echo "kurang iman";
    die();
}
else {
    echo"succes";
}
?>