<?php

// Simple function to easily display arrays
function pre_disp($display_array) 
{
  echo "<pre>";
  print_r($display_array);
  echo "</pre>";
}

function getStateDropdown($name,$selected,$options){
  $dd = "<select name='$name' class='form-control input-sm' id='$name'>";
  $dd .= "<option value=''>--</option>";
  $state_array = array(
                'AL'=>'Alabama',
                'AK'=>'Alaska',
                'AZ'=>'Arizona',
                'AR'=>'Arkansas',
                'CA'=>'California',
                'CO'=>'Colorado',
                'CT'=>'Connecticut',
                'DE'=>'Delaware',
                'DC'=>'District of Columbia',
                'FL'=>'Florida',
                'GA'=>'Georgia',
                'HI'=>'Hawaii',
                'ID'=>'Idaho',
                'IL'=>'Illinois',
                'IN'=>'Indiana',
                'IA'=>'Iowa',
                'KS'=>'Kansas',
                'KY'=>'Kentucky',
                'LA'=>'Louisiana',
                'ME'=>'Maine',
                'MD'=>'Maryland',
                'MA'=>'Massachusetts',
                'MI'=>'Michigan',
                'MN'=>'Minnesota',
                'MS'=>'Mississippi',
                'MO'=>'Missouri',
                'MT'=>'Montana',
                'NE'=>'Nebraska',
                'NV'=>'Nevada',
                'NH'=>'New Hampshire',
                'NJ'=>'New Jersey',
                'NM'=>'New Mexico',
                'NY'=>'New York',
                'NC'=>'North Carolina',
                'ND'=>'North Dakota',
                'OH'=>'Ohio',
                'OK'=>'Oklahoma',
                'OR'=>'Oregon',
                'PA'=>'Pennsylvania',
                'RI'=>'Rhode Island',
                'SC'=>'South Carolina',
                'SD'=>'South Dakota',
                'TN'=>'Tennessee',
                'TX'=>'Texas',
                'UT'=>'Utah',
                'VT'=>'Vermont',
                'VA'=>'Virginia',
                'WA'=>'Washington',
                'WV'=>'West Virginia',
                'WI'=>'Wisconsin',
                'WY'=>'Wyoming');
  foreach($state_array AS $abbv => $state_name){
    if($selected == $abbv){
      $dd .= "<option value='".$abbv."' selected='selected'>".$state_name."</option>";
    }
    else{
      $dd .= "<option value='".$abbv."'>".$state_name."</option>";
    }
  }
  $dd .= "</select>";

  return $dd;
}

function getContactMethods($name,$selected){
    $dd = "<select name='$name' class='form-control input-sm' id='$name'>";
    $dd .= "<option value=''>--</option>";
    $methods = unserialize(CONTACT_METHODS);
    foreach($methods AS $contact_id => $name){
        if($selected == $contact_id){
            $dd .= "<option value='".$contact_id."' selected='selected'>".$name."</option>";
        }
        else{
            $dd .= "<option value='".$contact_id."'>".$name."</option>";
        }
    }
    $dd .= "</select>";

    return $dd;
}

function getContactTimes($name,$selected){
    $dd = "<select name='$name' class='form-control input-sm' id='$name'>";
    $dd .= "<option value=''>--</option>";
    $times = unserialize(CONTACT_TIMES);
    foreach ($times as $key => $value) {
        if($selected == $key){
            $dd .= "<option value='".$key."' selected='selected'>".$value."</option>";
        }
        else{
            $dd .= "<option value='".$key."'>".$value."</option>";
        }
    }
    $dd .= "</select>";

    return $dd;
}

function getLeadSources(){
    $dd = "<select name='$name' class='form-control input-sm' id='$name'>";
    $dd .= "<option value=''>--</option>";
    //Get Sources

    $dd .= "</select>";

    return $dd;
}

function getIndustries($name,$selected,$multiple = true){
    $industries = unserialize(INDUSTRIES);

    if($multiple != true){
        $dd = "<select name='$name' class='form-control input-sm' id='$name'>";
        $dd .= "<option value=''>--</option>";
        foreach($industries AS $abbv => $name){
            if($selected == $abbv){
                $dd .= "<option value='".$abbv."' selected='selected'>".$name."</option>";
            }
            else{
                $dd .= "<option value='".$abbv."'>".$name."</option>";
            }
        }
    }
    else{
        $dd = "<select name='$name' class='form-control input-sm' id='$name' multiple>";
        $selected_array = explode("~",$selected);
        foreach($industries AS $abbv => $name){
            if(in_array($abbv,$selected_array)){
                $dd .= "<option value='".$abbv."' selected='selected'>".$name."</option>";    
            }
            else{
                $dd .= "<option value='".$abbv."'>".$name."</option>";
            }
        }
    }

    $dd .= "</select>";

    return $dd;
}

