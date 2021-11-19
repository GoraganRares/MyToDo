window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 12 || document.documentElement.scrollTop > 12) {
        document.getElementById("navbar-scroll").style.background = "rgba(0, 0, 0, 0.9)";
    } 
    else {
        document.getElementById("navbar-scroll").style.background = "transparent";

    }
}



$(document).ready(function(){

  var hamburger = document.getElementsByClassName("hamburger");
    for (var i = 0; i < hamburger.length; i++) {
        hamburger[i].addEventListener('click', function() {
        this.classList.toggle("is-active");
        }, false);
      }
  (function() {
  var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
                              window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  window.requestAnimationFrame = requestAnimationFrame;
  })();

  $('.hamburger').on('click', () => {
      $('.nav-list .nav').slideToggle();
      $('.nav-list .nav').addClass("show-nav");
  });
  $('.hamburger').click(function(){
      $('nav').toggleClass("background");
  });
  });
});

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function myFunction() {
  document.getElementById("myDropdown-v2").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  
  if (!event.target.matches('.dropbtn-v2')) {
    var dropdowns = document.getElementsByClassName("dropdown-content-v2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

$(document).ready(function(){

  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar-scroll").style.top = "0";
      document.getElementById("navbar-scroll").style.background = "rgba(0, 0, 0, 0.9)";
      document.getElementById("navbar-scroll").style.transform= "translateY(0)";
      document.getElementById("navbar-scroll").style.transition= "all 0.3s ease-in-out";
    }
    else {
      document.getElementById("navbar-scroll").style.top = "-200px";
    }
    prevScrollpos = currentScrollPos;
    if (currentScrollPos === 0) {
      document.getElementById("navbar-scroll").style.backgroundColor = 'transparent';
    } 
  }
});

$(document).ready(function(){
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });