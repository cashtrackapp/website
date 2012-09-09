
<html>
<head>
	<title>CashTrack</title>
	<link rel="stylesheet" href="includes/style.css" type="text/css" media="screen">
</head>
<body>

<div id="container">
	<img src="includes/images/cashtrack.jpg" width="801px" />
	
	<div id="store">
		<a href="#"><img src="includes/images/android_badge.png" height="50px" /></a>
	</div>
	
	<p>CashTrack is a collaborative expense sharing application for Android that allows users to create, split, edit, and share expenses 
	with their friends in real time.</p>
	
	<p>The CashTrack app will no longer be available on the Android store as of July 1, 2010. Currently installed apps will continue to work until
	August 1, 2010 when the back-end BillShare web service will be shut down.</p>
	
	<table>
		<tr>
			<td>
				<img src="includes/images/balance.jpg" width="250px" alt="" />
				<p><strong>Summary of all entered expenses.</strong></p>
			</td>
			<td>
				<img src="includes/images/newbill.jpg" width="250px" alt="" />
				<p><strong>Adding a new expense.</strong></p>
			</td>
			<td>
				<img src="includes/images/friends.jpg" width="250px" alt="" />
				<p><strong>Selecting friends to split with.</strong></p>
			</td>
		</tr>
	</table>
	
	<p>Portions of the CashTrack source code have been released on github.</p>
	<ul>
		<li><a href="https://github.com/mattcolf/cashtrack-android">CashTrack Android Application</a>
		<li><a href="https://github.com/mattcolf/cashtrack-service">CashTrack Web Service</a>
	</ul>
	
	<p>This application was developed by students at the University of Michigan as part of <a href="http://www.eecs.umich.edu/eecs/etc/fac/facsearchform.cgi?soloway+">Elliot Soloway's</a> 
	Smartphone Application Development course. To support the development of future student applications, please consider
	<a href="http://www.eecs.umich.edu/eecs/about/giving/giving.html">giving</a> to the Department of Electrical Engineering and Computer Science.
	</p>
	
</div>

<p id="powered">&#169; 2009-2012 CashTrack development group</p>

<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-9117449-9']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<script type="text/javascript">
	var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.mattcolf.com/" : "http://stats.mattcolf.com/");
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 9);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
	} catch( err ) {}
</script>
<noscript>
	<p><img src="http://stats.mattcolf.com/piwik.php?idsite=7" style="border:0" alt="" /></p>
</noscript>

</body>
</html>