<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="mydb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn==true){

    echo "connection ok";
}
else{
    echo "connection failed";
}
?>

