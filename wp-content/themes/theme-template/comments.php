<div class="comment-wrapper">
    <div class="comments">
        <div class="comment-header">
            <h2 class="comment-reply-title"><?php
                if(!have_comments()){
                   echo "Leave comments";
                }
                else {
                    echo get_comments_number(). " comments";
                }
            ?></h2>
        </div>
        <div class="comments-inner">
            <?php
                wp_list_comments(
                   array(
                    'avatar_size' => 120,
                    'style' => 'div',
                   )
                )
            ?>
        </div>
    </div>
    <hr class="" aria-hidden="true">
    <?php
        if(comments_open()){
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">', 
                    'title_reply_after' => '</h2>', 
                )
            );
        }
    ?>

</div>