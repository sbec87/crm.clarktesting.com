/* Greybox Redux
 * Required: http://jquery.com/
 * Written by: John Resig
 * Based on code by: 4mir Salihefendic (http://amix.dk)
 * License: LGPL (read more in LGPL.txt)
 */
var GB_ANIMATION = true;
var GB_DONE = false;
var GB_HEIGHT = 400;
var GB_WIDTH = 400;

function GB_show(caption, url, height, width) {
  GB_HEIGHT = height || 400;
  GB_WIDTH = width || 400;
  if(!GB_DONE) {
    $(document.body)
      .append("<div id='GB_overlay'></div><div id='GB_window'><div id='GB_caption'></div>"
        + "<img src='_images/greybox/close.gif' alt='Close window'/></div>");
    $("#GB_window img").click(GB_hide);
    $("#GB_overlay").click(GB_hide);
    $(window).resize(GB_position);
    GB_DONE = true;
  } 
  $('body').css('overflow','hidden');
  $("#GB_frame").remove();
  $("#GB_window").append("<iframe id='GB_frame' src='"+url+"'></iframe>");

  $("#GB_caption").html(caption);
  $("#GB_overlay").show();
  GB_position();
  
  if(GB_ANIMATION)
    $("#GB_window").slideDown("slow");
  else
    $("#GB_window").show();

}

function GB_hide() {
    $("#GB_window,#GB_overlay").hide();
    $('body').css('overflow','visible');
}

function GB_position() {
  var de = document.documentElement;
  var w = self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
  $("#GB_window").css({width:GB_WIDTH+"px",height:GB_HEIGHT+"px",
    left: ((w - GB_WIDTH)/2)+"px" });
  $("#GB_frame").css("height",GB_HEIGHT - 32 +"px");
}

$(function(){
      $('a[rel*="gb_page"]').click(function(){
        if($(this).attr('title')) {
          var t = $(this).attr('title');
        } else {
          var t = 'Star > Clark Testing';
        }
        gb_dimensions_obj = $(this).attr('rel').match(/\[(.*?)\]/);
        gb_dimensions = gb_dimensions_obj[1].split(",");
        if(gb_dimensions.length > 1) {
          GB_show(t,this.href,gb_dimensions[1],gb_dimensions[0]);
        } else {
          GB_show(t,this.href,($(window).height()*0.95),($(window).width()*0.95));
        }
        return false;
      });
});