<?PHP

// Set path where code is going to live
define("BASE_PATH","/Users/klape/www/star.clarktesting.com/crm.clarktesting.com/");

// App Id from the Auth Server
define("APP_ID","542356ab706397a516b30e5e401fa090");



// Determine what environment we are dealing with
if(file_exists(BASE_PATH."includes/DEV")){
    define("ENV","DEV");                                                                            // Enviroment Variable
    define("PUBLIC_KEY_PATH","/Users/klape/.ssh/id_crm_public.key");                                // Public Key for Auth Server
    define("CALLBACK_URL","http://crm.clarktesting.com/crm.clarktesting.com/login-process.php");    // Call Back Page
    define("LOGIN_PAGE","http://crm.clarktesting.com/crm.clarktesting.com/index.php");              // Login Page
    define("LANDING_PAGE","http://crm.clarktesting.com/crm.clarktesting.com/landing.php");          // Landing Page
    define("FUNCTIONS","includes/functions.php");                                                   // Predefined Functions
    define("USER_CLASS","includes/class.User.php");                                                 // User Class Location
    define("AUTH_CLASS","includes/class.STARAuth.php");                                             // Auth Class Location
    define("HEADER","includes/header.php");                                                         // Header Location
    define("FOOTER","includes/footer.php");                                                         // Footer Location
    define("MENU","includes/menu.php");                                                             // Menu Location
    define("CONTACTS_PAGE","company-review.php#contacts");                                          // Contacts Landing Page
    define("LEADS_PAGE","landing.php#leads");                                                       // Leads Landing Page
    define("RFQ_PAGE","landing.php#rfq");                                                           // RFQs Landing Page
    define("QUOTED_PAGE","landing.php#quoted");                                                     // Quoted Landing Page
    define("AWARDED_PAGE","landing.php#awarded");                                                   // Awarded Landing Page
    define("COMPLETED_PAGE","landing.php#completed");                                               // Completed Landing Page
    define("ACCOUNTING_PAGE","http://accounting.clarktesting.com/clark-signin");                    // Accounting Landing Page
    define("CALENDAR_PAGE","landing.php#calendar");                                                 // Calendar Landing Page
    define("REPORTS_PAGE","test.php#reports");                                                      // Reports Landing Page
    define("SYSTEM_PAGE","test.php#system");                                                        // System Landing Page
    define("MENU_SELECT","#53699D");                                                                // Color Code for Selected Menu item
}
elseif(file_exists(BASE_PATH."includes/QA")){
    define("ENV","QA");                                                                             // Environment Variable
}
elseif(file_exists(BASE_PATH."includes/PROD")){
    define("ENV","PROD");                                                                           // Environment Variable
}
else{
    define("ENV","N/A");
    echo "Unable to determine environment.";
    die();
}


define("CONTACT_METHODS",serialize(array(10=>"Email",
                                         20=>"Mobile Phone",
                                         30=>"Office Phone",
                                         40=>"Fax Line",
                                         50=>"Snail Mail",
                                         60=>"In Person",
                                         99=>"Other")));

define("CONTACT_TIMES",serialize(array(900=>"9:00 AM",
                                       930=>"9:30 AM",
                                       1000=>"10:00 AM",
                                       1030=>"10:30 AM",
                                       1100=>"11:00 AM",
                                       1130=>"11:30 AM",
                                       1200=>"12:00 PM",
                                       1230=>"12:30 PM",
                                       1300=>"1:00 PM",
                                       1330=>"1:30 PM",
                                       1400=>"2:00 PM",
                                       1430=>"2:30 PM",
                                       1500=>"3:00 PM",
                                       1530=>"3:30 PM",
                                       1600=>"4:00 PM",
                                       1630=>"4:30 PM",
                                       1700=>"5:00 PM",
                                       1730=>"5:30 PM",
                                       1800=>"6:00 PM",
                                       9999=>"Other")));

define("INDUSTRIES",serialize(array("AG"=>"Agriculture",
                                    "AC"=>"Accounting",
                                    "AD"=>"Advertising",
                                    "AE"=>"Aerospace",
                                    "AU"=>"Automotive",
                                    "BN"=>"Broadcasting",
                                    "BI"=>"Biotechnology",
                                    "C"=>"Chemical",
                                    "CO"=>"Computer",
                                    "CN"=>"Consulting",
                                    "CP"=>"Consumer Products",
                                    "D"=>"Defense",
                                    "ET"=>"Electronics",
                                    "EN"=>"Energy",
                                    "FB"=>"Food & Beverage",
                                    "HC"=>"Health Care",
                                    "M"=>"Manufacturing",
                                    "P"=>"Pharmaceuticals",
                                    "RW"=>"Retail & Wholesale",
                                    "S"=>"Service",
                                    "SW"=>"Software",
                                    "SP"=>"Sports",
                                    "T"=>"Technology",
                                    "TL"=>"Telecommunications",
                                    "TN"=>"Transportation",
                                    "TR"=>"Trucking",
                                    "O"=>"Other")));

define("TEST_TYPES",serialize(array("AH"=>"Analytical Chemistry",
                                    "CC"=>"Coal & Coke",
                                    "CM"=>"Condition Monitoring Services",
                                    "EM"=>"EMC/EMI",
                                    "EG"=>"Environmental Aging/Life Cycle",
                                    "FS"=>"Field Services",
                                    "FL"=>"Fuels & Lubrication",
                                    "HY"=>"Hydraulics & Pneumatics",
                                    "IH"=>"Industrial Hygiene",
                                    "MS"=>"Military Shock & Vibration",
                                    "NT"=>"NACE Testing",
                                    "PC"=>"Particle Characterization",
                                    "PT"=>"Powertrain/Gearbox",
                                    "S"=>"Seismic",
                                    "SV"=>"Shock & Vibration",
                                    "ST"=>"Structural, Fatigue, & Load",
                                    "O"=>"Other")));

define("CLARK_LOCATIONS",serialize(array("D"=>"Dynamic",
                                         "L"=>"Labs",
                                         "M"=>"Michigan",
                                         "S"=>"St. Louis",
                                         "W"=>"West Virginia",
                                         "O"=>"Other")));

define("TESTS_BY_LOC",serialize(array("D"=>array("EM","EG","MS","S","SV","O"),
                                      "L"=>array("AH","CM","FL","IH","NT","PC","O"),
                                      "M"=>array("FS","HY","PT","ST","O"),
                                      "S"=>array("CC","O"),
                                      "W"=>array("CC","O"),
                                      "O"=>array("AH","CC","CM","EM","EG","FS","FL","HY","IH","MS","NT","PC","PT","S","SV","ST","O"))));

define("TASK_TYPES",serialize(array("C"=>"Conference Call",
                                    "E"=>"Email",
                                    "F"=>"Follow Up",
                                    "G"=>"GoToMeeting",
                                    "M"=>"Meeting",
                                    "P"=>"Phone Call"
                                    )));

define("START_YEAR","2012");
define("CURRENT_YEAR",date("Y"));








?>