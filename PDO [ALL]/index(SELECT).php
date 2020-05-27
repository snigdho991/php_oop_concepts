<?php 
	include 'inc/header.php';
?>

<?php 
	
	$dsn  = "mysql:dbname=userdata; host=localhost;";
	$user = "root";
	$pass = "";
	
	try {
		$pdo = new PDO($dsn, $user, $pass);
	} catch (PDOException $e) {
		echo "Connection Failed !".$e->getMessage();
	}
	
	$id = "28";
	
	$sql = "SELECT * FROM tbl_user WHERE id=?";
	$stmt = $pdo->prepare($sql);
	//$stmt->execute(array($id));
	$stmt->bindParam(1, $id);
	$stmt->execute();
	
	while($data = $stmt->fetch()){
		echo "Name : ".$data['name']."<br/>";
		echo "Email : ".$data['email']."<br/>";
		echo "Skill : ".$data['skill'];
	}
	
?>
 
<?php include 'inc/footer.php';?>