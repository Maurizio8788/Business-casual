<?php  

ini_set('display_errors', 1);

ini_set( 'display_startup_errors', 'on');

require_once( 'db.php');
require_once( 'main-class.php' );


$mainClass = new Dashboard($conn);