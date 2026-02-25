<?php get_header(); the_post();  ?>

<main class="principal"> 
  <section class="bloco-1-exames single-exame-content single-profissional">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><?php the_title(); ?></h1>
          <img data-src="<?php the_post_thumbnail_url(); ?>" class="img-fluid img-profissional-single lazy-image" alt="Title">
        </div>
        <div class="col-md-6">
          <div class="info-single-medico">
            <?php the_field('especialidade_profissional'); ?><br>
            <?php the_field('crm_profissional'); ?>
          </div>
          <?php the_content(); ?>
        </div>
      </div>
    </div>  
  </section>

  <section class="cta-azul-exame">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h3>Agende seu exame conosco</h3>
          <p>Conte com a precisão tecnológica e o acolhimento da São Camilo para realizar seus exames com segurança.</p>
          <a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul">Agendar exame</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
