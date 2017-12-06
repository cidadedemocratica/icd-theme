<?php
/*
 *  Functions.php - Funções e Customizações básicas do WP - Enrique@Caleidosdev
 */

/*------------------------------------*\
	Módulos Externos
\*------------------------------------*/

// Espaço destinado a carregar módulos externos

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

// Seta largura de conteúdo 

if (!isset($content_width))
{
    $content_width = 1020;
}

if (function_exists('add_theme_support'))
{
    // Adiciona menus
    add_theme_support('menus');

    // Adiciona e customiza tamanho de imagens

    add_theme_support('post-thumbnails');
    add_image_size('large', 1280, '', true); // Large Thumbnail
    add_image_size('medium', 800, '', true); // Medium Thumbnail
    add_image_size('small', 240, '', true); // Small Thumbnail

    // Custom Thumbnail Size: 
    /* add_image_size('custom-size', 700, 200, true); 
       the_post_thumbnail('custom-size'); */

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Registra Menus
function register_my_menus()
{
    register_nav_menus( array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu'), // Main Navigation
        //'extra-menu' => __('Extra Menu') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}


// Remove Admin bar
function remove_admin_bar()
{
    return false;
}


// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

//Impede que o JQuery seja carregado via Wordpress (pois já está sendo carregado no footer.php)
function change_default_jquery( ){
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');   
}



function wpb_adding_scripts() {

    wp_register_script('owlcarousel', get_template_directory_uri().'/js/vendor/owl.carousel.min.js', array('jquery'),'1', true);
    wp_enqueue_script('owlcarousel');

    wp_register_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), time(), true);
    wp_enqueue_script('main');

    $parameters = array(
        'teste' => 'Hello, World!'
    );
    
    wp_localize_script('main', 'parametros', $parameters );

}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'register_my_menus'); // Add HTML5 Blank Menu

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether


/*------------------------------------*\
	Funções Úteis
\*------------------------------------*/

/**
* Função themeurl
* @param caminho: um caminho dentro da pasta do tema, para um arquivo X
* @return a URL absoluta para o arquivo X
**/

function themeurl($caminho){
    echo get_template_directory_uri().$caminho;
    return;
}

/**
* Função the_slug
* @param id - aceita um id de um tipo_produto
* @return o slug do post
**/

function the_slug($id) {
    $post_data = get_post($id, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
}


    

?>
