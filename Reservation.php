<?php
session_start();
if(isset($_POST["submit"])){
// Create connection
$conn = new PDO('mysql:host=localhost;dbname=restaurant','root','');

  $Name=$_POST["Name"];
  $Email=$_POST["Email"];
  $occation=$_POST["occation"];
  $ReservationDate=$_POST["ReservationDate"];
  $ReservationTime=$_POST["ReservationTime"];
  
$sql= "INSERT INTO reservation  VALUES ('$Name', '$Email', '$ReservationDate',' $ReservationTime','$occation')";
$req=$conn->prepare($sql);
$req->execute();

 header('location:index.php');
}



?>