<?php
    //logout2.php file
	session_start();
	session_destroy();
	header('location:index.php');
?>
