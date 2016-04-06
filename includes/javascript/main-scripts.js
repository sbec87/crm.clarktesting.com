/////////////////////////////////////////////////////////////
// 
// Main Javascript file
//
// Added to make it easier to use common functions
//
/////////////////////////////////////////////////////////////


function toggler(div_id) {
    $("#" + div_id).toggle(500);
    
    $("#" + div_id + "_arrow").find("i").toggleClass("fa-chevron-up fa-chevron-down");
   // $("i","#" + this + "_arrow").toggleClass("fa-chevron-up fa-chevron-down");
}