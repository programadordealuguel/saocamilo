<?php get_header(); the_post();  //Template Name: Convênios ?>

<main class="principal">  
  <section class="bloco-1-exames">
    <div class="container">
      <div class="img-top-iternas lazy-background" data-src="<?php the_post_thumbnail_url(); ?>"></div>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>  
  </section>

  <?php $query = new WP_Query( array( 'post_type' => 'convenio' , 'posts_per_page' => -1 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="lista-convenios">
    <div class="container">
      <div class="content-convenios">
        <div class="row align-items-center">
          <?php while($query->have_posts()) {  $query->the_post(); ?>
          <div class="col-4 col-md-2 text-center"><img data-src="<?php the_post_thumbnail_url(); ?>" class="img-fluid lazy-image"></div>
          <?php } ?>
        </div>  
      </div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

  <section class="cta-profissionais cta-convenios">
    <div class="container">
      <h4>Fale conosco!</h4>
      <p>Entre em contato para consultar a cobertura e agende seus exames conosco</p>
      <div class="text-center d-block"><a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul">Agendar exame</a></div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
