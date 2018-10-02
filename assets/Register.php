<?php include_once '../../Class/php/login.class.php';
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mail=$_POST['mail'];
	$motdepasse=$_POST['motdepasse'];
	if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		$login = new login();
		$login->check($mail);
		$hashMDP = $login->passwordhash($motdepasse);	
		$login->register($nom,$prenom,$mail,$hashMDP);
		header('location:index.php');
	  }else{
		header('location:index.php?E=Erreur');
	  }
?>