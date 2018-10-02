<?php
	include_once 'conn.class.php';
 	class login{
 	 	private $conn;

	  	public function __construct(){
 	 		$db = new conn;
          	$connect = $db->connect();
          	$this->conn = $connect;
 	 	}

 	 	public function register($nom,$prenom,$mail,$motdepasse){
			$stmt = $this->conn->prepare ("INSERT INTO users (nom, prenom, mail , motdepasse) VALUES (:nom,:prenom,:mail,:motdepasse)");
			$stmt -> bindParam(':nom',$nom);
			$stmt -> bindParam(':prenom', $prenom);
			$stmt -> bindParam(':mail', $mail);
			$stmt -> bindParam(':motdepasse', $motdepasse);
			$stmt -> execute();
 	 	}
 	 	public function passwordhash($motdepasse){
 	 		$motdepasse = md5($motdepasse);
 	 		return $motdepasse;
 	 	}
 	 	public function check($mail){
 	 		$check = $this->conn->query("SELECT mail FROM users WHERE mail ='$mail' ");
 	 		if($check->rowCount() > 1){
				return 0;
			}else{
				return 1;
			}
 	 	}
 	 	public function select($mail,$motdepasse){
 	 		$check = $this->conn->prepare("SELECT * FROM users WHERE mail =:mail AND motdepasse = :motdepasse");
 	 		$check -> bindParam(':mail',$mail);
 	 		$check -> bindParam(':motdepasse',$motdepasse);
 	 		$check -> execute();
 	 		if($check -> rowCount() === 1){
      			while($response = $check->fetch()){
	      			session_start();
					$_SESSION['id'] = $response['id'];
				    $_SESSION['nom'] = $response['nom'];
				    $_SESSION['prenom'] = $response['prenom'];
				    header('location:../Dashboard.php');
				}
 			}else{
				header('location:../index.html'); ;
			}
 	 	}

 	 	public function getUsers(){
 	 		$check = $this->conn->prepare("SELECT * FROM users");
 	 		$check -> execute();
 	 		return $check;
 	 	}

 	 	public function getUser($id){
 	 		$check = $this->conn->prepare("SELECT * FROM users where id != :id");
 	 		$check -> bindParam(':id',$id);
 	 		$check -> execute();
 	 		return $check;
		  }
		  
		  public function drop($id){
			$check = $this->conn->prepare("DELETE FROM users where id = :id");
			$check -> bindParam(':id',$id);
			$check -> execute();
		  }
 	}
?>