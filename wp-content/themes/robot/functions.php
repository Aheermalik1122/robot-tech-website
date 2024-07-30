<?php

/*********Remove parent fuctions**************/
function robot_remove_parent_function() {
    remove_action( 'wp_enqueue_scripts', 'lakshmi_lite_styles' );
    remove_action( 'admin_menu', 'lakshmi_lite_about_theme' );
	remove_action( 'after_setup_theme', 'lakshmi_lite_custom_setup' );
}
add_action( 'wp_loaded', 'robot_remove_parent_function' );

define('ROBOT_WEBZAKT_THEME_URL','http://webzakt.com/themes/robot-multipurpose-wordpress-theme/','robot');
define('ROBOT_WEBZAKT_AUTHOR_URL','http://webzakt.com/','robot');
define('ROBOT_WEBZAKT_THEME_DOC','http://webzakt.com/docs/robot-lite/','robot');

/*********Add child theme styles**************/
add_action( 'wp_enqueue_scripts', 'robot_enqueue_styles' );
function robot_enqueue_styles() {
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', '', '', 'screen, all');
	wp_enqueue_style('flexslider', get_template_directory_uri().'/css/flexslider.css', '', '', 'screen, all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl-carousel.css', '', '', 'screen, all');
	wp_enqueue_style('prettyphoto-css', get_template_directory_uri().'/css/prettyPhoto.css', '', '', 'screen, all');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' , array(), '4.4.0', 'all' );
	
    wp_enqueue_style( 'robot-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('robot-main-css', get_bloginfo( 'stylesheet_url' ), '', '', 'all');
	
	wp_enqueue_style('robot-google-fonts', '//fonts.googleapis.com/css?family=Kanit:regular,300,500|Monoton:regular');
}

/*********Robot Customizer**************/
function robot_custom_setup() {
	if ( ! defined( 'FW' ) ) {
		add_theme_support( "custom-background",
			array(
				'default-color' => '111111',
				'default-image' => '',
				'default-repeat'     => 'repeat',
				'default-position-x' => 'center',
				'default-attachment' => 'scroll',
    			'wp-head-callback' => 'lakshmi_lite_custom_background_cb',
			)
		);
		
		add_theme_support( 'custom-logo', array(
			'height'      => 62,
			'width'       => 250,
			'flex-height' => true,
		) );

		add_theme_support( "custom-header",
			array(
				'default-image'          => '',
				'flex-height'            => false,
				'flex-width'             => false,
				'uploads'                => true,
				'random-default'         => false,
				'header-text'            => false,
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
			)
		);
	}
}
add_action( 'after_setup_theme', 'robot_custom_setup' );

/*********Robot About Theme**************/
//about theme info
add_action( 'admin_menu', 'robot_about_theme' );
function robot_about_theme() {  
	global $robot_about_theme_page; 	
	$robot_about_theme_page = add_theme_page( __('About Theme', 'lakshmi-lite'), __('About Theme', 'lakshmi-lite'), 'edit_theme_options', 'robot_guide', 'robot_guide');   
} 

//guidline for about theme
function robot_guide() { 
?>

<div class="wrapper-info">
	<div class="col-left">
   		   <div class="about-title">
			  <h1><?php esc_html_e('About Robot Theme', 'lakshmi-lite'); ?></h1>
		   </div>
           <p><?php esc_html_e('Description: Robot - Multipurpose WordPress Theme is a child theme of Lakshmi Lite with all features You need. With Unyson and Lakshmi features plugins, You can create sliders, use customizer options, unique shortcodes with page builder and import the premade demo with one click. Imagine Your website and build it with Robot. Build Your site with the highly customizable responsive elements. If You would make something big, try Robot Pro with more elements and special functions.', 'lakshmi-lite'); ?></p>
           <p><?php esc_html_e('If You want to know more about Robot, please read the', 'lakshmi-lite'); ?> <a href="<?php echo esc_url(ROBOT_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('documentation', 'lakshmi-lite'); ?></a>.</p>
           <h2><?php esc_html_e('How to use Robot', 'lakshmi-lite'); ?></h2>
		  <p><?php esc_html_e('1. If You want to use all Robot features install the Lakshmi Lite parent theme and activate the 3 recommended plugins: Unyson, Lakshmi Features, Contact Form 7.', 'lakshmi-lite'); ?></p>
          <p><?php esc_html_e('2. Install the Robot child theme and activate it.', 'lakshmi-lite'); ?></p>
          <p><?php esc_html_e('3. Install the demo contents at Tools -> Demo Content Install. (This step is optional.)', 'lakshmi-lite'); ?></p>
          <p><?php esc_html_e('4. Use the customizer to setup Your site and build Your pages and blog posts with the page builder. If You prefer the default editor, You can call the Lakshmi elements with the "editor shortcodes" button.', 'lakshmi-lite'); ?></p>
          <p><?php esc_html_e('5. Have fun!', 'lakshmi-lite'); ?></p>
          
          <h4><?php esc_html_e('If You need more info, please read the', 'lakshmi-lite'); ?> <a href="<?php echo esc_url(ROBOT_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('documentation', 'lakshmi-lite'); ?></a>.</h4><br />
           <h2><?php esc_html_e('About Robot Pro', 'lakshmi-lite'); ?></h2>
          <p><?php esc_html_e('Do You want more? Extend Robot Theme! You can download', 'lakshmi-lite'); ?> <a href="<?php echo esc_url(ROBOT_WEBZAKT_THEME_URL); ?>" target="_blank"><?php esc_html_e('Robot - Multipurpose WordPress Theme', 'lakshmi-lite'); ?></a> <?php esc_html_e('pro version from Webzakt.', 'lakshmi-lite'); ?></p>
          <div class="description free-and-pro"><a href="<?php echo esc_url(ROBOT_WEBZAKT_THEME_URL); ?>" class="webzakt-button webzakt-button-pro" target="_blank"><?php esc_html_e('More about Pro Version', 'lakshmi-lite'); ?></a><a href="<?php echo esc_url(ROBOT_WEBZAKT_AUTHOR_URL); ?>" class="webzakt-button webzakt-button-more" target="_blank"><?php esc_html_e('More about Webzakt', 'lakshmi-lite'); ?></a></div>
          <p><?php esc_html_e('Pro version includes above the lite features:', 'lakshmi-lite'); ?></p>
          
          <h3><?php esc_html_e('Customizable Colors & Fonts, WooCommerce & Give Donation Plugin support with page builder elemnts, Events & Portfolio post types with page builder elemnts, Breadcrumbs, Lakshmi Widgets (Contact, Event, Flickr, Popular Posts, Quote), 4 Blog Style, Social share function, Animations, Nice sroll, Back to top, Sticky header, 7 Header style, Countdown, Counter, Map-fullwidth, Member, Pricing-table, Progress, Tabs, Toggle, Calendar, Extra Post carousel and much more...', 'lakshmi-lite'); ?></h3>
	</div><!-- .col-left -->
	
	<div class="col-right">			
			<div class="about-donate">
				<hr />
				<a href="<?php echo esc_url(ROBOT_WEBZAKT_THEME_URL); ?>" target="_blank"><?php esc_html_e('Demo', 'lakshmi-lite'); ?></a> | 
				<a href="<?php echo esc_url(ROBOT_WEBZAKT_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'lakshmi-lite'); ?></a> | 
				<a href="<?php echo esc_url(ROBOT_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'lakshmi-lite'); ?></a>
                <div class="about-space"></div>
				<hr />
                <p><?php esc_html_e('Robot - Multipurpose WordPress Theme is free, and I hope that you find it useful.','lakshmi-lite'); ?></p>
			<hr />
            <div class="about-title">
				<?php esc_html_e('Credits', 'lakshmi-lite'); ?>
            </div>
            <p><?php esc_html_e('I`ve used the following scripts as listed. See the source of the images in the documentation.', 'lakshmi-lite'); ?></p>
                        
            <ul>
                <li><?php esc_html_e('Bootstrap', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('jQuery easing', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('prettyPhoto', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Flexslider', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('OwlCarousel', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Nivo Slider', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('jQuery Directional Hover', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Font Awesome', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Google Fonts', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Unyson', 'lakshmi-lite'); ?></li>
            </ul>
		</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php }

function robot_about_theme_style($hook) {
	global $robot_about_theme_page;
	if( $hook != $robot_about_theme_page ) { 
		return;
	}
	wp_enqueue_style('robot-about-theme-style-css', get_stylesheet_directory_uri().'/admin/css/about-theme.css');
}
add_action( 'admin_enqueue_scripts', 'robot_about_theme_style' );