<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
        $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
	// wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );

    // fontawesome cdn
    wp_enqueue_style( 'wp-bootstrap-pro-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/font-awsome.css' );
	// load bootstrap css

	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );

    // ============= Load Custom stylesheets =============

    wp_enqueue_style( 'host2media-swiper', get_template_directory_uri() . '/inc/assets/css/swiper.min.css' );
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/inc/assets/css/style.css', array(), '1.0');
    // wp_enqueue_style( 'host2media-custom_style', get_template_directory_uri() . '/inc/assets/css/custom_style.css', array(), '1.39' );
    // wp_enqueue_style( 'host2media-responsive_style', get_template_directory_uri() . '/inc/assets/css/responsive.css', array(), '1.39' );

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );

    // ========================================================================
    // Add all custom js libraries here
    wp_enqueue_script('host2media-swiper-js', get_template_directory_uri() . '/inc/assets/js/swiper.min.js', array(), '1', true );

    // jquery visibale
    wp_enqueue_script('queryvisible-js', get_template_directory_uri() . '/inc/assets/js/jquery.visible.js', array(), '1', true );

}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );


function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

// PHP Check if time is between two times regardless of date
function TimeIsBetweenTwoTimes($from, $till, $input) {
    $f = DateTime::createFromFormat('H:i', $from);
    $t = DateTime::createFromFormat('H:i', $till);
    $i = DateTime::createFromFormat('H:i', $input);
    if ($f > $t) $t->modify('+1 day');
    return ($f <= $i && $i <= $t) || ($f <= $i->modify('+1 day') && $i <= $t);
}

function gutenberg_editor_assets() {
  // Load the theme styles within Gutenberg.
  wp_enqueue_style('my-gutenberg-editor-styles', get_theme_file_uri('/assets/gutenberg-editor-styles.css'), FALSE);
}
// Add backend styles for Gutenberg.
add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets');

// Add action to initialize the custom API endpoint
add_action('rest_api_init', function () {
    register_rest_route('api/v1', '/search-domain/', array(
        'methods' => 'POST',
        'callback' => 'search_domain_name',
    ));
});

// Callback function to handle the POST request
function search_domain_name(WP_REST_Request $request) {
    // Get POST data
    $params = $request->get_json_params(); // Retrieves the JSON body sent in the request
    // Process the data (for example, save to the database, send email, etc.)
    $domain_name = isset($params['domain_name']) ? sanitize_text_field($params['domain_name']) : '';
    // Here, you would do something with the data (like storing it or processing it)
	// Note: Requires cURL library
	$TEST_MODE = false;

	$connection_options = [
		'live' => [
			'api_host_port' => 'https://rr-n1-tor.opensrs.net:55443',
			'api_key' => '09310c1df9fc9e782f45eb770eb6d174407c573e0f565e9bf406d1dfe74d23ca56049f7f3a1cad1fa1155fa250e1c6f4980e4649f9b34fa7',
			'reseller_username' => 'host2media'
		],
		'test' => [
			'api_host_port' => 'https://horizon.opensrs.net:55443',
			'api_key' => '09310c1df9fc9e782f45eb770eb6d174407c573e0f565e9bf406d1dfe74d23ca56049f7f3a1cad1fa1155fa250e1c6f4980e4649f9b34fa7',
			'reseller_username' => 'host2media'
		]
	];

	if ($TEST_MODE) {
		$connection_details = $connection_options['test'];
	} else {
		$connection_details = $connection_options['live'];
	}

	$xml =
	'<?xml version="1.0" encoding="UTF-8" standalone="no" ?>
	<!DOCTYPE OPS_envelope SYSTEM "ops.dtd">
	<OPS_envelope>
	<header>
		<version>0.9</version>
	</header>
	<body>
	<data_block>
		<dt_assoc>
			<item key="protocol">XCP</item>
			<item key="action">LOOKUP</item>
			<item key="object">DOMAIN</item>
			<item key="attributes">
			<dt_assoc>
					<item key="domain">'.$domain_name.'</item>
			</dt_assoc>
			</item>
		</dt_assoc>
	</data_block>
	</body>
	</OPS_envelope>';
	$data = [
		'Content-Type:text/xml',
		'X-Username:' . $connection_details['reseller_username'],
		'X-Signature:' . md5(md5($xml . $connection_details['api_key']) .  $connection_details['api_key']),
	];
	$ch = curl_init($connection_details['api_host_port']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $data);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
	$response = curl_exec($ch);
	$response_string = simplexml_load_string($response, "SimpleXMLElement", LIBXML_NOCDATA);
	// Step 2: Convert the SimpleXMLElement object to JSON
	$json = json_encode($response_string);
	// Output the JSON
	$array = json_decode($json, true); // Passing true converts it into an associative array
    // Return a response
    return rest_ensure_response(
	array(
        'status' => 'success',
        $array
    ));
}

