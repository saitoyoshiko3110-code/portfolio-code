<?php //get_header(); ?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php wp_head(); ?>
</head>

<body class="top-page">
	
<div id="nav_toggle" class="sponly">
	<div>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<div id="spnavi" class="sponly">
	<ul>
		<li><a class="spnavi-arrow" href="#top-mainvisual">HOME</a></li>
		<li><a class="spnavi-arrow" href="#about-me">ABOUT ME</a></li>
		<li><a class="spnavi-arrow" href="#works">WORKS</a></li>
		<li><a class="spnavi-arrow" href="#skills">SKILLS</a></li>
		<li><a class="spnavi-arrow" href="#contact">CONTACT</a></li>
	</ul>
</div>

<header id="header" class="header">
	
	<section class="wrapper">
		<section class="header-section-wrapper">
			<section class="header-logo-wrapper">
				<h1><a href="index.html" id="logo-container" class="brand-logo"><img src="https://yuri-lifestyle.com/wp-content/uploads/2019/06/silhouette-of-female-typing-on-a-computer-512-192993.png" alt=""></a></h1>
			</section>
			<section class="header-nav pconly">
				<ul>
					<li><a href="#top-mainvisual">HOME</a></li>
					<li><a href="#about-me">ABOUT ME</a></li>
					<li><a href="#works">WORKS</a></li>
					<li><a href="#skills">SKILLS</a></li>
				</ul>
			</section>
			<section class="header-contact pconly">
				<a href="#contact" class="btn btn--orange btn-contact">CONTACT</a>
			</section>
		</section>
	</section>
</header>

<section class="top-mainvisual" id="top-mainvisual">
	<section class="wrapper">
		<section class="top-mainvisual__text">
			<h2 class=""><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">Welcome to My Portfolio!</span></span></h2>
		</section>
		
	</section>
	<section class="">
			<div class="scroll_down">
				<a href="#about-me"><span></span>Scroll</a>
			</div>
		</section>
</section>
<section class="section-about bk-gray" id="about-me">
	<section class="wrapper">
		<section class="txtcenter mb80">
			<h2 class="sec-title txtcenter">ABOUT ME</h2>
			<h3 class="fadeUpTrigger fadeUp">齋藤 佳子 / Web & Movie Developer</h3>		
			<div class="illust-side fadeUpTrigger fadeUp">
				<p class="lh20 lh16sp">はじめまして！　<span class="marker__yellow">齋藤 佳子</span>と申します。<br>9年間、制作会社で、HTML/CSSコーディングやWordPress構築・改修、動画編集を行ってきました。<br>HTMLは、PC・スマホ双方で最適に表示されるように<br>レスポンシブ実装を行い、WordPress化する際は、<br>場合に応じてACFなどのプラグインを活用した<br>カスタマイズなどに対応いたします。<br><br><span class="marker__yellow">利用する方が使いやすい画面になるよう、<br>見る方にとっても情報が整理されて、<br>わかりやすい画面になるよう、<br>心がけて制作しています。</span></p>
			</div>
		</section>
		
	</section>
