// JavaScript Document

//スマホメニュー開閉
$(function(){
	$('#nav_toggle').click(function(){
		$("body").toggleClass('open');
		$("#spnavi").slideToggle(500);
	}); 
});

// sp トップへ戻るボタン
$(document).ready(function() {
  var pagetop = $('.pagetop');
  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
          pagetop.fadeIn();
      } else {
          pagetop.fadeOut();
      }
  });
  pagetop.click(function () {
      $('body, html').animate({ scrollTop: 0 }, 500);
      return false;
  });
});

//TELリンク
$(function(){
	/*$(document).ready(function() {*/
	if ($(window).width() > 769) {
	} else {
		$(function() {
			$('.tel-link').each(function(){
				var str = $(this).text();
				$(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
			});
		});
	};
});

//ajaxzip3
$(function() {
  $('.js-button').click(function(){
      AjaxZip3.zip2addr('zip', '', 'address', 'address');
  });
});


//slick modal

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
                    dots: false,
                    centerMode: true,
                    focusOnSelect: true
                });
            } else {
                $sliderFor.slick('setPosition');
                $sliderNav.slick('setPosition');
            }
        }, 300);
    });


function slideAnime(){
  //====左に動くアニメーションここから===
    $('.leftAnime').each(function(){ 
      var elemPos = $(this).offset().top-50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        //左から右へ表示するクラスを付与
        //テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
        $(this).addClass("slideAnimeLeftRight"); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動
        $(this).children(".leftAnimeInner").addClass("slideAnimeRightLeft");  //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
      }else{
        //左から右へ表示するクラスを取り除く
        $(this).removeClass("slideAnimeLeftRight");
        $(this).children(".leftAnimeInner").removeClass("slideAnimeRightLeft");
        
      }
    });
    
    
  }

  // 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function(){
    slideAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

  function slideAnime2(){
    //====右に動くアニメーションここから===
      $('.rightAnime').each(function(){
              var elemPos = $(this).offset().top-50;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
              if (scroll >= elemPos - windowHeight){
              // 右から左へ表示するクラスを付与
              // テキスト要素を挟む親要素（右側）とテキスト要素を元位置でアニメーションをおこなう
              $(this).addClass("slideAnimeRightLeft ");
              // 要素を右枠外にへ移動しCSS アニメーションで右から元の位置に移動
              $(this).children(".rightAnimeInner").addClass("slideAnimeLeftRight");
              // 子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
              }else{
              // 右から左へ表示するクラスを取り除く
              $(this).removeClass("slideAnimeRightLeft ");
              $(this).children(".rightAnimeInner").removeClass("slideAnimeLeftRight");
              }
              });
    }
    
    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
      slideAnime2();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面をスクロールをしたら動かしたい場合の記述
  




// フェードアニメ
function fadeAnime(){

	// ふわっ
	$('.fadeUpTrigger').each(function(){ //fadeUpTriggerというクラス名が
	  var elemPos = $(this).offset().top-50;//要素より、50px上の
	  var scroll = $(window).scrollTop();
	  var windowHeight = $(window).height();
	  if (scroll >= elemPos - windowHeight){
	  $(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
	  }else{
	  $(this).removeClass('fadeUp');// 画面外に出たらfadeUpというクラス名を外す
	  }
	  });
  }
  
  // 画面をスクロールをしたら動かしたい場合の記述
	$(window).scroll(function (){
	  fadeAnime();/* アニメーション用の関数を呼ぶ*/
	});
	// ここまで画面をスクロールをしたら動かしたい場合の記述