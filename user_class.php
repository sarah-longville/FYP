<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registration
 *
 * @author Sarah
 */
class user {
    //declare variables
    private $db;
	public $userID;
	public $username;
	public $emailaddress;
	public $password;
    
    public function user(){
        $this->db = new db; 
    }
    
    public function add(){
        
        //cleans variable to protect from sql injection
        $this->username = $this->db->clean($this->username);
        $this->emailaddress = $this->db->clean($this->emailAddress);
        $this->password = $this->db->clean($this->password);
        
        /*turns password entered into a hash (generated numbers and letters) - which means that when the data is viewed in the table the admin cannot see their password
         * means that if someone accesses the table they can't find out user password so can't log in.
         * sha256 - algorithim type 
         */
        
        $this->password = hash(sha256, $this->password);
        
        //connecting to the database
        //insert data fields into database
        $sql = "INSERT INTO USER (`username`, `emailaddress`, `password`) VALUES 
        ('".$this->username."','".$this->emailaddress."', '".$this->password."')";
        $result = $this->db->query($sql);
   
    }   

	public function login() {
		if (isset($_POST ['username']) && isset($_POST['emailaddress']) && isset($_POST['password'])) {
			/* turns password entered into a hash (generated numbers and letters) - which means that when the data is viewed in the table the admin cannot see their 					            password
			 * means that if someone accesses the table they can't find out user password so can't log in.
			 * sha256 - algorithim type 
			 */
			$username = $_POST['username'];
			$emailaddress = $_POST['emailaddress'];
			$password = hash(sha256, $_POST['password']);
			//cleans variable to protect from sql injection
			$username = $this->db->clean($username);
			$emailaddress = $this->db->clean($emailaddress);
			$password = $this->db->clean($password);
	
			//checks to see if field has been filled and if not returns an error message
			//if(empty($this->emailaddress)){ $err[] = "Email address is required";}
			//if(empty($this->password)){ $err[] = "Password is required";}
			//query checks if user exists
			$check = $this->db->query("SELECT * from user WHERE username = '$username' AND emailaddress = '$emailaddress' AND password = '$password'");
	
			//return row if user exists
			if ($this->db->sqlNumRows($check) > 0) {
				$_SESSION['userID'] = $check['userID'];
				return true;
			} else {
				return false;
			}
		}
	}
	
	//checks if user with specific userID is logged in
	public function isloggedin(){
		if (!empty($_SESSION['userID'])){
			return true;	
		}
		return false;
	}
	
	//logs user with specific userID out
	public function logout(){
		unset($_SESSION['userID']);
		session_destroy();
	}
	
	public function getsession(){
		if($this->isloggedin()){
			$this->userID = $_SESSION['userID'];
		}
	}
	
	//deletes user from database
	public function delete() {
		$query = $this->db->query("DELETE * from user WHERE userID = '$this->userID'");
	}

}
?>
