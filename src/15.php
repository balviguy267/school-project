<?php

// Check if the user already has an account
if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
}

// Redirect to login page if user is not logged in
header("Location: login.php");

?>
