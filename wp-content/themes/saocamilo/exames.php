<?php get_header(); the_post();  //Template Name: Exames ?>

<main class="principal"> 
  <section class="bloco-1-exames">
    <div class="container">
      <div class="img-top-iternas lazy-background" data-src="<?php the_post_thumbnail_url(); ?>"></div>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php 
        $query = new WP_Query( array( 
          'post_type'      => 'exame',
          'posts_per_page' => 8,
          'tax_query'      => array(
            array(
                'taxonomy' => 't',
                'field'    => 'slug',
                'terms'    => 'principal',
            ),
          ),
        ));
      ?>
      <?php if($query->have_posts()) { ?> 
      <div class="row lista-exames-1">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-lg-6 col-xxl-4">
          <a href="<?php the_permalink(); ?>" class="btn-exame-1"><?php the_title(); ?></a>
        </div>
        <?php } ?>        
      </div>
    </div>  
  </section>
  <?php } wp_reset_postdata(); ?>

  <section class="lista-exames-2">
    <div class="container">
      <?php
      $terms = get_terms(array(
          'taxonomy'   => 't',
          'hide_empty' => true,
          'exclude' => 2
      ));

      if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
          $args = array(
              'post_type'      => 'exame',
              'posts_per_page' => -1,
              'tax_query'      => array(
                  array(
                      'taxonomy' => 't',
                      'field'    => 'term_id',
                      'terms'    => $term->term_id,
                  ),
              ),
          );
          $query = new WP_Query($args);
          if ($query->have_posts()) { ?>
            <div class="cada-grupo-exames">
              <h2><?php echo esc_html($term->name); ?></h2>
              <div class="row lista-exames-1">
                  <?php while ($query->have_posts()) : $query->the_post(); ?>
                      <div class="col-lg-6 col-xxl-4">
                          <a href="<?php the_permalink(); ?>" class="btn-exame-2">
                              <?php the_title(); ?>
                          </a>
                      </div>
                  <?php endwhile; ?>
              </div>
            </div>
          <?php } wp_reset_postdata();
        }
      } ?>
    </div>
  </section>

  <section class="sec-azul-exames">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <img data-src="<?php the_field('imagem_cta_imagem'); ?>" class="img-fluid lazy-image" alt="Exames de imagem  em Sinop">
        </div>
        <div class="col-lg-6">
          <?php echo acf_esc_html(get_field('texto_cta_imagem')); ?>
          <a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul">Agendar exame</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
