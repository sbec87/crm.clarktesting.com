<?php
// Include User class
include_once("includes/class.User.php");

$user = new User;

// Make sure user is still logged in
// If not they will have to relogin
$user->userLoggedIn();

// Include Contact class
include_once("includes/class.Contact.php");

$contact_info = new Contact;

//pre_disp(getVariables());

// Include header info
include_once(HEADER);

// Include menu
include_once(MENU);
?>
<script type="text/javascript"> document.getElementById("page_title").innerHTML = "CONTACT PAGE" </script>
<div class="contact_container" id="">
  <div class="panel panel-default">
    <div class="panel-heading table_header">Contact Management  &nbsp;&nbsp;<span class="glyphicon glyphicon glyphicon-arrow-right" aria-hidden="true"></span>&nbsp;&nbsp;  CONTACT NAME</div>
    <table class="table table-bordered" id=""  cellspacing="0">
      <tbody class="results">
        <tr>
          <td class="w100" colspan="2">
            <?=$contact_info->mainContactInfo("AAA");?>
            <?=$contact_info->showAddressInfo(1);?>
            <?=$contact_info->getContactOther();?>
            <?=$contact_info->getContactNotes();?>
            <?=$contact_info->getContactTasks();?>
            <?=$contact_info->getContactRFQs();?>
            <?=$contact_info->getContactQuoted();?>
            <?=$contact_info->getContactAwarded();?>
            <?=$contact_info->getContactTestingCompleted();?>
            <?=$contact_info->getContactJobCompleted();?>
            <?=$contact_info->saveButtons();?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
// Include footer info
include_once(FOOTER);
?>