</section>
<section class="section-works bk-yelllow" id="works">
	
	<section class="wrapper">
		<h2 class="sec-title txtcenter">WORKS</h2>
		<p class="txtcenter">今まで担当させていただいた一部をご紹介します。</p>
				<div class="flex three-columns-items">
					<div class="item fadeUpTrigger fadeUp">
						<a href="javascript:void(0)" class="modal-link" onclick="document.getElementById('myModal01').classList.add('is-open'); setTimeout(function(){ jQuery('.slider-for, .slider-nav').slick('setPosition'); }, 100);">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__01_01.jpg" alt="">
						</a>
					</div>
					
					
					<div class="item fadeUpTrigger fadeUp">
						<a href="javascript:void(0)" class="modal-link" onclick="document.getElementById('myModal02').classList.add('is-open'); setTimeout(function(){ jQuery('.slider-for, .slider-nav').slick('setPosition'); }, 100);">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__02_01.jpg" alt="">
						</a>
							
					</div>
					<div class="item fadeUpTrigger fadeUp">
						<a href="javascript:void(0)" class="modal-link" onclick="document.getElementById('myModal03').classList.add('is-open'); setTimeout(function(){ jQuery('.slider-for, .slider-nav').slick('setPosition'); }, 100);">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__03_01.jpg" alt="">
						</a>
					</div>
					<div class="item fadeUpTrigger fadeUp">
						<a href="javascript:void(0)" class="modal-link" onclick="document.getElementById('myModal05').classList.add('is-open'); setTimeout(function(){ jQuery('.slider-for, .slider-nav').slick('setPosition'); }, 100);">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__05_01.jpg" alt="">
						</a>
					</div>
					<div class="item fadeUpTrigger fadeUp">
						<a href="javascript:void(0)" class="modal-link" onclick="document.getElementById('myModal04').classList.add('is-open'); setTimeout(function(){ jQuery('.slider-for, .slider-nav').slick('setPosition'); }, 100);">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__04_01.jpg" alt="">
						</a>
					</div>
					<div class="item fadeUpTrigger fadeUp">
						<a href="javascript:void(0)" class="modal-link" onclick="document.getElementById('myModal07').classList.add('is-open'); setTimeout(function(){ jQuery('.slider-for, .slider-nav').slick('setPosition'); }, 100);">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__07_01.jpg" alt="">
						</a>
					</div>
					
				</div>
				<div id="myModal01" class="modal">
					<div class="modal-content">
						<span class="close" onclick="document.getElementById('myModal01').classList.remove('is-open')">&times;</span>
						
						<div class="modal-body">
							<div class="modal-text">
								<h2>K法律事務所様</h2>
								<p>WEBサイトリニューアルの際に、新デザインに対応するようHTML/CSSコーディングを行いWordPressオリジナルテーマで構築しました。<br>「取扱事件・費用」「弁護士コラム」などをカスタム投稿タイプ及びACFで設定し、サイトを管理するお客様が自由に記事を追加できる設計としました。</p>
								<p><span class="txtbold">担当：</span>HTML/CSSコーディング・WordPress構築・本番環境設定</p>
								<p><span class="txtbold">規模：</span>34ページ</p>
								<p><span class="txtbold">制作期間：</span>約1カ月</p>
								
							</div>
							
							<div class="modal-slider">
								<div class="slider-for">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__01_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__01_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__01_03.jpg"></div>
								</div>
								<div class="slider-nav">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__01_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__01_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__01_03.jpg"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal02" class="modal">
					<div class="modal-content">
						<span class="close" onclick="document.getElementById('myModal02').classList.remove('is-open')">&times;</span>
						
						<div class="modal-body">
							<div class="modal-text">
								<h2>M様</h2>
								<p>商品紹介と商品アレンジレシピなどを掲載したWEBサイト。リニューアルデザインに合わせてHTML/CSSコーディングを行い、WordPressオリジナルテーマを構築しました。<br>「コラム」「レシピ」などをカスタム投稿タイプで設定、「レシピ」をカテゴリー「軽食」などで更に絞り込み表示するように設計し、ユーザーが見たいレシピに辿り着く時間を短縮しました。</p>
								<p><span class="txtbold">担当：</span>HTML/CSSコーディング・WordPress構築</p>
								<p><span class="txtbold">規模：</span>大きくは10ページ、その他コラム・レシピ個別ページ多数</p>
								<p><span class="txtbold">制作期間：</span>約1カ月</p>
								
							</div>
							
							<div class="modal-slider">
								<div class="slider-for">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__02_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__02_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__02_03.jpg"></div>
								</div>
								<div class="slider-nav">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__02_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__02_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__02_03.jpg"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal03" class="modal">
					<div class="modal-content">
						<span class="close" onclick="document.getElementById('myModal01').classList.remove('is-open')">&times;</span>
						
						<div class="modal-body">
							<div class="modal-text">
								<h2>株式会社S様</h2>
								<p>WEBサイトリニューアルの際に、新デザインに対応するようHTML/CSSコーディングを行いWordPressをオリジナルテーマで構築しました。<br>「事業所」をカスタム投稿タイプで設定し、サイト管理者が事業所を自由に増減できるようにしました。また、「会社概要」は管理画面上入力フィールドを更新しやすくACFでカスタマイズしました。</p>
								<p><span class="txtbold">担当：</span>HTML/CSSコーディング・WordPress構築・本番公開</p>
								<p><span class="txtbold">規模：</span>23ページ</p>
								<p><span class="txtbold">制作期間：</span>約1カ月</p>
								
							</div>
							
							<div class="modal-slider">
								<div class="slider-for">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__03_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__03_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__03_03.jpg"></div>
								</div>
								<div class="slider-nav">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__03_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__03_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__03_03.jpg"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal05" class="modal">
					<div class="modal-content">
						<span class="close" onclick="document.getElementById('myModal01').classList.remove('is-open')">&times;</span>
						
						<div class="modal-body">
							<div class="modal-text">
								<h2>H様</h2>
								<p>行政サービス紹介サイトの新規立ち上げ時、HTML/CSSコーディングを行いWordPress構築を担当。<br>行政が開催する「イベント」申し込みフォームを送信すると、管理画面に設定した残数が減る仕組みを構築し、管理されるお客様の集計作業時間を短縮しました。</p>
								<p><span class="txtbold">担当：</span>HTML/CSSコーディング・WordPress構築・アクションフックを使いメール送信と共に、管理画面数値を変更する仕組みをPHPで設定</p>
								<p><span class="txtbold">規模：</span>23ページ</p>
								<p><span class="txtbold">制作期間：</span>約1カ月</p>
								
							</div>
							
							<div class="modal-slider">
								<div class="slider-for">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__05_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__05_03.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__05_02.jpg"></div>
								</div>
								<div class="slider-nav">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__05_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__05_03.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__05_02.jpg"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal04" class="modal">
					<div class="modal-content">
						<span class="close" onclick="document.getElementById('myModal01').classList.remove('is-open')">&times;</span>
						
						<div class="modal-body">
							<div class="modal-text">
								<h2>ST様リクルートサイト</h2>
								<p>企業様の求人情報掲載サイト。HTML/CSSコーディングを行いWordPress構築を担当しました。<br>先輩の声をカスタム投稿タイプ及びACFで入力フィールドをカスタマイズし、サイト管理者が簡単に先輩の声を追加できるように設計しました。</p>
								<p><span class="txtbold">担当：</span>HTML/CSSコーディング・WordPress構築・本番公開</p>
								<p><span class="txtbold">規模：</span>23ページ</p>
								<p><span class="txtbold">制作期間：</span>約1カ月</p>
							</div>
							
							<div class="modal-slider">
								<div class="slider-for">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__04_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__04_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__04_03.jpg"></div>
								</div>
								<div class="slider-nav">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__04_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__04_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__04_03.jpg"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal07" class="modal">
					<div class="modal-content">
						<span class="close" onclick="document.getElementById('myModal01').classList.remove('is-open')">&times;</span>
						
						<div class="modal-body">
							<div class="modal-text">
								<h2>SC様 研修用動画</h2>
								<p>オンライン研修用の講義動画の撮影・編集を担当しました。講義動画撮影と、パワーポイント画像を合成し、講義内容の理解度を上げるために全編字幕を付けました。受注・打ち合わせからYouTube限定公開まで、ワンストップで納品し、お客様から話が通じやすいので助かると高評価をいただいておりました。</p>
								<p><span class="txtbold">担当：</span>打ち合わせ・撮影・編集・YouTube納品</p>
								<p><span class="txtbold">規模：</span>1時間～2時間の講義を10本</p>
								<p><span class="txtbold">制作期間：</span>約1.5カ月</p>
							</div>
							
							<div class="modal-slider">
								<div class="slider-for">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__07_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__07_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__07_01.jpg"></div>
								</div>
								<div class="slider-nav">
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__07_01.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__07_02.jpg"></div>
									<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works-item__07_01.jpg"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<div class="">
				<p class="txtcenter">その他、多数HTML/CSSコーディング、<br class="sponly">WordPress構築等に携わりました。</p>
			</div>
	</section>

