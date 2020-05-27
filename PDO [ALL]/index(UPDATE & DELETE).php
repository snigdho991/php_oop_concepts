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
	
	/*UPDATE Or EDIT
	$id = "1";
	$skill = "PHP, JAVA, Javascript";
	$age = "23";
	
	//$sql = "UPDATE tbl_user SET skill=? WHERE id=?"; //(when array)
	$sql = "UPDATE tbl_user SET skill=:skill, age=:age WHERE id=:id"; //(when bindParam/bindValue)
	$stmt = $pdo->prepare($sql);
	//$stmt->execute(array($skill, $id));
	$stmt->bindParam(':skill', $skill);
	$stmt->bindParam(':age', $age);
	$stmt->bindValue(':id', $id);
	$stmt->execute();
	*/
	
	//DELETE
	$id = "4";
	
	$sql = "DELETE FROM tbl_user WHERE id=?";
	$stmt = $pdo->prepare($sql);
	//$stmt->execute(array($id));
	$stmt->bindParam(1, $id);
	$stmt->execute();
	
?>
 
<?php include 'inc/footer.php';?>