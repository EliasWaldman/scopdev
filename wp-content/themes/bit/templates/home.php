<?php

/* Template Name: Home */

get_header();

?>

    <main class="main home">
        <?php if (get_field('hero-show')): ?>
            <section class="home__fullscreen fullscreen-home">
                <div class="fullscreen-home__content">
                    <div class="fullscreen-home__container container">
                        <div class="fullscreen-home__body">
                            <h1 class="fullscreen-home__title title-h1">
                                <?php echo get_field('title'); ?>
                            </h1>
                            <div class="fullscreen-home__subtitle subtitle">
                                <p>
                                    <?php echo get_field('subtitle'); ?>
                                </p>
                            </div>
                            <div class="fullscreen-home__btns">
                                <a href="<?php echo get_field('button_1')['url']; ?>"
                                   class="fullscreen-home__btn btn btn_small btn_dark popup-opener" data-popup="demo-free"><?php echo get_field('button_1')['title']; ?></a>
                                <a href="<?php echo get_field('button_2')['url']; ?>"
                                   class="fullscreen-home__btn btn btn_small btn_transparent"><?php echo get_field('button_2')['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fullscreen-home__image">
                    <img src="<?php echo get_field('image')['url']; ?>" alt="heroslide">
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('feature-show_')): ?>
            <section class="home__feature feature">
                <div class="feature__container container">
                    <div class="feature__body">
                        <div class="feature__top">
                            <h3 class="feature__title title-h3">
                                <?php echo get_field('feature-title'); ?>
                            </h3>
                            <div class="feature__subtitle subtitle">
                                <p>
                                    <?php echo get_field('feature-subtitle'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="feature__row">
                            <?php if (have_rows('feature-numbers')): $i = 0; ?>
                                <?php while (have_rows('feature-numbers')):
                                    the_row();
                                    $number = get_sub_field('number');
                                    $text = get_sub_field('text');
                                    ?>
                                    <div class="feature__column">
                                        <div class="feature__item item-feature">
                                            <div class="item-feature__persent item-feature__persent_<?php if ($i === 0): ?>green<?php elseif ($i === 1): ?>orange<?php else: ?>yellow<?php endif; ?>"><?php echo $number; ?></div>
                                            <div class="item-feature__text">
                                                <?php echo $text; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++;endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="feature__bottom bottom-feature">
                            <div class="bottom-feature__text">
                                <?php echo get_field('feature-bottom-texts')[0]['text']; ?>
                            </div>
                            <div class="bottom-feature__icon"></div>
                            <div class="bottom-feature__text">
                                <?php echo get_field('feature-bottom-texts')[1]['text']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('solution-show')): ?>
            <section class="home__solutions solutions" id="solutions">
                <div class="solutions__container container">
                    <div class="solutions__top">
                        <div class="solutions__title-block">
                            <div class="tagline"><?php echo get_field('solution-tag'); ?></div>
                            <h2 class="solutions__title title-h2 underline underline_yellow"><?php echo get_field('solution-title'); ?></h2>
                        </div>
                        <div class="solutions__subtitle subtitle">
                            <p>
                                <?php echo get_field('solution-subtitle'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="solutions__body">
                        <div class="solutions__items">
                            <div class="solutions__column">
                                <?php
                                $args = array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'solutions',
                                    'post_status' => 'publish',
                                );

                                $solutions = new WP_Query($args);
                                if ($solutions->have_posts()):
                                    $i = 0;
                                    $total_items = $solutions->post_count; ?>
                                    <?php while ($solutions->have_posts()) :$solutions->the_post(); ?>
                                    <div class="solutions__item solutions__item_<?php echo get_field('main-color') ?> <?php if (get_field('main-image')): ?>solutions__item-img<?php endif; ?> item-solutions">
                                        <div class="item-solutions__body">
                                            <div class="item-solutions__top">
                                                <div class="tagline"><?php echo get_field('main-tag'); ?></div>
                                                <h4 class="item-solutions__title title-h4">
                                                    <?php the_title() ?>
                                                </h4>
                                            </div>
                                            <div class="item-solutions__bottom">
                                                <div class="item-solutions__subtitle subtitle">
                                                    <p>
                                                        <?php echo get_field('small_description'); ?>
                                                    </p>
                                                </div>
                                                <a href="<?php echo get_permalink() ?>"
                                                   class="item-solutions__btn-more btn-more"><span>Learn more</span></a>
                                            </div>
                                        </div>
                                        <?php if (get_field('main-image')): ?>
                                            <div class="item-solutions__image">
                                                <img src="<?php echo get_field('main-image')['url'] ?>" alt="solution">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php
                                    $i++;
                                    if ($i % 3 == 0 && $i !== $total_items - 1) {
                                        echo '</div>';
                                        echo '<div class="solutions__column">';
                                    }
                                    ?>
                                <?php endwhile; ?>
                                <?php endif;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('demo-show')): ?>
            <section class="home__demo demo" id="demo">
                <div class="demo__container container">
                    <div class="demo__body">
                        <h2 class="demo__title title-h2">
                            <?php echo get_field('demo-title'); ?>
                        </h2>
                        <div class="demo__subtitle subtitle">
                            <?php echo get_field('demo-text'); ?>
                        </div>
                        <div class="demo__btns">
                            <a href="<?php echo get_field('demo-button_1')['url']; ?>"
                               class="demo__btn btn btn_big btn_dark popup-opener" data-popup="demo-free"><?php echo get_field('demo-button_1')['title']; ?></a>
                            <a href="<?php echo get_field('demo-button_2')['url']; ?>"
                               class="demo__btn btn btn_big btn_transparent"><?php echo get_field('demo-button_2')['title']; ?></a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('price-show')): ?>
            <section class="home__price price">
                <div class="price__container container">
                    <div class="price__body">
                        <div class="tagline"><?php echo get_field('price-tag'); ?></div>
                        <h2 class="price__title title-h2 underline underline_yellow">
                            <?php echo get_field('price-title'); ?>
                        </h2>
                        <div class="price__subtitle subtitle">
                            <?php echo get_field('price-subtitle'); ?>
                        </div>
                        <div class="price__items">
                            <?php if (have_rows('plans')): ?>
                                <?php while (have_rows('plans')):
                                    the_row();
                                    $name = get_sub_field('name');
                                    $price = get_sub_field('price');
                                    $yearly = get_sub_field('yearly');
                                    $button = get_sub_field('button');
                                    $color = get_sub_field('color');
                                    ?>
                                    <div class="price__item price__item_<?php echo $color ?> item-price">
                                        <div class="item-price__body">
                                            <div class="item-price__label"><?php echo $name; ?></div>
                                            <div class="item-price__month">
                                                <?php echo $price; ?>
                                            </div>
                                            <div class="item-price__year">
                                                <?php echo $yearly; ?>
                                            </div>
                                            <a href="<?php echo $button['url']; ?>"
                                               class="item-price__btn btn popup-opener" data-popup="demo-free"><?php echo $button['title']; ?></a>
                                            <ul class="item-price__list">
                                                <?php if (have_rows('list')): ?>
                                                    <?php while (have_rows('list')):
                                                        the_row();
                                                        $item = get_sub_field('item');
                                                        ?>
                                                        <li class="item-price__list-item"><?php echo $item; ?></li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo get_field('compare_button')['url']; ?>"
                           class="price__btn btn btn_yellow"><?php echo get_field('compare_button')['title']; ?></a>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('industry-show')): ?>
            <section class="home__industry industry">
                <div class="industry__container container">
                    <div class="industry__body">
                        <div class="industry__top">
                            <div class="industry__content">
                                <div class="tagline"><?php echo get_field('industry-tag'); ?></div>
                                <h2 class="industry__title title-h2">
                                    <?php echo get_field('industry-title'); ?>
                                </h2>
                                <div class="industry__subtitle subtitle">
                                    <p>
                                        <?php echo get_field('industry-subtitle'); ?>
                                    </p>
                                </div>
                            </div>
                            <?php if (have_rows('industry-items')): $i = 0; ?>
                                <?php while (have_rows('industry-items')):
                                    the_row();
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $icon = get_sub_field('icon');
                                    $color = get_sub_field('color');
                                    if ($i < 2):
                                        ?>
                                        <div class="industry__item industry__item_<?php echo $icon ?> industry__item_<?php echo $color ?> item-industry">
                                            <div class="item-industry__body">
                                                <h4 class="item-industry__title title-h4"><?php echo $title ?></h4>
                                                <div class="item-industry__subtitle subtitle">
                                                    <p>
                                                        <?php echo $text ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;
                                    $i++;endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="industry__bottom">
                            <?php if (have_rows('industry-items')): $i = 0; ?>
                                <?php while (have_rows('industry-items')):
                                    the_row();
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $icon = get_sub_field('icon');
                                    $color = get_sub_field('color');
                                    if ($i >= 2):
                                        ?>
                                        <div class="industry__item industry__item_<?php echo $icon ?> industry__item_<?php echo $color ?> item-industry">
                                            <div class="item-industry__body">
                                                <h4 class="item-industry__title title-h4"><?php echo $title ?></h4>
                                                <div class="item-industry__subtitle subtitle">
                                                    <p>
                                                        <?php echo $text ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;
                                    $i++;endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('about-show')): ?>
            <section class="home__about-block about-block">
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
                                        <?php echo get_field('about-subtitle'); ?>
                                    </div>
                                    <div class="about-block__achievement achievement-about-block">
                                        <?php if (have_rows('about-items')): ?>
                                            <?php while (have_rows('about-items')):
                                                the_row();
                                                $label = get_sub_field('label');
                                                $text = get_sub_field('text');
                                                ?>
                                                <div class="achievement-about-block__item">
                                                    <div class="achievement-about-block__label"> <?php echo $label ?></div>
                                                    <div class="achievement-about-block__text"> <?php echo $text ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php echo get_field('about-button')['url']; ?>"
                                       class="about-block__btn btn btn_big btn_dark"><?php echo get_field('about-button')['title']; ?></a>
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
        <?php if (get_field('blog-show')): ?>
            <section class="home__blog-block blog-block">
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
            <section class="home__question question">
                <div class="question__container container">
                    <div class="question__row">
                        <div class="question__content">
                            <h2 class="question__title title-h2">
                                <?php echo get_field('faq-title'); ?>
                            </h2>
                            <div class="question__subtitle subtitle">
                                <p>
                                    <?php echo get_field('faq-subtitle'); ?>
                                </p>
                            </div>
                            <a href="<?php echo get_field('faq-button')['url']; ?>"
                               class="question__btn btn btn_small btn_yellow"><?php echo get_field('faq-button')['title']; ?></a>
                        </div>
                        <div class="question__items">
                            <?php if (have_rows('faq-items')): ?>
                                <?php while (have_rows('faq-items')):
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
            <section class="home__contact contact">
                <div class="contact__container container">
                    <div class="contact__body">
                        <div class="tagline"><?php echo get_field('contact-tag'); ?></div>
                        <h2 class="contact__title title-h2 underline underline_green"><?php echo get_field('contact-title'); ?></h2>
                        <div class="contact__row">
                            <div class="contact__form form-contact">
                                <?php echo do_shortcode('[contact-form-7 id="71b5250" title="Contact form"]') ?>
                            </div>
                            <div class="contact__items">
                                <?php if (have_rows('contacts')): ?>
                                    <?php while (have_rows('contacts')):
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
