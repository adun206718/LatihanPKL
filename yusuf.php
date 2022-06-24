<?php
$server = "localhoost";
$username = "root";
$password = "";
$db = "rumah_sewa";

$conn = mysqli_connect($server,$username,$db);
$select_db = mysql_select_db($db);

if($conn){
    echo "Database In Received <br/>";
    if($select_db) {
        echo "SUCCESS";
    } 
    else {
        echo "Database Is Not Accepted <br/>";
    }
} 

?>