<?php
$dbhost=getenv("OPENSHIFT_MYSQL_DB_HOST");
$dbport=getenv("OPENSHIFT_MYSQL_DB_PORT");
$dbuser=getenv("OPENSHIFT_MYSQL_DB_USERNAME");
$dbpwd=getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
$dbname=getenv("OPENSHIFT_APP_NAME");

$connection=mysql_connect($dbhost, $dbuser, $dbpwd);

		if (!$connection)
				{
					echo "Couldn't connect to database";
			    }
			     else 
			       {
				       echo "connected to database. <br>";
				    }
					
		$dbconnection=mysql_select_db(dbname);
		
		$query="SELECT * from users";
		
		$result=mysql_query($query);
		
		while ($row=mysql_fetch_assoc($result)
		{
			echo $row['user_id']." ".$row['username']."\n";
		}
		mysql_close;
?>