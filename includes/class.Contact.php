<?php

# CRM Contact Class
# Version 1.0.0 - June 2015
# Written by: Shawn Becquet - sbecquet@clarktesting.com

# Purpose:
# This class is to help pull data for contact information better

include_once("includes/constants.php");
include_once(FUNCTIONS);

class Contact{

  public function __construct(){ // Construct function
 
  }

  public function mainContactInfo($ContactID,$readonly = ""){
    if($readonly != ""){
      $readonly = "readonly";
      $disabled = "disabled";
    }
    else{
      $readonly = "";
    }

    return "
      <div class='panel-group'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <h4 class='panel-title'>
              <a data-toggle='collapse' href='#customerInfo' class='customer_click white-links'>Customer Information<i class='customer_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
            </h4>
          </div>
          <div class='panel-collapse collapse in' id='customerInfo'>
            <div class='panel-body'>
              <table class='w100'>
                <tr>
                  <td class='w8 pad_bottom_4'><label for='company_input'>Company:</label></td>
                  <td class='w15 pad_bottom_4'><input name='company_input' type='text' value='' placeholder='Company' class='form-control input-sm' id='company_input' $readonly></td>
                  <td class='w27 pad_bottom_4 pad_left_10' colspan='2'><label class='checkbox-inline'><input name='us_input' type='checkbox' value='1' id='us_input' $disabled><b>U.S.A. Customer</b></label></td>
                  <td class='w8 pad_bottom_4 pad_left_10'><label for='division_input'>Division:</label></td>
                  <td class='w10 pad_bottom_4'><input name='division_input' type='text' value='' placeholder='Division' class='form-control input-sm' id='division_input' $readonly></td>
                  <td class='w8 pad_bottom_4 pad_left_10'><label for='title_input'>Title:</label></td>
                  <td class='w10 pad_bottom_4'><input name='title_input' type='text' value='' placeholder='Title' class='form-control input-sm' id='title_input' $readonly></td>
                </tr>
                <tr>
                  <td class='w8 pad_bottom_4'><label for='first_input'>First Name:</label></td>
                  <td class='w15 pad_bottom_4'><input name='first_input' type='text' value='' placeholder='First Name' class='form-control input-sm' id='first_input' $readonly></td>
                  <td class='w8 pad_bottom_4 pad_left_10'><label for='last_input'>Last Name:</label></td>
                  <td class='w15 pad_bottom_4'><input name='last_input' type='text' value='' placeholder='Last Name' class='form-control input-sm' id='last_input' $readonly></td>
                  <td class='w8 pad_bottom_4 pad_left_10'><label for='phone_input'>Phone:</label></td>
                  <td class='w15 pad_bottom_4'><input name='phone_input' type='text' value='' placeholder='Phone #' class='form-control input-sm' id='phone_input' $readonly></td>
                  <td class='w8 pad_bottom_4 pad_left_10'><label for='mobile_input'>Mobile:</label></td>
                  <td class='w15 pad_bottom_4'><input name='mobile_input' type='text' value='' placeholder='Mobile #' class='form-control input-sm' id='mobile_input' $readonly></td>
                </tr>
                <tr>
                  <td class='w8 pad_bottom_4'><label for='email_input'>Email:</label></td>
                  <td class='w15 pad_bottom_4'><input name='email_input' type='text' value='' placeholder='Email' class='form-control input-sm' id='email_input' $readonly></td>
                  <td class='w8 pad_bottom_4 pad_left_10'><label for='fax_input'>Fax:</label></td>
                  <td class='w15 pad_bottom_4'><input name='fax_input' type='text' value='' placeholder='Fax #' class='form-control input-sm' id='fax_input' $readonly></td>
                  <td class='w8 pad_bottom_4 pad_left_10'><label for='website_input'>Website:</label></td>
                  <td class='w15 pad_bottom_4'><input name='website_input' type='text' value='' placeholder='Website' class='form-control input-sm' id='website_input' $readonly></td>
                  <td class='w8 pad_bottom_4 pad_left_10'><label for='duns_input'>DUNS #:</label></td>
                  <td class='w15 pad_bottom_4'><input name='duns_input' type='text' value='' placeholder='DUNS #' class='form-control input-sm' id='duns_input' $readonly></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <script type='text/javascript'>
        $('.customer_click').click(function(){
            $('.customer_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
        });
      </script>";

  }

  public function getContactAddress($ContactID){
    if($ContactID == 1){ // Check to see if it is a US Customer or not
      $return = $this->getUsAddress($ContactID);
      //return getUsAddress($ContactID);
    }
    else{
      $return = $this->getForeignAddress($ContactID);
    }

    return $return;
  }

  public function showAddressInfo($ContactID){
    $address = $this->getAddress();

    return "
      <div class='panel-group'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <h4 class='panel-title'>
              <a data-toggle='collapse' href='#addressInfo' class='address_click white-links'>Address Information<i class='address_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
            </h4>
          </div>
          <div class='panel-collapse collapse' id='addressInfo'>
            <div class='panel-body'>
              <table class='w100'>
                <tr>
                  <td class='w50'>".$this->getContactAddress($ContactID)."</td>
                  <td class='w50 pad_left_10'>".$this->getGoogleMap($address)."</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <script type='text/javascript'>
        $('.address_click').click(function(){
            $('.address_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
        });
      </script>";
  }

  public function getAddress(){
    return "london, england";
  }

  public function getUsAddress($ContactID){
    return "
      <table class='w100'>
        <tr>
          <td class='w10 pad_bottom_4'><label for='address1_input'>Address:</label></td>
          <td class='w90 pad_bottom_4 pad_left_2' colspan='5'><input name='address1_input' type='text' value='' placeholder='Address' class='form-control input-sm' id='address1_input'></td>
        </tr>
        <tr>
          <td class='w10 pad_bottom_4'>&nbsp;</td>
          <td class='w90 pad_bottom_4 pad_left_2' colspan='5'><input name='address2_input' type='text' value='' placeholder='' class='form-control input-sm' id='address2_input'></td>
        </tr>
        <tr>
          <td class='w10 pad_bottom_4'><label for='city_input'>City:</label></td>
          <td class='w20 pad_bottom_4 pad_left_2'><input name='city_input' type='text' value='' placeholder='City' class='form-control input-sm' id='city_input'></td>
          <td class='w10 pad_bottom_4 pad_left_4'><label for='state_input'>State:</label></td>
          <td class='w30 pad_bottom_4'>".getStateDropdown("state_input","")."</td>
          <td class='w10 pad_bottom_4 pad_left_4'><label for='zip_input'>Zip:</label></td>
          <td class='w20 pad_bottom_4'><input name='zip_input' type='text' value='' placeholder='Zip' class='form-control input-sm' id='zip_input'></td>
        </tr>
      </table>";
  }

  public function getForeignAddress($ContactID){
    return "
      <table class='w100'>
        <tr>
          <td class='w20 pad_bottom_4'><label for='address1_input'>Address:</label></td>
          <td class='w80 pad_bottom_4' colspan='5'><input name='address1_input' type='text' value='' placeholder='Address' class='form-control input-sm' id='address1_input'></td>
        </tr>
        <tr>
          <td class='w20 pad_bottom_4'>&nbsp;</td>
          <td class='w80 pad_bottom_4' colspan='5'><input name='address2_input' type='text' value='' placeholder='' class='form-control input-sm' id='address2_input'></td>
        </tr>
        <tr>
          <td class='w20 pad_bottom_4'><label for='city_input'>City/Town:</label></td>
          <td class='w25 pad_bottom_4'><input name='city_input' type='text' value='' placeholder='City/Town' class='form-control input-sm' id='city_input'</td>
          <td class='w25 pad_bottom_4 pad_left_2'><label for='zip_input'>Postal Code:</label></td>
          <td class='w25 pad_bottom_4'><input name='zip_input' type='text' value='' placeholder='Postal Code' class='form-control input-sm' id='zip_input'></td>
        </tr>
        <tr>
          <td class='w20 pad_bottom_4'><label for='district_input'>Postal District:</label></td>
          <td class='w25 pad_bottom_4'><input name='district_input' type='text' value='' placeholder='Postal District' class='form-control input-sm' id='district_input'></td>
          <td class='w25 pad_bottom_4 pad_left_2'><label for='country_input'>Country:</label></td>
          <td class='w25 pad_bottom_4'><input name='country_input' type='text' value='' placeholder='Country' class='form-control input-sm' id='country_input'></td>
        </tr>
      </table>";
  }

  public function getGoogleMap($address){
      return "
        <div id='googleMapError' class='w100 pad_top_10' style='text-align: center; display: none;'><b>Invalid Address</b></div>
        <div id='googleMap' class='w100' style='height:200px; display: none;'></div>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false&key=AIzaSyBT_rLkXDsecZLD1vkciuJKPhHUv1PERn0'></script>
        <script>
          function googleMap(){
            var address = \"$address\";
            var map = new google.maps.Map(document.getElementById('googleMap'),{zoom:10,mapTypeId:google.maps.MapTypeId.ROADMAP});
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              'address': address
            },
            function(results, status) {
              if(status == google.maps.GeocoderStatus.OK) {
                document.getElementById('googleMap').style.display = 'block';
                new google.maps.Marker({
                  position: results[0].geometry.location,
                  map: map
                });
                google.maps.event.trigger(map, 'resize');
                map.setCenter(results[0].geometry.location);
              }
              else{
                document.getElementById('googleMapError').style.display = 'block';
              }
            });
          }
          $('#addressInfo').on('shown.bs.collapse', function(){
            googleMap();
          });
        </script>";
  }

