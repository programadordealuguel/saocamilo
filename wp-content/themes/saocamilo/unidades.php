<?php get_header(); the_post();  //Template Name: Unidades ?>

<main class="principal"> 
  <section class="bloco-1-exames single-exame-content">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>  
  </section>

  <?php $query = new WP_Query( array( 'post_type' => 'unidade' , 'posts_per_page' => 8 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="lista-unidades">
    <div class="container">
      <div class="row">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-md-4">
          <div class="cada-unidade-pag">
            <h2><?php the_title(); ?></h2>
            <div class="img-unidade lazy-background" data-src="<?php the_post_thumbnail_url(); ?>"></div>
            <div class="d-block"><a href="tel:<?php the_field('telefone_unidade'); ?>" class="phone-unidade"><?php the_field('telefone_unidade'); ?></a></div>
            <div class="d-block"><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_field('whatsapp_unidade')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es."" class="whatsapp-unidade"><?php the_field('whatsapp_unidade'); ?></a></div>
            <?php the_content(); ?>
          </div>
          <?php echo get_field('mapa_iframe_unidade'); ?>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

  <section class="cta-profissionais cta-convenios">
    <div class="container">
      <?php echo acf_esc_html(get_field('texto_cta_1')); ?>
      <div class="text-center d-block"><a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul">Agendar exame</a></div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
