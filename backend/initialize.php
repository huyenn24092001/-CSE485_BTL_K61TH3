<?php
ob_start();

date_default_timezone_set("Asia/Ho_Chi_Minh");


include 'classes/Database.php';


define("DB_HOST","localhost");
define("DB_NAME","twitter");
define("DB_USER","twitter");
define("DB_PASS","12345678");
$public_end=strpos($_SERVER['SCRIPT_NAME'],'/frontend')+9;
$doc_root=substr($_SERVER['SCRIPT_NAME'],0,$public_end);
define("WW_ROOT",$doc_root);


include 'functions.php';

?>