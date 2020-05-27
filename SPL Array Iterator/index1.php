<?php include "inc/header.php"; ?>


<?php 
	/*
	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});
	*/
	
	$arr = array('PHP','MYSQL','RUBY','PYTHON');
	$coding = new ArrayObject($arr);
	$coding->append('JAVASCRIPT');
	
	$iterator = $coding->getIterator();
	
	while($iterator->valid()){
		echo $iterator->current()."<br/>";
		$iterator->next();
	}
?>

		



<?php include "inc/footer.php"; ?>