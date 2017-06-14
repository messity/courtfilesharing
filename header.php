<?php

   if( isset( $_SESSION['username'] ) ){
	   $date= date("F d, Y");
	       echo "<ul>
		<li><a href=\"index.php\">Home</a></li>
		<li><a href=\"services.php\">Services by the court</a></li>
		<li><a href=\"training.php\">Available Resources</a></li>
		<li><a href=\"share.php\">Services by the system</a></li>
		<li><a href=\"faqs.php\">FAQs</a></li>
		<li><a href=\"help.php\">Help</a></li>
		<li><a href=\"browse.php\">Browse</a></li>
		<li><a href=\"profile.php\"> My Account </a> </li>
		<li><a href=\"logout.php\"> <font color=#f99b08 face=\"Comic Sans MS,Lucida Console\"><b>&nbsp;&nbsp;Logout </b></font></a> </li>
		<li><a href=\"#\"><font color=#deb7ac face=\"Comic Sans MS,Lucida Console\"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$date</b></font></a></li></ul>";
	}else
   {
	   $date= date("F d, Y");
    echo "<ul>
		<li><a href=\"index.php\">Home</a></li>
		
        <li><a href=\"welcome.php\">Available Resources</a></li>



		<li><a href=\"share.php\">Services</a></li>
		<li><a href=\"user_login.php\">Account</a> </li>
		<li><a href=\"#\"><font color=#deb7ac face=\"Comic Sans MS,Lucida Console\"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $date</b></font></a></li>
		</ul>";}?>