<?php include 'inc/header.php';?>

<?php 
	
	$db = new mysqli("localhost","root","","userdata");
	
	if(mysqli_connect_errno()){
		echo "Connection Failed !";
		exit();
	} else {
		echo "Connection Successful !";
	}
	
	
	//Prepared Statement Variables
	
	$sql = "INSERT INTO tbl_user(id, name, email, skill) values(?,?,?,?)";
	$stmt = $db->prepare($sql);
	$stmt->bind_param("isss",$id, $name, $email, $skill);
	
	$id = "2";
	$name = "Mr.karim";
	$email = "abdur@gmail.com";
	$skill ="Ruby On Rails";
	$stmt->execute();
	$stmt->close();
	$db->close();
	
	
	
	/*Prepared Statement
	$sql = "SELECT name, skill FROM tbl_user order by id";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($name, $skill);
	
	while($stmt->fetch()){
		echo "<pre>";
		echo $name."<br/>".$skill;
		echo "</pre>";
	}
	*/
	
	
	
	
	
	/*UPDATE QUERY
	$sql = "UPDATE tbl_user SET id='1' WHERE id='18'";
	$result = $db->query($sql);
	*/
	
	
	/*SELECT QUERY
	$sql = "SELECT * FROM tbl_user";
	$result = $db->query($sql);
	while($data = $result->fetch_object()){
		echo "<pre>";
		echo $data->skill;
		echo "</pre>";
	}
	*/
	
	
?>
 
<?php include 'inc/footer.php';?>