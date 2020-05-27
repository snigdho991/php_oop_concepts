<?php include "inc/header.php"; ?>


<?php 
	/*
	spl_autoload_register(function($name){
		
		include $name.".php";
		
	});
	*/
	
	$arr = array('PHP','MYSQL','RUBY','JAVASCRIPT','PYTHON');
	
	$ai = new ArrayIterator($arr);
	//$limit = new LimitIterator($ai,1,3);
	$ci = new CachingIterator($ai);
	
	foreach($ci as $value){
		echo $value;
		if($ci->hasnext()){
			echo ", ";
		}
	}
		
	
?>

		



<?php include "inc/footer.php"; ?>