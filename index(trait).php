<?php include "inc/header.php"; ?>


<?php 
	/*
	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});
	*/
	
	trait java{
		public function javaCoder(){
			return "I like to use Java to write my code<br/>";
		}
	}
	
	trait php{
		public function phpCoder(){
			return "I like to use Php to write my code";
		}
	}
	
	trait javaphp{
		use java, php;
	}
	
	class coDer{
		use javaphp;
	}
	
	$coder = new coDer();
	echo $coder->javaCoder();
	echo $coder->phpCoder();
	
?>

		



<?php include "inc/footer.php"; ?>