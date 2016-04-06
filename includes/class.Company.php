<?php

# CRM Company Class
# Version 1.0.0 - June 2015
# Written by: Shawn Becquet - sbecquet@clarktesting.com

# Purpose:
# This class is to help pull data for company information better

include_once("includes/constants.php");
include_once(FUNCTIONS);

class Company{

  public function __construct(){ // Construct function
 
  }

  public function getAllCompanies(){
    return"
    <div class='panel panel-default'>
    <div class='panel-heading table_header'>Company Review <span class='right_align'><form class='form-inline'>Per Page: <select class='form-control input-sm limit_dropdown' onchange='alert('CHANGE');'><option value='25'>25</option><option value='50'>50</option><option value='100'>100</option><option value='all'>ALL</option></select></form></span></div>
    <table class='table table-bordered table-hover table-stripped sortTable' id=''  cellspacing='0'>
      <thead>
        <tr class='sortheader'>
            <th class='col_header' id=''>Name</th>
            <th class='col_header' id=''># of Contacts</th>
            <th class='col_header' id=''># of RFQs</th>
            <th class='col_header' id=''># of Quotes</th>
            <th class='col_header' id=''># of Awarded</th>
            <th class='col_header' id=''># of Completed</th>
        </tr>
      </thead>
      <tbody class='results'>
        <tr class='tr_data'>
          <td class='td_data'>d</td>
          <td class='td_data'>401722-1</td>
          <td class='td_data'>275S-46/006</td>
          <td class='td_data'>Lube Oil</td>
          <td class='td_data'>2015</td>
          <td class='td_data'>05/21/15</td>
        </tr>
        <tr class='tr_data'>
          <td class='td_data'>c</td>
          <td class='td_data'>401740-1</td>
          <td class='td_data'></td>
          <td class='td_data'>A/C 920270</td>
          <td class='td_data'>System #1</td>
          <td class='td_data'>05/21/15</td>
        </tr>
        <tr class='tr_data'>
          <td class='td_data'>b</td>
          <td class='td_data'>401740-2</td>
          <td class='td_data'></td>
          <td class='td_data'>A/C 920270</td>
          <td class='td_data'>System #2</td>
          <td class='td_data'>05/21/15</td>
        </tr>
        <tr class='tr_data'>
          <td class='td_data'>a</td>
          <td class='td_data'>401740-3</td>
          <td class='td_data'></td>
          <td class='td_data'>A/C 920270</td>
          <td class='td_data'>System #3</td>
          <td class='td_data'>05/21/15</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class='page_numbers'>
    <a href='#' role='button' class='btn btn-primary btn-sm'>&laquo;</a>
    Page <input name='page_num' type='text' class='page_num' size='3' maxlength='4'> / XXX
    <a href='#' role='button' class='btn btn-primary btn-sm'>&raquo;</a>
  </div>
  <script type='text/javascript'>
  /* BEGIN JAVASCRIPT */
  $(function() { 
      $('.sortTable').tablesorter({ 
          widgets: ['zebra'],
          widthFixed: true,
          sortList:[[0,0]]
      });

      $('tbody.results').on('click', 'tr', function() {
        window.location='company-details.php?id=1#contacts'; 
    });
  });
  </script>";
  }
  public function getCompanyContacts(){
    return "
    <div class='panel panel-default'>
      <div class='panel-heading table_header'>Company Review  &nbsp;&nbsp;<span class='glyphicon glyphicon glyphicon-arrow-right' aria-hidden='true'></span>&nbsp;&nbsp;  COMPANY NAME</div>
      <table class='table table-bordered table-hover table-stripped contactsTable' id='' cellspacing='0'>
        <thead>
          <tr class='sortheader'>
            <th class='col_header'>Contact Name</th>
            <th class='col_header'>Title</th>
            <th class='col_header'>Division</th>
            <th class='col_header'># of RFQs</th>
            <th class='col_header'># of Quotes</th>
            <th class='col_header'># of Awarded</th>
            <th class='col_header'># of Completed</th>
            <th class='col_header'>Total</th>
          </tr>
        </thead>
        <tbody class='results'>
          <tr class=''>
            <td class=''>John Doe1</td>
            <td class=''>President</td>
            <td class=''>AAA</td>
            <td class=''>1</td>
            <td class=''>2</td>
            <td class=''>3</td>
            <td class=''>4</td>
            <td class=''>5</td>
          </tr>
          <tr class=''>
            <td class=''>John Doeds2</td>
            <td class=''>President</td>
            <td class=''>AAA</td>
            <td class=''>1</td>
            <td class=''>2</td>
            <td class=''>3</td>
            <td class=''>4</td>
            <td class=''>5</td>
          </tr>
        </tbody>
      </table>
    </div>
    <script type='text/javascript'>
    /* BEGIN JAVASCRIPT */
    $(function() { 
        $('.contactsTable').tablesorter({ 
            widgets: ['zebra'],
            widthFixed: true,
            sortList:[[0,0]]
        });

        $('tbody.results').on('click', 'tr', function() {
          window.location='contact-details.php?id=1#contacts'; 
      });
    });
    </script>";
  }

