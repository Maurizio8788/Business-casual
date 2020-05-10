<?php   


ini_set('display_error', 'on');

ini_set('display_startup_errors', 'on');
error_reporting(E_ALL);

require_once('db.php');
require_once('./booking/booking.php');

session_start();

/* Classi istanziate  */


$booking = new Booking($conn);




?>
