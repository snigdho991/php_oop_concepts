<?php

	class language{
		
		private $category;
		private $framework;
		
		function setCategory($a){
			$this->category = $a;
		}
		
		function getCategory(){
			return $this->category;
		}
		
		function setFramework($b){
			$this->framework = $b;
		}
		
		function getFramework(){
			return $this->framework;
		}
		
		public function __clone(){
			$newlang = new language();
			$newlang->setFramework($this->framework);
			//$newlang->setCategory($this->category);
			return $newlang;
		}
		
	}
?>