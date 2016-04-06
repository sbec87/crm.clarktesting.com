<?php
// Include User class
include_once("includes/class.User.php");

$user = new User;

// Make sure user is still logged in
// If not they will have to relogin
$user->userLoggedIn();


include_once("includes/class.Company.php");

$company = new Company;
// Include header info
include_once(HEADER);

// Include menu
include_once(MENU);
?>
<script type="text/javascript"> document.getElementById("page_title").innerHTML = "CONTACTS PAGE" </script>

<div class="contact_container" id="">
  <table class="w100">
    <tr>
      <td>
        <ul class="pagination pagination-sm letters">
          <li <?php 
              if(isset($_GET["select"])){ 
                if($_GET["select"] == "~"){
                  echo "class='active'";
                } 
              }?> ><a href="companys-review.php?select=~#contacts">#</a></li>
          <?php 
          foreach(range("A","Z") AS $letter){
            if(isset($_GET["select"])){
              if($_GET["select"] == $letter){
                echo "<li class='active'><a href='companys-review.php?select=".$letter."#contacts'>".$letter."</a></li>";
              }
              else{
                echo "<li><a href='companys-review.php?select=".$letter."#contacts'>".$letter."</a></li>";
              }
            }
            else{
              echo "<li><a href='companys-review.php?select=".$letter."#contacts'>".$letter."</a></li>";
            }
          }
          ?>
        </ul>
      </td>
      <td><a href="#" class='btn btn-primary' role='button'>Add New Contact</a></td>
    </tr>
  </table>
  <?=$company->getAllCompanies();?>
</div>

<?php
// Include footer info
include_once(FOOTER);
?>