<?php include "inc/header.php"; ?>


<?php 
	
	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});
	
	class phpChild extends Php{
		public function cms(){
			echo "Child Class Name :".__CLASS__."<br/>";
			echo "Child Class Name :".get_class($this)."<br/>";
		}
		
		public function newMethod(){
			parent::framework();
		}
	}
	
	$php = new phpChild();
	$php->framework();
	echo "<hr/>";
	$php->cms();
	echo "<hr/>";
	$php->newMethod();
	
?>

		



<?php include "inc/footer.php"; ?>