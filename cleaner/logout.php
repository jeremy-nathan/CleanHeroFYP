<?php

session_start();

// Delete all session variables and then redirect back to login page
session_destroy();

header("Location:login.php");

?>