<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

// back to login page
header('Location: login_admin.php');
?>