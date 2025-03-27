<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bit
 */
$post_id = get_the_ID();
$author_id = get_post_field('post_author', $post_id);
?>
<main class="main blog-post">
    <div class="blog-post__breadcrumbs breadcrumbs">
        <div class="breadcrumbs__container container">
            <div class="breadcrumbs__body">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a href="<?php echo get_permalink(13) ?>">Blog</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <span><?php echo get_the_category()[0]->name ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="blog-post__main main-blog-post">
        <div class="main-blog-post__container container">
            <div class="main-blog-post__body">
                <h2 class="main-blog-post__title title-h2">
                    <?php the_title() ?>
                </h2>
                <div class="main-blog-post__top">
                    <div class="main-blog-post__info info-main-blog-post">
						<?php if(get_field('avatar', 'user_' . $author_id)):?>
                        <div class="info-main-blog-post__image">
                            <img src="<?php echo get_field('avatar', 'user_' . $author_id)['url'] ?>" alt="starbucks">
                        </div>
						<?php endif; ?>
                        <div class="info-main-blog-post__content">
                            <div class="info-main-blog-post__name"><?php the_author_meta('user_nicename', $author_id); ?></div>
                            <div class="info-main-blog-post__date">
                                <span><?php echo get_the_date('d M Y'); ?></span>
                                <span><?php echo get_field('time_to_read') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="main-blog-post__socials socials">
                        <ul class="socials__items">
                            <li class="socials__item">
                                <a href="#" class="socials__link copy">
                                    <img src="<?php echo themeImage('icons/socials/link.svg') ?>" alt="link">
                                </a>
                            </li>
                            <li class="socials__item">
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink(); ?>"
                                   class="socials__link" target="_blank">
                                    <img src="<?php echo themeImage('icons/socials/linkedin.svg') ?>" alt="linkedin">
                                </a>
                            </li>
                            <li class="socials__item">
                                <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>"
                                   class="socials__link" target="_blank">
                                    <img src="<?php echo themeImage('icons/socials/x.svg') ?>" alt="x">
                                </a>
                            </li>
                            <li class="socials__item">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"
                                   class="socials__link" target="_blank">
                                    <img src="<?php echo themeImage('icons/socials/facebook.svg') ?>" alt="facebook">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
				<?php if(get_field('background')):?>
                <div class="main-blog-post__image-block">
                    <div class="main-blog-post__image ibg">
                        <img src="<?php echo get_field('background')['url'] ?>" alt="blog-post">
                    </div>
                </div>
				<?php endif; ?>
                <div class="main-blog-post__content content-main-blog-post">
                    <?php the_content(); ?>
                    <div class="content-main-blog-post__bottom">
                        <div class="content-main-blog-post__share share-content-main-blog-post">
                            <div class="share-content-main-blog-post__title">Share this post</div>
                            <div class="share-content-main-blog-post__links socials">
                                <ul class="socials__items">
                                    <li class="socials__item">
                                        <a href="#" class="socials__link copy">
                                            <img src="<?php echo themeImage('icons/socials/link.svg') ?>" alt="link">
                                        </a>
                                    </li>
                                    <li class="socials__item">
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink(); ?>"
                                           class="socials__link" target="_blank">
                                            <img src="<?php echo themeImage('icons/socials/linkedin.svg') ?>"
                                                 alt="linkedin">
                                        </a>
                                    </li>
                                    <li class="socials__item">
                                        <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>"
                                           class="socials__link" target="_blank">
                                            <img src="<?php echo themeImage('icons/socials/x.svg') ?>" alt="x">
                                        </a>
                                    </li>
                                    <li class="socials__item">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"
                                           class="socials__link" target="_blank">
                                            <img src="<?php echo themeImage('icons/socials/facebook.svg') ?>"
                                                 alt="facebook">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-main-blog-post__tags tags-content-main-blog-post">
                            <ul class="tags-content-main-blog-post__list">
                                <?php $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $tag) { ?>
                                        <li class="tags-content-main-blog-post__item">
                                            <a class="tags-content-main-blog-post__tag"><?php echo $tag->name ?></a>
                                        </li>
                                    <?php }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-post__blog-block blog-block">
        <div class="blog-block__top top-blog-block">
            <div class="top-blog-block__container container">
                <div class="top-blog-block__row">
                    <div class="top-blog-block__content">
                        <div class="tagline">Blog</div>
                        <h2 class="top-blog-block__title title-h2">
                            <?php echo get_field('latest_title', 'options') ?>
                        </h2>
                    </div>
                    <div class="top-blog-block__navigation navigation-blog-block">
                        <a href="<?php echo get_permalink(13) ?>" class="navigation-blog-block__btn-all btn">View all</a>
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
            'posts_per_page' => 9,
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'post__not_in' => [get_the_ID()]
        );

        $news = new WP_Query($args);
        if ($news->have_posts()): ?>
            <div class="blog-block__slider slider-blog-block">
                <div class="slider-blog-block__container container">
                    <div class="slider-blog-block__swiper swiper">
                        <div class="slider-blog-block__wrapper swiper-wrapper">
                            <?php
                            while ($news->have_posts()) :
                                $news->the_post(); ?>
                                <div class="slider-blog-block__slide swiper-slide">
                                    <div class="slider-blog-block__item item-blog">
                                        <div class="item-blog__content">
                                            <div class="item-blog__top">
                                                <div class="item-blog__category"><?php echo get_the_category()[0]->name ?></div>
                                                <a href="<?php echo get_permalink() ?>" class="item-blog__title-link">
                                                    <h5 class="item-blog__title title-h5">
                                                        <?php the_title() ?>
                                                    </h5>
                                                </a>
                                                <div class="item-blog__text">
                                                    <?php echo wp_trim_words( get_the_content(), 20 );?>
                                                </div>
                                            </div>
											<?php if(has_post_thumbnail()):?>
                                            <div class="item-blog__image">
                                                <a href="<?php echo get_permalink() ?>">
                                                    <?php the_post_thumbnail('large', array('class' => 'blog-img')); ?>
                                                </a>
                                            </div>
											<?php endif; ?>
                                            <a href="<?php echo get_permalink() ?>" class="item-blog__btn-more btn-more">
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
    <section class="blog-post__subscribe subscribe">
        <div class="subscribe__container container">
            <div class="subscribe__body">
                <div class="subscribe__content">
                    <h2 class="subscribe__title title-h2">
                        <?php echo get_field('subscribe-title', 'options') ?>
                    </h2>
                    <div class="subscribe__subtitle subtitle">
                        <p>
                            <?php echo get_field('subscribe-text', 'options') ?>
                        </p>
                    </div>
                    <div class="form-subscribe">
                        <?php echo do_shortcode(get_field('subscribe-form', 'options')); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>