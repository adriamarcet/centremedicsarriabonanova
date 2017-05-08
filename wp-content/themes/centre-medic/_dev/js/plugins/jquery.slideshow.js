// from http://codepen.io/paulmarique/pen/KiusH

// hidding all slides greater than 0
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next() 
    .fadeIn(2000)
    .end()
    .appendTo('#slideshow');
},  8000);