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

// Include Job class
include_once("includes/class.Job.php");
include_once("includes/class.Contact.php");

$job_info = new Job("15-1234");

$contact_id = $job_info->getContactId();

$contact_info = new Contact;


?>

<script type="text/javascript"> document.getElementById("page_title").innerHTML = "JOBS PAGE" </script>
<div class="job_container" id="">
    <div class="panel panel-default">
        <div class="panel-heading table_header">Job Form  &nbsp;&nbsp;<span class="glyphicon glyphicon glyphicon-arrow-right" aria-hidden="true"></span>&nbsp;&nbsp; JID <?=$job_info->jid?></div>
        <table class="table table-stripped" id=""  cellspacing="0">
            <tbody class="">
                <tr>
                    <td class="w100" colspan="2">
                        <?=$job_info->getProgressBar()?>
                        <?=$job_info->getJobInfo()?>
                        <?=$contact_info->mainContactInfo($contact_id,true);?>
                        <?=$job_info->showJobInfo()?>
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