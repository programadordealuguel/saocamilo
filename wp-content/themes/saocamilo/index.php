<?php get_header(); the_post();  //Template Name: Home ?>

<main class="principal">
      
      <section class="hero">
        <div class="container">
          <div class="row align-items-center">
            
            <div class="col-lg-6 order-lg-2">
              <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="Clínica São Camilo">
            </div>
            <div class="col-lg-6 order-lg-1">
              <?php the_content(); ?>
              <a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul">Agendar exame</a>
            </div>
          </div>
        </div>
      </section>

      <section class="sec sec-imagem-texto-1">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <img src="<?php the_field('imagem_texto_1'); ?>" class="img-fluid img-cta-texto-img" alt="Exames de imagem sinop">
            </div>
            <div class="col-lg-6">
              <?php echo acf_esc_html(get_field('texto_1_home')); ?>
              <a href="<?php bloginfo('url'); ?>/sobre-nos" class="btn-azul">Saiba mais</a>
            </div>
          </div>
        </div>
      </section>

      <section class="sec sec-botoes-home">
        <div class="container">
          <div class="content-botoes-home">
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <img src="<?php bloginfo('template_directory') ?>/images/icon-agendamento.svg" height="52" alt="Agendamento online">
                <h2>Agendamento online</h2>
                <p>Praticidade para escolher o melhor horário para você.</p>
                <a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul-escuro">Acessar agora</a>
              </div>
              <div class="col-md-6 col-lg-3">
                <img src="<?php bloginfo('template_directory') ?>/images/icon-exames.svg" height="52" alt="Resultados de exames">
                <h2>Resultados de exames</h2>
                <p>Acesse seus resultados com segurança.</p>
                <a href="#" class="btn-azul-escuro">Acessar agora</a>
              </div>
              <div class="col-md-6 col-lg-3">
                <img src="<?php bloginfo('template_directory') ?>/images/icon-convenios.svg" height="52" alt="Convênios atendidos">
                <h2>Convênios atendidos</h2>
                <p>Atendemos os principais planos da região.</p>
                <a href="<?php bloginfo('url'); ?>/convenios" class="btn-azul-escuro">Acessar agora</a>
              </div>
              <div class="col-md-6 col-lg-3">
                <img src="<?php bloginfo('template_directory') ?>/images/icon-unidades.svg" height="52" alt="Unidades">
                <h2>Unidades</h2>
                <p>Encontre a unidade mais próxima.</p>
                <a href="<?php bloginfo('url'); ?>/unidades" class="btn-azul-escuro">Acessar agora</a>
              </div>
            </div>
          </div>
        </div>
      </section>

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
      <section class="sec sec-exames-realizados">
        <div class="container">
          <h2>Exames mais realizados</h2>
          <h3>Tecnologia e precisão em cada diagnóstico.</h3>
          <p>Da prevenção ao acompanhamento de condições complexas, oferecemos uma linha completa de exames para cuidar da sua saúde em todas as fases da vida.</p>
          <div class="row content-exames-realizados">
            <?php while($query->have_posts()) {  $query->the_post(); ?>
            <div class="col-md-6 col-xl-4">
              <div class="cada-exame-content">
                <div class="cada-exame-left"  style="background-image: url(<?php the_field('icone_exame'); ?>);">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="cada-exame-right">
                  <a alt="Saiba mais" href="<?php the_permalink(); ?>">
                    <img src="<?php bloginfo('template_directory') ?>/images/icon-saiba-mais.svg" alt="Saiba mais" width="32" height="33">
                  </a>
                  <span>Saiba mais</span>
                </div>
              </div>  
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <?php } wp_reset_postdata(); ?>

      <section class="sec-cta-texto-cinza">
        <div class="container">
          <div class="content-cta-texto-cinza">
            <?php echo acf_esc_html(get_field('texto_cta_1')); ?>
            <a href="<?php bloginfo('url'); ?>/agendamento" class="btn-azul">Agendar exame</a>
          </div>
        </div>
      </section>

      <?php $query = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => 6 ) ); ?>
      <?php if($query->have_posts()) { ?>  
      <section class="sec sec-blog-home">
        <div class="container">
          <h2>Blog</h2>
          <p>Conteúdos feitos para orientar você e sua família com clareza e segurança.</p>
          <div class="carousel-blog" id="carousel-blog">
            <?php while($query->have_posts()) {  $query->the_post(); ?>
            <div>
              <div class="cada-post-blog">
                <div class="img-blog"  style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                <div class="content-blog">
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="text-center d-block"><a href="<?php bloginfo('url'); ?>/blog" class="btn-azul">Ver todos</a></div>
        </div>
      </section>
      <?php } wp_reset_postdata(); ?>

      <?php $query = new WP_Query( array( 'post_type' => 'depoimento' , 'posts_per_page' => 4 ) ); ?>
      <?php if($query->have_posts()) { ?>   
      <section class="sec-depoimentos">
        <div class="container">
          <h2><strong>Histórias de cuidado que passam de geração em geração:</strong> o que nossos pacientes dizem no Google!</h2>
          <div class="carousel-depoimentos" id="carousel-depoimentos">
            <?php while($query->have_posts()) {  $query->the_post(); ?>
            <div>
              <div class="content-autor-depoimento">
                <div class="autor-left"><?php echo mb_substr(get_the_title(), 0, 1); ?></div>
                <div class="autor-right">
                  <h3><?php the_title(); ?></h3>
                  <img src="<?php bloginfo('template_directory'); ?>/images/icon-rating.svg" alt="5 estrelas">
                </div>
              </div>
              <div class="cada-depoimento-texto">
                <?php the_content(); ?>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <?php } wp_reset_postdata(); ?>

      <?php $query = new WP_Query( array( 'post_type' => 'unidade' , 'posts_per_page' => 8 ) ); ?>
      <?php if($query->have_posts()) { ?> 
      <section class="sec sec-unidades">
        <div class="container">
          <h2>Estamos perto de você!</h2>
          <div class="row lista-unidades">
            <?php while($query->have_posts()) {  $query->the_post(); ?>
            <div class="col-lg-4">
              <?php echo get_field('mapa_iframe_unidade'); ?>
              <div class="content-cada-unidade">
                <h3><?php the_title(); ?></h3>
                <a href="tel:<?php the_field('telefone_unidade'); ?>" class="icon-phone"><?php the_field('telefone_unidade'); ?></a>
                <?php the_content(); ?>
                <a target="_blank" href="<?php the_field('link_mapa_unidade'); ?>" class="btn-branco">veja no mapa</a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <?php } wp_reset_postdata(); ?>
    </main>

<?php get_footer(); ?>
