<?php
$servername="localhost";
$username="username";
$password="password";
$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection failed"  . mysqli_connect_error());
}
$sql=" CREATE DATABASE mydb";
if(mysqli_query($conn,$sql)){
    echo "database succesfully created";

}else{
    echo "failed creating db" . mysqli_error($conn);
}
mysqli_close($conn);
?>

