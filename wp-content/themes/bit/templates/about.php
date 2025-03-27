<?php

/* Template Name: About */

get_header();

?>

    <main class="main about">
        <?php if (get_field('hero-show')): ?>
            <section class="about__fullscreen fullscreen-about">
                <div class="fullscreen-home__content">
                    <div class="fullscreen-home__container container">
                        <div class="fullscreen-home__body">
                            <h1 class="fullscreen-home__title title-h1">
                                <?php echo get_field('title'); ?>
                            </h1>
                            <div class="fullscreen-home__subtitle subtitle">
                                <?php echo get_field('text'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('about-show')): ?>
            <section class="about__about-block about-block">
                <div class="about-block__container container">
                    <div class="about-block__body">
                        <div class="about-block__row">
                            <div class="about-block__column">
                                <div class="about-block__content">
                                    <div class="tagline"><?php echo get_field('about-tag'); ?></div>
                                    <h2 class="about-block__title title-h2">
                                        <?php echo get_field('about-title'); ?>
                                    </h2>
                                    <div class="about-block__subtitle subtitle">
                                        <p>
                                            <?php echo get_field('about-text'); ?>
                                        </p>
                                    </div>
                                    <div class="about-block__achievement achievement-about-block">
                                        <?php if (have_rows('about-numbers')): ?>
                                            <?php while (have_rows('about-numbers')):
                                                the_row();
                                                $number = get_sub_field('number');
                                                $text = get_sub_field('text');
                                                ?>
                                                <div class="achievement-about-block__item">
                                                    <div class="achievement-about-block__label"><?php echo $number; ?></div>
                                                    <div class="achievement-about-block__text"><?php echo $text; ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="about-block__column">
                                <div class="about-block__image">
                                    <img src="<?php echo get_field('about-image')['url']; ?>" alt="about-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('review-show')): ?>
            <section class="about__reviews reviews">
                <div class="reviews__container container">
                    <div class="reviews__body">
                        <div class="tagline"><?php echo get_field('review-tag'); ?></div>
                        <h2 class="reviews__title title-h2"><?php echo get_field('reviews-title'); ?></h2>
                        <div class="reviews__row">
                            <div class="reviews__column reviews__column_main">
                                <div class="reviews__items">
                                    <?php if (have_rows('reviews')): ?>
                                        <?php while (have_rows('reviews')):
                                            the_row();
                                            $name = get_sub_field('name');
                                            $text = get_sub_field('text');
                                            $image = get_sub_field('image');
                                            ?>
                                            <div class="reviews__item item-reviews">
                                                <div class="item-reviews__image">
                                                    <img src="<?php echo $image['url']; ?>" alt="starbucks">
                                                </div>
                                                <div class="item-reviews__body">
                                                    <div class="item-reviews__label tagline"><?php echo $name; ?></div>
                                                    <div class="item-reviews__text">
                                                        <?php echo $text; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="reviews__column reviews__column_content">
                                <div class="reviews__content content-reviews">
                                    <div class="content-reviews__title title-h2">
                                        <?php echo get_field('main-review-title'); ?>
                                    </div>
                                    <div class="content-reviews__text subtitle">
                                        <p>
                                            <?php echo get_field('main-review-text'); ?>
                                        </p>
                                    </div>
                                    <div class="content-reviews__author"><?php echo get_field('main-review-name'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('values-show')): ?>
            <section class="about__values values">
                <div class="values__container container">
                    <div class="values__body">
                        <div class="values__top">
                            <h2 class="values__title title-h2 underline underline_green"><?php echo get_field('values-title'); ?></h2>
                            <div class="values__subtitle subtitle"><?php echo get_field('values-subtitle'); ?></div>
                        </div>
                        <div class="values__items">
                            <?php if (have_rows('values-items')): $i = 0; ?>
                                <?php while (have_rows('values-items')):
                                    the_row();
                                    $tag = get_sub_field('tag');
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $color = get_sub_field('color');
                                    ?>
                                    <div class="values__item values__item_<?php echo $color; ?> item-values <?php if ($i === 0): ?>active<?php endif; ?>">
                                        <div class="tagline"><?php echo $tag; ?></div>
                                        <h4 class="item-values__title title-h4"><?php echo $title; ?></h4>
                                        <div class="item-values__text">
                                            <p>
                                                <?php echo $text; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php $i++;endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('team-show')): ?>
            <section class="about__team team">
                <div class="team__container container">
                    <div class="team__body">
                        <h2 class="team__title title-h2 underline underline_orange">
                            <?php echo get_field('team-title'); ?>
                        </h2>
                        <div class="team__subtitle subtitle">
                            <p>
                                <?php echo get_field('team-subtitle'); ?>
                            </p>
                        </div>
                        <?php if (have_rows('team')): ?>
                            <div class="team__row">
                                <?php while (have_rows('team')):
                                    the_row();
                                    $name = get_sub_field('name');
                                    $job = get_sub_field('job');
                                    $text = get_sub_field('text');
                                    $image = get_sub_field('image');
                                    ?>
                                    <div class="team__column">
                                        <div class="team__item item-team">
                                            <div class="item-team__image">
                                                <img src="<?php echo $image['url']; ?>" alt="team-img">
                                            </div>
                                            <div class="item-team__content">
                                                <h6 class="item-team__title title-h6"><?php echo $name; ?></h6>
                                                <div class="item-team__job subtitle"><?php echo $job; ?></div>
                                                <div class="item-team__text">
                                                    <p>
                                                        <?php echo $text; ?>
                                                    </p>
                                                </div>
                                                <div class="item-team__socials socials-item-team">
                                                    <?php if (have_rows('social')): ?>
                                                        <?php while (have_rows('social')):
                                                            the_row();
                                                            $link = get_sub_field('link');
                                                            $image = get_sub_field('image');
                                                            ?>
                                                            <div class="socials-item-team__item">
                                                                <a href="<?php echo $link; ?>"
                                                                   class="socials-item-team__link">
                                                                    <img src="<?php echo $image['url']; ?>"
                                                                         alt="linkedin">
                                                                </a>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('blog-show')): ?>
            <section class="about__blog-block blog-block">
                <div class="blog-block__top top-blog-block">
                    <div class="top-blog-block__container container">
                        <div class="top-blog-block__row">
                            <div class="top-blog-block__content">
                                <div class="tagline"><?php echo get_field('blog-tag'); ?></div>
                                <h2 class="top-blog-block__title title-h2">
                                    <?php echo get_field('blog-title'); ?>
                                </h2>
                            </div>
                            <div class="top-blog-block__navigation navigation-blog-block">
                                <a href="<?php echo get_permalink(13) ?>" class="navigation-blog-block__btn-all btn">View
                                    all</a>
                                <div class="navigation-blog-block__btns">
                                    <a href=""
                                       class="navigation-blog-block__btn navigation-blog-block__btn_prev navigation-btn navigation-btn_prev"></a>
                                    <a href=""
                                       class="navigation-blog-block__btn navigation-blog-block__btn_next navigation-btn navigation-btn_next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $args = array(
                    'posts_per_page' => 6,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                );

                $products = new WP_Query($args);
                if ($products->have_posts()): ?>
                    <div class="blog-block__slider slider-blog-block">
                        <div class="slider-blog-block__container container">
                            <div class="slider-blog-block__swiper swiper">
                                <div class="slider-blog-block__wrapper swiper-wrapper">
                                    <?php while ($products->have_posts()) :$products->the_post(); ?>
                                        <div class="slider-blog-block__slide swiper-slide">
                                            <div class="slider-blog-block__item item-blog">
                                                <div class="item-blog__content">
                                                    <div class="item-blog__top">
                                                        <div class="item-blog__category"><?php echo get_the_category()[0]->name ?></div>
                                                        <a href="<?php echo get_permalink() ?>"
                                                           class="item-blog__title-link">
                                                            <h5 class="item-blog__title title-h5">
                                                                <?php the_title() ?>
                                                            </h5>
                                                        </a>
                                                        <div class="item-blog__text">
                                                            <?php echo wp_trim_words(get_the_content(), 20); ?>
                                                        </div>
                                                    </div>
                                                    <div class="item-blog__image">
                                                        <a href="<?php echo get_permalink() ?>">
                                                            <?php the_post_thumbnail('large', array('class' => 'blog-img')); ?>
                                                        </a>
                                                    </div>
                                                    <a href="<?php echo get_permalink() ?>"
                                                       class="item-blog__btn-more btn-more">
                                                        <span><?php echo get_field('read_more', 'options') ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;
                wp_reset_postdata();
                ?>
            </section>
        <?php endif; ?>
        <?php if (get_field('faq-show')): ?>
            <section class="about__question question">
                <div class="question__container container">
                    <div class="question__row">
                        <div class="question__content">
                            <h2 class="question__title title-h2">
                                <?php echo get_field('faq-title', 2); ?>
                            </h2>
                            <div class="question__subtitle subtitle">
                                <p>
                                    <?php echo get_field('faq-subtitle', 2); ?>
                                </p>
                            </div>
                            <a href="<?php echo get_field('faq-button', 2)['url']; ?>"
                               class="question__btn btn btn_small btn_yellow"><?php echo get_field('faq-button', 2)['title']; ?></a>
                        </div>
                        <div class="question__items">
                            <?php if (have_rows('faq-items', 2)): ?>
                                <?php while (have_rows('faq-items', 2)):
                                    the_row();
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    ?>
                                    <div class="question__item item-question">
                                        <div class="item-question__top top-item-question">
                                            <div class="top-item-question__title">
                                                <?php echo $title ?>
                                            </div>
                                            <button class="top-item-question__btn"></button>
                                        </div>
                                        <div class="item-question__body">
                                            <div class="item-question__text">
                                                <?php echo $text ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('contact-show')): ?>
            <section class="about__contact contact home__contact">
                <div class="contact__container container">
                    <div class="contact__body">
                        <div class="tagline"><?php echo get_field('contact-tag', 2); ?></div>
                        <h2 class="contact__title title-h2 underline underline_green"><?php echo get_field('contact-title', 2); ?></h2>
                        <div class="contact__row">
                            <div class="contact__form form-contact">
                                <?php echo do_shortcode('[contact-form-7 id="71b5250" title="Contact form"]') ?>
                            </div>
                            <div class="contact__items">
                                <?php if (have_rows('contacts', 2)): ?>
                                    <?php while (have_rows('contacts', 2)):
                                        the_row();
                                        $type = get_sub_field('type');
                                        $text = get_sub_field('text');
                                        $button = get_sub_field('button');
                                        ?>
                                        <div class="contact__column">
                                            <div class="contact__item contact__item_<?php echo $type ?> item-contact">
                                                <div class="item-contact__icon">
                                                    <img src="<?php echo themeImage('icons/' . $type . '.svg') ?>"
                                                         alt="email">
                                                </div>
                                                <div class="item-contact__title"><?php echo ucfirst($type) ?></div>
                                                <div class="item-contact__content">
                                                    <div class="item-contact__text"><?php echo $text ?></div>
                                                    <a href="<?php echo $button['url'] ?>"
                                                       class="item-contact__<?php if ($type === 'office' || $type === 'manual'): ?>btn<?php else: ?>link<?php endif; ?>"><?php echo $button['title'] ?></a>
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
        <?php endif; ?>
    </main>

<?php
get_footer();
