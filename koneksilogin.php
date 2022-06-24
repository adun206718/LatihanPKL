<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'logindb';

$conn = mysqli_connect($host,$user,$password,$db);

if($conn) {
    echo "kurang iman";
    die();
}
else {
    echo"succes";
}
?>