<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Oxer</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <?php
    wp_head();
    ?>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header header_section">
      <div class="container">
        <div class="header_nav">
          <!-- <a href=""><?php echo get_bloginfo('name') ?></a> -->
          <a class="navbar-brand brand_desktop" href="index.html">
            <?php
              if(('the_custom_logo')){
                // the_custom_logo();
                $custom_logo_id =  get_theme_mod('custom_logo');
                $logo =  wp_get_attachment_image_src($custom_logo_id, 'full');
                // print_r($logo);

              }
            ?>
             <img src="<?php echo $logo[0] ?>" alt="" />
          </a>
          <div class="main_nav">
            <div class="top_nav">
              <ul class=" ">
                <li class="">
                  <a class="" href="">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/telephone.png" alt="" />
                    <span> +01 1234567890</span>
                  </a>
                </li>
                <li class="">
                  <a class="" href="">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/mail.png" alt="" />
                    <span>demo@gmail.com</span>
                  </a>
                </li>
                <li class="">
                  <a class="" href="">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/location.png" alt="" />
                    <span>Den mark Loram ipusum</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="bottom_nav">
              <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand brand_mobile" href="index.html">
                  <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">

                    <?php 
                      wp_nav_menu (
                        array (
                          'menu' => 'primary',
                          'container' => '',
                          'theme_location' => 'primary',
                          'items_wrap' => '<ul id="nav-menu" class="navbar-nav">%3$s</ul>'
                        )

                        
                      );
                    ?>

                    <form class="form-inline">
                      <button class="btn ml-3 ml-lg-5 nav_search-btn" type="submit"></button>
                    </form>










                    
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->