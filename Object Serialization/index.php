<?php include "inc/header.php"; ?>


<?php 

	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});

	$pro = new Programming();
	$ser = serialize($pro);
	/*
	file_put_contents("Programming.txt",$ser);
	echo $ser;
	*/
	
	$getcont = file_get_contents("Programming.txt");
	$unser = unserialize($getcont);
	
	echo "<pre>";
	print_r ($unser);
	echo "</pre>";
?>

		



<?php include "inc/footer.php"; ?>