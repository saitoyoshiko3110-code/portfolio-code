// JavaScript Document




//slick


$(function(){
  var mainSlider = "#photo-slider"; //メインスライダーid
  var thumbnailSlider = "#photo-thumbnail_slider"; //サムネイルスライダーid
  
   $(mainSlider).slick({
     autoplay: false,
     speed: 1000,
     arrows: true,
     asNavFor: thumbnailSlider
   });
   $(thumbnailSlider).slick({
     slidesToShow: 3,
     speed: 1000,    
     asNavFor: mainSlider,
     arrows: true,
     responsive: [{
       breakpoint: 768,
            settings: {	
            slidesToShow: 3,
            }
       }
       ]
   });
   //#thumbnail_sliderでクリックしたスライドをカレントにする
   $(thumbnailSlider+" .slick-slide").on('click',function(){
     var index = $(this).attr("data-slick-index");
     $(thumbnailSlider).slick("slickGoTo",index,false);
  });
});


