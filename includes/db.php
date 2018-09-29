<?php
/*  
	Author: 	Roger Oakley
	Date:   	December 23, 2017
	Description:    DB connection for the web tool
	Filename: 	db.php
*/

$db['db_host'] = "localhost";
$db['db_user'] = "";
$db['db_pass'] = "";
$db['db_name'] = "";


foreach($db as $key => $value){
    define(strtoupper($key), $value);
}


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);



/*  To test the connection has been established*/

/*
if($connection){
    echo"We are connected";
}


*/


?>