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



register_nav_menus (

  array (

      'main-menu' => __( 'Principal', 'paulabarreto' ),

			'category-menu' => __( 'Categorias', 'paulabarreto' ),

  )

);



//Ajax credenciados

add_action('wp_ajax_filtrar_credenciados', 'filtrar_credenciados_callback');

add_action('wp_ajax_nopriv_filtrar_credenciados', 'filtrar_credenciados_callback');



function filtrar_credenciados_callback() {

    $cidade = sanitize_text_field($_POST['cidade']);

    $servico = sanitize_text_field($_POST['servico']);



    $tax_query = array();



    if (!empty($cidade)) {

        $tax_query[] = array(

            'taxonomy' => 'cidade',

            'field' => 'slug',

            'terms' => $cidade

        );

    }



    if (!empty($servico)) {

        $tax_query[] = array(

            'taxonomy' => 'servico',

            'field' => 'slug',

            'terms' => $servico

        );

    }



    $args = array(

        'post_type' => 'credenciado',

        'posts_per_page' => -1,

    );



    if (!empty($tax_query)) {

        $args['tax_query'] = $tax_query;

    }



    $query = new WP_Query($args);



    if ($query->have_posts()) :

        while ($query->have_posts()) : $query->the_post(); ?>

            <div class="col-md-4">

                <div class="cada-credenciado">

                    <div class="cada-img-credenciado" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>

                    <div class="content-cada-credenciado">

                        <h5><?php the_title(); ?></h5>

                        <?php the_content(); ?>

                        <div class="d-block text-center">

                            <a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="btn-laranja">Agendar Consulta</a>

                        </div>

                    </div>

                </div>

            </div>

        <?php endwhile;

    else :

        echo '<div class="col-12"><p>Nenhum credenciado encontrado com os filtros selecionados.</p></div>';

    endif;



    wp_die();

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

                <p><strong>Facebook:</strong><br />

  				<input type="text" name="facebook" size="45" value="<?php echo get_option('facebook'); ?>" />

				</p>

                <p><strong>Instagram:</strong><br />

  				<input type="text" name="instagram" size="45" value="<?php echo get_option('instagram'); ?>" />

				</p>

                <p><strong>Linkedin:</strong><br />

  				<input type="text" name="linkedin" size="45" value="<?php echo get_option('linkedin'); ?>" />

				</p>

                <p><strong>Youtube:</strong><br />

  				<input type="text" name="youtube" size="45" value="<?php echo get_option('youtube'); ?>" />

				</p>

                <h2>Links</h2>

                <p><strong>Link Exames:</strong><br />

  				<input type="text" name="link_1" size="45" value="<?php echo get_option('link_1'); ?>" />

				</p>

				<h2>Contatos</h2>

				<p><strong>Whatsapp:</strong><br />

  				<input type="text" name="whatsapp" size="45" value="<?php echo get_option('whatsapp'); ?>" />

				</p>

                <p><strong>Telefone:</strong><br />

  				<input type="text" name="telefone" size="45" value="<?php echo get_option('telefone'); ?>" />

				</p>

				<p><strong>E-mail:</strong><br />

					<input type="text" name="email" size="45" value="<?php echo get_option('email'); ?>" />

				</p><strong>Mapa:</strong><br />

					<textarea style="width:100%;height:100px"  name="mapa"  value='<?php echo get_option('mapa'); ?>'><?php echo get_option('mapa'); ?></textarea>

				</p>
  			<p><input type="submit" name="Submit" value="Salvar" /></p>

  			<input type="hidden" name="action" value="update" />

  			<input type="hidden" name="page_options" value="whatsapp,email,clinica1,mapa,central,responsavel,facebook,instagram,youtube,telefone,linkedin,link_1,link_2,link_3" />

  		</form>

  	</div>

<?php } 



















