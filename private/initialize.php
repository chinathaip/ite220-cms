<?php

define("PRIVATE_PATH", dirname(__FILE__)); //where this file is located (private)
define("PROJECT_PATH", dirname(PRIVATE_PATH)); //where this path is located (ITE220)
const PUBLIC_PATH = PROJECT_PATH . '/public';
const SHARED_PATH = PRIVATE_PATH . '/shared';


$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once ('functions.php');