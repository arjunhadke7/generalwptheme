jQuery(document).ready(function () {
    jQuery('.main-navigation ul').addClass('menu-hidden');
    jQuery('#menu-btn').click(function (e) { 
        e.preventDefault();
        console.log('btn clicked')
        jQuery('.main-navigation ul').toggleClass('menu-hidden');
        jQuery('.main-navigation ul').toggleClass('menu-block');
    });
});