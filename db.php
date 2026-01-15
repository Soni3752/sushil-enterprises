<?php
$conn = mysqli_connect("localhost","root","","repair_shop");
if(!$conn){
    die("DB Connection Failed");
}
session_start();
?>
