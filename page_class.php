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
class page{
    //declare variables
    private $db;
	public $pagename;
	public $pagecontent;
	
	public static function listpages(){
	$db = new db;
	
	$sql = "SELECT * FROM page"; 
	$result = $db->query($sql);
	
	$page = array();
	
	while($rows=mysql_fetch_array($result)){
			new $page($pageID, $pageContent, $pageName);
			$list($page);
		}
		
		$list = new page;
		$list = array();
		
		return $list;
}
    
}

function addpage() {
        $this->db = new db; 
            
        //connecting to the database
        //insert data fields into database
        $sql = "INSERT INTO PAGE (`pagename`, `pagecontent`) VALUES 
        ('".$this->pagename."','".$this->pagecontent."')";
        $result = $this->db->query($sql);
    
    if (isset($_POST ['pagename']) && isset($_POST['pagecontent'])) {
        /* turns password entered into a hash (generated numbers and letters) - which means that when the data is viewed in the table the admin cannot see their password
         * means that if someone accesses the table they can't find out user password so can't log in.
         * sha256 - algorithim type 
         */
        $db = new db;
		$pagename = $_POST['pagename'];
        $pagecontent = $_POST['pagecontent'];
        //cleans variable to protect from sql injection
		$pagename = $db->clean($pagename);
        $pagecontent = $db->clean($pagecontent);

        //checks to see if field has been filled and if not returns an error message
        if(empty($this->pagename)){ $err[] = "Page name is required";}
        if(empty($this->pagecontent)){ $err[] = "Page content is required";}
        //query checks if user exists
        $check = $db->query("SELECT * from page WHERE pagename = '$pagename' AND pagecontent = '$pagecontent'");

        //return row if user exists
        if ($db->sqlNumRows($check) > 0) {
            $_SESSION['checkPage'] = TRUE;
            echo 'page was added successfully';
        } else {
            echo 'invalid details';
        }
    }
}

function deletepage() {
    if (isset($_POST ['pagename']) && isset($_POST['pagecontent'])) {
        /* turns password entered into a hash (generated numbers and letters) - which means that when the data is viewed in the table the admin cannot see their password
         * means that if someone accesses the table they can't find out user password so can't log in.
         * sha256 - algorithim type 
         */
        $db = new db;
		$pagename = $_POST['pagename'];
        $pagecontent = $_POST['pagecontent'];
        //cleans variable to protect from sql injection
		$pagename = $db->clean($pagename);
        $pagecontent = $db->clean($pagecontent);

        //checks to see if field has been filled and if not returns an error message
        if(empty($this->pagename)){ $err[] = "Page name is required";}
        if(empty($this->pagecontent)){ $err[] = "Page content is required";}
        //query checks if user exists
        $check = $db->query("DELETE * from page WHERE pagename = '$pagename' AND pagecontent = '$pagecontent'");

        //return row if user exists
        if ($db->sqlNumRows($check) > 0) {
            $_SESSION['checkPage'] = TRUE;
            echo 'page was deleted successfully';
        } else {
            echo 'invalid details';
        }
    }
}

function editpage() {
    if (isset($_POST ['pagename']) && isset($_POST['pagecontent'])) {
        /* turns password entered into a hash (generated numbers and letters) - which means that when the data is viewed in the table the admin cannot see their password
         * means that if someone accesses the table they can't find out user password so can't log in.
         * sha256 - algorithim type 
         */
        $db = new db;
		$pagename = $_POST['pagename'];
        $pagecontent = $_POST['pagecontent'];
        //cleans variable to protect from sql injection
		$pagename = $db->clean($pagename);
        $pagecontent = $db->clean($pagecontent);

        //checks to see if field has been filled and if not returns an error message
        if(empty($this->pagename)){ $err[] = "Page name is required";}
        if(empty($this->pagecontent)){ $err[] = "Page content is required";}
        //query checks if user exists
        $check = $db->query("ALTER TABLE page MODIFY pagename AND pagecontent");

        //return row if user exists
        if ($db->sqlNumRows($check) > 0) {
            $_SESSION['checkPage'] = TRUE;
            echo 'page was edited successfully';
        } else {
            echo 'invalid details';
        }
    }
}

?>

