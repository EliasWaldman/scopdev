<?php

/* Template Name: Support */

get_header();

?>

    <main class="main support">
        <section class="support__contact contact">
            <div class="contact__container container">
                <div class="contact__body">
                    <div class="tagline"><?php the_title()?></div>
                    <h2 class="contact__title title-h2 underline underline_green"><?php echo get_field('tag')?></h2>
                    <div class="contact__row">
                        <div class="contact__form form-contact">
                            <?php echo do_shortcode('[contact-form-7 id="6d80c20" title="Support"]') ?>
                        </div>
                        <div class="contact__items">
                            <?php if (have_rows('items')): ?>
                                <?php while (have_rows('items')):
                                    the_row();
                                    $type = get_sub_field('type');
                                    $text = get_sub_field('text');
                                    $button = get_sub_field('button');
                                    ?>
                                    <div class="contact__column">
                                        <div class="contact__item contact__item_<?php echo $type ?> item-contact">
                                            <div class="item-contact__icon">
                                                <img src="<?php echo themeImage('icons/' . $type.'.svg') ?>" alt="email">
                                            </div>
                                            <div class="item-contact__title"><?php echo ucfirst($type) ?></div>
                                            <div class="item-contact__content">
                                                <div class="item-contact__text"><?php echo $text ?></div>
                                                <a href="<?php echo $button['url'] ?>"
                                                   class="item-contact__<?php if($type === 'office' || $type === 'manual'):?>btn<?php else:?>link<?php endif;?>"><?php echo $button['title'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
