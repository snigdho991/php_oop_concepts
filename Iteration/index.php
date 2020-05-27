<?php include "inc/header.php"; ?>


<?php 

	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});

		
	$class = new Person();
		foreach($class as $key=>$value){
			echo "<pre>";
			echo "$key : $value";
			echo "</pre>";
		}
	$class->iteratorInner();
?>

		



<?php include "inc/footer.php"; ?>