  public function getContactOther($ContactID){
    return "
      <div class='panel-group'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <h4 class='panel-title'>
              <a data-toggle='collapse' href='#contactInfo' class='contact_click white-links'>Contact Information<i class='contact_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
            </h4>
          </div>
          <div class='panel-collapse collapse' id='contactInfo'>
            <div class='panel-body'>
              <table class='w100'>
                <tr>
                  <td class='w5 pad_bottom_4'><label for='contact_input'>Contact Method:</label></td>
                  <td class='w10 pad_bottom_4'>".getContactMethods("contact_input","")."</td>
                  <td class='w5 pad_bottom_4 pad_left_2'><label for='time_input'>Contact Time</label></td>
                  <td class='w10 pad_bottom_4'>".getContactTimes("time_input","")."</td>
                  <td class='w6 pad_bottom_4 pad_left_2'><label for='lead_input'>Lead Source:</label></td>
                  <td class='w10 pad_bottom_4'>".getLeadSources("lead_input","")."</td>
                  <td class='w8 pad_bottom_4 pad_left_2'><label for='security_input'>Signed Security Form:</label></td>
                  <td class='w10 pad_bottom_4'>".getLeadSources("lead_input","")."</td>
                </tr>
                <tr>
                  <td class='w5 pad_bottom_4' colspan='1'><label for='industry_input'>Industry:</label></td>
                  <td class='w50 pad_bottom_4' colspan='3'>".getIndustries("industry_input","",true)."</td>
                  <td class='w6 pad_bottom_4 pad_left_2'><label for='keyword_input'>Keywords:</label></td>
                  <td class='w15 pad_bottom_4' colspan='3'><input name='keyword_input' type='text' value='' placeholder='Keywords' class='form-control input-sm' id='keyword_input'></td>
                </tr>
                <tr>
                  <td class='w5 pad_bottom_4' colspan='1'><label for='test_location_input'>Testing Location(s):</label></td>
                  <td class='w50 pad_bottom_4' colspan='3'>".getClarkLocations("test_location_input","",true)."</td>
                  <td class='w6 pad_left_2' colspan='1'><label for='test_type_input'>Test Types:</label></td>
                  <td class='w50' colspan='3'>".getTestTypes("test_type_input","",true)."</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <script type='text/javascript'>
        $('.contact_click').click(function(){
            $('.contact_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
        });
      </script>";

  }

  public function getContactNotes($ContactID){
    return "
      <div class='panel-group'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <h4 class='panel-title'>
              <a data-toggle='collapse' href='#contactNotesInfo' class='contact_notes_click white-links'>Contact Notes<i class='contact_notes_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
            </h4>
          </div>
          <div class='panel-collapse collapse' id='contactNotesInfo'>
            <div class='panel-body'>
              <table class='w100 table table-bordered'>
                <tr>
                  <th>Entered By</th>
                  <th>Note</th>
                </tr>
                <tr>
                  <td class='w10'>NAME (TIME)</td>
                  <td class='w90'>NOTE</td>
                </tr>
                <tr>
                  <td class='w10'>NAME (TIME)</td>
                  <td class='w90'>NOTE</td>
                </tr>
                <tr>
                  <td class='w10'>NAME (TIME)</td>
                  <td class='w90'>NOTE</td>
                </tr>
              </table>
              <div class='w100 input-group'>
                <input name='note_input' type='text' value='' placeholder='Add Note' class='form-control' id='note_input'>
                <span class='input-group-btn'><button class='btn btn-primary' type='button'>Add Note</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type='text/javascript'>
        $('.contact_notes_click').click(function(){
            $('.contact_notes_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
        });
      </script>";
  }

  public function getContactTasks(){
    return "
      <div class='panel panel-default'>
        <div class='panel-heading'>
          <h4 class='panel-title'>
            <a data-toggle='collapse' href='#tasksInfo' class='tasks_click white-links'>Contact Tasks<i class='tasks_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
          </h4>
        </div>
        <div class='panel-collapse collapse' id='tasksInfo'>
          <table class='w100 table table-bordered table-hover sortTasks'>
            <thead>
              <tr class='sortheader'>
                <th class='col_header w20'>Task Type</th>
                <th class='col_header w20'>Assigned</th>
                <th class='col_header w20'>Task Date</th>
                <th class='col_header w20'>Task Time</th>
                <th class='col_header w20'>Mark Complete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan='5'>No Tasks</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td class='text-center' colspan='5'><h4>Add New Task</h4></td>
              </tr>
              <tr>
                <td class='w20 form-group pad_left_6'><label for='task_type_input'>Task Type</label>".getTaskTypes("task_type_input","")."</td>
                <td class='w20 form-group pad_left_6'><label for='assign_user_input'>Assign User</label>".getUsers("assign_user_input","")."</td>
                <td class='w20 form-group pad_left_6'><label for='task_date'>Date</label><input type='text' name='task_date' id='task_date' class='datepicker form-control input-sm' placeholder='Select Date'></td>
                <td class='w20 form-group pad_left_6'><label for='task_time_input'>Time</label>".getContactTimes("task_time_input","")."</td>
                <td class='w20 form-group text_center'><button name='add_task' type='submit' class='btn btn-primary' id=''>Add Task</button></td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <script type=\"text/javascript\">
      /* BEGIN JAVASCRIPT */
      $(function() { 
          $(\".sortTasks\").tablesorter({ 
              widgets: ['zebra'],
              widthFixed: true,
              sortList:[[0,0]]
          });
      });
      $('.tasks_click').click(function(){
        $('.tasks_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
      });
      </script>";
  }

  public function getContactGraphOptions(){
    return "
      <table class='w100'>
        <tr>
          <td class='w10 form-inline'><label for='graph_year'>Select a Year for the Graphs Below:</label> ".getYearDropdown("graph_year","")."</td>
        </tr>
      </table>";
  }

  public function getContactRFQsGraph(){
    return "
      <table class='w100'>
        <tr>
          <td class='w25 bar_chart text_center'><canvas class='rfq_chart' id='rfqChart' width='500' height='250'></canvas><br/><span class='chart_label'>RFQs - Year</span></td>
        </tr>
      </table>
      <script type='text/javascript'>
      $(function() {
        var rfqChart = {
          labels : ['JAN','FEB','MAR','APR','MAY','JUNE','JULY','AUG','SEP','OCT','NOV','DEC'],
          datasets : [
            {
              fillColor : 'rgba(46,122,174,1)',
              strokeColor : 'rgba(0,43,88,1)',
              highlightFill : 'rgba(13,83,130,1)',
              highlightStroke : 'rgba(0,43,88,1)',
              data : [10,0,0,1,2,5,7,3,5,9,12,1]
            }
          ]
        }
          var Chart1 = new Chart(document.getElementById('rfqChart').getContext('2d')).Bar(rfqChart,{scaleGridLineColor : 'rgba(0,0,0,0.1)', scaleShowVerticalLines : false});
        });
      </script>";
  }

  public function getContactQuotesGraph(){
    return "
      <table class='w100'>
        <tr>
          <td class='w25 bar_chart text_center'><canvas class='quote_chart' id='quoteChart' width='500' height='250'></canvas><br/><span class='chart_label'>Quoted - Year</span></td>
        </tr>
      </table>
      <script type='text/javascript'>
      $(function() {
        var quoteChart = {
          labels : ['JAN','FEB','MAR','APR','MAY','JUNE','JULY','AUG','SEP','OCT','NOV','DEC'],
          datasets : [
            {
              fillColor : 'rgba(46,122,174,1)',
              strokeColor : 'rgba(0,43,88,1)',
              highlightFill : 'rgba(13,83,130,1)',
              highlightStroke : 'rgba(0,43,88,1)',
              data : [2,1,3,0,0,4,0,6,3,1,0,1]
            }
          ]
        }
          var Chart1 = new Chart(document.getElementById('quoteChart').getContext('2d')).Bar(quoteChart,{scaleGridLineColor : 'rgba(0,0,0,0.1)', scaleShowVerticalLines : false});
        });
      </script>";
  }

  public function getContactAwardedGraph(){
    return "
      <table class='w100'>
        <tr>
          <td class='w25 bar_chart text_center'><canvas class='awarded_chart' id='awardedChart' width='500' height='250'></canvas><br/><span class='chart_label'>Awarded - Year</span></td>
        </tr>
      </table>
      <script type='text/javascript'>
      $(function() {
        var awardedChart = {
          labels : ['JAN','FEB','MAR','APR','MAY','JUNE','JULY','AUG','SEP','OCT','NOV','DEC'],
          datasets : [
            {
              fillColor : 'rgba(46,122,174,1)',
              strokeColor : 'rgba(0,43,88,1)',
              highlightFill : 'rgba(13,83,130,1)',
              highlightStroke : 'rgba(0,43,88,1)',
              data : [0,5,2,1,0,3,4,8,1,3,0,1]
            }
          ]
        }
          var Chart1 = new Chart(document.getElementById('awardedChart').getContext('2d')).Bar(awardedChart,{scaleGridLineColor : 'rgba(0,0,0,0.1)', scaleShowVerticalLines : false});
        });
      </script>";
  }

  public function getContactCompletedGraph(){
    return "
      <table class='w100'>
        <tr>
          <td class='w25 bar_chart text_center'><canvas class='completed_chart' id='completedChart' width='500' height='250'></canvas><br/><span class='chart_label'>Completed - Year</span></td>
        </tr>
      </table>
      <script type='text/javascript'>
      $(function() {
        var completedChart = {
          labels : ['JAN','FEB','MAR','APR','MAY','JUNE','JULY','AUG','SEP','OCT','NOV','DEC'],
          datasets : [
            {
              fillColor : 'rgba(46,122,174,1)',
              strokeColor : 'rgba(0,43,88,1)',
              highlightFill : 'rgba(13,83,130,1)',
              highlightStroke : 'rgba(0,43,88,1)',
              data : [2,3,0,1,0,5,7,1,6,5,4,0]
            }
          ]
        }
          var Chart1 = new Chart(document.getElementById('completedChart').getContext('2d')).Bar(completedChart,{scaleGridLineColor : 'rgba(0,0,0,0.1)', scaleShowVerticalLines : false});
        });
      </script>";
  }

  public function getContactRFQs(){
    return"
    <div class='panel panel-default'>
      <div class='panel-heading'>
        <h4 class='panel-title'>
          <a data-toggle='collapse' href='#rfqInfo' class='rfq_click white-links'>RFQs<i class='rfq_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
        </h4>
      </div>
      <div class='panel-collapse collapse' id='rfqInfo'>
        <table class='table table-bordered table-hover table-stripped rfqTable' id=''  cellspacing='0'>
          <thead>
            <tr class='sortheader'>
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
          <tbody class='rfqResults'>
            <tr class=''>
              <td class='jid'>1</td>
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
    </div>
    <script type='text/javascript'>
    /* BEGIN JAVASCRIPT */
    $(function() { 
        $('.rfqTable').tablesorter({ 
            widgets: ['zebra'],
            widthFixed: true,
            sortList:[[0,0]]
        });

        $('tbody.rfqResults').on('click', 'tr', function(e) {
          e.preventDefault();
            var id = $(this).find('.jid').html();
            window.location='job-form.php?jid='+id+'#rfq'; 
      });
    });

    $('.rfq_click').click(function(){
      $('.rfq_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
    });
    </script>";
  }

  public function getContactQuoted(){
    return"
    <div class='panel panel-default'>
      <div class='panel-heading'>
        <h4 class='panel-title'>
          <a data-toggle='collapse' href='#quoteInfo' class='quote_click white-links'>Quoted<i class='quote_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
        </h4>
      </div>
      <div class='panel-collapse collapse' id='quoteInfo'>
        <table class='table table-bordered table-hover table-stripped quotedTable' id=''  cellspacing='0'>
          <thead>
            <tr class='sortheader'>
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
          <tbody class='quotedResults'>
            <tr class=''>
              <td class='jid'>2</td>
              <td class=''>President</td>
              <td class=''>AAA</td>
              <td class=''>1</td>
              <td class=''>2</td>
              <td class=''>3</td>
              <td class=''>4</td>
              <td class=''>5</td>
            </tr>
            <tr class=''>
              <td class='jid'>9</td>
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
    </div>
    <script type='text/javascript'>
    /* BEGIN JAVASCRIPT */
    $(function() { 
        $('.quotedTable').tablesorter({ 
            widgets: ['zebra'],
            widthFixed: true,
            sortList:[[0,0]]
        });

        $('tbody.quotedResults').on('click', 'tr', function(e) {
            e.preventDefault();
            var id = $(this).find('.jid').html();
            window.location='job-form.php?jid='+id+'#quoted'; 
      });
    });
    $('.quote_click').click(function(){
      $('.quote_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
    });
    </script>";
  }

  public function getContactAwarded(){
    return"
    <div class='panel panel-default'>
      <div class='panel-heading'>
        <h4 class='panel-title'>
          <a data-toggle='collapse' href='#awardInfo' class='award_click white-links'>Awarded<i class='award_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
        </h4>
      </div>
      <div class='panel-collapse collapse' id='awardInfo'>
        <table class='table table-bordered table-hover table-stripped awardedTable' id=''  cellspacing='0'>
          <thead>
            <tr class='sortheader'>
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
          <tbody class='awardedResults'>
            <tr class='sortheader'>
              <td class='jid'>3</td>
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
    </div>
    <script type='text/javascript'>
    /* BEGIN JAVASCRIPT */
    $(function() { 
        $('.awardedTable').tablesorter({ 
            widgets: ['zebra'],
            widthFixed: true,
            sortList:[[0,0]]
        });

        $('tbody.awardedResults').on('click', 'tr', function(e) {
          e.preventDefault();
            var id = $(this).find('.jid').html();
            window.location='job-form.php?jid='+id+'awarded'; 
      });
    });
    $('.award_click').click(function(){
      $('.award_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
    });
    </script>";
  }

  public function getContactTestingCompleted(){
    return"
    <div class='panel panel-default'>
      <div class='panel-heading'>
        <h4 class='panel-title'>
          <a data-toggle='collapse' href='#test_comp_Info' class='test_comp_click white-links'>Testing Completed<i class='test_comp_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
        </h4>
      </div>
      <div class='panel-collapse collapse' id='test_comp_Info'>
        <table class='table table-bordered table-hover table-stripped awardedTable' id=''  cellspacing='0'>
          <thead>
            <tr class='sortheader'>
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
          <tbody class='awardedResults'>
            <tr class='sortheader'>
              <td class='jid'>3</td>
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
    </div>
    <script type='text/javascript'>
    /* BEGIN JAVASCRIPT */
    $(function() { 
        $('.awardedTable').tablesorter({ 
            widgets: ['zebra'],
            widthFixed: true,
            sortList:[[0,0]]
        });

        $('tbody.awardedResults').on('click', 'tr', function(e) {
          e.preventDefault();
            var id = $(this).find('.jid').html();
            window.location='job-form.php?jid='+id+'awarded'; 
      });
    });
    $('.test_comp_click').click(function(){
      $('.test_comp_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
    });
    </script>";
  }

  public function getContactJobCompleted(){
    return"
    <div class='panel panel-default'>
      <div class='panel-heading'>
        <h4 class='panel-title'>
          <a data-toggle='collapse' href='#job_comp_Info' class='job_comp_click white-links'>Job Completed<i class='job_comp_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
        </h4>
      </div>
      <div class='panel-collapse collapse' id='job_comp_Info'>
        <table class='table table-bordered table-hover table-stripped awardedTable' id=''  cellspacing='0'>
          <thead>
            <tr class='sortheader'>
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
          <tbody class='awardedResults'>
            <tr class='sortheader'>
              <td class='jid'>3</td>
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
    </div>
    <script type='text/javascript'>
    /* BEGIN JAVASCRIPT */
    $(function() { 
        $('.awardedTable').tablesorter({ 
            widgets: ['zebra'],
            widthFixed: true,
            sortList:[[0,0]]
        });

        $('tbody.awardedResults').on('click', 'tr', function(e) {
          e.preventDefault();
            var id = $(this).find('.jid').html();
            window.location='job-form.php?jid='+id+'awarded'; 
      });
    });
    $('.job_comp_click').click(function(){
      $('.job_comp_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
    });
    </script>";
  }

  public function saveButtons(){
    return "
      <table class='w100'>
        <tr>
          <td class='w20 text_center'><button name='save' type='submit' class='btn btn-primary' id=''>Save Contact</button></td>
          <td class='w20 text_center'><button name='coworker' type='submit' class='btn btn-primary' id=''>Add Coworker</button></td>
          <td class='w20 text_center'><button name='export' type='submit' class='btn btn-primary' id=''>Export Data</button></td>
          <td class='w20 text_center'><button name='rfq' type='submit' class='btn btn-primary' id=''>Create RFQ</button></td>
          <td class='w20 text_center'><button name='delete' type='submit' class='btn btn-primary' id=''>Delete Contact</button></td>
        </tr>
      </table>";
  }

  public function __destruct(){

  }
}

?>