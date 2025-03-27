<?php

/* Template Name: Blog */

get_header();
?>

<main class="main blog">
    <section class="blog__main main-blog">
        <div class="main-blog__container container">
            <div class="main-blog__body">
                <div class="main-blog__top">
                    <h3 class="main-blog__title title-h3 underline underline_yellow"><?php the_title() ?></h3>
                    <div class="main-blog__nav-filter nav-filter">
                        <div class="nav-filter__items">
                            <a href="<?php echo get_permalink()?>" class="nav-filter__item <?php if(!isset($_GET['category'])):?>active<?php endif;?>" data-filter="all">View all</a>
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) { ?>
                                <a href="?category=<?php echo $category->term_id?>" class="nav-filter__item <?php if(isset($_GET['category']) && $_GET['category'] == $category->term_id ):?>active<?php endif;?>"><?php echo $category->name ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="main-blog__items">
                    <?php
                    if (get_query_var('paged')) {
                        $current_page = get_query_var('paged');
                    } elseif (get_query_var('page')) {
                        $current_page = get_query_var('page');
                    } else {
                        $current_page = 1;
                    }

                    $category = isset($_GET['category']) ? $_GET['category'] : '';
                    $args = array(
                        'posts_per_page' => 9,
                        'paged' => $current_page,
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                    );

                    if (!empty($category)) {
                        $args['cat'] = $category;
                    }

                    $news = new WP_Query($args);
                    if ($news->have_posts()): ?>
                        <?php
                        while ($news->have_posts()) :
                            $news->the_post(); ?>
                            <div class="main-blog__column">
                                <div class="main-blog__item item-blog">
                                    <div class="item-blog__content">
                                        <div class="item-blog__top">
                                            <div class="item-blog__category"><?php echo get_the_category()[0]->name ?></div>
                                            <a href="<?php echo get_permalink() ?>" class="item-blog__title-link">
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
                                        <a href="<?php echo get_permalink() ?>" class="item-blog__btn-more btn-more">
                                            <span><?php echo get_field('read_more', 'options') ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="main-blog__pagination pagination-main-blog">
                    <?php
                    echo paginate_links(
                        array(
                            'base' => @add_query_arg('paged', '%#%'),
                            'format' => '',
                            'prev_next' => false,
                            'total' => $news->max_num_pages,
                            'current' => $current_page,
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="blog__subscribe subscribe">
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

<?php
get_footer(); ?>
