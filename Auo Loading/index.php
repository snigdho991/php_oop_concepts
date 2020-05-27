<?php include "inc/header.php"; ?>
<?php include "student.php"; ?>


<?php 

	spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});

	
	$java   = new Java();
	$php    = new Php();
	$python = new Python();
?>

		













<?php include "inc/footer.php"; ?>