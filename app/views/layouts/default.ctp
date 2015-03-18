<!DOCTYPE html>
<html>
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/archive/festival/css/cake.generic.css" media="all" />
<link rel="stylesheet" type="text/css" href="/archive/festival/css/festival.css" media="all" />
<link rel="stylesheet" type="text/css" href="/archive/festival/css/print.css" media="print" />
<?php echo $scripts_for_layout ?>
</head>
<body>

<header>PDS Performing Arts Festival</header>
<nav>
	<a href="/archive/festival/">Home</a>
	<a href="/archive/festival/performances/schedule">Schedule</a>
	<a href="/archive/festival/performances/">Performances</a>
	<a href="/archive/festival/performances/add">Register Performance</a>
</nav>

<div class="content">
<?php echo $content_for_layout ?>
</div>

<footer>Copyright &copy; 2011 <a href="http://www.pds.org/">Princeton Day School</a></footer>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23112986-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>