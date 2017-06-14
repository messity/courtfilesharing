
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
	<meta name="description" content="cloud based platform design for cout file sharing">
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
	<link rel="stylesheet" href="css/stylevideo.css" />
	
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
			<div id="navchild">	<?php include('include/sub_menus.php')?></div>
			<article>
			<div class="heading">
		<b><font color=#0f2e4e  face="Comic Sans MS,Lucida Console"><h1><a>All available resources:</a></h1> <center>Videos, Documents, Articles, Pictures and others.</center></font></b>
			</div>===============================================================================<hr />
		<?php
$con=mysqli_connect("localhost","root","","healthcarecapacitybuilding");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  ?>
 <div id='box'>
	<?php
	$q="select count(*) \"total\"  from documents";
	$ros=mysqli_query($con, $q);
	$r=(mysqli_fetch_array($ros));
	$total=$r['total'];
	$dis=5;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
	$query = mysqli_query($con, "SELECT * FROM documents ORDER BY uploaded_date DESC limit $k,$dis");
?>
	<div style ="overflow-x:auto;">	
		   <table border="1" width="100%">
		   <tr>
    <th colspan="3"><font color=#f9e7f5>Available Documents</font></th>
    </tr>
			<tr style ="color:#69f566;">
			  <th text align="left"><u>File Name</u></th>
			  <th text align="center"><u>Description</u></th>
			    <th text align="right"><u>Download</u></th>
			</tr>
		   </table>
		</div>
    <?php
	$sql="SELECT * FROM documents ORDER BY uploaded_date DESC limit $k,$dis";
	$result_set=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>
		<div id='url'>
		<div style ="overflow-x:auto;">	
	<table border="1" width="100%" cellspacing="1" cellpadding="1">
	   <tr>
        <td width="auto" text align="left"><?php echo "<font color='#96d5f5'>". $row['document_name']."</font>"; ?></td>
        <td width="auto" text align="center"><?php echo "<font color='white'>". $row['description']."</font>"; ?></td>
        <td width="auto" text align="right"><a title='Click to open/download this document.' href="uploaded/documents/<?php echo $row['url'] ?>" target="_blank"><b><u>View File</u></b></a></td>
        </tr>
		
	</table>
  </div>
 </div><?php }?>
      <div id='url'><div style ="overflow-x:auto; vertical-align:middle;">	
<?php
			
	if($page_cur>1)
	{
	 echo '<a href="download.php?page='.($page_cur-1).'" style="cursor:pointer;color:#006699 ;" ><input style="cursor:pointer;background-color:#006699;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:13px;font-weight:bold;vertical-align:middle" type="button" value="Previous"></a> ';
     }
	else
	{
	  
	  echo '<input style="background-color:#006699;border:1px black solid;border-radius:5px;width:110px;height:20px;color:black;font-size:13px;font-weight:bold;" type="button" value="Previous"> ';
	  
	}
	for($i=1;$i<$total_page;$i++)
	{
		if($page_cur==$i)
		{
		    
			echo '<input style="background-color:#006699 ;border:2px black solid;border-radius:5px;width:20px;height:30px;color:black;font-size:13px;font-weight:bold;" type="button" value="p'.$i.'"> ';
	
		}
		else
		{
		echo '<a href="download.php?page='.$i.'"> <input style="cursor:pointer;background-color:#006699 ;border:1px black solid;border-radius:5px;width:33px;height:30px;color:white;font-size:13px;font-weight:bold;" type="button" value="p'.$i.'"> </a> ';
		
		}
	}
	if($page_cur<$total_page)
	{
		
		echo '<a href="download.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:#006699 ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:13px;font-weight:bold;" type="button" value="Next"></a>';
  	  
	}
	else
	{

	 echo '<input style="background-color:#006699 ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:13px;font-weight:bold;" type="button" value="Next"> ';
     }
   ?>
  
  </div>
  </div>

</div>
<div id='box'>
		
<?php
	$q="select count(*) \"total\"  from videos";
	$ros=mysqli_query($con, $q);
	$r=(mysqli_fetch_array($ros));
	$total=$r['total'];
	$dis=5;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
	$query = mysqli_query($con, "SELECT * FROM videos ORDER BY uploaded_date DESC limit $k,$dis");
?>
		<div style ="overflow-x:auto;">	
		   <table border="1" width="100%">
			<tr style ="color:#69f566;">
			  <th>Video name</th>
			  <th>Description</th>
			  <th>Size</th>
			</tr>
		   </table>
		</div>
<?php
	while($row = mysqli_fetch_array($query))
	{
?>
				
	<div id='url'>
		<div style ="overflow-x:auto;">	
	<table border="1" width="100%" cellspacing="1" cellpadding="1">
	  <tr> 
	    <td text align="left"><a href="watch.php?video=<?php echo $row['url']; ?>"><?php echo $row['video_name'];?></a></td>
		<td text align="justify"><?php echo "<font color='white'>".$row['description']."</font>";?></td>
		<td text align="right"><?php echo "<font color='white'>".$row['size']." MB</font>";?></td>
	  </tr>
	</table>
  </div>
 </div><?php }?>
<div id='url'><div style ="overflow-x:auto; vertical-align:middle;">	
<?php
			
	if($page_cur>1)
	{
	 echo '<a href="view_all_videos.php?page='.($page_cur-1).'" style="cursor:pointer;color:#006699 ;" ><input style="cursor:pointer;background-color:#006699;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:13px;font-weight:bold;vertical-align:middle" type="button" value="Previous"></a> ';
     }
	else
	{
	  
	  echo '<input style="background-color:#006699;border:1px black solid;border-radius:5px;width:110px;height:20px;color:black;font-size:13px;font-weight:bold;" type="button" value="Previous"> ';
	  
	}
	for($i=1;$i<$total_page;$i++)
	{
		if($page_cur==$i)
		{
		    
			echo '<input style="background-color:#006699 ;border:2px black solid;border-radius:5px;width:20px;height:30px;color:black;font-size:13px;font-weight:bold;" type="button" value="p'.$i.'"> ';
	
		}
		else
		{
		echo '<a href="view_all_videos.php?page='.$i.'"> <input style="cursor:pointer;background-color:#006699 ;border:1px black solid;border-radius:5px;width:33px;height:30px;color:white;font-size:13px;font-weight:bold;" type="button" value="p'.$i.'"> </a> ';
		
		}
	}
	if($page_cur<$total_page)
	{
		
		echo '<a href="view_all_videos.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:#006699 ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:13px;font-weight:bold;" type="button" value="Next"></a>';
  	  
	}
	else
	{

	 echo '<input style="background-color:#006699 ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:13px;font-weight:bold;" type="button" value="Next"> ';
     }
   ?>
  
  </div>
  </div>
	<?php
		mysqli_close($con);
	?>
</div>
<hr />=======================================================================<hr />
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