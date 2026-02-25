<?php get_header(); the_post();  //Template Name: Blog ?>

<main class="principal">
  <section class="bloco-1-exames single-exame-content">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>  
  </section>

  <section class="busca-blog">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <form role="search" method="get" action="<?php bloginfo('url') ?>/">
            <div class="icon-busca"></div>
            <input type="search" class="input-busca" placeholder="Buscar" value="" name="s">
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php 
    $posts_por_pagina = 6;
    $total_postagens = wp_count_posts()->publish;
    $total_paginas = ceil($total_postagens / $posts_por_pagina);
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'posts_per_page' => $posts_por_pagina,
        'paged' => $paged,
        'post_type' => 'post'
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
  ?>
  <section class="lista-posts-blog">
    <div class="container">
      <div class="row">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-md-4 cada-post-lista">
          <div class="cada-img-post lazy-background" data-src="<?php the_post_thumbnail_url(); ?>"></div>
          <h2 class="tit-cada-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
          <div class="row align-items-center">
            <div class="col-6"><span>15/07/2022</span></div>
            <div class="col-6 text-right"><a href="<?php the_permalink(); ?>" class="btn-azul">Leia mais</a></div>
          </div>
        </div>
        <?php } ?>
      </div>
      <?php 
        echo '<div class="pagination">';
        echo paginate_links(array(
            'total' => $total_paginas,
            'current' => $paged,
            'prev_text' => __('Anterior'),
            'next_text' => __('Próxima'),
        ));
        echo '</div>';
      ?>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
