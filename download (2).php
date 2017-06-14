
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>court file sharing system</title>
	<meta name="description" content="cloud based platform design for court file sharing">
	<meta name="author" content="court file sharing">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='./images/icon.jpg' rel='short cut icon' type='image/jpeg'/>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "centered-btns"
      });
    });
  </script>
  

  </head>

<body>
<script type="text/javascript" src="js/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<!--------------Header--------------->
<header> 
	<div class="zerogrid">
		<?php include('include/logo.php')?>
	</div>
</header>

<!--------------Navigation--------------->

<nav> <?php include('include/header.php')?>	</nav>

			
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid">
		<div class="row block">
			<div class="main-content col11">
			<div id="navchild">	<?php include('include/sub_menus_browse.php')?></div>
			<article>
				<div class="art">		  
			  <form name="form" action="news_exec.php" method="POST" onsubmit="return validate(this);">
<?php require('include/db.php');
//require('include/session.php');?>
<table align="center"><td width="800" align="center"><h1>Add New Article</h1></td></table><hr>
<table class="default-font" align="center">
<tr><td valign="top" width="130"><b>Article Title:</td><td><input type="text" name="art_title" size="50" required></td></tr>
<tr><td valign="top"><b>Choose Category:</td><td><label>
	<select name="cat_id"  id="input" required>
 <?php
$result = mysql_query("SELECT * FROM newscat_tbl ORDER BY newscat_id ",$connection);
$row=$result;
do {  ?>
 <option value="<?php echo $row['newscat_id'];?>"><?php echo $row['newscat_desc'];?>
  <?php } while ($row = mysql_fetch_assoc($result)); ?></option>
</select>
</label></td></tr>
<tr><td ><b>Articles Details:</b></td><td><textarea rows="20" cols="60" name="art_details"></textarea></td></tr>
<tr><td valign="top"><b>Articles author:</b></td><td><input type="text" name="art_author" value="<?php echo $fullname;?>" size="50" required></td></tr>
<tr><td valign="top"><b>Date of Post:</b></td><td class="font-content-4"><b>
																  Month: </b>
																<label>
																<select name="month_id"  id="input" required>
										<?php
										  $result = mysql_query("SELECT * FROM month_tbl ORDER BY month_id ", $connection);
										$row=$result;
										do {  ?>
								  <option value="<?php echo $row['month_id'];?>"><?php echo $row['month_desc'];?>
									  <?php } while ($row = mysql_fetch_assoc($result)); ?></option>
										</select>
																	
																	</label>
																	<b>&nbsp Day: </b><label>
																	<select name="day_id"  id="input" required>
																	  <?php
																	  $result = mysql_query("SELECT * FROM day_tbl ORDER BY day_desc ",$connection);
																	$row=$result;
																do {  ?>
																	  <option value="<?php echo $row['day_id'];?>"><?php echo $row['day_desc'];?>
																	  <?php } while ($row = mysql_fetch_assoc($result)); ?></option>
																	</select>
																	
																	</label><b>&nbsp Year: </b><label>
																	<select name="year_id"  id="input" required>
																	  <?php
																	  $result = mysql_query("SELECT * FROM year_tbl ORDER BY year_desc ",$connection);
																	$row=$result;
																do {  ?>
																	  <option value="<?php echo $row['year_id'];?>"><?php echo $row['year_desc'];?>
																	  <?php } while ($row = mysql_fetch_assoc($result)); ?></option>
																	</select>
																	
																	</label>
																</td></tr>
<tr><td valign="top"></td><td><input type="submit" name="submit" onclick="return checkForm();" value="Add-Article" class="button3">&nbsp <input type="reset" value="Reset" class="button3"><br><br></td></tr>
															</form>
</table>
<table align="center" ><td width="800" align="center"><a href="write_articles.php" class="navlink">ADD ARTICLE</a>&nbsp|&nbsp <a href="article_records.php" class="navlink">ARTICLE RECORDS</a></td></table>
	</div>
	<?php mysql_close($connection);?>
	</article>
				
			</div>
			
			<div class="sidebar col05">
				
			<?php include('include/leftbar.php')?>	
			</div>
			
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	
		<div class="copyright">
		
			<p>Copyright © 2017 - cloud based court file sharing system</p>
		
		
	</div>
</footer>



</body></html>