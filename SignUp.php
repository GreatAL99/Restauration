<?php

session_start();

if(isset($_POST['submitlog'])){

$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$_SESSION['UserName']=$UserName;
$_SESSION['Password']=$Password;
$db=new PDO('mysql:host=localhost;dbname=restaurant','root','');


$sql="SELECT * FROM user WHERE UserName='".$UserName."'";
$result=$db->prepare($sql);
$result->execute();

if($result->rowCount()>0){
    $data=$result->fetchAll();
    if($Password==$data[0]['Password']){



    header('location:index2.php');
         /* echo "connecté";*/
        

    }
    
/*header("location:index_erreur.php");*/
  }
else{
     header('location:indexerror.php');
}
/*else{
$password=password_hash($Password, PASSWORD_DEFAULT);
$sql="INSERT INTO user  VALUES ('$FirstName', '$LastName', '$UserName','$Email','$Password') ";
$req=$db->prepare($sql);
$req->execute();
header('location:main.php');
}*/

}


?>
