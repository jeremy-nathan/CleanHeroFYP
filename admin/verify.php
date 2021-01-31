<?php

session_start();

require_once '../GFirestore.php';

$admin = new Firestore("Admin");

if(isset($_POST['login'])){
  
  $username=$_POST['username'];
  $password=$_POST['password'];
  $password=md5($password); //encypts the password
  
// Queries the database, for the user based on the username, password. Note: the encypted password is the same with database.
  $result = $admin->getCompositeWhere('Username','Password',"==","==",$username,$password);
  if(count($result) == 1){
      $_SESSION["username"] = $username;
      header("location:index.php");
    }
  else{
      echo "<script> alert('Invalid Login');</script>";
      header("location:login.php");
  }
  }