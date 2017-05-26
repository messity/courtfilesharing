<?php
require('include/db.php');
require('include/session.php');

if (isset($_POST['answer']))
						{
						$answer_content = $_POST['answer_content'];
						$discussion_id=$_POST['discussion_id'];						
						$user_id=$_POST['responder'];
						
						$answer_content=stripslashes($answer_content);						
						$answer_content=mysql_real_escape_string($answer_content);
						$discussion_id=stripslashes($discussion_id);
						$discussion_id=mysql_real_escape_string($discussion_id);
						$user_id=stripslashes($user_id);
						$user_id=mysql_real_escape_string($user_id);
						$sql="insert into discussion_answer (answer,date_answered,responder,discussion_id) values ('$answer_content','".strtotime(date("Y-m-d h:i:sa"))."','$user_id','$discussion_id')";
						}				
				
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
else {
	header("location: discussions.php?discussion_id=".$discussion_id);
}
?> 
