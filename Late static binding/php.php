<?php

	class Php{
		public static function framework(){
			echo static::getClass();
		}
		
		public static function getClass(){
			return __CLASS__;
		}
	}
	
?>