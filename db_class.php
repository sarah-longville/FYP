<?php

class db {
	private $mysql_host = "mysql10.000webhost.com";
	private $mysql_database = "a5661124_churh";
	private $mysql_user = "a5661124_church";
	private $mysql_password = "wordpass22";
		
	//constructs a function to connect to the database
    public function db(){
        if (!$this->res = mysql_connect($this->mysql_host, $this->mysql_user, $this->mysql_password) or die ("cannot connect to mysql"));
        mysql_select_db($this->mysql_database);
    }
    
    //runs sql query
    public function query($sql){
        return mysql_query($sql, $this->res);
    }
    
    //cleans variable to protect from sql injection
    public function clean($var){
        return mysql_real_escape_string($var, $this->res);
    }
    
    public function sqlNumRows($var){
        return mysql_num_rows($var);
    }
}

?>