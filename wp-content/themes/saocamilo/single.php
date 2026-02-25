<?php get_header(); the_post(); ?>

<main class="principal"> 
  <section class="bloco-1-exames">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="data">Publicado em <?php the_date(); ?></div>
      <div class="img-top-iternas" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
      <div class="text-format">
        <?php the_content(); ?>
      </div>
    </div>  
  </section>

  <?php $author_id = get_the_author_meta('ID'); ?>
  <section class="autor-post">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="content-autor">
            <div class="row align-items-center">
              <div class="col-2"><div class="img-autor" style="background-image: url(<?php echo get_field('imagem_autor', 'user_' . $author_id); ?>);"></div></div>
              <div class="col-10">
                <h5>Autor: <strong><?php echo get_the_author(); ?></strong></h5>
                <span><?php echo get_the_author_meta('description'); ?></span>
              </div>
            </div>
          </div>
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