function getTestTypes($name,$selected,$multiple = true){
    $test_types = unserialize(TEST_TYPES);
    if($multiple != true){
        $dd = "<select name='$name' class='form-control input-sm' id='$name'>";
        $dd .= "<option value=''>--</option>";
        foreach($test_types AS $abbv => $name){
            if($selected == $abbv){
                $dd .= "<option value='".$abbv."' selected='selected'>".$name."</option>";
            }
            else{
                $dd .= "<option value='".$abbv."'>".$name."</option>";
            }
        }
    }
    else{
        $dd = "<select name='$name' class='form-control input-sm' id='$name' multiple>";  
        $selected_array = explode("~",$selected);
        foreach($test_types AS $abbv => $name){
            if(in_array($abbv,$selected_array)){
                $dd .= "<option value='".$abbv."' selected='selected'>".$name."</option>";
            }
            else{
                $dd .= "<option value='".$abbv."'>".$name."</option>";
            }
        }
    }

    $dd .= "</select>";

    return $dd;
}

function getClarkLocations($name,$selected,$multiple = true,$onchange = ""){
    $locations = unserialize(CLARK_LOCATIONS);
    if($multiple != true){
        $dd = "<select name='$name' class='form-control input-sm' id='$name' onchange='$onchange'>";
        $dd .= "<option value=''>--</option>";
        foreach ($locations as $abbv => $name) {
            if($selected == $abbv){
                $dd .= "<option value='".$abbv."' selected='selected'>".$name."</option>";
            }
            else{
                $dd .= "<option value='".$abbv."'>".$name."</option>";
            }
        }
    }
    else{
        $dd = "<select name='$name' class='form-control input-sm' id='$name' onchange='$onchange' multiple>";  
        $selected_array = explode("~",$selected);
        foreach($locations AS $abbv => $name){
            if(in_array($abbv,$selected_array)){
                $dd .= "<option value='".$abbv."' selected='selected'>".$name."</option>";
            }
            else{
                $dd .= "<option value='".$abbv."'>".$name."</option>";
            }
        }
    }
    
    $dd .= "</select>";

    return $dd;
}

function getTaskTypes($name,$selected){
    $dd = "<select name='$name' class='form-control input-sm' id='$name'>";
    $dd .= "<option value=''>--</option>";
    $task_type = unserialize(TASK_TYPES);
    foreach ($task_type as $key => $value) {
        if($selected == $key){
            $dd .= "<option value='".$key."' selected='selected'>".$value."</option>";
        }
        else{
            $dd .= "<option value='".$key."'>".$value."</option>";
        }
    }
    $dd .= "</select>";

    return $dd;
}

function getUsers($name,$selected){
    $dd = "<select name='$name' class='form-control input-sm' id='$name'>";
    $dd .= "<option value=''>--</option>";
    $users = array("AAA"=>"A User","BBB"=>"B User");
    foreach ($users as $key => $value) {
        if($selected == $key){
            $dd .= "<option value='".$key."' selected='selected'>".$value."</option>";
        }
        else{
            $dd .= "<option value='".$key."'>".$value."</option>";
        }
    }
    $dd .= "</select>";

    return $dd;
}

function getYearDropdown($name,$selected){
    if(empty($selected)){
         $selected = CURRENT_YEAR;
    }
    $dd = "<select name='$name' class='form-control input-sm' id='$name'>";
    $dd .= "<option value=''>--</option>";
    $start = START_YEAR;
    while($start <= date("Y")){
        if($start == $selected){
            $dd .= "<option value='".$start."' selected='selected'>".$start."</option>";
        }
        else{
            $dd .= "<option value='".$start."'>".$start."</option>";
        }
        $start++;
    }
    $dd .= "</select>";

    return $dd;
}


function getCheckbox($name,$value,$check = false){
    $ret = "<input name='$name' type='checkbox' value='$value' ";
    
    if($check == true){
        $ret .= "checked='checked'";   
    }
    
    $ret .= ">";
    
    return $ret;
}

function getVariables(){
    if(ENV == "DEV"){
        return $_REQUEST;
    }
    elseif(ENV == "QA"){
        return $_POST;
    }
    elseif(ENV == "PROD"){
        return $_POST;
    }
    else{
        echo "There was an error (Error Code: 951)";
        exit;
    }
}




?>