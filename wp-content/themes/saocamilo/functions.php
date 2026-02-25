<?php

//LOGO NO WP-ADMIN
function custom_login_logo() {
    echo '
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(' . get_stylesheet_directory_uri() . '/images/logo-wpadmin.svg);
            padding-bottom: 30px;
            background-size: contain;
            width: 100%;
            height: 80px;
        }
    </style>';
}
add_action('login_head', 'custom_login_logo');

function excerpt_limit($limit = 120) {
    $excerpt = get_the_excerpt();
    $excerpt = wp_strip_all_tags($excerpt);
    return mb_strimwidth($excerpt, 0, $limit, '...');
}


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];
}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
    .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
    }
    </style>';
}

add_action( 'admin_head', 'fix_svg' );

//formata tel
function RemoveSpecialChar($str)
{
    $res = preg_replace('/[(-)-\@\.\;\" "]+/', '', $str);
    return $res;
}


// Remove suporte a trackbacks e pingbacks
function remove_pingback_support() {
    remove_post_type_support('post', 'trackbacks');
}
add_action('init', 'remove_pingback_support');


// Remove o formulário e comentários do front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

//Adeus barra de VarnishAdmin
function remove_barra_admin(){
    return false;
}
add_filter( 'show_admin_bar' , 'remove_barra_admin');

function setup_theme()
{
 add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'setup_theme' );
add_theme_support( 'post-thumbnails' );


//PÁGINA DE OPÇÕES GERAIS
add_action('admin_menu', 'add_global_custom_options');
function add_global_custom_options()
	{
	    add_options_page('Dados gerais', 'Dados gerais', 'manage_options', 'functions','global_custom_options');
	}
    function global_custom_options() { ?>
  	<div class="wrap">
  		<h2>Dados gerais do site</h2>
  		<form method="post" action="options.php">
  			<?php wp_nonce_field('update-options') ?>
            <h2>Redes Sociais</h2>
            <p><strong>Facebook:</strong><br /><input type="text" name="facebook" size="45" value="<?php echo get_option('facebook'); ?>" /></p>
            <p><strong>Instagram:</strong><br /><input type="text" name="instagram" size="45" value="<?php echo get_option('instagram'); ?>" /></p>
            <h2>Links</h2>
            <p><strong>Resultados de exames:</strong><br /><input type="text" name="link_1" size="45" value="<?php echo get_option('link_1'); ?>" /></p>
            <h2>Contatos</h2>
            <p><strong>Whatsapp:</strong><br /><input type="text" name="whatsapp" size="45" value="<?php echo get_option('whatsapp'); ?>" /></p>
            <p><strong>Telefone:</strong><br /><input type="text" name="telefone" size="45" value="<?php echo get_option('telefone'); ?>" /></p>
            <h2>Textos Rodapé</h2>
            <p><strong>Responsável Técnico:</strong><br /><textarea style="width:50%;height:100px" name="responsavel" value="<?php echo get_option('responsavel'); ?>"><?php echo get_option('responsavel'); ?></textarea></p>
            <p><input type="submit" name="Submit" value="Salvar" /></p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="whatsapp,responsavel,facebook,instagram,telefone,link_1" />
  		</form>
  	</div>

<?php } 



















