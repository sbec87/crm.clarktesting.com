<!-- Start of Title Bar -->
<div class="title_bar" id="">
    <span class="user_welcome" id="">Welcome, <?=$_SESSION["nickname"]?></span>
    <span class="title_bar_span" id=""></span>
    <span class="alerts" id="alerts"><a href="test.php">alerts (0)</a></span>
    <span class="bug_report" id=""><a href="test.php">report a bug <i class="fa fa-bug"></i></a></span>
    <span class="logout" id=""><a href="logout.php">logout <i class="fa fa-sign-out"></i></a></span>
</div>
<div class="logo_bar" id="">
    <div class="logo_left" id="">
        <img src="images/logo_star.jpg" class="star_logo" id="">
    </div>
    <div class="logo_right" id="">
        <span class="page_title" id="page_title"></span>
        <form name="search_form" action="#" method="post" class="search_form">
            <span class="search_input_span" id=""><input name="search_input" type="text" value="" placeholder="Search" class="search_input input-xs"></span>
            <span class="search_button_span" id=""><button name="search_button" type="submit" class="search_button btn btn-xs btn-primary" id="">Search</button></span>
        </form>
    </div>
</div>
<!-- End of Titla Bar -->
<!-- Start of Menu Options -->
<div class="container_bar" id="container_bar">
    <div class="left_bar" id="left_bar">
        <div class="home_page menu_option" id="home_page">
            HOME
        </div>
        <div class="contacts_page menu_option" id="contacts_page">
            CONTACTS
        </div>
        <div class="leads_page menu_option" id="leads_page">
            LEADS
        </div>
        <div class="rfq_page menu_option" id="rfq_page">
            RFQs
        </div>
        <div class="quoted_page menu_option" id="quoted_page">
            QUOTED
        </div>
        <div class="awarded_page menu_option" id="awarded_page">
            AWARDED
        </div>
        <div class="completed_page menu_option" id="completed_page">
            COMPLETED
        </div>
        <div class="account_page menu_option" id="account_page">
            ACCOUNTING
        </div>
        <div class="calendar_page menu_option" id="calendar_page">
            CALENDAR
        </div>
        <div class="reports_page menu_option" id="reports_page">
            REPORTS
        </div>
        <div class="system_page menu_option" id="reports_page">
            SYSTEM
        </div>
    </div> 
    <!-- End of Menu Options -->
    <!-- Start of main content window -->
    <div class="right_bar" id="right_bar">

    <script> //Scripts to make menu options do something

        // Div Page Actions START
        $(".home_page").click(function() {
            window.location = "<?=LANDING_PAGE?>";
            return false;
        });

        $(".contacts_page").click(function() {
            window.location = "<?=CONTACTS_PAGE?>";
            return false;
        });

        $(".leads_page").click(function() {
            window.location = "<?=LEADS_PAGE?>";
            return false;
        });

        $(".rfq_page").click(function() {
            window.location = "<?=RFQ_PAGE?>";
            return false;
        });

        $(".quoted_page").click(function() {
            window.location = "<?=QUOTED_PAGE?>";
            return false;
        });

        $(".awarded_page").click(function() {
            window.location = "<?=AWARDED_PAGE?>";
            return false;
        });

        $(".completed_page").click(function() {
            window.location = "<?=COMPLETED_PAGE?>";
            return false;
        });

        $(".account_page").click(function() {
            window.open("<?=ACCOUNTING_PAGE?>","Accounting Page","");
            return false;
        });

        $(".calendar_page").click(function() {
            window.location = "<?=CALENDAR_PAGE?>";
            return false;
        });

        $(".reports_page").click(function() {
            window.location = "<?=REPORTS_PAGE?>";
            return false;
        });

        $(".system_page").click(function() {
            window.location = "<?=SYSTEM_PAGE?>";
            return false;
        });
        // Div Page Actions END

        // Div Highlight Options START
        switch(window.location.hash){
            case "#contacts":
                document.getElementById("contacts_page").style.backgroundColor = "<?=MENU_SELECT?>";
                break;

            case "#leads":
                document.getElementById("leads_page").style.backgroundColor = "<?=MENU_SELECT?>";
                 break;

            case "#rfq":
                document.getElementById("rfq_page").style.backgroundColor = "<?=MENU_SELECT?>";
                break;

            case "#quoted":
                document.getElementById("quoted_page").style.backgroundColor = "<?=MENU_SELECT?>";
                break;

            case "#awarded":
                document.getElementById("awarded_page").style.backgroundColor = "<?=MENU_SELECT?>";
                break;

            case "#completed":
                document.getElementById("completed_page").style.backgroundColor = "<?=MENU_SELECT?>";
                break;

            case "#calendar":
                document.getElementById("calendar_page").style.backgroundColor = "<?=MENU_SELECT?>";
                break;

            case "#reports":
                document.getElementById("reports_page").style.backgroundColor = "<?=MENU_SELECT?>";
                break;

            case "#system":
                document.getElementById("system_page").style.backgroundColor = "<?=MENU_SELECT?>";
                break;

            default:
                document.getElementById("home_page").style.backgroundColor = "<?=MENU_SELECT?>";
        }   
    </script>


