<?php include 'inc/header.php';?>

<?php 
	
	$dsn  = "mysql:dbname=userdata; host=localhost;";
	$user = "root";
	$pass = "";
	
	try {
		$pdo = new PDO($dsn, $user, $pass);
	} catch (PDOException $e) {
		echo "Connection Failed !".$e->getMessage();
	}
	
	$sql = "SELECT * FROM tbl_user";
	$result = $pdo->query($sql);
	
	foreach($result as $value){
		echo $value['email']."<br/>";
	}
	
?>
 
<?php include 'inc/footer.php';?>