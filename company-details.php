<?php
// Include User class
include_once("includes/class.User.php");

$user = new User;

// Make sure user is still logged in
// If not they will have to relogin
$user->userLoggedIn();

// Include Company class
include_once("includes/class.Company.php");

$company_info = new Company;

// Include header info
include_once(HEADER);

// Include menu
include_once(MENU);
?>
<script type="text/javascript"> document.getElementById("page_title").innerHTML = "COMPANY DETAILS" </script>

<div class="contact_container" id="">
   <?=$company_info->getCompanyContacts();?>
   <?=$company_info->getCompanyButtons();?>
  <br/>
  <br/>
  <?=$company_info->getCompanyRFQs();?>
  <?=$company_info->getCompanyQuoted();?>
  <?=$company_info->getCompanyAwarded();?>
  <?=$company_info->getCompanyCompleted();?>
</div>



<?php
// Include footer info
include_once(FOOTER);
?>