<?php
	include_once 'conn.class.php';
 	class News{
 	 	private $conn;

	  	public function __construct(){
 	 		$db = new conn;
          	$connect = $db->connect();
          	$this->conn = $connect;
 	 	}

 	 	public function SetNews($userid,$title ,$body, $create_at){
			$stmt = $this->conn->prepare ("INSERT INTO news (userid,title, body, create_at , update_at) VALUES (:userid,:title ,:body, :create_at , :update_at)");
			$stmt -> bindParam(':userid',$userid);
			$stmt -> bindParam(':title', $title);
			$stmt -> bindParam(':body', $body);
			$stmt -> bindParam(':create_at', $create_at);
			$stmt -> bindParam(':update_at', $update_at);
			$stmt -> execute();
 	 	}
 	 	public function LoadMore(){
 	 		$stmt = $this->conn->prepare("SELECT * FROM user INNER JOIN news ON user.id=news.userid order by create_at DESC");
 	 		$stmt ->execute();
 	 		return $stmt;
 	 	}
	 	public function GetNews(){
 	 		$stmt = $this->conn->prepare("SELECT * FROM news order by create_at DESC LIMIT 3 ");
 	 		$stmt ->execute();
 	 		return $stmt;
 	 	}
 	 	public function GetOneNew($id){
 	 		$stmt = $this->conn->prepare("SELECT * FROM user INNER JOIN news ON user.id=news.userid WHERE news.id=:id");
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
 	 		return $stmt;
 	 	}
 	 	public function GetUserNews($userid){
 	 		$stmt = $this->conn->prepare("SELECT * FROM news WHERE userid=:userid order by create_at DESC");
 	 		$stmt -> bindParam(':userid',$userid);
 	 		$stmt ->execute();
 	 		return $stmt;
 	 	}
 	 	public function UpdateNews($title,$body,$id){
 	 		$stmt = $this->conn->prepare("UPDATE news SET title=:title , body=:body WHERE id=:id");
 	 		$stmt -> bindParam(':title',$title);
 	 		$stmt -> bindParam(':body', $body);
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
 	 	}
 	 	public function DeleteNews($id){
 	 		$stmt = $this->conn->prepare("DELETE FROM news WHERE id=:id ");
 	 		$stmt -> bindParam(':id', $id);
 	 		$stmt ->execute();
		  }
		
		  
		public function setProfileCover($id,$pic){
			$check = $this->conn->prepare("UPDATE news SET img=:pic WHERE id=:id");
			$check -> bindParam(":id",$id);
			$check -> bindParam(":pic",$pic);
			$check -> execute();
		}

		public function setPDF($id,$pic){
			$check = $this->conn->prepare("UPDATE news SET pdf=:pic WHERE id=:id");
			$check -> bindParam(":id",$id);
			$check -> bindParam(":pic",$pic);
			$check -> execute();
		}

 	}
?>