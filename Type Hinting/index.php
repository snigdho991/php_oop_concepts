<?php include "inc/header.php"; ?>


<?php 

	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});

	//$php = new Php();
	//$php->framework()->cms();
	
	$cal = new Calculate();
	$nums = array(
				array('Number One',10,20),
				array('Number Two',50,20)
	);
	$cal->getValue($nums);
?>

		



<?php include "inc/footer.php"; ?>