<?php 

	class Person{
		public $ID        = "1";
		public $Name      = "Snigdho Majumder";
		public $Language  = "PHP";
		
		private $Email = "Snigdho2011@gmail.com";
		private $Password = "123456789";
		protected $Rank = "Administrator";
		
		public function iteratorInner(){
			echo "Inside Class : <br/>";
			foreach($this as $key=>$value){
				echo "<pre>";
				echo "$key : $value";
				echo "</pre>";
			}
		}
	}

?>