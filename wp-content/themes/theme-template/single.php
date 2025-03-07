<?php
get_header();
?>
 <!-- slider section -->
 <section class="position-relative">
 <div class="container-fluid">
  <article class="content px-3 py-5 p-md-5">
  <h1 class="heading"><?php the_title(); ?></h1>
  <?php
    if( have_posts() ){
      while( have_posts() ){
        the_post();
        get_template_part('template-parts/content', 'article');
      }
    }
  ?>
  </article>
  </div>
  </section>


<?php
// get_footer();
?>