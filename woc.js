$(".primary").hover(
  function(){
    $(this).html("My name is Arpit Gupta and I'm in love with Software Development").css("font-family", "fantasy");
  },
  function() {
    $(this).html("ABOUT ME..!").css("font-family", "fantasy");
});

/*$('.card').on('click', function() {
  $(this).toggleClass('selected');
});*/


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("#scroll").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
      console.log(hash);
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (2000) specifies the number of milliseconds it takes to scroll to the specified area
      $('html').animate({
        scrollTop: $(hash).offset().top
      }, 2000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

window.scrollTo(0,document.body.scrollHeight);

/*window.scrollTo(0,document.querySelector("").scrollHeight);
*/