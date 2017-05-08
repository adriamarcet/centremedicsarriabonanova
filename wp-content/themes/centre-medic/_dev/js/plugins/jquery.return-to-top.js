// Scroll to Top
// from: https://codepen.io/rdallaire/pen/apoyx

jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop() >= 250) {        // If page is scrolled more than 50px
        jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});

jQuery('#return-to-top').click(function() {      // When arrow is clicked

    $('body,html').animate({

        scrollTop : 0                       // Scroll to top of body

    }, 500);
});