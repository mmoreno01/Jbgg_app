
 $(document).ready(function() {
//------- Mobile Nav  js --------//  

 if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
        id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
        'class': '',
        'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fas fa-align-left"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fas fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
        $(this).next().toggleClass('menu-item-active');
        $(this).nextAll('ul').eq(0).slideToggle();
        $(this).toggleClass("fas fa-chevron-up fas fa-chevron-down"); 
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
        $('body').toggleClass('mobile-nav-active');
        $('#mobile-nav-toggle i').toggleClass(' fas fa-times fas fa-align-left');
        $('#mobile-body-overly').toggle();
    });

        $(document).on('click', function(e) {
        var container = $("#mobile-nav, #mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
                $('#mobile-nav-toggle i').toggleClass('fas fa-times fas fa-align-left');
                $('#mobile-body-overly').fadeOut();
            }
        }
    });
} else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
}



    //     $(window).on('load' ,function () {
    //     //$('.k-loading-mask').css('display', 'block !important');
    //     $(".load").show();
    //     setTimeout(function () {
    //     //    test(); 
    //        $('.load').hide();
    //     }, 10000);
    //  });
 
    
});