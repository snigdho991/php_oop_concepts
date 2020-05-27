<?php

	abstract class Php{
		
		public function framework(){
			echo "Base Class Name :".__CLASS__."<br/>";
			echo "Base Class Name :".get_class($this)."<br/>";
		}
	}
	
?>