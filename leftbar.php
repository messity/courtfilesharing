
<?php

   if( isset( $_SESSION['username'] ) )
   {
	   echo "
		<section>
					<div class=\"heading\">Short Cuts</div>
					<div class=\"content\">
					<ul class=\"list\">
							<li><a href=\"training.php\">Download Resources</a></li>
							<li><a href=\"search_all_files.php\">search file</a></li>
							<li><a href=\"files.php\"></a></li>view files</a></li>
							<li><a href=\"article_records.php\">Read Articless</a></li>
							<li><a href=\"browse.php\">Share Your Resources</a></li>
							<li><a href=\"write_articles.php\">Write your own content/articles</a></li>
							<li><a href=\"discussions.php\">E-Discussions</a></li>
						</ul>
				</div>
			</section>
		<section>
			<div class=\"heading\">Categories</div>
			<div class=\"content\">
					<ul class=\"list\">
							<li><a href=\"#\">cluod based system</a></li>
							<li><a href=\"#\">court file sharing</a></li>
							<li><a href=\"#\">court system</a></li>
							<li><a href=\"#\">court system file sharing</a></li>
							<li><a href=\"#\">Technology related</a></li>
						</ul>
					</div>
				</section>
				<section>
					<div class=\"heading\">Useful Links</div>
					<div class=\"content\">
					<ul class=\"list\">
						<li><a href=\"#\">open shift</a></li>
						<li><a href=\"#\">Git hub</a></li>
						<li><a href=\"#\">Ethiopian courts</a></li>
						<li><a href=\"#\">website development</a></li>
                                                <li><a href=\"#\">courts exprinces</a></li>
					</ul>
					</div>
				</section>";
	}
	  
   else
   {
    echo "
	  
			<section>
					<div class=\"heading\">About</div>
					<div class=\"content\">
						<p>This site is accessible from the <b><a href=\"http://openshift.redhat.com\" target='_new'>Redhat's Open shift online </a></b>cloud offering which is the best known cloud service provider.</p> <br> <p><em>This system is designed to solve different problems in the court to make it easy, flexible, accountable, secure, the file be available anywhere at any time when it needed by users and to find other solution that will prevent and control the problems of the organization.</em></p>
				</div>
			</section>
	<section>
			<div class=\"heading\">Categories</div>
			<div class=\"content\">
					<ul class=\"list\">
					<li><a href=\"#\">Cloud system</a></li>
							<li><a href=\"#\">File Sharing</a></li>
							<li><a href=\"#\">Court Systems</a></li>
							<li><a href=\"#\">Court system file sharing</a></li>
						</ul>
					</div>
				</section>
				<section>
					<div class=\"heading\">Useful Links</div>
					<div class=\"content\">
					<ul class=\"list\">
						<li><a href=\"#\">OPenshift</a></li>
						<li><a href=\"#\">GitHub</a></li>
						<li><a href=\"#\">Website development</a></li>
						<li><a href=\"#\">Ethiopian court</a></li>
						<li><a href=\"#\">Court Experiances</a></li>
					</ul>
					</div>
				</section>";
   }?>