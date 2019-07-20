<?php
session_start();
$ser = "remotemysql.com";
$user = "Z0FQLKQ1gr";
$pass = "L8gCH9dvup";
$db = "Z0FQLKQ1gr";
$con = mysqli_connect($ser, $user, $pass) or die("connection failed");
$selected = mysqli_select_db($con, $db) or die("Colud not selected database");


$value=$_POST['answer'];

$Query="insert into skill (Points) values (  '$value'  )    ";
 if($Result=  mysqli_query($con, $Query)  ){
     
 }



?>

