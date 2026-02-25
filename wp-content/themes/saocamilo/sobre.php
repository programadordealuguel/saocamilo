<?php get_header(); the_post();  //Template Name: Sobre ?>

<main class="principal">
  <section class="bloco-1-sobre">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <?php echo get_field('video_sobre'); ?>
        </div>
        <div class="col-lg-6">
          <?php the_content(); ?>
        </div>
      </div>
    </div>  
  </section>

  <section class="sec-azul-sobre">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <img data-src="<?php the_field('imagem_missao'); ?>" class="img-fluid lazy-image" alt="Exames de imagem  em Sinop">
          <h3><?php the_field('texto_missao'); ?></h3>
        </div>
        <div class="col-lg-6">
          <?php echo acf_esc_html(get_field('missao_visao_e_valores')); ?>
        </div>
      </div>
    </div>
  </section>

  <?php $query = new WP_Query( array( 'post_type' => 'historia' , 'posts_per_page' => -1,'orderby' => 'title','order' => 'ASC' ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec sec-historia">
    <div class="container">
      <h2>Nossa História</h2>
      <div class="carousel-historia" id="carousel-historia">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div>
          <div class="cada-historia">
            <div class="ano"><?php the_title(); ?></div>
            <div class="d-block text-center"><div class="img-historia lazy-background" data-src="<?php the_post_thumbnail_url(); ?>"></div></div>
            <?php the_excerpt(); ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

  <section class="sec sec-a-clinica-sobre">
    <div class="container">
      <?php echo acf_esc_html(get_field('texto_a_clinica')); ?>
      <div class="row">
        <div class="col-xxl-4">
          <div class="cada-icon-clinica-sobre">
            <img class="lazy-image" data-src="<?php bloginfo('template_directory') ?>/images/c-1.svg" width="41" height="41" alt="Equipamentos de última geração">
            <p>Equipamentos de última geração para Ressonância Magnética e Tomografia Computadorizada.</p>
          </div>
        </div>
        <div class="col-xxl-4">
          <div class="cada-icon-clinica-sobre">
            <img class="lazy-image" data-src="<?php bloginfo('template_directory') ?>/images/c-2.svg" width="41" height="41" alt="Mamografia digital">
            <p>Mamografia digital com tomossíntese, que permite maior nitidez e rastreamento precoce de lesões.</p>
          </div>
        </div>
        <div class="col-xxl-4">
          <div class="cada-icon-clinica-sobre">
            <img class="lazy-image" data-src="<?php bloginfo('template_directory') ?>/images/c-3.svg" width="41" height="41" alt="Ultrassonografias avançadas">
            <p>Ultrassonografias avançadas, incluindo elastografia e protocolos multiparamétricos.</p>
          </div>
        </div>
        <div class="col-xxl-4">
          <div class="cada-icon-clinica-sobre">
            <img class="lazy-image" data-src="<?php bloginfo('template_directory') ?>/images/c-4.svg" width="41" height="41" alt="Biopsia prostática">
            <p>Biopsia prostática guia por fusão de imagens, garantindo máxima precisão em diagnósticos urológicos.</p>
          </div>
        </div>
        <div class="col-xxl-4">
          <div class="cada-icon-clinica-sobre">
            <img class="lazy-image" data-src="<?php bloginfo('template_directory') ?>/images/c-5.svg" width="41" height="41" alt="Avaliações especializadas">
            <p>Avaliações especializadas, como DXA para composição corporal e VFA para avaliação de fraturas.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $query = new WP_Query( array( 'post_type' => 'certificacao' , 'posts_per_page' => -1 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec sec-qualidade-sobre">
    <div class="container">
      <h2>Qualidade reconhecida em cada detalhe</h2>
      <p>As certificações da São Camilo vão além de padrões técnicos. Elas refletem o compromisso com equipamentos de alta precisão, processos rigorosos de qualidade e uma equipe em constante atualização, garantindo segurança e confiabilidade em cada exame.</p>
      <div class="row">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-4 col-lg-2">
          <img data-src="<?php the_post_thumbnail_url(); ?>" class="img-fluid lazy-image" alt="<?php the_title(); ?>">
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

  <?php $query = new WP_Query( array( 'post_type' => 'referencia' , 'posts_per_page' => -1 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec-referencia-sobre">
    <div class="container">
      <h2>O que faz da São Camilo uma referência em diagnóstico por imagem</h2>
      <div class="row">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-xl-6 col-xxl-4">
          <div class="cada-referencia">
            <div class="icon-referencia"></div>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </div>
        </div>
        <?php } ?>
      </div>
      <h4>Agende seu exame agora e experimente o cuidado que atravessa gerações.</h4>
      <div class="d-block text-center"><a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul">Agendar exame</a></div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
