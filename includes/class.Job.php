<?php

# CRM Job Class
# Version 1.0.0 - July 2015
# Written by: Shawn Becquet - sbecquet@clarktesting.com

# Purpose:
# This class is to help pull and display data for Jobs

include_once("includes/constants.php");
include_once(FUNCTIONS);
include_once("includes/class.Contact.php");

class Job{

    public function __construct($jid){ // Construct function
        if(isset($jid) && !empty($jid)){
            $this->jid         = $jid;
            $this->status      = 1;   
            $this->progress    = 50;
            $this->conttact_id = 1;
            $this->location    = "D";
        }
        else{  // NO JID SET.  Bad data so display error message
            echo "<span class='text-danger'>ERROR:  Not a valid JID.</span>";
            exit;
        }
    }

    public function getContactId(){
        return $this->contact_id;
    }
    
    public function getProgressBar() {
        $progress = $this->progress;
        
        $return = "<table class='w100'>
                    <tr class='w100'>
                        <td colspan='5'>
                            <div class='progress'>";
        
        if($progress >= 10){
            
            $return .= "<div class='progress-bar status_bar_rfq progress-bar-striped active' style='width: 20%'>
                            <span class='sr-only'>RFQ Stage</span>
                        </div>";
            
            if($progress >= 20){
                
                $return .= "<div class='progress-bar status_bar_quoted progress-bar-striped active' style='width: 20%'>
                                <span class='sr-only'>Quoted Stage</span>
                            </div>";
                
                if($progress >= 30){
                    
                    $return .= "<div class='progress-bar status_bar_awarded progress-bar-striped active' style='width: 20%'>
                                    <span class='sr-only'>Awarded Stage</span>
                                </div>";
                    
                    if($progress >= 40){
                        
                        $return .= "<div class='progress-bar status_bar_test_completed progress-bar-striped active' style='width: 20%'>
                                        <span class='sr-only'>Testing Completed</span>
                                    </div>";

                        if($progress >= 50){
                            $return .= "<div class='progress-bar status_bar_job_completed progress-bar-striped active' style='width: 20%'>
                                        <span class='sr-only'>Job Completed</span>
                                    </div>";
                        }
                    }
                }
            }
        }
        
        $return .= "</div>";
        
        $return .= "
                    <div class='progress_desc'>
                        <b>RFQ</b>
                    </div>
                    <div class='progress_desc'>
                        <b>Quoted</b>
                    </div>
                    <div class='progress_desc'>
                        <b>Awarded</b>
                    </div>
                    <div class='progress_desc'>
                        <b>Testing Completed</b>
                    </div>
                    <div class='progress_desc'>
                        <b>Job Completed</b>
                    </div>
                </td>
            </tr>
        </table>";
        
        return $return;
    }
    
