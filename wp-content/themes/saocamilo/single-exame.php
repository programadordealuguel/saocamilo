<?php get_header(); the_post(); ?>

<main class="principal">  
  <section class="bloco-1-exames single-exame-content">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="img-top-iternas lazy-background" data-src="<?php the_post_thumbnail_url(); ?>"></div>
      <?php the_content(); ?>
    </div>  
  </section>

  <section class="cta-azul-exame">
    <div class="container">
      <h3>Clínica São Camilo</h3>
      <div class="img-cta-azul-exame" style="background-image: url(<?php the_field('imagem_exames', 116); ?>);"></div>
      <?php echo acf_esc_html(get_field('texto_exames',116)); ?>
      <div class="alinha-mobile">
        <h4>Agende seu exame conosco</h4>
        <p>Conte com a precisão tecnológica e o acolhimento da São Camilo para realizar seus exames com segurança.</p>
        <a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul">Agendar exame</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
