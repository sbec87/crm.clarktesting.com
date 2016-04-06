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
<script type="text/javascript"> document.getElementById("page_title").innerHTML = "HOME PAGE" </script>

<div class="job_container" id="">
  <div class="panel panel-default">
    <div class="panel-heading table_header">Assigned Jobs</div>
    <table class="table table-bordered table-hover table-stripped sortTable" id=""  cellspacing="0">
      <thead>
        <tr class="sortheader">
            <th class="col_header w9" id="">JID</th>
            <th class="col_header w18" id="">Company</th>
            <th class="col_header w18" id="">Contact</th>
            <th class="col_header w10" id="">Location</th>
            <th class="col_header w10" id="">Test Type</th>
            <th class="col_header w20" id="">Progress</th>
            <th class="col_header w17" id="">Last Updated</th>
        </tr>
      </thead>
      <tbody class="results">
       <tr class="tr_data">
          <td class="td_data">14-01234</td>
          <td class="td_data">401722-1</td>
          <td class="td_data">275S-46/006</td>
          <td class="td_data">Lube Oil</td>
          <td class="td_data">2015</td>
          <td class="td_data">40%</td>
          <td class="td_data">05/21/15</td>
        </tr>
      </tbody>
    </table>
  </div>

  <br/>

  <div class="panel panel-default">
    <div class="panel-heading table_header">Upcoming JID Tasks</div>
    <table class="table table-bordered table-hover table-stripped sortTable" id=""  cellspacing="0">
      <thead>
        <tr class="sortheader">
            <th class="col_header w9" id="">JID</th>
            <th class="col_header w18" id="">Company</th>
            <th class="col_header w18" id="">Contact</th>
            <th class="col_header w10" id="">Task Type</th>
            <th class="col_header w10" id="">Date / Time</th>
            <th class="col_header w15" id="">Blah</th>
            <th class="col_header w20" id="">Blah</th>
        </tr>
      </thead>
      <tbody class="results">
       <tr class="tr_data">
          <td class="td_data">2</td>
          <td class="td_data">401722-1</td>
          <td class="td_data">275S-46/006</td>
          <td class="td_data">Lube Oil</td>
          <td class="td_data">2015</td>
          <td class="td_data">40%</td>
          <td class="td_data">05/21/15</td>
        </tr>
      </tbody>
    </table>
  </div>

  <br/>

  <div class="panel panel-default">
    <div class="panel-heading table_header">Assigned Leads</div>
    <table class="table table-bordered table-hover table-stripped sortTable" id=""  cellspacing="0">
      <thead>
        <tr class="sortheader">
            <th class="col_header w9" id="">Lead ID</th>
            <th class="col_header w18" id="">Company</th>
            <th class="col_header w18" id="">Contact</th>
            <th class="col_header w10" id="">Location</th>
            <th class="col_header w10" id="">Test Type</th>
            <th class="col_header w15" id="">Source</th>
            <th class="col_header w20" id="">Last Updated</th>
        </tr>
      </thead>
      <tbody class="results">
       <tr class="tr_data">
          <td class="td_data">2</td>
          <td class="td_data">401722-1</td>
          <td class="td_data">275S-46/006</td>
          <td class="td_data">Lube Oil</td>
          <td class="td_data">2015</td>
          <td class="td_data">40%</td>
          <td class="td_data">05/21/15</td>
        </tr>
      </tbody>
    </table>
  </div>


  <br/>

  <div class="panel panel-default">
    <div class="panel-heading table_header">Upcoming Lead Tasks</div>
    <table class="table table-bordered table-hover table-stripped sortTable" id=""  cellspacing="0">
      <thead>
        <tr class="sortheader">
            <th class="col_header w9" id="">Lead ID</th>
            <th class="col_header w18" id="">Company</th>
            <th class="col_header w18" id="">Contact</th>
            <th class="col_header w10" id="">Task Type</th>
            <th class="col_header w10" id="">Date / Time</th>
            <th class="col_header w15" id="">Blah</th>
            <th class="col_header w20" id="">Blah</th>
        </tr>
      </thead>
      <tbody class="results">
       <tr class="tr_data">
          <td class="td_data">2</td>
          <td class="td_data">401722-1</td>
          <td class="td_data">275S-46/006</td>
          <td class="td_data">Lube Oil</td>
          <td class="td_data">2015</td>
          <td class="td_data">40%</td>
          <td class="td_data">05/21/15</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
/* BEGIN JAVASCRIPT */
$(function() { 
    $(".sortTable").tablesorter({ 
        widgets: ['zebra'],
        widthFixed: true,
        sortList:[[0,0]]
    });

    $('tbody.results').on("click", "tr", function() {
      window.location="landing.php"; 
  });
});
</script>


<?php
// Include footer info
include_once(FOOTER);
?>