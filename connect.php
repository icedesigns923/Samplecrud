<?php 
 
$localhost 	= "localhost"; 
$username 	= "root"; 
$password 	= "@Udokachim07"; 
$dbname 	= "samueldb"; 
 
$conn = new mysqli($localhost, $username, $password, $dbname); 

if($conn->connect_error) {die("connection failed : " . $conn->connect_error);
    
$url = parse_url(getenv("CLEARDB_DATABASE_URL")); 
$server = $url["host"];
$username = $url["user"]; $password = $url["pass"]; 
$db = substr($url["path"], 1); 
$active_group = 'default';
$query_builder = TRUE;

// Connect to DB
$conn = new mysqli($server, $username, $password, $db); 
} 
?>
 
/* end of file */