<?php

global $post;
/**
 * @var WP_Post $post
 */

get_header();
?>
    <div id="main-content" class="row">

            <?php if (is_front_page()){ ?>
                front page
            <?php } else { ?>
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 pb-4 pt-4 flex-fill"></div>
            <?php } ?>
    </div>
<?php
get_footer();