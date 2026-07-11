<footer class="l-footer" role="content-info">
	<div class="container">
		<?php if ( has_nav_menu( 'footer-nav' ) ) : ?>
		<nav class="p-footer-nav" role="navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer-nav',
				'container'      => false,
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'          => 1,
			) );
			?>
		</nav>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer' ) ) : ?>
		<div class="p-footer-widgets">
			<div class="row">
				<?php dynamic_sidebar( 'footer' ); ?>
			</div>
		</div>
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social-header-nav' ) ) : ?>
		<div class="hidden-xs hidden-sm">
			<nav class="p-social-nav" role="navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'social-header-nav',
					'container'      => false,
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'          => 1,
				) );
				?>
			</nav>
		</div>
		<?php endif; ?>

		<div class="c-copyright">
			<p>@ 2026 Y S.		
			</p>
		</div>
	</div>
</footer>

<div class="c-pagetop" aria-hidden="true">
	<a href="#container"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>

<!-- /#container --></div>
 
<?php if (is_page('portfolio')) : ?>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script>

(function() {
    // 既存のライブラリや環境に依存せず、クリックイベントを拾う
    document.addEventListener('click', function(e) {
        if (e.target.closest('.modal-link')) {
            e.preventDefault();
            
            // モーダルを表示
            var modal = document.getElementById('myModal');
            if (modal) {
                modal.classList.add('is-open');

                // Slickが存在するか確認して実行（jQueryも独自に保証）
                setTimeout(function() {
                    if (window.jQuery && jQuery.fn.slick) {
                        var $ = jQuery;
                        var $sliderFor = $('.slider-for');
                        var $sliderNav = $('.slider-nav');

                        if (!$sliderFor.hasClass('slick-initialized')) {
                            $sliderFor.slick({
                                slidesToShow: 1, slidesToScroll: 1, arrows: false, fade: true, asNavFor: '.slider-nav'
                            });
                            $sliderNav.slick({
                                slidesToShow: 3, slidesToScroll: 1, asNavFor: '.slider-for', dots: true, centerMode: true, focusOnSelect: true
                            });
                        } else {
                            $sliderFor.slick('setPosition');
                            $sliderNav.slick('setPosition');
                        }
                    }
                }, 300);
            }
        }
    });
})();

jQuery(function($) {
    $('.modal-open-btn').on('click', function(e) {
        e.preventDefault();
        // クリックしたボタンの親(item)の次の要素(modal)を指定
        var $modal = $(this).closest('.item').next('.modal');
        $modal.addClass('is-open');

        var $sliderFor = $modal.find('.slider-for');
        var $sliderNav = $modal.find('.slider-nav');

        if (!$sliderFor.hasClass('slick-initialized')) {
            $sliderFor.slick({ slidesToShow: 1, arrows: false, fade: true, asNavFor: $sliderNav });
            $sliderNav.slick({ slidesToShow: 3, asNavFor: $sliderFor, centerMode: true, focusOnSelect: true });
        } else {
            $sliderFor.slick('setPosition');
            $sliderNav.slick('setPosition');
        }
    });

    $('.close').on('click', function() {
        $(this).closest('.modal').removeClass('is-open');
    });
});

</script>
<?php endif; ?>
<?php wp_footer(); ?>

<?php if (is_page('portfolio')) : ?>
<script>
    jQuery(function($) {
    $('.modal-open-btn').on('click', function(e) {
        e.preventDefault();
        var $modal = $(this).closest('.item').next('.modal');
        $modal.addClass('is-open');
        var $sliderFor = $modal.find('.slider-for');
        var $sliderNav = $modal.find('.slider-nav');
        if (!$sliderFor.hasClass('slick-initialized')) {
            $sliderFor.slick({ slidesToShow: 1, arrows: false, fade: true, asNavFor: $sliderNav });
            $sliderNav.slick({ slidesToShow: 3, asNavFor: $sliderFor, centerMode: true, focusOnSelect: true });
        } else {
            $sliderFor.slick('setPosition');
            $sliderNav.slick('setPosition');
        }
    });
    $('.close').on('click', function() {
        $(this).closest('.modal').removeClass('is-open');
    });
});
jQuery(document).ready(function($) {
    // リンクがクリックされたら実行
   /* $('.modal-link').on('click', function(e) {
        e.preventDefault(); // リンクの本来の動作を停止
        
        // モーダルを表示
        $('#myModal').addClass('is-open');*/

        // スライダーの初期化
        setTimeout(function() {
            var $sliderFor = $('.slider-for');
            var $sliderNav = $('.slider-nav');

            if (!$sliderFor.hasClass('slick-initialized')) {
                $sliderFor.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: '.slider-nav'
                });
                $sliderNav.slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: '.slider-for',
                    dots: true,
                    centerMode: true,
                    focusOnSelect: true
                });
            } else {
                $sliderFor.slick('setPosition');
                $sliderNav.slick('setPosition');
            }
        }, 300);
    });

</script>
<?php endif; ?>
</body>
</html>
