$(function () {
 $("div.tabs ul a:first").addClass('selected');

 $('div.tabs ul a').click(function () {
  var oldDiv = $("div.tabs > div.active");
  var newDiv = $("div.tabs > div" + $(this).attr('href'));
     if ( oldDiv.attr('id') != newDiv.attr('id') ) {
     oldDiv.animate({'left': '500px', 'opacity' : 0}, 500, function() {
        oldDiv.removeClass('active');
        newDiv.animate({'left': '0px', 'opacity' : 1}, 500, function() {
        newDiv.addClass('active'); 
        oldDiv.css({'left':'500px'});
        }); 
     }); }

    
  $('div.tabs ul a').removeClass('selected');
  $(this).addClass('selected');
  return false;
 });
});