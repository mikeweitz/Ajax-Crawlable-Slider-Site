<?php

require_once('includes/config.php');

$content = array(
    "home" => $tmpl_dir.'home.php',
    "other" => $tmpl_dir.'other.php',
    "placeholder" => $tmpl_dir.'placeholder.php'
);

if ($return_nav) {
	echo json_encode($content);
} elseif(isset($hash_frag)) {
    echo file_get_contents( $base_href . $content[$hash_frag]);
} 


?>