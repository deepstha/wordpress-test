<?php
get_header();
?>
  <article class="content px-3 py-5 p-md-5">
checking content page
  <?php
    if( have_posts() ){
      while( have_posts() ){
        the_post();
      }
    }
  ?>
  </article>


<?php
// get_footer();
?>