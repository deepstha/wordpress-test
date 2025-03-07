<div class="container">
    <header>
        <div class="meta mb-3 check">
            <span class="date">Published on <?php echo the_date();?></span>
            <?php the_tags('<span class="tag"> <i class="fa fa-tag mr-1"></i>', '</span><span class="tag 2"> <i class="fa fa-tag mr-1"></i>', '</span>') ?>
            <span class="comment">
                <a href="#comments">

                    <i class="fa fa-comment mr-1"></i><?php comments_number();?>
                </a>
            </span>
        </div>.
    </header>

    <?php
    the_content();
    ?>
    <?php
    comments_template();
    ?>
</div>