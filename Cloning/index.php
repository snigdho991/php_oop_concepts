<?php include "inc/header.php"; ?>


<?php 
	
	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});
	
	$java = new language();
	$java->setCategory("OOP");
	$java->setFramework("Spring");
	
	$php = clone $java;
	//$php->setCategory("PHP OOP");
	$php->setFramework("Laravel");
	
	echo $java->getCategory()."<br/>";
	echo $java->getFramework()."<br/>";
	
	echo $php->getCategory()."<br/>";
	echo $php->getFramework();
?>

		



<?php include "inc/footer.php"; ?>