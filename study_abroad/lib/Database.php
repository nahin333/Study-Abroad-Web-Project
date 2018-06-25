<?php
Class Database{
	
	public $host   = DB_HOST;
	public $user   = DB_USER;
	public $pass   = DB_PASS;
	public $dbname = DB_NAME;
	
	
	public $link;
	public $error;
	
	public function __construct(){
		$this->connectDB();
	}
	
	private function connectDB(){
		
	$this->link = new mysqli($this->host, $this->user, $this->pass);
	if(!$this->link){
		$this->error ="Connection fail".$this->link->connect_error;
		return false;
	}
	else
	{
		try
		{
			$sql = "CREATE DATABASE IF NOT EXISTS ".$this->dbname;
			$this->link->query($sql);
			$this->link->close();
			$this->link = new mysqli($this->host, $this->user, $this->pass,$this->dbname);
			
			
			$tbl_user = "CREATE TABLE tbl_user (
							  id int(11) NOT NULL AUTO_INCREMENT,
							  username varchar(50) NOT NULL,
							  password varchar(32) NOT NULL,
							  email varchar(255) NOT NULL,
							  PRIMARY KEY (id)
							) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
							
			if($this->link->query($tbl_user))
			{
				$insert_user = "INSERT INTO tbl_user (username, password, email) VALUES
									('Asif', md5('12345'), 'mail11asifur@gmail.com');";
				$this->link->query($insert_user);
			}
			
			$tbl_news = "CREATE TABLE tbl_news (
						  id int(11) NOT NULL AUTO_INCREMENT,
						  title varchar(255) NOT NULL,
						  image varchar(255) NOT NULL,
						  time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
						  body varchar(2500) NOT NULL,
						  link varchar(255) NOT NULL,
						  PRIMARY KEY (id)
						) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
					
			if($this->link->query($tbl_news))
			{
				$insert_news = "INSERT INTO tbl_news (id, title, image, body, link) VALUES
								(1, 'How Trump\'s Cuba policy will change college students\' plans', 'blog_pic1.jpg','The first American flight to Cuba in more than five decades took off from the Fort Lauderdale-Hollywood International Airport Nov. 31, 2016, and landed in Santa Clara, Cuba, that afternoon.\r\n\r\nNow, less than eight months later, the island communist nation will once again be off limits to many Americans who wish to travel there - including college students.\r\n\r\n\"You can\'t learn about people [by] reading in a textbook,\" says Brian Davis, a senior at Penn State University who studied abroad in Cuba last summer. \"You have to go there and really be immersed in the culture.\"', 'http://college.usatoday.com/2017/06/23/how-trumps-cuba-policy-will-change-college-students-plans/'),
								(2, 'Should you get a second bachelor\'s degree or go for a master\'s degree?', 'blog_pic2.jpg', 'The question plagues more students than you might think.\r\n\r\nWhether you want to change fields, be a more well-rounded job candidate or just learn something new, deciding between a second bachelor\'s degree and a master\'s degree is not always easy. While there doesn\'t seem to be one overarching correct answer binding everyone who considers the question, that doesn\'t mean an answer doesn\'t exist at all.', 'http://college.usatoday.com/2014/01/09/should-you-get-a-second-bachelors-degree-or-go-for-a-masters-degree/');";
				$this->link->query($insert_news);
			}
			
						$tbl_sidenews = "CREATE TABLE tbl_sidenews (
						  id int(11) NOT NULL AUTO_INCREMENT,
						  title varchar(255) NOT NULL,
						  image varchar(255) NOT NULL,
						  time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
						  body varchar(2500) NOT NULL,
						  link varchar(255) NOT NULL,
						  PRIMARY KEY (id)
						) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
					
			if($this->link->query($tbl_sidenews))
			{
				$insert_sidenews = "INSERT INTO tbl_sidenews (id, title, image, body, link) VALUES
									(1, 'Voices: How studying abroad surprised me in ways I never expected', 'blog_pic3.jpg','Contrary to my expectations, studying abroad didn\'t change my life.\r\n\r\nPacking my bags from Kansas and flying 3,000 miles to a foreign country did, however, present a myriad of surprises, which, namely, allowed my experiences in Madrid to become a simultaneous tension of curiosity and apprehension.\r\n\r\nI felt this dichotomy most notably in my Madrid Stories course, an elective with the assignment to produce a short documentary by May. Taught by Emmy Award-winning professors, the class contained a high learning curve, as filming began shortly after our first instructional session.', 'http://college.usatoday.com/2017/05/15/voices-how-studying-abroad-surprised-me-in-ways-i-never-expected/');";
				$this->link->query($insert_sidenews);
			}
			
			$tbl_admin = "CREATE TABLE tbl_admin (
						  id int(11) NOT NULL AUTO_INCREMENT,
						  username varchar(255) NOT NULL,
						  password varchar(255) NOT NULL,
						  email varchar(255) NOT NULL,
						  PRIMARY KEY (id)
						) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
						
			if($this->link->query($tbl_admin))
			{
				$insert_admin = "INSERT INTO tbl_admin (id, username, password, email) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com');";
				$this->link->query($insert_admin);
			}			
			
		}
		catch(Exception $e)
		{
			echo "Message: ".$e->getMessage();
			return false;
		}
 }
	}
	
	// Select or Read data
	
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		} else {
			return false;
		}
	}
	
	// Insert data
	public function insert($query){
	$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($insert_row){
		return $insert_row;
	} else {
		return false;
	}
  }
  
    // Update data
  	public function update($query){
	$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($update_row){
		return $update_row;
	} else {
		return false;
	}
  }
  
  // Delete data
   public function delete($query){
	$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($delete_row){
		return $delete_row;
	} else {
		return false;
	}
  }

 
 
}
