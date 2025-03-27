<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bit
 */

?>

<footer class="footer">
    <div class="footer__container container">
        <div class="footer__row">
            <a href="<?php echo home_url() ?>" class="footer__logo logo">
                <img src="<?php echo get_field('logo', 'options')['url'] ?>" alt="logo">
            </a>
            <nav class="footer__menu menu">
                <?php wp_nav_menu(['menu_class' => 'menu__list', 'add_li_class' => 'menu__item', 'link_class' => 'menu__link']); ?>
            </nav>
            <div class="footer__socials socials">
                <ul class="socials__items">
                    <?php if (have_rows('social', 'options')): ?>
                        <?php while (have_rows('social', 'options')):
                            the_row();
                            $icon = get_sub_field('icon');
                            $link = get_sub_field('link');
                            ?>
                            <li class="socials__item">
                                <a href="<?php echo $link ?>" class="socials__link">
                                    <img src="<?php echo $icon['url'] ?>" alt="facebook">
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="footer__copyright copyright">
            <div class="copyright__text"><?php echo date('Y') ?>. All right reserved.</div>
            <div class="copyright__links links-copyright">
                <ul class="links-copyright__items">
                    <?php if (have_rows('links', 'options')): ?>
                        <?php while (have_rows('links', 'options')):
                            the_row();
                            $link = get_sub_field('link');
                            ?>
                            <li class="links-copyright__item">
                                <a href="<?php echo $link['url'] ?>"
                                   class="links-copyright__link"><?php echo $link['title'] ?></a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="popup-wrapper" id="demo-free">
            <div class="popup">
                <a href="#" class="popup-close">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="19.5" fill="white" stroke="#F0F0F0"/>
                        <path d="M16.2668 24.6663L15.3335 23.733L19.0668 19.9997L15.3335 16.2663L16.2668 15.333L20.0002 19.0663L23.7335 15.333L24.6668 16.2663L20.9335 19.9997L24.6668 23.733L23.7335 24.6663L20.0002 20.933L16.2668 24.6663Z" fill="black"/>
                    </svg>
                </a>
                <div class="popup-content">
                    <h3><?php echo get_field('demo-title', 'options')?></h3>
                    <p><?php echo get_field('demo-text', 'options')?></p>
                    <?php echo do_shortcode('[contact-form-7 id="3dfcc6f" title="Free demo"]');?>
                </div>
            </div>
        </div>
</div>

<?php wp_footer(); ?>
<script>
	$(document).ready(function() {
	var defaultSocial = 'WhatsApp';
    var $inputField = $('.form-group.form-social input[type="text"]');
    var $hiddenField = $('#your-social-combined');
		
    $('.popup-opener').on('click', function(event){
        event.preventDefault();
        var data = $(this).attr('data-popup');
        var $popupWrapper = $("#" + data);
        $popupWrapper.addClass('visible');
        $('html').css('overflow', 'hidden')
    });

    $('.add-position').on('click', function (e){
        e.preventDefault()
        $(this).hide();
        $(this).next().show()
    })

    $('.form-group .social .selected').on('click', function (e){
        e.preventDefault()
        $(this).parent().toggleClass('active')
    })
		
	$inputField.on('input', function() {
        $hiddenField.val(defaultSocial + ' ' + $inputField.val());
    });

		
    $('.form-group .social ul a').on('click', function (e) {
        e.preventDefault();

        var $inputField = $('.form-group.form-social input[type="text"]');
        var newPlaceholder = $(this).data('placeholder');
        $inputField.attr('placeholder', newPlaceholder);
		defaultSocial = newPlaceholder.split(' ')[0];
 		$hiddenField.val(defaultSocial + ' ' + $inputField.val());
        var $selectedContainer = $('.form-group .social .selected a');
        var $currentSelected = $selectedContainer.find('svg').clone();
        var $newSelected = $(this).find('svg').clone();

        $selectedContainer.empty().append($newSelected);

        $(this).empty().append($currentSelected);
		
        $(this).closest('.social').removeClass('active');
		
    });

    document.querySelectorAll('.popup-wrapper')
        .forEach(function ($wrap) {
            $wrap.addEventListener('click', function(){
                $wrap.classList.remove('visible');
                setTimeout(function() {
                    $wrap.style.visibility = 'hidden';
                }, 500);
                $('html').css('overflow', 'unset')
            });

            let $popups = $wrap.querySelectorAll('.popup');

            $popups.forEach(function ($popup) {
                $popup.addEventListener('click', function(e) {
                    e.stopPropagation();
                });

                let $close = $popup
                    .querySelector('.popup-close');
                if (!$close) {
                    return;
                }
                $('.popup .popup-close').on('click', function(e) {
                    e.preventDefault();
                    $('html').css('overflow', 'unset')
                    var $popupWrapper = $close.closest('.popup-wrapper');
                    $popupWrapper.classList.remove('visible');
                    setTimeout(function() {
                        $popupWrapper.style.visibility = 'hidden';
                    }, 500);
                });
            })
        });
	})
</script>
</body>
</html>
