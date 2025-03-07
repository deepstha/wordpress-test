    <!-- info section -->
    <div class="info_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 ml-auto">
          <div class="row info_main-row">
            <div class="col-md-6 pr-0">

              <!-- contact section -->

              <section class="contact_section">
                <h2>
                  Request A Call Back
                </h2>
                <form action="">
                  <div>
                    <input type="text" placeholder="Name" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" class="message-box" placeholder="Message" />
                  </div>
                  <div class="d-flex ">
                    <button>
                      SEND
                    </button>
                  </div>
                </form>
                <div class="map_container">
                  <div class="map">
                    <div id="googleMap" style="width:100%;height:300px;"></div>
                  </div>
                </div>
              </section>

              <!-- end contact section -->


              <!-- footer section -->
              <section class=" footer_section ">
                <div class="social_box">
                  <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/facebook.png" alt="">
                  </a>
                  <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/twitter.png" alt="">
                  </a>
                  <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/linkedin.png" alt="">
                  </a>
                  <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/instagram.png" alt="">
                  </a>
                  <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/youtube.png" alt="">
                  </a>
                </div>
                <p>
                  &copy; 2020 All Rights Reserved. Design by
                  <a href="https://html.design/">Free Html Templates</a>
                </p>
              </section>
              <!-- footer section -->

            </div>
            <div class="col-md-6  px-0">
              <div class="img-box">
                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/footer-img.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end info section -->
  <?php
   wp_footer();

   ?>



  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
    }
  </script>



  <script>
    /** google_map js **/

    function myMap() {
      var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
      };
      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
  </script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->


</body>

</html>