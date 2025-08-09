<?php



$dbhost = "SBOGARBES-HO"
$dbuser = "ANSI"
$dbpass = "SEMAJ"
$dbname = "SBOLive_GDS"

$conn;


	try{}
		$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		}
		catch(mysqli_sql_exception){
	echo "no connection";
		}
	
?>