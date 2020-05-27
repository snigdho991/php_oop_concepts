<?php include "inc/header.php"; ?>


<?php 

	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});

	//$php = new Php();
	//$php->framework()->cms();
	
	$cal = new Calculate();
	echo "Result is : ".$cal->getValue(5,25)->getResult();
?>

		













<?php include "inc/footer.php"; ?>