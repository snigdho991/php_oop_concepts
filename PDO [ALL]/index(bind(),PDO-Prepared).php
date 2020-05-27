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
	
	$id    = "36";
	$name  = "Mr. Kamran";
	$email = "Kamran@hotmail.com";
	$skill = "Player";
	$age   = "34";
	
	$query = "INSERT INTO tbl_user(id , name, email, skill, age) values(:id, :name, :email, :skill, :age)";
	$stmt = $pdo->prepare($query);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	$stmt->bindValue(':name', $name, PDO::PARAM_STR);
	$stmt->bindValue(':email', $email, PDO::PARAM_STR);
	$stmt->bindValue(':skill', $skill, PDO::PARAM_STR);
	$stmt->bindValue(':age', 34, PDO::PARAM_INT);
	$stmt->execute();
	
	/*
	$query = "INSERT INTO tbl_user(id , name, email, skill, age) values(?, ?, ?, ?, ?)";
	$stmt = $pdo->prepare($query);
	$arr = array($id, $name, $email, $skill, $age);
	$stmt->execute($arr);
	*/
?>
 
<?php include 'inc/footer.php';?>