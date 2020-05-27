<?php include "inc/header.php"; ?>


<?php 
	
	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});
	
	class phpChild extends Php{
		public static function getClass(){
			return __CLASS__;
		}
	}
	
	$php = new Php();
	$php->framework();
	echo "<br/>";
	$childphp = new phpChild();
	$childphp->framework();
	
?>

		



<?php include "inc/footer.php"; ?>