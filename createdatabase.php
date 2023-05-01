<?php
$server = "localhost:3308";
$username = "root";
$password = "";
$dbname = "nerosir";

$conn = mysqli_connect($server, $username, $password,$dbname);
if(!$conn){
    die ("Connection failed:".mysqli_connect_error());
}
else
{
    echo"Connected";
}
if(mysqli_select_db($conn,'nerosir')){
        echo "connected to nero";
    }
// $sql = "INSERT INTO nerotable (username, password) VALUES('Nishant', 'Nishantbca')";
// $result = mysqli_query($conn, $sql);
// if($result){
//     echo "Data inserted successfully";
// }
// else{
//     echo "Data was not inserted.";
// }
// // $sql = "CREATE DATABASE nerosir";
// mysqli_query($conn,$sql);
// $sql = "CREATE TABLE nerotable(
//          id INT PRIMARY KEY,
//          username VARCHAR(30) NOT NULL,
//          password VARCHAR(30) NOT NULL
//      )";

mysqli_close($conn);
?>