$('.Count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

preloader
$(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
    
    });
function preloadeSite(){

    $('.preloader-wrapper').fadeOut();
    $('body').removeClass('preloader-site');

}

window.addEventListener('load', preloadeSite);



    
