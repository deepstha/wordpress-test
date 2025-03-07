$(document).ready(function(){
    // owl carousel script
    console.log('running');
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 2
          }
        }
      });
    
    
      $(".owl_carousel1").owlCarousel({
        loop: true,
        margin: 25,
        nav: true,
        navText: [],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 2
          }
        }
      });
    
      function myMap() {
        var mapProp = {
          center: new google.maps.LatLng(40.712775, -74.005973),
          zoom: 18,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
      }
})