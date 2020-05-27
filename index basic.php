<?php include "inc/header.php"; ?>


<?php 

	//Class, Property, Method and Object
	
/*
	public $name;
	public $age;
	public function personName(){
		echo "The Name of the person is : ".$this->name;
	}
	public function personAge($value){
		echo "<br/>The Age of the person is : ".$this->age=$value;
	}

	
$personOne = new Person;
$personOne->name="<b>Snigdho Majumder</b>";
$personOne->personName();

$personOne->personAge("<b>25</b>");
*/

	//Constructor & Destructor

class Person{
	
	public $uni;
	public $dept;
	public $id;
	
		public function __construct($uni, $dept){
			$this->uni  = $uni;
			$this->dept = $dept;
		}
		/*
		public function personDetails(){
		echo "<br/>University : {$this->uni} <br/> Department : {$this->dept}";
	}
		*/
		
		public function setId($id){
			$this->id = $id;
		}
	
		public function __destruct(){
			if(!empty($this->id)){
				echo "Saving Person's ID";
			}
		}
}

$personTwo = new Person("MBSTU", "ICT");
//$personTwo->personDetails();
$personTwo->setId(20);
unset($personTwo);

?>

		













<?php include "inc/footer.php"; ?>