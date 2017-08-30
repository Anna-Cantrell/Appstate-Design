
$(document).ready(function(){
    $(".clients").click(function(n){n.preventDefault(),href=$(this).attr("href"),$(".alumni-locator").animate({marginLeft:"7.5%"},700,function(){window.location="/clients"})}),$("#right").click(function(n){n.preventDefault(),href=$(this).attr("href"),$(".clients-locator").animate({marginLeft:"89%"},700,function(){window.location="/alumni"})});var n=$(".menu-container");$(".menu-bar").click(function(){parseInt(n.css("marginTop"))<0?n.animate({marginTop:"0px"},300):n.animate({marginTop:"-250px"},300)});
    
    
var clicks = 0;
var ctaButton = document.getElementById('#cta');
var toggle = document.getElementById('toggle');

function menuOpen() {
    $('#form-holder').addClass('form-open');
    $('#form-holder').addClass('form-open');
    $('#menuCircle').addClass('toggle-circle-active');
    $('#line1').addClass('toggle-line1-active');
    $('#line2').addClass('toggle-line2-active');
    $('#line3').addClass('toggle-line3-active');
}

if (window.location.search === "?success=true") {
    menuOpen();
    clicks = 1;
    $('<div class="success-message">You\'re all set! we\'ll see you there.</div>').insertAfter('#actual-form')
}
if (window.location.search === "?success=false") {
    menuOpen();
    clicks = 1;
    $('<div class="fail-message">Sorry! Something went wrong, try again.</div>').insertAfter('#actual-form')
}

$('#cta, #ctaFooter').click(function() {
    menuOpen();
    clicks = 1;
});
$('#toggle').click(function() {
    clicks ++;
    if (clicks % 2 != 0 ) {
        menuOpen();
    } else {
        $('#form-holder').removeClass('form-open');
        $('#menuCircle').removeClass('toggle-circle-active');
        $('#line1').removeClass('toggle-line1-active');
        $('#line2').removeClass('toggle-line2-active');
        $('#line3').removeClass('toggle-line3-active');
    }
    
});
                             
});
