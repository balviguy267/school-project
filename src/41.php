<?php

// Sample PHP code for creating a simple form

// Required dependencies
if (!function_exists('form')) {
    require_once 'functions.php';
}

// Form initialization
$form = new \Form();
$form->render('default');

?>
