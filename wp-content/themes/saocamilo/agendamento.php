<?php get_header(); the_post();  //Template Name: Agendamento ?>

<main class="principal">  
  <section class="bloco-1-exames single-exame-content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <div class="content-formulario">
            <?php echo do_shortcode('[contact-form-7 id="f446004" title="Agendamento"]'); ?>
          </div>
        </div>
      </div>
    </div>  
  </section>
</main>

<?php get_footer(); ?>
