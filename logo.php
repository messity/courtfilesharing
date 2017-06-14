<?php

   if( isset( $_SESSION['username'] ) )
   {
	   echo"<div class=\"row\">
			<div class=\"col05\">
			
				<div id=\"logo\"><a href=\"#\"><img src=\"images/logo.jpg\"/></a></div>
			</div>
<div id='search-area'>	
 <form action='searchresult.php'  method='post' target='_top'>
	 <select name='resourcesearch'>
    	<option>Documents</option>
    	<option>Videos</option>
        <option>Articles</option>
      </select>
	<input  type='text' name='txtsearch' placeholder='search by name/title. . .' />
	<input  type='submit' name ='rsearch' value='Search'/>
 </form>
 </div>
				
</div>";
}
	  
   else
   {
    echo"<div class=\"row\">
			<div class=\"col05\">
				<div id=\"logo\"><a href=\"#\"><img src=\"images/logo.jpg\" /></a></div>
			</div>
			   <div id='search-area'>
			   	  <span class='threedtext'><a href=\"admin_login.php\"><img src=\"images/admin.jpg\"/> </a></span>
				</div>
			
  </div>";
    }
  ?>