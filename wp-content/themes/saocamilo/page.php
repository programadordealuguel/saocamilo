<?php get_header(); the_post(); ?>

<main class="principal"> 
  <section class="bloco-1-exames">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="text-format">
        <?php the_content(); ?>
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
