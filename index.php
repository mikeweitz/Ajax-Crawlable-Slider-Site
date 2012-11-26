<?php require_once('includes/config.php'); ?>
<!DOCTYPE html>

<!-- HTML5 Boilerplate + Mobile -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->
<head>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>AJAX-Crawlable webpage</title>
    <meta name="fragment" content="!" />

    <!-- Mobile Specific Metas -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/main.css" rel="stylesheet" media="screen">
</head>

<body>

<div id="wrapper">
    <header class="navbar navbar-inverse navbar-fixed-top">
      <nav class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#!/">Slider</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
                <li><a href="#!/home">Home</a></li>
                <li><a href="#!/other">Other</a></li>
                <li><a href="#!/placeholder">Placeholder</a></li>
            </ul>

          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </header>

    <div class="container">

        <section id="sections">
            <article id="home"></article>
            <article id="other"></article>
            <article id="placeholder"></article>
        </section>
    </div> <!-- /container -->

    <footer class="bar">
        <div class="container">        
            Footer stuff.
        </div>
    </footer>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/ahh.js"></script>

</body>
</html>