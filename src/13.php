
<?php 
$mystring = $_GET['search'];
$findme   = "the";
$pos = strpos($mystring, $findme);
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'.";
} else {
    echo "The string '$findme' was found in the string '$mystring'.";
    echo "It was found at position $pos";
}
?>