</section>
<section class="section-skills" id="skills">
	<section class="wrapper">
		<section class="txtcenter">
			<h2 class="sec-title txtcenter">SKILLS</h2>
		</section>
		<div class="skills__content mb50">
			<dl class="skills-list fadeUpTrigger fadeUp">
				<dt><span class="skills-list__title"><span class="marker__yellow">マークアップ</span></span></dt>
				<dd>HTML5, CSS3</dd>
			</dl>
			<dl class="skills-list fadeUpTrigger fadeUp">
				<dt><span class="skills-list__title"><span class="marker__yellow">スクリプト</span></span></dt>
				<dd>jQuery, javascript</dd>
			</dl>
			<dl class="skills-list fadeUpTrigger fadeUp">
				<dt><span class="skills-list__title"><span class="marker__yellow">CMS（WordPress）</span></span></dt>
				<dd>オリジナルテーマ開発、PHPで条件分岐・カスタマイズ、<br class="pconly">カスタム投稿タイプ/タクソノミー設計、ACF実装、ブロックエディタ最適化</a></dd>
			</dl>
			<dl class="skills-list fadeUpTrigger fadeUp">
				<dt><span class="skills-list__title"><span class="marker__yellow">Adobe</span></span></dt>
				<dd>Photoshop、Illustrator、Premiere Pro、After Effects</dd>
			</dl>
			
		</div>
		
			
			<p class="link txtcenter fadeUpTrigger fadeUp">- Blog: <br class="sponly"><a href="https://yuri-lifestyle.com/" target="_blank">https://yuri-lifestyle.com/</a></p>
			<p class="link txtcenter fadeUpTrigger fadeUp">- GitHub: <br class="sponly"><a href="https://github.com/saitoyoshiko3110-code" target="_blank">https://github.com/saitoyoshiko3110-code</a></p>
		</div>
		
		
		
		
	</section>
</section>
<section class="section-contact" id="contact">
	<section class="wrapper">
		<section class="txtcenter">
			<h2 class="sec-title txtcenter">CONTACT</h2>
		</section>
		<section class="recruit__entry_form-wrapper smf-form smf-form--simple-table">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; endif;
			?>
			
			</section>
	</section>
</section>



<footer class="footer">
	
	<section class="wrapper">	
		<ul class="footer-list">
			<li><a href="#top-mainvisual">HOME</a></li>
			<li><a href="#about-me">ABOUT ME</a></li>
			<li><a href="#skill">SKILL</a></li>
			<li><a href="#works">WORKS</a></li>
			<li><a href="#contact">CONTACT</a></li>
		</ul>
	</section>
	<section class="copy">
		<small>&copy; Saito's Portfolio.</small>
	</section>
</footer>
<!--pagetop-->
<p class="pagetop"><a href="#top-mainvisual"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pagetop.png" alt=""></a></p>

<?php wp_footer(); ?>

</body>
</html>

