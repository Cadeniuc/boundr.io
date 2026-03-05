<?php
add_action('wp_enqueue_scripts', 'main_scripts', 11 );
function main_scripts() {
    wp_enqueue_style('style-styles',  get_template_directory_uri() . '/assets/css/app-min.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('style-photoswipe',  'https://unpkg.com/photoswipe@5.2.2/dist/photoswipe.css', array(), null, 'all');
    // wp_enqueue_style('style-swiper',  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null, 'all');

    wp_enqueue_script('script-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), null, true);
    wp_enqueue_script('script-ScrollTrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array(), null, true);
    wp_enqueue_script('script-CustomEase', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/CustomEase.min.js', array(), null, true);
    // wp_enqueue_script('script-Observer', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/Observer.min.js', array(), null, true);
    wp_enqueue_script('script-SplitText', 'https://cdn.jsdelivr.net/gh/ilja-van-eck/osmo/assets/gsap/SplitText.min.js', array(), null, true);
    wp_enqueue_script('script-photoswipe', 'https://unpkg.com/photoswipe@5/dist/umd/photoswipe.umd.min.js', array(), null, true);
    wp_enqueue_script('script-photoswipe-lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.4/umd/photoswipe-lightbox.umd.min.js', array(), null, true);
    // wp_enqueue_script('script-GSDevTools', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/GSDevTools.min.js', array(), null, true);
    // wp_enqueue_script('script-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    // wp_enqueue_script('script-imgloaded', 'https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js', array(), null, true);

    wp_enqueue_script('script-lenis', 'https://unpkg.com/lenis@1.1.18/dist/lenis.min.js', array(), null, true);
    wp_enqueue_script('script-barba', 'https://cdn.jsdelivr.net/npm/@barba/core@2.9.7/dist/barba.umd.min.js', array(), null);

    wp_enqueue_script('script-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], _S_VERSION, true);

//    wp_localize_script('script-main', 'ajaxpagination', ['ajaxurl' => admin_url('admin-ajax.php')]);
}

function make_script_async( $tag, $handle, $src ) {
    if ('script-custom' != $handle) {
        return $tag;
    }
    return str_replace( '<script', '<script defer', $tag );
}
add_filter( 'script_loader_tag', 'make_script_async', 10, 3 );

function make_script_module( $tag, $handle, $src ) {
    if ('boundr-app' != $handle) {
        return $tag;
    }
    return str_replace( '<script', '<script type="module"', $tag );
}
add_filter( 'script_loader_tag', 'make_script_module', 10, 3 );


add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/assets/admin/admin.css', false, '1.0.4' );
}