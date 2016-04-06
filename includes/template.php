<?php
// Include User class
include_once("includes/class.User.php");

$user = new User;

// Make sure user is still logged in
// If not they will have to relogin
$user->userLoggedIn();

// Include header info
include_once(HEADER);

// Include menu
include_once(MENU);
?>
<script type="text/javascript"> document.getElementById("page_title").innerHTML = "CONTACTS PAGE" </script>


<?php
// Include footer info
include_once(FOOTER);
?>