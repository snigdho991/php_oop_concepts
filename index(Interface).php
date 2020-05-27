<?php include "inc/header.php"; ?>


<?php 
//Interface

	interface School{
		public function MySchool();
	}
	
	interface College{
		public function MyCollege();
	}
	
	interface Varsity{
		public function MyVarsity();
	}
	
	class Teacher implements School, College, Varsity{
		
		public function __construct(){
			$this->MySchool();
			 $this->MyCollege();
			  $this->MyVarsity();
		}
		
		public function MySchool(){
			echo "Mr.Rahim is a School Teacher<br/>";
		}
		
		public function MyCollege(){
			echo "Mr.Karim is a College Teacher<br/>";
		}
		
		public function MyVarsity(){
			echo "Mr.Kabir is a University Teacher<br/>";
		}
	}
	
	
	class Student implements School, College, Varsity{
		
		public function __construct(){
			$this->MySchool();
			 $this->MyCollege();
			  $this->MyVarsity();
		}
		
		public function MySchool(){
			echo "<br/>I was a School Student<br/>";
		}
		
		public function MyCollege(){
			echo "I was a College Student<br/>";
		}
		
		public function MyVarsity(){
			echo "I was a University Student";
		}
	}
	
	
$teacher = new Teacher;
$student = new Student;
?>

		













<?php include "inc/footer.php"; ?>