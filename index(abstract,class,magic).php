<?php include "inc/header.php"; ?>
<?php include "student.php"; ?>


<?php 
//Abstruct Class
/*
	abstract class Student{
		public $name;
		public $dept;
		
		public function details(){
			echo "<b>".$this->name."</b> is in <b>".$this->dept."</b> Department";
		}
		
		abstract public function func();
		
	}
	
	class Info extends Student{
		
		public function describe(){
			return parent::details()."<br/>He is a University Student";
		}
		
		public function func(){
			return "<br/>He likes to play football";
		}
	}
	
//$s = new Student();
$s = new Info();
$s->name = "Ramkrishno Majumder";
$s->dept = "ICT";
//$s->details();
echo $s->describe();
echo $s->func();
*/

//Magic Methods
/*
	class Student{
		public $dept;
		
		public function details(){
			echo "I am a student<br/>";
		}
		
		public function __get($dept){
			echo "I am in $dept Department";
		}
		
		public function __set($key,$value){
			echo "<br/>My $key is $value years";
		}
		
		public function __call($key,$value){
			echo "<br/>There is no <b>$key</b> Method and the Arguments are : ".implode(", ", $value);
		}
	}
	
	$n = new Student();
	$n->details();
	$n->ICT;
	$n->age = 22;
	
	$n->unDefined('2','4','6','8');
	
*/

//Class Existance

	if(class_exists("Student")){
	$s = new Student();
		if(method_exists($s,"details")){
	$s->details();
	} else {
		echo "Method NOT Exist !";
	}
	} else {
		echo "Class NOT Exist !";
	}
	
?>

		













<?php include "inc/footer.php"; ?>