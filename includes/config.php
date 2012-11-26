<?php

require_once 'lib/utils/UserAgent.php';
require_once 'lib/utils/get_base_href.php';

$base_href = get_base_href();

$ua = new Lib_UserAgent();

$tmpl_dir = 'assets/tmpl/';

$return_nav = (!empty($_GET['_nav_'])) ? true : false ;

$hash_frag = (!empty($_GET['_escaped_fragment_'])) ? $_GET['_escaped_fragment_'] : 'home' ;

// Identify UA to the dom
$is_mobile = $ua->is_mobile();
$is_tablet = $ua->is_tablet();
$is_ipad = $ua->is_ipad();

$doc_class = $is_tablet ? 'tablet' : 
	$is_mobile ? 'mobile' : 
	'desktop' ;


# EOF