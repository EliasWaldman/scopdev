<?php

/* Template Name: Solution */

get_header();

?>

<!--    <main class="main solution">-->
<!--        <section class="solution__fullscreen fullscreen-solution">-->
<!--            <div class="fullscreen-home__content">-->
<!--                <div class="fullscreen-home__container container">-->
<!--                    <div class="fullscreen-home__body">-->
<!--                        <h1 class="fullscreen-home__title title-h1">-->
<!--                            --><?php //echo get_field('title') ?>
<!--                        </h1>-->
<!--                        <div class="fullscreen-home__subtitle subtitle">-->
<!--                            <p>-->
<!--                                --><?php //echo get_field('subtitle') ?>
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <section class="solution__about-block about-block">-->
<!--            <div class="about-block__container container">-->
<!--                <div class="about-block__body">-->
<!--                    <div class="about-block__row">-->
<!--                        <div class="about-block__column">-->
<!--                            <div class="about-block__content">-->
<!--                                <div class="tagline">--><?php //echo get_field('about-tag') ?><!--</div>-->
<!--                                <h2 class="about-block__title title-h2">-->
<!--                                    --><?php //echo get_field('about-title') ?>
<!--                                </h2>-->
<!--                                <div class="about-block__subtitle subtitle">-->
<!--                                    --><?php //echo get_field('about-text') ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="about-block__column">-->
<!--                            <div class="about-block__image">-->
<!--                                <img src="--><?php //echo get_field('about-image')['url'] ?><!--" alt="about-img">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <section class="solution__important important">-->
<!--            <div class="important__container container">-->
<!--                <div class="important__body">-->
<!--                    <h2 class="important__title title-h2">-->
<!--                        --><?php //echo get_field('important-title') ?>
<!--                    </h2>-->
<!--                    <div class="important__subtitle subtitle">-->
<!--                        <p>-->
<!--                            --><?php //echo get_field('important-text') ?>
<!--                        </p>-->
<!--                    </div>-->
<!--                    <div class="important__items">-->
<!--                        --><?php //if (have_rows('important-items')): ?>
<!--                            --><?php //while (have_rows('important-items')):
//                                the_row();
//                                $tag = get_sub_field('tag');
//                                $title = get_sub_field('title');
//                                $text = get_sub_field('text');
//                                $color = get_sub_field('color');
//                                ?>
<!--                                <div class="important__item values__item_--><?php //echo $color; ?><!-- item-values">-->
<!--                                    <div class="tagline">--><?php //echo $tag; ?><!--</div>-->
<!--                                    <h4 class="item-values__title title-h4">--><?php //echo $title; ?><!--</h4>-->
<!--                                    <div class="item-values__text">-->
<!--                                        <p>-->
<!--                                            --><?php //echo $text; ?>
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //endwhile; ?>
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <section class="solution__demo demo">-->
<!--            <div class="demo__container container">-->
<!--                <div class="demo__body">-->
<!--                    <h2 class="demo__title title-h2">-->
<!--                        --><?php //echo get_field('demo-title', 2); ?>
<!--                    </h2>-->
<!--                    <div class="demo__subtitle subtitle">-->
<!--                        --><?php //echo get_field('demo-text', 2); ?>
<!--                    </div>-->
<!--                    <div class="demo__btns">-->
<!--                        <a href="--><?php //echo get_field('demo-button_1', 2)['url']; ?><!--"-->
<!--                           class="demo__btn btn btn_big btn_dark">--><?php //echo get_field('demo-button_1', 2)['title']; ?><!--</a>-->
<!--                        <a href="--><?php //echo get_field('demo-button_2', 2)['url']; ?><!--"-->
<!--                           class="demo__btn btn btn_big btn_transparent">--><?php //echo get_field('demo-button_2', 2)['title']; ?><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <section class="solution__feature feature">-->
<!--            <div class="feature__container container">-->
<!--                <div class="feature__body">-->
<!--                    <div class="feature__top">-->
<!--                        <h3 class="feature__title title-h3">-->
<!--                            --><?php //echo get_field('feature-title', 2); ?>
<!--                        </h3>-->
<!--                        <div class="feature__subtitle subtitle">-->
<!--                            <p>-->
<!--                                --><?php //echo get_field('feature-subtitle', 2); ?>
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="feature__row">-->
<!--                        --><?php //if (have_rows('feature-numbers', 2)): $i = 0; ?>
<!--                            --><?php //while (have_rows('feature-numbers', 2)):
//                                the_row();
//                                $number = get_sub_field('number');
//                                $text = get_sub_field('text');
//                                ?>
<!--                                <div class="feature__column">-->
<!--                                    <div class="feature__item item-feature">-->
<!--                                        <div class="item-feature__persent item-feature__persent_--><?php //if ($i === 0): ?><!--green--><?php //elseif ($i === 1): ?><!--orange--><?php //else: ?><!--yellow--><?php //endif; ?><!--">--><?php //echo $number; ?><!--</div>-->
<!--                                        <div class="item-feature__text">-->
<!--                                            --><?php //echo $text; ?>
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                --><?php //$i++;endwhile; ?>
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                    <div class="feature__bottom bottom-feature">-->
<!--                        <div class="bottom-feature__text">-->
<!--                            --><?php //echo get_field('feature-bottom-texts', 2)[0]['text']; ?>
<!--                        </div>-->
<!--                        <div class="bottom-feature__icon"></div>-->
<!--                        <div class="bottom-feature__text">-->
<!--                            --><?php //echo get_field('feature-bottom-texts', 2)[1]['text']; ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <section class="solution__features solution__blog-block blog-block">-->
<!--            <div class="blog-block__top top-blog-block">-->
<!--                <div class="top-blog-block__container container">-->
<!--                    <div class="top-blog-block__row">-->
<!--                        <div class="top-blog-block__content">-->
<!--                            <h2 class="top-blog-block__title title-h2 underline underline_orange">-->
<!--                                --><?php //echo get_field('features-title'); ?>
<!--                            </h2>-->
<!--                        </div>-->
<!--                        <div class="top-blog-block__navigation navigation-blog-block">-->
<!--                            <div class="navigation-blog-block__btns">-->
<!--                                <a href=""-->
<!--                                   class="navigation-blog-block__btn navigation-blog-block__btn_prev navigation-btn navigation-btn_prev"></a>-->
<!--                                <a href=""-->
<!--                                   class="navigation-blog-block__btn navigation-blog-block__btn_next navigation-btn navigation-btn_next"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="blog-block__slider slider-blog-block">-->
<!--                <div class="slider-blog-block__container container">-->
<!--                    <div class="slider-blog-block__swiper swiper">-->
<!--                        <div class="slider-blog-block__wrapper swiper-wrapper gallery">-->
<!--                            --><?php //if (have_rows('features-items')): ?>
<!--                                --><?php //while (have_rows('features-items')):
//                                    the_row();
//                                    $tag = get_sub_field('tag');
//                                    $title = get_sub_field('title');
//                                    $text = get_sub_field('text');
//                                    $image = get_sub_field('image');
//                                    ?>
<!--                                    <div class="slider-blog-block__slide swiper-slide">-->
<!--                                        <div class="slider-blog-block__item item-blog">-->
<!--                                            <div class="item-blog__content">-->
<!--                                                <div class="item-blog__top">-->
<!--                                                    <div class="item-blog__category">--><?php //echo $tag; ?><!--</div>-->
<!--                                                    <h5 class="item-blog__title title-h5">-->
<!--                                                        --><?php //echo $title; ?>
<!--                                                    </h5>-->
<!--                                                    <div class="item-blog__text">-->
<!--                                                        --><?php //echo $text; ?>
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="item-blog__image">-->
<!--                                                    <a href="--><?php //echo $image['url']; ?><!--" data-lightbox="roadtrip">-->
<!--                                                        <img src="--><?php //echo $image['url']; ?><!--" alt="blog-img">-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                --><?php //endwhile; ?>
<!--                            --><?php //endif; ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <section class="solution__reviews reviews">-->
<!--            <div class="reviews__container container">-->
<!--                <div class="reviews__body">-->
<!--                    <div class="tagline">--><?php //echo get_field('reviews-tag'); ?><!--</div>-->
<!--                    <h2 class="reviews__title title-h2">--><?php //echo get_field('reviews-title'); ?><!--</h2>-->
<!--                    <div class="reviews__row">-->
<!--                        <div class="reviews__column reviews__column_main">-->
<!--                            <div class="reviews__items">-->
<!--                                --><?php //if (have_rows('reviews')): ?>
<!--                                    --><?php //while (have_rows('reviews')):
//                                        the_row();
//                                        $name = get_sub_field('name');
//                                        $text = get_sub_field('text');
//                                        $image = get_sub_field('image');
//                                        ?>
<!--                                        <div class="reviews__item item-reviews">-->
<!--                                            <div class="item-reviews__image">-->
<!--                                                <img src="--><?php //echo $image['url']; ?><!--" alt="starbucks">-->
<!--                                            </div>-->
<!--                                            <div class="item-reviews__body">-->
<!--                                                <div class="item-reviews__label tagline">--><?php //echo $name; ?><!--</div>-->
<!--                                                <div class="item-reviews__text">-->
<!--                                                    --><?php //echo $text; ?>
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    --><?php //endwhile; ?>
<!--                                --><?php //endif; ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="reviews__column reviews__column_content">-->
<!--                            <div class="reviews__content content-reviews">-->
<!--                                <div class="content-reviews__title title-h2">-->
<!--                                    --><?php //echo get_field('main-review-title'); ?>
<!--                                </div>-->
<!--                                <div class="content-reviews__text subtitle">-->
<!--                                    <p>-->
<!--                                        --><?php //echo get_field('main-review-text'); ?>
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <div class="content-reviews__author"> --><?php //echo get_field('main-review-name'); ?><!--</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <section class="solution__solutions solutions">-->
<!--            <div class="solutions__container container">-->
<!--                <div class="solutions__top">-->
<!--                    <div class="solutions__title-block">-->
<!--                        <div class="tagline">--><?php //echo get_field('solution-tag', 2); ?><!--</div>-->
<!--                        <h2 class="solutions__title title-h2">-->
<!--                            --><?php //echo get_field('solution-title', 2); ?>
<!--                        </h2>-->
<!--                    </div>-->
<!--                    <div class="solutions__subtitle subtitle">-->
<!--                        <p>-->
<!--                            --><?php //echo get_field('solution-subtitle', 2); ?>
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="solutions__body">-->
<!--                    --><?php //if (have_rows('items', 2)): ?>
<!--                        <div class="solutions__items">-->
<!--                            <div class="solutions__column">-->
<!--                                --><?php //$total_items = count(get_field('items', 2));
//                                $i = 0; ?>
<!--                                --><?php //while (have_rows('items', 2)):
//                                    the_row();
//                                    $tag = get_sub_field('tag');
//                                    $title = get_sub_field('title');
//                                    $text = get_sub_field('text');
//                                    $button = get_sub_field('button');
//                                    $color = get_sub_field('color');
//                                    $image = get_sub_field('image');
//                                    $isImage = get_sub_field('is_image');
//                                    ?>
<!--                                    <div class="solutions__item solutions__item_--><?php //echo $color ?><!-- --><?php //if ($isImage): ?><!--solutions__item-img--><?php //endif; ?><!-- item-solutions">-->
<!--                                        <div class="item-solutions__body">-->
<!--                                            <div class="item-solutions__top">-->
<!--                                                <div class="tagline">--><?php //echo $tag; ?><!--</div>-->
<!--                                                <h4 class="item-solutions__title title-h4">-->
<!--                                                    --><?php //echo $title; ?>
<!--                                                </h4>-->
<!--                                            </div>-->
<!--                                            <div class="item-solutions__bottom">-->
<!--                                                <div class="item-solutions__subtitle subtitle">-->
<!--                                                    <p>-->
<!--                                                        --><?php //echo $text; ?>
<!--                                                    </p>-->
<!--                                                </div>-->
<!--                                                <a href="--><?php //echo $button['url']; ?><!--"-->
<!--                                                   class="item-solutions__btn-more btn-more"><span>--><?php //echo $button['title']; ?><!--</span></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        --><?php //if ($isImage): ?>
<!--                                            <div class="item-solutions__image">-->
<!--                                                <img src="--><?php //echo $image['url'] ?><!--" alt="solution">-->
<!--                                            </div>-->
<!--                                        --><?php //endif; ?>
<!--                                    </div>-->
<!--                                    --><?php
//                                    $i++;
//                                    if ($i % 3 == 0 && $i !== $total_items - 1) {
//                                        echo '</div>';
//                                        echo '<div class="solutions__column">';
//                                    }
//                                    ?>
<!--                                --><?php //endwhile; ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    --><?php //endif; ?>
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <section class="solution__question question">-->
<!--            <div class="question__container container">-->
<!--                <div class="question__row">-->
<!--                    <div class="question__content">-->
<!--                        <h2 class="question__title title-h2">-->
<!--                            Frequently asked <span class="underline underline_orange">questionss</span>-->
<!--                        </h2>-->
<!--                        <div class="question__subtitle subtitle">-->
<!--                            <p>-->
<!--                                Frequently asked questions ordered by popularity. Remember that if the visitor has-->
<!--                                not committed to the call to action, they may still have questions (doubts) that can-->
<!--                                be answered.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <a href="" class="question__btn btn btn_small btn_yellow">Contact us</a>-->
<!--                    </div>-->
<!--                    <div class="question__items">-->
<!--                        <div class="question__item item-question">-->
<!--                            <div class="item-question__top top-item-question">-->
<!--                                <div class="top-item-question__title">-->
<!--                                    Where can I find training for personnel on the SCOPD complex?-->
<!--                                </div>-->
<!--                                <button class="top-item-question__btn"></button>-->
<!--                            </div>-->
<!--                            <div class="item-question__body">-->
<!--                                <div class="item-question__text">-->
<!--                                    <p>-->
<!--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit orci-->
<!--                                        eget elit porta maximus. Morbi sed lobortis turpis. Nullam dictum ante vitae-->
<!--                                        est sodales, vitae commodo enim venenatis. Nam non dignissim dui, euismod-->
<!--                                        interdum justo. Ut eget magna id ligula suscipit eleifend id non nunc.-->
<!--                                        Phasellus vestibulum nisi a pharetra laoreet. Vestibulum convallis fermentum-->
<!--                                        metus. Etiam euismod commodo justo, in efficitur orci tempor elementum.-->
<!--                                        Curabitur varius purus ut metus aliquam, at vestibulum ligula molestie.-->
<!--                                        Vestibulum ac mi euismod, aliquet augue ut, hendrerit erat.-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="question__item item-question">-->
<!--                            <div class="item-question__top top-item-question">-->
<!--                                <div class="top-item-question__title">-->
<!--                                    How does SCOPD revolutionize traditional employee monitoring techniques to-->
<!--                                    ensure both security and productivity in the modern workplace?-->
<!--                                </div>-->
<!--                                <button class="top-item-question__btn"></button>-->
<!--                            </div>-->
<!--                            <div class="item-question__body">-->
<!--                                <div class="item-question__text">-->
<!--                                    <p>-->
<!--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit orci-->
<!--                                        eget elit porta maximus. Morbi sed lobortis turpis. Nullam dictum ante vitae-->
<!--                                        est sodales, vitae commodo enim venenatis. Nam non dignissim dui, euismod-->
<!--                                        interdum justo. Ut eget magna id ligula suscipit eleifend id non nunc.-->
<!--                                        Phasellus vestibulum nisi a pharetra laoreet. Vestibulum convallis fermentum-->
<!--                                        metus. Etiam euismod commodo justo, in efficitur orci tempor elementum.-->
<!--                                        Curabitur varius purus ut metus aliquam, at vestibulum ligula molestie.-->
<!--                                        Vestibulum ac mi euismod, aliquet augue ut, hendrerit erat.-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="question__item item-question">-->
<!--                            <div class="item-question__top top-item-question">-->
<!--                                <div class="top-item-question__title">-->
<!--                                    What unique features does SCOPD offer to help businesses effectively manage-->
<!--                                    remote workforces and mitigate insider threats?-->
<!--                                </div>-->
<!--                                <button class="top-item-question__btn"></button>-->
<!--                            </div>-->
<!--                            <div class="item-question__body">-->
<!--                                <div class="item-question__text">-->
<!--                                    <p>-->
<!--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit orci-->
<!--                                        eget elit porta maximus. Morbi sed lobortis turpis. Nullam dictum ante vitae-->
<!--                                        est sodales, vitae commodo enim venenatis. Nam non dignissim dui, euismod-->
<!--                                        interdum justo. Ut eget magna id ligula suscipit eleifend id non nunc.-->
<!--                                        Phasellus vestibulum nisi a pharetra laoreet. Vestibulum convallis fermentum-->
<!--                                        metus. Etiam euismod commodo justo, in efficitur orci tempor elementum.-->
<!--                                        Curabitur varius purus ut metus aliquam, at vestibulum ligula molestie.-->
<!--                                        Vestibulum ac mi euismod, aliquet augue ut, hendrerit erat.-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="question__item item-question">-->
<!--                            <div class="item-question__top top-item-question">-->
<!--                                <div class="top-item-question__title">-->
<!--                                    Why do you need employee monitoring and DLP systems?-->
<!--                                </div>-->
<!--                                <button class="top-item-question__btn"></button>-->
<!--                            </div>-->
<!--                            <div class="item-question__body">-->
<!--                                <div class="item-question__text">-->
<!--                                    <p>-->
<!--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit orci-->
<!--                                        eget elit porta maximus. Morbi sed lobortis turpis. Nullam dictum ante vitae-->
<!--                                        est sodales, vitae commodo enim venenatis. Nam non dignissim dui, euismod-->
<!--                                        interdum justo. Ut eget magna id ligula suscipit eleifend id non nunc.-->
<!--                                        Phasellus vestibulum nisi a pharetra laoreet. Vestibulum convallis fermentum-->
<!--                                        metus. Etiam euismod commodo justo, in efficitur orci tempor elementum.-->
<!--                                        Curabitur varius purus ut metus aliquam, at vestibulum ligula molestie.-->
<!--                                        Vestibulum ac mi euismod, aliquet augue ut, hendrerit erat.-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="question__item item-question">-->
<!--                            <div class="item-question__top top-item-question">-->
<!--                                <div class="top-item-question__title">-->
<!--                                    How the Scopd complex works?-->
<!--                                </div>-->
<!--                                <button class="top-item-question__btn"></button>-->
<!--                            </div>-->
<!--                            <div class="item-question__body">-->
<!--                                <div class="item-question__text">-->
<!--                                    <p>-->
<!--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit orci-->
<!--                                        eget elit porta maximus. Morbi sed lobortis turpis. Nullam dictum ante vitae-->
<!--                                        est sodales, vitae commodo enim venenatis. Nam non dignissim dui, euismod-->
<!--                                        interdum justo. Ut eget magna id ligula suscipit eleifend id non nunc.-->
<!--                                        Phasellus vestibulum nisi a pharetra laoreet. Vestibulum convallis fermentum-->
<!--                                        metus. Etiam euismod commodo justo, in efficitur orci tempor elementum.-->
<!--                                        Curabitur varius purus ut metus aliquam, at vestibulum ligula molestie.-->
<!--                                        Vestibulum ac mi euismod, aliquet augue ut, hendrerit erat.-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--    </main>-->

<?php
get_footer();
