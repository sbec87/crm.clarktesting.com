<?php

# CRM User Class
# Version 1.0.0 - May 2015
# Written by: Shawn Becquet - sbecquet@clarktesting.com

# Purpose:
# This class is to help make it easier to check
# if a user is logged into the system.  This will also
# allow us to set some required variables for permission reasons

include_once("includes/constants.php");
include_once(AUTH_CLASS);
include_once(FUNCTIONS);

class User{

  private $ComToken;

  public function __construct(){ // Construct function to create the Auth class
    // Start session to save some basic variables
    session_start();

    // Create Auth Class to be used
    $this->auth_login = new STARAuth();
    $this->auth_login->setAppID(APP_ID);
    $this->auth_login->setPublicKey(PUBLIC_KEY_PATH);
    $response = $this->auth_login->getNewComToken();

    if($response["status_code"] == 200){ //Good ComToken
      $this->ComToken = $response["ComToken"];
    }
    else{
      pre_disp($response);
    }
  }


  public function loginUser(){  // Function to log the user in
    // Destroy Session just in case
    session_destroy();

    // Set callback URL
    $this->auth_login->setCallbackURL(CALLBACK_URL);

    // Attempt to log in
    $response = $this->auth_login->authorizeUser($this->ComToken);
  }

  public function logoutUser(){ // Function to log the user out
    // destroy session
    session_destroy();

    // Set up call back page
    $this->auth_login->setCallbackURL(LOGIN_PAGE);

    // Logout
    $this->auth_login->logout($this->ComToken);
  }


  public function setupPermissions($AuthToken){ // Function to setup user permissions
    
    // Set the AuthToken 
    $this->auth_login->setAuthToken($AuthToken);

    // Get the user details
    $user_details = $this->auth_login->getUserDetails($this->ComToken);

    // Format return value for use
    $user_details = json_decode($user_details["user_details"]);
    $user_details = get_object_vars($user_details);
    
    // Save as SESSION variables
    $_SESSION["auth_user_id"] = $user_details["user_id"];
    $_SESSION["user_name"]    = $user_details["username"];
    $_SESSION["nickname"]     = $user_details["nickname"];

    // Redirect to landing page
    header("Location: ".LANDING_PAGE);
    
  }

  public function userLoggedIn(){  // Function to check to see if the user is still logged in
    // Get AuthToken for Auth call
    $AuthToken = $this->auth_login->getStoredAuthToken();

    // Actually make the call to check if user is logged in
    $login_check = $this->auth_login->authorizeUserByToken(array("AuthToken"=>$AuthToken,"ComToken"=>$this->ComToken));

    // User is not logged in.  Redirect to log in screen  
    if($login_check["status_code"] != "200"){  
      header("Location: ".LOGIN_PAGE);
    }
  }

  public function __destruct(){

  }
}

?>