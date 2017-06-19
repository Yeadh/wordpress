<?php
/**
 * premix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package premix
 */
 
 function dd($variable, $die = false)
 {
	 echo "<pre>";
	 if(empty($valiable))
	 {
		 var_dump($variable);
	 }
	 else
	 {
		 print_r($variable);
	 }
	 echo "</pre>";
	 
	 if($die)
		 die();
 }
 
 

if ( ! function_exists( 'premix_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function premix_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on premix, use a find and replace
	 * to change 'premix' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'premix', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	// Add theme support for selective refresh for widgets.
		set_post_thumbnail_size( 750, 420, true );
		add_image_size( 'blog-image', 360, 225, array( 'left', 'top' ) );  
		add_image_size( 'artist-image', 356, 422, array( 'left', 'top' ) );  
		add_image_size( 'album', 550, 780, array( 'center', 'top' ) );  
		add_image_size( 'author-image', 210, 390, array( 'center', 'top' ) );
		
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary-nav' => esc_html__( 'Primary nav', 'premix' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'premix_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'premix_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function premix_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'premix_content_width', 640 );
}
add_action( 'after_setup_theme', 'premix_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function premix_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'premix' ),
		'id'            => 'footer_widgets',
		'description'   => esc_html__( 'Add widgets here.', 'premix' ),
		'before_widget' => '<div class="col-md-4 col-sm-6">
					<div class="premix-single-footer-bottom premix-single-news">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'premix' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add Sidebar widgets here.', 'premix' ),
		'before_widget' => '<div class="premix-side-bar-search sidebar-content-margin-bottom premix-side-bar-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'premix_widgets_init' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


	//Premix activation metabox for pages
	
	function prebook_admin_enqueue() {
		wp_enqueue_script( 'prebook-admin-enquee', get_template_directory_uri() . '/js/myscript.js' );
	}
	add_action( 'admin_enqueue_scripts', 'prebook_admin_enqueue' );
	function premix_activate()
	{
		/**
		 * Automatic creating a page
		 */
		$pages = get_pages(array(
			'meta_key' => '_wp_page_template',
			'meta_value' => 'homepage.php',
		));
		if ( (!$pages) && isset($_GET['activated']) ){
			$new_page_title = 'Premix Home Page';
			$new_page_content = 'This is the page content';
			$new_page_template = 'homepage.php'; 
			$new_page = array(
					'post_type' => 'page',
					'post_title' => $new_page_title,
					'post_content' => $new_page_content,
					'post_status' => 'publish',
					'post_author' => 1,
			);
			if(!isset($page_check->ID)){
				$new_page_id = wp_insert_post($new_page);
				if(!empty($new_page_template)){
					update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
					do_action( 'premix_activated', $new_page_id );
				}
			}
		}
		/**
		 * Automatic creating a page
		 */
		$pages = get_pages(array(
			'meta_key' => '_wp_page_template',
			'meta_value' => 'gallery.php',
		));
		if ( (!$pages) && isset($_GET['activated']) ){
			$new_page_title = 'Premix gallery Page';
			$new_page_content = 'This is the page content';
			$new_page_template = 'gallery.php'; 
			$new_page = array(
					'post_type' => 'page',
					'post_title' => $new_page_title,
					'post_content' => $new_page_content,
					'post_status' => 'publish',
					'post_author' => 1,
			);
			if(!isset($page_check->ID)){
				$new_page_id = wp_insert_post($new_page);
				if(!empty($new_page_template)){
					update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
					do_action( 'premix_activated', $new_page_id );
				}
			}
		}
	}
	register_activation_hook( __FILE__, 'premix_activate' );
/**
 function premix_gallery_activate()
	{
		
		/**
		 * Automatic creating a page
		 *
		$pages = get_pages(array(
			'meta_key' => '_wp_page_template',
			'meta_value' => 'gallery.php',
		));
		if ( (!$pages) && isset($_GET['activated']) ){
			$new_page_title = 'Premix gallery Page';
			$new_page_content = 'This is the page content';
			$new_page_template = 'gallery.php'; 
			$new_page = array(
					'post_type' => 'page',
					'post_title' => $new_page_title,
					'post_content' => $new_page_content,
					'post_status' => 'publish',
					'post_author' => 1,
			);
			if(!isset($page_check->ID)){
				$new_page_id = wp_insert_post($new_page);
				if(!empty($new_page_template)){
					update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
					do_action( 'premix_activated', $new_page_id );
				}
			}
		}
	}
	register_activation_hook( __FILE__, 'premix_gallery_activate' );

	*/
	
	//Theme support
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );
	
	 //	Hero page breadcrumb
	 
	function the_breadcrumb() {
		global $post;
		echo '<ul id="breadcrumbs">';
		if (!is_home()) {
			echo '<li><a href="';
			echo get_option('home');
			echo '">';
			echo 'Home';
			echo '</a></li><li class="separator"> / </li>';
			if (is_category() || is_single()) {
				echo '<li>';
				the_category(' </li><li class="separator"> / </li><li> ');
				if (is_single()) {
					echo '</li><li class="separator"> / </li><li>';
					the_title();
					echo '</li>';
				}
			} elseif (is_page()) {
				if($post->post_parent){
					$anc = get_post_ancestors( $post->ID );
					$title = get_the_title();
					foreach ( $anc as $ancestor ) {
						$output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
					}
					echo $output;
					echo '<strong title="'.$title.'"> '.$title.'</strong>';
				} else {
					echo '<li><strong> '.get_the_title().'</strong></li>';
				}
			}
		}
		elseif (is_tag()) {single_tag_title();}
		elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
		elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
		elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
		elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
		elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
		echo '</ul>';
	}
	

		
		
	//blog content excerpt

	add_filter('the_excerpt', function ($content){
		$post_content = explode(" ", $content);
		$less_content = array_slice($post_content, 0, 15);
		$excert =  implode(" ", $less_content);
		$excert = sprintf('<p>%s</p> <a href="%s" class="premix-btn readmore-btn">%s</a>',$excert, get_the_permalink(),__('Read More','premix')) ;
		return $excert;	
	});
	
	

	//premix blog hero image
	function premix_hero_image($css = '')
	{
		$background_image_url = premix_option('premix_blog_header_image');

		return $css .  sprintf('.premix-welcome-section { background-image: url(%s); }', $background_image_url); 
	}
	add_filter('premix_infile_css', 'premix_hero_image');
	
	
	
	//premix social
		function premix_option( $option_key , $default = '')
		{
			return cs_get_customize_option( $option_key )?: $default;
		}

		function premix_social_share(){
			  if( premix_option( 'facebook_link' )  )
			  {
				echo sprintf('<li><a href="%s"><i class="fa fa-facebook"></i></a></li>', esc_url( premix_option( 'facebook_link' )  ) );
			  }
			  if( premix_option( 'twitter_link' )  )
			  {
				echo sprintf('<li><a href="%s"><i class="fa fa-twitter"></i></a></li>', esc_url( premix_option( 'twitter_link' )  ) );
			  }
			  if( premix_option( 'google_plus_link' )  )
			  {
				echo sprintf('<li><a href="%s"><i class="fa fa-google-plus-official"></i></a></li>', esc_url( premix_option( 'google_plus_link' )  ) );
			  }
			  if( premix_option( 'youtube_link' )  )
			  {
				echo sprintf('<li><a href="%s"><i class="fa fa-youtube"></i></a></li>', esc_url( premix_option( 'youtube_link' )  ) );
			  }
			  if( premix_option( 'instagram_link' )  )
			  {
				echo sprintf('<li><a href="%s"><i class="fa fa-instagram"></i></a></li>', esc_url( premix_option( 'instagram_link' )  ) );
			  }
		}
		
		
		//premix blog social share
		
	function premix_blog_social_share( ){
		$urlpramarater = array(
			array(
				'class'		=> 'fa fa-facebook',
				'phrase' 	=> 'https://www.facebook.com/sharer.php?u={url}',
			),
			array(
				'class'		=> 'fa fa-twitter',
				'phrase' 	=> 'https://twitter.com/intent/tweet?url={url}&text={title}',
			),
			
			array(
				'class'		=> 'fa fa-linkedin',
				'phrase' 	=> 'https://plus.google.com/share?url={url}',
			),
			array(
				'class'		=> 'fa fa-google-plus',
				'phrase' 	=> 'https://plus.google.com/share?url={url}',
			),
		);

		$permalink = urlencode( wp_get_shortlink() );
		$title =  get_the_title();

	?>
		<div class="premix-social-list">
			<h5><?php _e('Share On','premix'); ?></h5>
			
			<ul>
				<?php 

				$urlpramarater = (array) apply_filters('premix_social_urlpramarater', $urlpramarater);

				foreach( $urlpramarater as $pramarater)
				{

					$url 		= str_replace( array('{url}','{title}'), array($permalink, $title), $pramarater['phrase'] );

					echo sprintf('<li><a href="%s"><i class="%s" aria-hidden="true"></i></a></li>', $url, $pramarater['class']);
				}

			?>
			</ul>
			<span></span>
		</div>
    <?php
	}

	/**
	 * Enqueue scripts and styles.
	 */
	function premix_scripts() {
		wp_enqueue_style( 'plugins', 	get_template_directory_uri() . '/css/plugins.css', array(), '1.0' );
		wp_enqueue_style( 'style', 		get_template_directory_uri() . '/css/style.css', array(), '1.0' );
		wp_enqueue_style( 'custom', 	get_template_directory_uri() . '/css/custom.css' );
		wp_enqueue_style( 'premix-style', 	get_stylesheet_uri() , array('bootstrap', 'font-awesome'), '1.0');


		wp_enqueue_script( 'premix-modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array('jquery'), '2.8.3', false );
		wp_enqueue_script( 'premix-plugin', 	get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', false );
		wp_enqueue_script( 'premix-main', 	get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', false );
		
		wp_enqueue_style( 'premix-style', get_stylesheet_uri() );

		wp_enqueue_script( 'premix-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

		wp_enqueue_script( 'premix-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_add_inline_style('premix-style', apply_filters('premix_infile_css','') );

	};
	add_action( 'wp_enqueue_scripts', 'premix_scripts' );


	
	
	
	
	
	
	
	// remove borabor default Customize Appearance Options

	function borabor_customize_register( $wp_customize ) {
		$wp_customize->remove_section('header_image'); 
		$wp_customize->remove_section('colors');
		$wp_customize->remove_section('background_image');
	}
	add_action('customize_register', 'borabor_customize_register');


	/**
	 * ============================================
	 */
	 
	require get_template_directory() . '/lib/cs-framework/cs-framework.php';

	require get_template_directory() . '/lib/tmg/class-tgm-plugin-activation.php';

	require get_template_directory() . '/inc/register-cpt.php';

	/**
	Requireing metabox
	**/

	require get_template_directory() . '/inc/metabox/common.php';
	require get_template_directory() . '/inc/metabox/artist.php';
	require get_template_directory() . '/inc/metabox/album.php';
	require get_template_directory() . '/inc/metabox/event.php';
	require get_template_directory() . '/inc/metabox/gallery.php';
	require get_template_directory() . '/inc/metabox/team.php';

