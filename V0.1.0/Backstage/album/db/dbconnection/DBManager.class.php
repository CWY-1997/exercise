<?php
    header("Content-type: text/html; charset: utf-8"); 
	class DBManager{
	  public $mysqli=null;
		public $result=null;
		function __construct(){ 
			$host="127.0.0.1";
			$user="root";
			$pass="root";
			$db="team";
          	$this->mysqli=new mysqli($host,$user,$pass,$db);
			$this->mysqli->query("SET NAMES 'utf8'");
             if (mysqli_connect_errno()){
				die ("数据库未连接，请刷新或者稍后访问");
				}	
			}
		function check_input($value){
			
			if (get_magic_quotes_gpc()){
			 $value = stripslashes($value);
	 		}
			if (!is_numeric($value) && $mysqli!=null){
			 $value = mysqli_real_escape_string($mysqli,$value);	
			}
			return $value;
		}
		
		function getResult($query){
		    $this->result=$this->mysqli->query($query);
			return $this->result; 
			}
		function insert($query){
			if(($this->mysqli->query($query))!=0){
                return true;  
			}
			else{
				echo "$query".mysqli_error();
				echo "error";
				return false;
			}
			}
	    function delete($query){
			if(($this->mysqli->query($query))!=0){	
				return true; 
			}
			else{
				//echo "$query".mysqli_error();
				echo "error";
				return false;
			}
			}
	    function update($query){
			if(($this->mysqli->query($query))!=0){	
			 //echo "update".mysqli_affected_rows($this->mysqli);
			 return true;  
			}
			else{
				//echo "$query".mysqli_error();
				echo "error";
				return false;
			}
			}	
	    function dbclose(){
			
			$this->mysqli->close();
			}
	}
?>