    public function getJobInfo() {
        return "
          <div class='panel-group'>
            <div class='panel panel-default'>
              <div class='panel-heading'>
                <h4 class='panel-title'>
                  <a data-toggle='collapse' href='#jobInfo' class='job_click white-links'>Job Information<i class='job_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
                </h4>
              </div>
              <div class='panel-collapse collapse in' id='jobInfo'>
                <div class='panel-body'>
                  <table class='w100'>
                    <tr>
                        <td class='w10 pad_bottom_4'><label for='date_created'>Date Created:</label></td>
                        <td class='w10 pad_bottom_4'><input type='input' class='form-control' placeholder='2001-11-23'></td>
                        <td class='w10 pad_bottom_4 pad_left_2'><label for='date_created'>Location:</label></td>
                        <td class='w15 pad_bottom_4'>".getClarkLocations("location",$selected,false,"ajaxChange(this.value)")."</td>
                        <td class='w10 pad_bottom_4 pad_left_2'><label for='date_created'>Test Type:</label></td>
                        <td class='w20 pad_bottom_4'><select name='test_type' id='test_type' class='form-control input-sm'><option value=''>--</option></select></td>
                    </tr>
                    <tr>
                        <td class='w15 pad_bottom_4' colspan='2'><label class='checkbox-inline'><input name='commission_input' type='checkbox' value='1' id='commission_input'><b>Commission Eligible</b></label></td>
                        <td class='w15 pad_bottom_4' colspan='2'><label class='checkbox-inline'><input name='nuclear_input' type='checkbox' value='1' id='nuclear_input'><b>Nuclear Job</b></label></td>
                        <td class='w15 pad_bottom_4' colspan='2'><label class='checkbox-inline'><input name='noforn_input' type='checkbox' value='1' id='noforn_input'><b>NOFORN Job</b></label></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <script type='text/javascript'>
            $('.job_click').click(function(){
                $('.job_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
            });

            function ajaxChange(id){
                $.ajax({
                    type: 'GET',
                    url: 'ajax/test_by_location.php?loc_id='+id,
                    success:function(data){
                        $('#test_type').html(data);
                    }
                });
            }            
          </script>";
    }
    
    public function getJobTasks() {
        return "
            <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                    <a data-toggle='collapse' href='#tasksInfo' class='tasks_click white-links'>Job Tasks<i class='tasks_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
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
    
    public function getJobContactInfo() {
        return "
            <tr class='contact_drop'>
                <td class='dropdown_background_closed' colspan='4'>
                    <b>Contact Information</b><i class='fa fa-chevron-up pull-right'></i>
                </td>
            </tr>
            <tr class='no_show' id='contact_table'>
                <td class='w50'>
                    <table class='w100'>
                      <tr>
                        <td class='w15 pad_bottom_4'><label for='company_input'>Company:</label></td>
                        <td class='w35 pad_bottom_4'><input name='company_input' type='text' value='' placeholder='Company' class='form-control input-sm' id='company_input'></td>
                        <td class='w15 pad_bottom_4 pad_left_20' colspan='2'><label class='checkbox-inline'><input name='us_input' type='checkbox' value='1' id='us_input'><b>U.S.A. Customer</b></label></td>
                      </tr>
                      <tr>
                        <td class='w15 pad_bottom_4'><label for='first_input'>First Name:</label></td>
                        <td class='w35 pad_bottom_4'><input name='first_input' type='text' value='' placeholder='First Name' class='form-control input-sm' id='first_input'></td>
                        <td class='w15 pad_bottom_4 pad_left_2'><label for='last_input'>Last Name:</label></td>
                        <td class='w35 pad_bottom_4'><input name='last_input' type='text' value='' placeholder='Last Name' class='form-control input-sm' id='last_input'></td>
                      </tr>
                      <tr>
                        <td class='w15 pad_bottom_4'><label for='division_input'>Division:</label></td>
                        <td class='w35 pad_bottom_4'><input name='division_input' type='text' value='' placeholder='Division' class='form-control input-sm' id='division_input'></td>
                        <td class='w15 pad_bottom_4 pad_left_2'><label for='title_input'>Title:</label></td>
                        <td class='w35 pad_bottom_4'><input name='title_input' type='text' value='' placeholder='Title' class='form-control input-sm' id='title_input'></td>
                      </tr>
                      <tr>
                        <td class='w15 pad_bottom_4'><label for='phone_input'>Phone:</label></td>
                        <td class='w35 pad_bottom_4'><input name='phone_input' type='text' value='' placeholder='Phone #' class='form-control input-sm' id='phone_input'></td>
                        <td class='w15 pad_bottom_4 pad_left_2'><label for='mobile_input'>Mobile:</label></td>
                        <td class='w35 pad_bottom_4'><input name='mobile_input' type='text' value='' placeholder='Mobile #' class='form-control input-sm' id='mobile_input'</td>
                      </tr>
                      <tr>
                        <td class='w15 pad_bottom_4'><label for='email_input'>Email:</label></td>
                        <td class='w35 pad_bottom_4'><input name='email_input' type='text' value='' placeholder='Email' class='form-control input-sm' id='email_input'></td>
                        <td class='w15 pad_bottom_4 pad_left_2'><label for='fax_input'>Fax:</label></td>
                        <td class='w35 pad_bottom_4'><input name='fax_input' type='text' value='' placeholder='Fax #' class='form-control input-sm' id='fax_input'></td>
                      </tr>
                      <tr>
                        <td class='w15 pad_bottom_4'><label for='website_input'>Website:</label></td>
                        <td class='w35 pad_bottom_4'><input name='website_input' type='text' value='' placeholder='Website' class='form-control input-sm' id='website_input'></td>
                        <td class='w15 pad_bottom_4 pad_left_2'><label for='duns_input'>DUNS #:</label></td>
                        <td class='w35 pad_bottom_4'><input name='duns_input' type='text' value='' placeholder='DUNS #' class='form-control input-sm' id='duns_input'></td>
                      </tr>
                    </table>
                </td>
                <td class='w50'>
                    ".$this->jobAddress(2)." 
                </td>
            </tr>
            <script type='text/javascript'>
                $('.contact_drop').click(function(){
                    $('#contact_table').slideToggle('fast','linear');
                    $('.contact_drop').find('i').toggleClass('fa-chevron-up fa-chevron-down');
                    $('.contact_drop').find('td').toggleClass('dropdown_background_closed dropdown_background_open');
                });
            </script>";  
    }
    
    public function showJobInfo() {
        $progress = $this->progress;
        
        $return = "";

        if($progress >= 10){
            $return .= $this->getRFQInfo();

            if($progress >= 20){
                $return .= $this->getQuoteInfo();

                if($progress >= 30){
                    $return .= $this->getAwardInfo();

                    if($progress >= 40){
                        $return .= $this->getTestCompletedInfo();

                        if($progress >= 50){
                            $return .= $this->getJobCompletedInfo();
                        }
                    }
                }
            }
        }
        
        $return .= $this->getQuoteBuilder();
        
        $return .= $this->getJobTasks();

        $return .= $this->getJobNotes();

        $return .= $this->getJobUploads();

        $return .= $this->getJobCalendar();
        
        return $return;
        
    }
    
    public function getRFQInfo() {
        if($this->progress == 10){
            $in = "in";
            $glyphicon = "glyphicon-chevron-up";
        }
        else{
            $in = "";
            $glyphicon = "glyphicon-chevron-down";
        }

        return "
            <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                    <a data-toggle='collapse' href='#rfqInfo' class='rfq_click white-links'>RFQ Information<i class='rfq_indicator glyphicon $glyphicon pull-right white-links'></i></a>
                  </h4>
                </div>
                <div class='panel-collapse collapse $in' id='rfqInfo'>
                  <table class='w100 table'>
                    <tr>
                        <td class='w8 pad_bottom_4'><label for='status_input'>RFQ Status:</label></td>
                        <td class='w15 pad_bottom_4'><input name='status_input' type='text' value='' placeholder='First Name' class='form-control input-sm' id='status_input'></td>
                        <td class='w8 pad_bottom_4 pad_left_2'><label for='source_input'>RFQ Source:</label></td>
                        <td class='w15 pad_bottom_4'><input name='source_input' type='text' value='' placeholder='Last Name' class='form-control input-sm' id='source_input'></td>
                        <td class='w10 pad_bottom_4 pad_left_2'><label for='turn_around_input'>Turnaround Time:</label></td>
                        <td class='w15 pad_bottom_4'><input name='turn_around_input' type='text' value='' placeholder='Last Name' class='form-control input-sm' id='turn_around_input'></td>
                    </tr>
                    <tr>
                        <td class='w8 pad_bottom_4'><label for='assigned_input'>Assigned:</label></td>
                        <td class='w15 pad_bottom_4'><input name='assigned_input' type='text' value='' placeholder='First Name' class='form-control input-sm' id='assigned_input'></td>
                        <td class='w8 pad_bottom_4 pad_left_2'><label for='sales_rep_input'>Sales Rep / Manager:</label></td>
                        <td class='w15 pad_bottom_4'><input name='sales_rep_input' type='text' value='' placeholder='Last Name' class='form-control input-sm' id='sales_rep_input'></td>
                        <td class='w10 pad_bottom_4 pad_left_2'><label for='due_date_input'>Due Date:</label></td>
                        <td class='w15 pad_bottom_4'><input name='due_date_input' type='text' value='' placeholder='Last Name' class='form-control input-sm' id='due_date_input'></td>
                    </tr>
                    <tr>
                        <td class='w8 pad_bottom_4'><label for='amount_input'>Amount:</label></td>
                        <td class='w15 pad_bottom_4'><input name='amount_input' type='text' value='' placeholder='First Name' class='form-control input-sm' id='amount_input'></td>
                        <td class='w8 pad_bottom_4 pad_left_2'><label for='confidence_input'>Confidence:</label></td>
                        <td class='w15 pad_bottom_4'><input name='confidence_input' type='text' value='' placeholder='Last Name' class='form-control input-sm' id='confidence_input'></td>
                    </tr>
                  </table>
                </div>
              </div>
              <script type=\"text/javascript\">
                  $('.rfq_click').click(function(){
                    $('.rfq_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
                  });
              </script>";  
    }
    
    public function getQuoteInfo($expanded = "") {
        if($this->progress == 20){
            $in = "in";
            $glyphicon = "glyphicon-chevron-up";
        }
        else{
            $in = "";
            $glyphicon = "glyphicon-chevron-down";
        }

        return "
            <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                    <a data-toggle='collapse' href='#quoteInfo' class='quote_click white-links'>Quote Information<i class='quote_indicator glyphicon $glyphicon pull-right white-links'></i></a>
                  </h4>
                </div>
                <div class='panel-collapse collapse $in' id='quoteInfo'>
                  <table class='w100 table'>
                    <tr>
                        <td class='w8 pad_bottom_4'><label for='status_input'>Quote Status:</label></td>
                        <td class='w15 pad_bottom_4'><input name='status_input' type='text' value='' placeholder='First Name' class='form-control input-sm' id='status_input'></td>
                        <td class='w8 pad_bottom_4 pad_left_2'><label for='source_input'>Quoted Date:</label></td>
                        <td class='w15 pad_bottom_4'><input name='source_input' type='text' value='' placeholder='Last Name' class='form-control input-sm' id='source_input'></td>
                        <td class='w10 pad_bottom_4 pad_left_2'><label for='turn_around_input'>Description?:</label></td>
                        <td class='w15 pad_bottom_4'><input name='turn_around_input' type='text' value='' placeholder='Last Name' class='form-control input-sm' id='turn_around_input'></td>
                    </tr>
                  </table>
                </div>
              </div>
              <script type=\"text/javascript\">
                  $('.quote_click').click(function(){
                    $('.quote_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
                  });
              </script>"; 
    }
    
    public function getAwardInfo() {
        if($this->progress == 30){
            $in = "in";
            $glyphicon = "glyphicon-chevron-up";
        }
        else{
            $in = "";
            $glyphicon = "glyphicon-chevron-down";
        }

        return "
            <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                    <a data-toggle='collapse' href='#awardInfo' class='award_click white-links'>Awarded Information<i class='award_indicator glyphicon $glyphicon  pull-right white-links'></i></a>
                  </h4>
                </div>
                <div class='panel-collapse collapse $in' id='awardInfo'>
                  <table class='w100 table'>
                    <tr>
                        <td class='w8 pad_bottom_4'>award status, award date, to be witnessed, webcam broadcast with date, po information, cost infomration, invoicing section (carry though other panels?)</td>
                    </tr>
                  </table>
                </div>
              </div>
              <script type=\"text/javascript\">
                  $('.award_click').click(function(){
                    $('.award_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
                  });
              </script>";    
    }
    
    public function getTestCompletedInfo() {
        if($this->progress == 40){
            $in = "in";
            $glyphicon = "glyphicon-chevron-up";
        }
        else{
            $in = "";
            $glyphicon = "glyphicon-chevron-down";
        }

        return "
            <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                    <a data-toggle='collapse' href='#test_completedInfo' class='test_completed_click white-links'>Testing Completed Information<i class='test_completed_indicator glyphicon $glyphicon pull-right white-links'></i></a>
                  </h4>
                </div>
                <div class='panel-collapse collapse $in' id='test_completedInfo'>
                  <table class='w100 table'>
                    <tr>
                        <td class='w8 pad_bottom_4'>Not sure what to put here yet (Report Information?)</td>
                    </tr>
                  </table>
                </div>
              </div>
              <script type=\"text/javascript\">
                  $('.test_completed_click').click(function(){
                    $('.test_completed_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
                  });
              </script>"; 
    }

    public function getJobCompletedInfo() {
        if($this->progress == 50){
            $in = "in";
            $glyphicon = "glyphicon-chevron-up";
        }
        else{
            $in = "";
            $glyphicon = "glyphicon-chevron-down";
        }

        return "
            <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                    <a data-toggle='collapse' href='#job_completedInfo' class='job_completed_click white-links'>Job Completed Information<i class='job_completed_indicator glyphicon $glyphicon pull-right white-links'></i></a>
                  </h4>
                </div>
                <div class='panel-collapse collapse $in' id='job_completedInfo'>
                  <table class='w100 table'>
                    <tr>
                        <td class='w8 pad_bottom_4'>Should pretty much just be who and when it was marked complete</td>
                    </tr>
                  </table>
                </div>
              </div>
              <script type=\"text/javascript\">
                  $('.job_completed_click').click(function(){
                    $('.job_completed_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
                  });
              </script>"; 
    }
    
    public function getQuoteBuilder() {
        return "
            <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                    <a data-toggle='collapse' href='#quote_builderInfo' class='quote_builder_click white-links'>Quote Builder<i class='quote_builder_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
                  </h4>
                </div>
                <div class='panel-collapse collapse' id='quote_builderInfo'>
                  <table class='w100 table'>
                    <tr>
                        <td class='w8 pad_bottom_4'>Quote Builder Stuff Here</td>
                    </tr>
                  </table>
                </div>
              </div>
              <script type=\"text/javascript\">
                  $('.quote_builder_click').click(function(){
                    $('.quote_builder_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
                  });
              </script>";
        
    }
        
    public function getJobUploads() {
        return "
            <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                    <a data-toggle='collapse' href='#uploadsInfo' class='uploads_click white-links'>Uploaded Files<i class='uploads_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
                  </h4>
                </div>
                <div class='panel-collapse collapse' id='uploadsInfo'>
                  <table class='w100 table'>
                    <tr>
                        <td class='w8 pad_bottom_4'>Quote Builder Stuff Here</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <script type=\"text/javascript\">
              $('.uploads_click').click(function(){
                $('.uploads_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
              });
            </script>";
    }
        
    public function getJobNotes(){
        return "
            <div class='panel-group'>
                <div class='panel panel-default'>
                  <div class='panel-heading'>
                    <h4 class='panel-title'>
                      <a data-toggle='collapse' href='#jobNotesInfo' class='job_notes_click white-links'>Job Notes<i class='job_notes_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
                    </h4>
                  </div>
                  <div class='panel-collapse collapse' id='jobNotesInfo'>
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
            $('.job_notes_click').click(function(){
                $('.job_notes_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
            });
            </script>";
        
    }

    public function getJobCalendar(){
        $location = $this->location;

        if(in_array($location,array("D","M"))){
            return "
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                      <h4 class='panel-title'>
                        <a data-toggle='collapse' href='#calendarInfo' class='calendar_click white-links'>Calendar<i class='calendar_indicator glyphicon glyphicon-chevron-up  pull-right white-links'></i></a>
                      </h4>
                    </div>
                    <div class='panel-collapse collapse in' id='calendarInfo'>
                      <table class='w100 table'>
                        <tr>
                            <td class='w8 pad_bottom_4 text-center'>
                                <iframe src='https://calendar.google.com/calendar/embed?showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=clarktesting.com_99rfs1l4t4v5vtslapdsu50sb8@group.calendar.google.com&amp;color=%231B887A&amp;ctz=America%2FNew_York' style='border-width:0' width='1000' height='600' frameborder='0' scrolling='no'></iframe>
                            </td>
                        </tr>
                        <tr>
                            <td><input type='button' class='cal_button' value='ADD EVENT' onclick='makeApiCall();'></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <script type=\"text/javascript\">
                    $('.calendar_click').click(function(){
                        $('.calendar_indicator').toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
                    });
                </script>
                

          
                    <script type='text/javascript'>
                    



                    // Google api console clientID and apiKey 
                    var clientId = '462719301127-bvob2kov5n86lqg0l5ane89l93nfqbic.apps.googleusercontent.com';
                    var apiKey = 'AIzaSyB6QbFF90anJX2zYpWTW7ujDMh8tuI9Noc';

                    // enter the scope of current project (this API must be turned on in the Google console)
                    var scopes = 'https://www.googleapis.com/auth/calendar';


                    function aaa(){
                        alert(\"AAA\");
                    }
                    // OAuth2 functions
                    function handleClientLoad() {
                        
                        window.setTimeout(checkAuth, 1);
                    }

                    //To authenticate
                    function checkAuth() {
                        gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: true }, function() {console.log('login complete'); console.log(gapi.auth.getToken());});
                    }


                    // This is the resource we will pass while calling api function
                    var resource = {
                        'summary': 'Testing',
                        'description': 'This is a test',
                        'start': {'date': '2016-04-03'},
                        'end': {'date': '2016-04-04'}
                    };

                    function makeApiCall(){
                            



                        gapi.client.load('calendar', 'v3', function () { 
                            var request = gapi.client.calendar.events.insert({
                                'calendarId': 'clarktesting.com_99rfs1l4t4v5vtslapdsu50sb8@group.calendar.google.com',
                                'resource': resource
                            }); 
                            request.execute(function(event) {
                              alert('aaaaaa');
                            });               
                        });
                    
                    }
                    
                </script>
                <script src=\"https://apis.google.com/js/client.js?onload=handleClientLoad\"></script>";
        }
    }
    
    public function __destroy() {
        
    }
}

?>