<?php get_header(); the_post();  //Template Name: Profissionais ?>

<main class="principal">
      
  <section class="bloco-1-exames single-exame-content">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>  
  </section>

  <?php $query = new WP_Query( array( 'post_type' => 'profissional' , 'posts_per_page' => -1 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="lista-profissionais">
    <div class="container">
      <div class="row">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-6 col-lg-4">
          <div class="cada-profissional">
            <div class="img-profissional" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
            <div class="content-texto-profissional">
              <h2><?php the_title(); ?></h2>
              <div class="info-medico">
                <strong><?php the_field('especialidade_profissional'); ?> |</strong>
                <span><?php the_field('crm_profissional'); ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } ?>

  <section class="cta-profissionais">
    <div class="container">
      <?php echo acf_esc_html(get_field('texto_cta_1')); ?>
      <div class="text-center d-block"><a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul">Agendar exame</a></div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
