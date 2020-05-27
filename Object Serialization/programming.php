<?php
	class Programming{
		public    $html;
		public    $css;
		private   $php;
		protected $java;
		
		public function __construct(){
			$this->html = "I know HTML";
			$this->css = "I know CSS";
			$this->php = "I am a PHP Coder";
			$this->java = "I am a JAVA Programmer";
		}
	}
?>