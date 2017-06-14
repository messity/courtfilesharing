<?php
if (!isset($_SESSION['username'])){
header('location:user_login.php');
}

$user_id=$_SESSION['username'];
$member_query = mysql_query("select * from users where username = '$user_id'");
$member_row = mysql_fetch_array($member_query);

$fullname = $member_row['firstname']." ".$member_row['lastname'];
?>