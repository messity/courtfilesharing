<?php
$dbhost=getenv("OPENSHIFT_MYSQL_DB_HOST");
$dbport=getenv("OPENSHIFT_MYSQL_DB_PORT");
$dbuser=getenv("OPENSHIFT_MYSQL_DB_USERNAME");
$dbpwd=getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
$dbname=getenv("OPENSHIFT_APP_NAME");

$connection=mysql_connect($dbhost, $dbuser, $dbpwd);

		if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
					
		$dbconnection=mysql_select_db($dbname);
		
		if (!$dbconnection){
    die("Database Selection Failed" . mysql_error());
} 
?>