  public function getCompanyButtons(){
    return "<a href='#' class='btn btn-primary' role='button'>Add New Contact</a><span class='pad_left_10'></span><a href='#' class='btn btn-primary' role='button'>Export Company Data</a>";
  }

  public function getCompanyRFQs(){
    return"
    <div class='panel panel-default'>
      <div class='panel-heading'>RFQs</div>
      <table class='table table-bordered table-hover table-stripped' id=''  cellspacing='0'>
        <thead>
          <tr class=''>
            <th class='col_header'>JID</th>
            <th class='col_header'>Contact Name</th>
            <th class='col_header'>Location</th>
            <th class='col_header'>Test Type</th>
            <th class='col_header'>Assigned</th>
            <th class='col_header'>Blah</th>
            <th class='col_header'>Blah</th>
            <th class='col_header'>Blah</th>
          </tr>
        </thead>
        <tbody>
          <tr class=''>
            <td class=''>John Doe</td>
            <td class=''>President</td>
            <td class=''>AAA</td>
            <td class=''>1</td>
            <td class=''>2</td>
            <td class=''>3</td>
            <td class=''>4</td>
            <td class=''>5</td>
          </tr>
        </tbody>
      </table>
    </div>";
  }

  public function getCompanyQuoted(){
    return"
    <div class='panel panel-default'>
      <div class='panel-heading'>Quoted</div>
      <table class='table table-bordered table-hover table-stripped' id=''  cellspacing='0'>
        <thead>
          <tr class=''>
            <th class='col_header'>JID</th>
            <th class='col_header'>Contact Name</th>
            <th class='col_header'>Location</th>
            <th class='col_header'>Test Type</th>
            <th class='col_header'>Assigned</th>
            <th class='col_header'>Blah</th>
            <th class='col_header'>Blah</th>
            <th class='col_header'>Blah</th>
          </tr>
        </thead>
        <tbody>
          <tr class=''>
            <td class=''>John Doe</td>
            <td class=''>President</td>
            <td class=''>AAA</td>
            <td class=''>1</td>
            <td class=''>2</td>
            <td class=''>3</td>
            <td class=''>4</td>
            <td class=''>5</td>
          </tr>
        </tbody>
      </table>
    </div>";
  }

  public function getCompanyAwarded(){
    return"
    <div class='panel panel-default'>
      <div class='panel-heading'>Awarded</div>
      <table class='table table-bordered table-hover table-stripped' id=''  cellspacing='0'>
        <thead>
          <tr class=''>
            <th class='col_header'>JID</th>
            <th class='col_header'>Contact Name</th>
            <th class='col_header'>Location</th>
            <th class='col_header'>Test Type</th>
            <th class='col_header'>Assigned</th>
            <th class='col_header'>Blah</th>
            <th class='col_header'>Blah</th>
            <th class='col_header'>Blah</th>
          </tr>
        </thead>
        <tbody>
          <tr class=''>
            <td class=''>John Doe</td>
            <td class=''>President</td>
            <td class=''>AAA</td>
            <td class=''>1</td>
            <td class=''>2</td>
            <td class=''>3</td>
            <td class=''>4</td>
            <td class=''>5</td>
          </tr>
        </tbody>
      </table>
    </div>";
  }

  public function getCompanyCompleted(){
    return"
    <div class='panel panel-default'>
      <div class='panel-heading'>Completed</div>
      <table class='table table-bordered table-hover table-stripped' id=''  cellspacing='0'>
        <thead>
          <tr class=''>
            <th class='col_header'>JID</th>
            <th class='col_header'>Contact Name</th>
            <th class='col_header'>Location</th>
            <th class='col_header'>Test Type</th>
            <th class='col_header'>Assigned</th>
            <th class='col_header'>Blah</th>
            <th class='col_header'>Blah</th>
            <th class='col_header'>Blah</th>
          </tr>
        </thead>
        <tbody>
          <tr class=''>
            <td class=''>John Doe</td>
            <td class=''>President</td>
            <td class=''>AAA</td>
            <td class=''>1</td>
            <td class=''>2</td>
            <td class=''>3</td>
            <td class=''>4</td>
            <td class=''>5</td>
          </tr>
        </tbody>
      </table>
    </div>";
  }

  public function __destruct(){

  }
}

?>