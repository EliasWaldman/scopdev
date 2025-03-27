<?php

/* Template Name: Pricing */

get_header();

?>

    <main class="main pricing">
        <?php if (get_field('hero-show')): ?>
            <section class="pricing__price price">
                <div class="price__container container">
                    <div class="price__body">
                        <div class="price__top">
                            <h2 class="price__title title-h2">
                                <?php echo get_field('title'); ?>
                            </h2>
                            <div class="price__subtitle subtitle">
                                <?php echo get_field('subtitle'); ?>
                            </div>
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
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('demo-show')): ?>
            <section class="pricing__demo demo">
                <div class="demo__container container">
                    <div class="demo__body">
                        <h2 class="demo__title title-h2">
                            <?php echo get_field('demo-title', 2); ?>
                        </h2>
                        <div class="demo__subtitle subtitle">
                            <?php echo get_field('demo-text', 2); ?>
                        </div>
                        <div class="demo__btns">
                            <a href="<?php echo get_field('demo-button_1', 2)['url']; ?>"
                               class="demo__btn btn btn_big btn_dark popup-opener" data-popup="demo-free"><?php echo get_field('demo-button_1', 2)['title']; ?></a>
                            <a href="<?php echo get_field('demo-button_2', 2)['url']; ?>"
                               class="demo__btn btn btn_big btn_transparent"><?php echo get_field('demo-button_2', 2)['title']; ?></a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('compare-show')): ?>
            <section class="pricing__compare-plan compare-plan" id="compare">
                <div class="compare-plan__container container">
                    <div class="compare-plan__body">
                        <div class="compare-plan__top">
                            <h2 class="compare-plan__title title-h2 underline underline_yellow">
                                <?php echo get_field('compare-title'); ?>
                            </h2>
                            <div class="compare-plan__subtitle subtitle">
                                <p>
                                    <?php echo get_field('compare-subtitle'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="compare-plan__tariffs">
                            <table class="compare-plan__table table-compare-plan">
                                <thead class="table-compare-plan__head">
                                <tr>
                                    <th></th>
                                    <?php if (have_rows('plans')): ?>
                                        <?php while (have_rows('plans')):
                                            the_row();
                                            $name = get_sub_field('name');
                                            $price = get_sub_field('price');
                                            $yearly = get_sub_field('yearly');
                                            $button = get_sub_field('button');
                                            $color = get_sub_field('color');
                                            ?>
                                            <th>
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
                                                           class="item-price__btn btn">Get
                                                            started</a>
                                                    </div>
                                                </div>
                                            </th>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </tr>
                                </thead>
                                <?php if (have_rows('features')): ?>
                                    <?php while (have_rows('features')):
                                        the_row();
                                        $category = get_sub_field('category');
                                        ?>
                                        <tbody class="table-compare-plan__body">
                                        <tr>
                                            <td><?php echo $category; ?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <?php if (have_rows('list')): ?>
                                            <?php while (have_rows('list')):
                                                the_row();
                                                $name = get_sub_field('name');
                                                ?>
                                                <tr>
                                                    <td><?php echo $name; ?></td>
                                                    <?php if (have_rows('values')): ?>
                                                        <?php while (have_rows('values')):
                                                            the_row();
                                                            $value = get_sub_field('value');
                                                            $isValue = get_sub_field('is_value');
                                                            $isCheck = get_sub_field('check');
                                                            ?>
                                                            <td><?php if ($isValue):echo $value; else: if ($isCheck): ?>
                                                                    <span class="check"></span><?php endif;endif; ?>
                                                            </td>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        </tbody>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <tfoot class="table-compare-plan__foot">
                                <tr>
                                    <th></th>
                                    <?php if (have_rows('plans')): ?>
                                        <?php while (have_rows('plans')):
                                            the_row();
                                            $button = get_sub_field('button');
                                            ?>
                                            <th><a href="<?php echo $button['url']; ?>"
                                                   class="table-compare-plan__btn btn btn_dark">Get started</a></th>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_field('faq-show')): ?>
            <section class="pricing__question question">
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
    </main>

<?php
get_footer();
