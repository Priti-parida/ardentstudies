<?php 
session_start();

error_reporting(0);

if(isset($_SESSION['loginid']) && isset($_SESSION['loginid']) != "")
	{
		date_default_timezone_set("Asia/Kolkata");
		include("conn.php");	
		include_once("lib/dboperation.php");
		include_once("lib/getval.php");
		$cmn = new Comman();
		$ipaddress = $cmn->get_client_ip();
		
		$loginid = $_SESSION['loginid'];
	    $usertype = $_SESSION['usertype'];
		$createdate = date('Y-m-d');	
		
		
	}
else
	echo "<script>location='index.php?msg=invalid' </script>" ;

?>