<?php
function loadingFiles() {
    // Include Javascript files.
    wp_enqueue_script('jquery_script_Js', get_theme_file_uri('assets/js/jquery-3.5.1.min.js'), null, null, true);
    wp_enqueue_script('bootstrap_Js', get_theme_file_uri('assets/js/bootstrap.bundle.min.js'), null, null, true);
    
    if (is_front_page())
    {
        wp_enqueue_style('animate_Css', get_theme_file_uri('assets/vendor/animate/animate.css'));
        wp_enqueue_style('bootstrap_Css', get_theme_file_uri('assets/css/bootstrap.css'));
        wp_enqueue_style('owlCarousel_Css', get_theme_file_uri('assets/vendor/owl-carousel/css/owl.carousel.css'));
    

        wp_enqueue_script('wow_Js', get_theme_file_uri('assets/vendor/wow/wow.min.js'), null, null, true);
        wp_enqueue_script('owl_Js', get_theme_file_uri('assets/vendor/owl-carousel/js/owl.carousel.min.js'), null, null, true);
        wp_enqueue_script('waypoint_Js', get_theme_file_uri('assets/vendor/waypoints/jquery.waypoints.min.js'), null, null, true);
        wp_enqueue_script('animate_number_Js', get_theme_file_uri('assets/vendor/animateNumber/jquery.animateNumber.min.js'), null, null, true);
    }

    wp_enqueue_script('google_maps', get_theme_file_uri('assets/js/google-maps.js'), null, null, true);
    wp_enqueue_script('theme_Js', get_theme_file_uri('assets/js/theme.js'), null, null, true);


    // Theme Styles.
    wp_enqueue_style('bootstrap_style_css', get_theme_file_uri('assets/css/bootstrap.css'));
    wp_enqueue_style('main_icons_style_css', get_theme_file_uri('assets/css/maicons.css'));
    wp_enqueue_style('custom_theme_style_css', get_theme_file_uri('assets/css/theme.css'));

    // This will load your default style.css
    wp_enqueue_style('main_style_css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'loadingFiles');
function wpdocs_redirect_after_logout() {
 
     $current_user   = wp_get_current_user();
     $role_name      = $current_user->roles[0];
 
     if ( 'subscriber' === $role_name ) {
         $redirect_url = site_url();
         wp_safe_redirect( $redirect_url );
         exit;
     } 
 
 }
  add_action( 'wp_enqueue_scripts', 'slick_register_styles' );
function slick_register_styles() {
wp_enqueue_style( 'slick-css', untrailingslashit( get_template_directory_uri() ) . 'assets/css/slick.css', [], false, 'all' );
wp_enqueue_style( 'slick-theme-css', untrailingslashit( get_template_directory_uri() ) . 'assets/css/slick-theme.css', ['slick-css'], false, 'all' );
wp_enqueue_script( 'carousel-js', untrailingslashit( get_template_directory_uri() ) . '/assets/src/carousel/index.js', ['jquery', 'slick-js'], filemtime( untrailingslashit( get_template_directory() ) . '/assets/src/carousel/index.js' ), true );
}
function learningWordPress_customize_register( $wp_customize ) {

    $wp_customize->add_setting('lwp_header_color', array(
        'default' => '#FBC61E',
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('lwp_link_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('lwp_btn_color', array(
        'default' => '#d66fb7',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('lwp_btn_hover_color', array(
        'default' => '#00cfdd',
        'transport' => 'refresh',
    ));

    $wp_customize->add_section('lwp_standard_colors', array(
        'title' => __('Customize Content', 'LearningWordPress'),
        'priority' => 30,
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_header_color_control', array(
        'label' => __('Header Color', 'LearningWordPress'),
        'section' => 'lwp_standard_colors',
        'settings' => 'lwp_header_color',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_link_color_control', array(
        'label' => __('Text Color Content', 'LearningWordPress'),
        'section' => 'lwp_standard_colors',
        'settings' => 'lwp_link_color',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_btn_color_control', array(
        'label' => __('Button|Header color', 'LearningWordPress'),
        'section' => 'lwp_standard_colors',
        'settings' => 'lwp_btn_color',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_btn_hover_color_control', array(
        'label' => __('Button Hover Color', 'LearningWordPress'),
        'section' => 'lwp_standard_colors',
        'settings' => 'lwp_btn_hover_color',
    ) ) );

}

add_action('customize_register', 'learningWordPress_customize_register');
function learningWordPress_resources() {
    
    wp_enqueue_style('style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');
// Output Customize CSS
function learningWordPress_customize_css() { ?>

    <style type="text/css">
        .text-primary,
        .text-primary,.page-section p,
        .page-footer p,.subhead,.subhead,
        .page-item.active .page-link ,
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6,p,
        a:link,
        .widget-title,
        .text-primaryy,
        .blog-single-wrap .header,.blog-single-wrap .post-title,
        a:visited {

            color: <?php echo get_theme_mod('lwp_link_color'); ?>;
        }

        .site-header nav ul li.current-menu-item a:link,
        .site-header nav ul li.current-menu-item a:visited,
        .site-header nav ul li.current-page-ancestor a:link,
        .site-header nav ul li.current-page-ancestor a:visited {
            background-color: <?php echo get_theme_mod('lwp_link_color'); ?>;
        }
        .card-blog,
        .card-blog-row *:first-child .card-blog,
        .card-blog-row *:first-child .card-blog .post-author,
        .card-blog-row *:first-child .card-blog .post-title a,
         .card-blog-row *:first-child .card-blog .footer a,
        .btn-a,
        .btn-primary,
        .blog-single-wrap .header .post-thumb,
        .btn-a:link,
        .btn-a:visited,
        .navbar-float,
        .navbar-light,
        .navbar-brand,
        .page-item.active .page-link,
        div.hd-search #searchsubmit {
            background-color: <?php echo get_theme_mod('lwp_btn_color'); ?>;
        }
        .btn-success,
        .bs-btn-hover-bg,
        .btn-a:hover,
        .btn-primary:hover,
        .back-to-top:hover,
        div.hd-search #searchsubmit:hover {
            background-color: <?php echo get_theme_mod('lwp_btn_hover_color'); ?>;
        }
        .btn-success,
        .page-footer, {
        background-color: <?php echo get_theme_mod('lwp_btn_color'); ?>;
        }
    </style>
<?php }
add_action('wp_head', 'learningWordPress_customize_css');