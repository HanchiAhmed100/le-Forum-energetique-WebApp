<?php
    include_once '../Class/event.class.php'; 
    session_start();
    $p = new event();
    $p -> DeleteNews($_POST['u']);
    header('location:../dashboard.php?Message=SuppOK');

?>