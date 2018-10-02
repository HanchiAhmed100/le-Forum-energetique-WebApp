<?php include_once '../Class/event.class.php';
	$groupName = stripslashes(strip_tags($_POST['groupName']));
    $nombre = stripslashes(strip_tags($_POST['nombre']));
    $LName = stripslashes(strip_tags($_POST['LName']));
    $LTel = stripslashes(strip_tags($_POST['LTel']));
    $LMail = $_POST['LMail'];
    $SName = stripslashes(strip_tags($_POST['SName']));
    $STel = stripslashes(strip_tags($_POST['STel']));
    $SMail = $_POST['SMail'];
    $TName = stripslashes(strip_tags($_POST['TName']));
    $TTel = stripslashes(strip_tags($_POST['TTel']));
    $TMail = $_POST['TMail'];
    $FName = stripslashes(strip_tags($_POST['FName']));
    $FTel = stripslashes(strip_tags($_POST['FTel']));
    $FMail = $_POST['FMail'];
    $city = stripslashes(strip_tags($_POST['city']));
    $university = stripslashes(strip_tags($_POST['university']));
    $create_at = date("y:m:d H:i");


	if (filter_var($LMail, FILTER_VALIDATE_EMAIL)) {
        if(filter_var($SMail, FILTER_VALIDATE_EMAIL)){

                    $yep = new event();	
                    $yep->Set($groupName,$nombre,$LName,$LTel,$LMail,$SName,$STel,$SMail,$TName,$TTel,$TMail,$FName,$FTel,$FMail,$city,$university,$create_at);
                    header('location:../notification.php?M=OK');
                }else{
                    header('location:../notification.php?M=E');
                  }


	  }else{
		header('location:../notification.php?M=E');
	  }
?>