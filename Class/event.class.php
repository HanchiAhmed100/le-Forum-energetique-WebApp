<?php
	include_once 'conn.class.php';
 	class event{
 	 	private $conn;

	  	public function __construct(){
 	 		$db = new conn;
          	$connect = $db->connect();
          	$this->conn = $connect;
          }

        public function Set($groupName,$nombre,$LName,$LTel,$LMail,$SName,$STel,$SMail,$TName,$TTel,$TMail,$FName,$FTel,$FMail,$city,$university,$create_at){
			$stmt = $this->conn->prepare ("INSERT INTO participant 
            (groupName,nombre,LName,LTel,LMail,SName,STel,SMail,TName,TTel,TMail,FName,FTel,FMail,city,university,create_at) VALUES 
            (:groupName,:nombre,:LName,:LTel,:LMail,:SName,:STel,:SMail,:TName,:TTel,:TMail,:FName,:FTel,:FMail,:city,:university,:create_at)");
			$stmt -> bindParam(':groupName',$groupName);
			$stmt -> bindParam(':nombre', $nombre);
			$stmt -> bindParam(':LName', $LName);
			$stmt -> bindParam(':LTel', $LTel);
            $stmt -> bindParam(':LMail', $LMail);
            $stmt -> bindParam(':SName',$SName);
			$stmt -> bindParam(':STel', $STel);
			$stmt -> bindParam(':SMail', $SMail);
			$stmt -> bindParam(':TName', $TName);
            $stmt -> bindParam(':TTel', $TTel);
            $stmt -> bindParam(':TMail',$TMail);
			$stmt -> bindParam(':FName', $FName);
            $stmt -> bindParam(':FTel', $FTel);
            $stmt -> bindParam(':FMail', $FMail);
			$stmt -> bindParam(':city', $city);
            $stmt -> bindParam(':university', $university);
            $stmt -> bindParam(':create_at', $create_at);
			$stmt -> execute();
 	 	}
 	 	public function LoadMore(){
 	 		$stmt = $this->conn->prepare("SELECT * FROM participant order by create_at DESC");
 	 		$stmt ->execute();
 	 		return $stmt;
 	 	}

 	 	public function GetOneNew($id){
 	 		$stmt = $this->conn->prepare("SELECT * FROM participant WHERE id=:id");
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
 	 		return $stmt;
 	 	}

 	 	public function DeleteNews($id){
 	 		$stmt = $this->conn->prepare("DELETE FROM participant WHERE id=:id ");
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
		  }
		

 	}
?>