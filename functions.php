<?php 

/**
 * ポートフォリオページ専用：親テーマを捨てて、自前設定を読み込む
 */
function my_portfolio_setup() {
    // スラッグが 'portfolio' のページのみ適用
    if ( is_page('portfolio') ) {

        // --- 1. 親テーマの不要な資産を削除 (dequeue) ---
        wp_dequeue_style('bootstrap');
        wp_dequeue_style('font-awesome');
        wp_dequeue_style('slick');
        wp_dequeue_style('slick-theme');
        wp_dequeue_style(get_stylesheet()); 
        wp_dequeue_style('parent-style');
        wp_dequeue_style('child-style');

        wp_dequeue_script('bootstrap');
        wp_dequeue_script('slick');
        wp_dequeue_script('jquery.easiing');
        wp_dequeue_script('jquery.smoothscroll');
        wp_dequeue_script(get_stylesheet()); 
        wp_dequeue_script('html5shiv');
        
        wp_enqueue_style(
            'google-fonts', 
            'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@400;600&display=swap', 
            array(), 
            null
        );

        // --- 2. 子テーマ内のファイルを読み込み ---
        // get_stylesheet_directory_uri() 
       
        wp_enqueue_style('portfolio-fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
        wp_enqueue_style('portfolio-slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_style('portfolio-base', get_stylesheet_directory_uri() . '/css/base.css');
        wp_enqueue_style('portfolio-layout', get_stylesheet_directory_uri() . '/css/layout.css');
        wp_enqueue_style('portfolio-components', get_stylesheet_directory_uri() . '/css/components.css');
        wp_enqueue_style('portfolio-utility', get_stylesheet_directory_uri() . '/css/utility.css');

        wp_enqueue_script('portfolio-slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
        wp_enqueue_script('portfolio-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), null, true);
        wp_enqueue_script('portfolio-script-slick', get_stylesheet_directory_uri() . '/js/script-slick.js', array('jquery'), null, true);
    }
}
// 優先順位を20にして、親テーマの設定が読み込まれた後に実行
add_action('wp_enqueue_scripts', 'my_portfolio_setup', 20);


function my_portfolio_remove_theme_inline_styles() {
    if ( is_page('portfolio') ) {
        remove_action('wp_head', 'wp_custom_css_cb'); 
        remove_action('wp_head', 'earn_pocket_money_wp_head_styles');
    }
}
add_action('wp_head', 'my_portfolio_remove_theme_inline_styles', 1);


function my_portfolio_cleanup_head() {
    if ( is_page('portfolio') ) {
        // フィードリンク（投稿・コメント）を削除
        remove_action('wp_head', 'feed_links', 2);
        remove_action('wp_head', 'feed_links_extra', 3);
        
        // RSDリンク、wlwmanifestを削除
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        
        // canonical、shortlinkを削除
        remove_action('wp_head', 'rel_canonical');
        remove_action('wp_head', 'wp_shortlink_wp_head');
    }
}
add_action('wp_head', 'my_portfolio_cleanup_head', 1);

// <title>タグの重複について
add_filter('pre_get_document_title', function($title) {
    if ( is_page('portfolio') ) {
        return 'Portfolio - Yoshiko Saito'; 
    }
    return $title;
}, 999);





