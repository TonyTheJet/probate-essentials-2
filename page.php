<?php

global $post;
/**
 * @var WP_Post $post
 */

get_header();

$years_experience = round((time() - strtotime('1991-06-01')) / 60 / 60 / 24 / 365.26);

?>
    <div id="main-content" class="row">

            <?php if (is_front_page()){ ?>
                <div id="home-masthead">
                    <div id="home-masthead-tagline" class="text-center text-white">
                        <h2><?php echo $years_experience; ?> YEARS EXPERIENCE RESOLVING INHERITANCE CONFLICTS</h2>
                    </div>
                    <div id="home-masthead-tagline-bg" class="text-center">
                        <h2><?php echo $years_experience; ?> YEARS EXPERIENCE RESOLVING INHERITANCE CONFLICTS</h2>
                    </div>
                </div>
                <div id="home-content" class="crimson-text col-12">
                    <div class="p-4 row mt-4" id="home-content-border-top">
                        <div class="col-12 text-center">
                            <h2>THE UTAH PROBATE LAW FIRM</h2>
                            <h3>Inheritance Conflicts</h3>
                            <h3>Informal Probate</h3>
                            <h3>Estate and Trust Administration</h3>
                            <p>
                                Call and mention this website and immediately talk to an attorney.
                                <br>
                                801-364-5600
                            </p>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 pb-4 pt-4 flex-fill"></div>
            <?php } ?>
    </div>
<?php
get_footer();