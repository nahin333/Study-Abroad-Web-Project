<?php

	class Session{
		
		
		public static function set($key,$val){
			$_SESSION[$key] = $val;
		}
		
		public static function get($key){
			
			if(isset($_SESSION[$key])){
				return $_SESSION[$key];
			}
			else
			{
				return false;
			}	
		}
		
		public static function checkSession()
		{
			session_start();
			if(self::get('login') == false)
			{
				session_destroy();
				header("Location:index.php");
			}
		}
		
		public static function checkLogin()
		{
			self::init();
			if(self::get('login') == true)
			{
				header("Location:index_logged.php");
			}
		}
		
	}

 ?>