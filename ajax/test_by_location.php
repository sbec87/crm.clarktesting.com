<?php
    include_once("../includes/constants.php");
    
    $id = $_GET["loc_id"];

    $by_location = unserialize(TESTS_BY_LOC);

    $test_types  = unserialize(TEST_TYPES);

    $return      = "<option vlaue=''>--</option>";

    foreach($by_location[$id] AS $key){
        $return .= "<option value='$key'>".$test_types[$key]."</option>";
    }

    echo $return;
?>