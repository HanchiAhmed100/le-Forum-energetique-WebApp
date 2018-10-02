<?php include_once '../class/login.class.php';
  $connect = new login();
  $mail = $_POST['mail'];
  $motdepasse = stripslashes(strip_tags($_POST['pass']));
  if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $hashMDP = $connect->passwordhash($motdepasse);
    $check = $connect->select($mail,$hashMDP);
  }else{
    header('location:../notification.php?M=E');
  }

?>