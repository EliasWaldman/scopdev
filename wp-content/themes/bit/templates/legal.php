<?php

/* Template Name: Legal */

get_header();

?>

    <main class="main legal">
        <section class="legal__fullscreen fullscreen-legal">
            <div class="fullscreen-home__content">
                <div class="fullscreen-home__container container">
                    <div class="fullscreen-home__body">
                        <h1 class="fullscreen-home__title title-h1">
                            <?php the_title()?>
                        </h1>
                        <div class="fullscreen-home__subtitle subtitle">
                            <p>
                                <?php echo get_field('description')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="legal__content-block content-block">
            <div class="content-block__container container">
                <div class="content-block__body">
                    <?php the_content();?>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
