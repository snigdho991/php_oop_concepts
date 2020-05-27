<?php include "inc/header.php"; 
// Vinegar baking soda﻿, Hydrogen Peroxide
?>


<?php 
//Application of Con., Des. and Static
/*	
	class UserData{
		
		public $userName;
		public $userId;
		const CONNAME = "Snigdho Majumder";
		public static $age = "22";
		
		function __construct($userName, $userId){
			$this->userName = $userName;
			$this->userId   = $userId;
			
			echo "Username : {$this->userName}<br/> User ID : {$this->userId}";
		}
		
		function __destruct(){
			unset($this->userName);
			unset($this->userId);
		}
		
		//public function UserDetails(){
		//	echo "<br/>Full Name : ".UserData::CONNAME;
		//	echo "<br/>Age is : ".self::$age;
		//}
		
		public static function UserDetails(){
			echo "<br/>Full Name : ".UserData::CONNAME;
			echo "<br/>Age is : ".self::$age;
		}
	}
	
$user = new UserData("Snigdho","20");	
//$user->UserDetails();
UserData::UserDetails();
*/

//Inheritance , Access Modifiers

	class UserData{
		
		public $userName;
		public $userId;
		//private $age = "20";
		//protected $age = "20";
		
		function __construct($userName, $userId){
			$this->userName = $userName;
			$this->userId   = $userId;
		}
		
		public function UserDetails(){
				echo "Username : {$this->userName}<br/> User ID : {$this->userId}";
				//echo "<br/>In the class : {$this->age}";
		}
	}
	
	class Admin extends UserData{
		public $rank;
		
		public function UserDetails(){
			echo "Username : {$this->userName}<br/> User ID : {$this->userId}<br/> User Status : {$this->rank}";
			//echo "<br/>In the Sub-class : {$this->age}";
		}
	}

$user = new UserData("Snigdho","21");	
$user->UserDetails();
echo "<br/>";
$ad = new Admin("Administrator","1");
$ad->rank = "VIP";
$ad->UserDetails();
echo "<br/>";
//echo $user->age;
/*Polimorphism
if($ad instanceof UserData){
	echo "Inherited Successfully !";
} else {
	echo "NOT Inherited !";
}
*/








	
?>

		













<?php include "inc/footer.php"; ?>