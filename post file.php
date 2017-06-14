
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>court file sharing</title>
	<meta name="description" content="cloud based court file sharing system">
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
			<div id="navchild">	<?php include('include/sub_menus_browse.php')?></div>
			<article>
			<div class="heading">
			<b><font color=#0f2e4e  face="Comic Sans MS,Lucida Console"><h2><a>Uploading Documents to Share for others . . .</a></h2></font></b>
			</div><br>

					
<?php
	
	$con=mysqli_connect("localhost","root","","court_file_sharing");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

?>

	<div id='box'>
    	<form method="post" enctype="multipart/form-data">
         <?php
			//print_r ($_FILES['file']);
			if(isset($_FILES['file'])){
			
				$name = $_FILES['file']['name'];
				$extension = explode('.', $name);
				$extension = end($extension);
				$type = $_FILES['file']['type'];
				$sizef = $_FILES['file']['size']/1024/1024;
				$size =number_format($sizef, 2);
				$random_name = rand();
				$tmp = $_FILES['file']['tmp_name'];
				$description=$_POST['description'];
				$uploaded_by=$_SESSION['username'];
				$uploaded_date=date("Y-m-d H:i:s");
				
				if ((strtolower($extension) != "pdf") && (strtolower($extension) != "txt") && (strtolower($extension) != "doc") && (strtolower($extension) != "ppt")&& (strtolower($extension) != "pptx") && (strtolower($extension) != "html") && (strtolower($extension) != "doc")&& (strtolower($extension) != "docx") && (strtolower($extension) != "zip") && (strtolower($extension) != "xls") && (strtolower($extension) !="xlsx"))
				{
					$message= "<font color=yellow face=\"Comic Sans MS,Lucida Console\"><u>File Format is not supported</u> !</font>";
					
    			}elseif($size >= 20971520)
				{
					$message="File must not greater than 20mb";
				}else
				{
					move_uploaded_file($tmp, 'uploaded/documents/'.$random_name.'.'.$extension);	
					mysqli_query($con, "INSERT INTO documents VALUES('', '$name' , '$description', '$size', '$random_name.$extension', '$uploaded_by', '$uploaded_date')");
					$message=" <font color=#36ee66 face=\"Comic Sans MS,Lucida Console\"><u>Document </u></font> "." <font color=#ffffff face=\"Comic Sans MS,Lucida Console\"><u> ".$name."</u></font>"." <font color=#36ee66 face=\"Comic Sans MS,Lucida Console\"><u>has been successfully uploaded</u> !</font>";
				}
				echo "$message <br/> <br/>";
				echo "size: $size mb<br/>";
				echo "random_name: $random_name <br/>";
				echo "name: $name <br/>";
				echo "type: $type <br/><br/>";
	?>
				<center>
        <a href="download.php"><img src="./images/list.jpg"\></a> <br /><br />
       </center>
			<?php echo "<font color=#ffffff face=\"Comic Sans MS,Lucida Console\"> Upload another document . . . . </font><br/>"; }	?>
        	Select document : <br/>
            <input name="UPLOAD_MAX_FILESIZE" value="20971520"  type="hidden" required/>
            <input type="file" name="file" id="file" required/>
			<br/>Add description: <br/>
			<input type="text" name="description" id="description" size="31"required/>
            <br/>
            <input type="submit" value="Upload Document" />
        </form>
		<?php
		
			mysqli_close($con);
		?>
	</div>
    
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