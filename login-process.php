<?php
// Include User class
include_once("includes/class.User.php");

$user = new User;
$user->setupPermissions($_GET["AuthToken"]);

?>