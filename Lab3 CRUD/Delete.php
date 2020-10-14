 <?php
		//include once "Connect.php";
		$connect = mysqli_connect("localhost","root","","sineaddb");
		$id = $_POST['id_delete'];
		$sql = $connect->prepare("DELETE FROM eBook_MetaData WHERE id = ?;");
		$sql->bind_param("s",$id);
		
		
		$sql->execute();
		header("Location: index.php");
		?>