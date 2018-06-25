<?php

	class Cookie{
				
		public static function set($key,$val){
			setcookie($key,$val,time()+30,"/");
		}
		
		public static function get($key){
			
			if(isset($_COOKIE[$key])){
				return $_COOKIE[$key];
			}
			else
			{
				return false;
			}	
		}
		
		public static function checkCookie()
		{
			session_start();
			if(self::get('login') == false)
			{
				self::destroy();
			}
			else
			{
				Session::set("login",true);
				Session::set("userId",self::get("userId"));
				Session::set("username",self::get("username"));
			}
		}
		
		public static function checkLogin()
		{
			session_start();
			if(self::get('login') == true)
			{
				Session::set("login",true);
				Session::set("userId",self::get("userId"));
				Session::set("username",self::get("username"));
				header("Location:index_logged.php");
			}
		}
		
		public static function checkAdminLogin()
		{
			session_start();
			if(self::get('login') == true)
			{
				Session::set("login",true);
				Session::set("userId",self::get("userId"));
				Session::set("username",self::get("username"));
				header("Location:index_logged_admin.php");
			}
		}
		
		public static function destroy()
		{
			self::set("login",false,time()-30);
			self::set("userId","",time()-30);
			self::set("username","",time()-30);
			session_destroy();
			header("Location:index.php");
		}
	}

 ?>