function domain_register () {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://my.host2media.com/includes/api.php');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
	http_build_query(
		array(
		'action' => 'DomainRegister',
		// See https://developers.whmcs.com/api/authentication
		'username' => '6JGrfBa0ScquoMqtQ2VepBRTCTGMQqSs',
		'password' => 'iUMv3Va1UnVfw5dkPRJqvtTWLPMOmeXi',
		'domain' => 'test.com',
		'responsetype' => 'json',
		)
	)
	);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}
function get_TLD_Pricing(){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://my.host2media.com/includes/api.php');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		http_build_query(
			array(
				'action' => 'GetTLDPricing',
				// See https://developers.whmcs.com/api/authentication
				'username' => '6JGrfBa0ScquoMqtQ2VepBRTCTGMQqSs',
				'password' => 'iUMv3Va1UnVfw5dkPRJqvtTWLPMOmeXi',
				'currencyid' => '1',
				'responsetype' => 'json',
			)
		)
	);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}

function domain_whois($domain_name){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://my.host2media.com/includes/api.php');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		http_build_query(
			array(
				'action' => 'DomainWhois',
				// See https://developers.whmcs.com/api/authentication
				'username' => '6JGrfBa0ScquoMqtQ2VepBRTCTGMQqSs',
				'password' => 'iUMv3Va1UnVfw5dkPRJqvtTWLPMOmeXi',
				'domain' => $domain_name,
				'responsetype' => 'json',
			)
		)
	);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}

function load_more_posts() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 2; // Start with page 2 for the next load
    $args = array(
        'post_type' 		=> 		'post',
        'posts_per_page'    => 		6,
        'order'             =>      'DESC',
		'post_status'    	=> 		'publish',
        'offset'         	=> 		3 + (($paged - 1) * 6), // Increase offset for each page
    );

    $query = new WP_Query($args);
	if ( $query -> have_posts() ) :
		while ( $query -> have_posts() ) :  $query -> the_post();
			$post_id = get_the_ID();
			$title = get_the_title($post_id);
			$get_post_category = get_the_category(get_the_ID());
			$get_all_custom_fields = get_fields();
           ?>
             <div class="sm:col-span-6 col-span-12 bg-[#FFF9F9] rounded-[10px] flex">
				<a href="<?php echo get_permalink($post_id); ?>" class="bg-[#FFF9F9] custom-single-blog flex !h-fit rounded-[10px]">
					<div class="block text-left px-4">
						<h3 class="text-[#0F132A] Mulish-bold pb-4 md:text-[1.3rem] text-lg mt-2">
							<?php echo $title; ?>
						</h3>
						<p class="text-[#0F132A] Mulish-Regular text-sm">
							<?php echo wp_trim_words(get_the_excerpt($post_id), 25, '...'); ?>
						</p>
						<p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
							<?php echo get_the_date('F j, Y', $post_id); ?>
						</p>
						<p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
						<?php
							$all_cats = '';
							foreach ($get_post_category as $cat) {
								$all_cats = $all_cats . $cat -> name .',';
							}
							echo $all_cats;
							?>
						</p>
					</div>
					<img
						class="w-[250px] !h-[250px] lg:block hidden rounded-tr-[10px] rounded-br-[10px]"
						src="<?php echo $get_all_custom_fields['homepage_image']; ?>"
						alt="<?php echo $title; ?>"
					/>
				</a>
			</div>
           <?php
        endwhile;
    endif;
    wp_die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');