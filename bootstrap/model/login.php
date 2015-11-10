<?php
  include "koneksi.php";
  session_start(); // Memulai Session
  if (isset($_POST["login"])) {
    
    $username = $_POST["username"]; //$username= variable, $_POST["mengambil data dari form login dengan name=username"]
    $password = md5($_POST["password"]);
    
    $query = $db->prepare("SELECT * FROM user WHERE username='$username' AND password='$password'"); 
    //query belum diekseskusi
    $query->execute();
    if($query->rowCount()==1){
      while ($a=$query->fetch()) {
        $_SESSION['id_user'] = $a['id_user'];
        $_SESSION['username'] = $a['username'];
        $_SESSION['level'] = $a['level'];
      }
      header("location:../index.php?page=materi");
    }else{
      header("location:../login.php");
    }
  }

  if (isset($_POST["logout"])) {
    session_destroy();
    header('location:../login.php');
  }
  
?>