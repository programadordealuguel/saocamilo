<footer class="rodape">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="<?php bloginfo('template_directory') ?>/images/logo.svg" alt="Clínica São Camilo">
            <h2>Somos a confiança que atravessa gerações.</h2>
            <ul>
              <li>Unidade Sinop Matriz: De segunda a sexta-feira das 7h às 18h - sem pausa para almoço;</li>
              <li>Unidade Sinop Clínica: De segunda a sexta-feira das 7h30 às 12h e das14h às 18h;</li>
              <li>Unidade Alta Floresta: De segunda a sexta-feira das 8h às 12h e das 14h às 18h</li>
            </ul>
            <p><?php echo get_option('responsavel'); ?></p>
            <div class="menu-rodape">
              <a href="#">Sobre •</a>
              <a href="#">Exames •</a>
              <a href="#">Unidades •</a>
              <a href="#">Convênios •</a>
              <a href="#">Agendamento •</a>
              <a href="#">Blog •</a>
              <a href="#">Trabalhe Conosco •</a>
              <a href="#">Política de Privacidade</a>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <h2>Nossas redes sociais</h2>
            <div class="social">
              <?php if (get_option('whatsapp') != NULL) { ?><a href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/icon-whatsapp-azul.svg" alt="Whatsapp"></a><?php } ?>
              <?php if (get_option('instagram') != NULL) { ?><a target="_blank" href="<?php echo get_option('instagram') ?>"><img src="<?php bloginfo('template_directory') ?>/images/icon-instagram-azul.svg" alt="Instagram"></a><?php } ?>
              <?php if (get_option('facebook') != NULL) { ?><a target="_blank" href="<?php echo get_option('facebook') ?>"><img src="<?php bloginfo('template_directory') ?>/images/icon-facebook-azul.svg" alt="Facebook"></a><?php } ?>
              
            </div>
            <p class="p-aviso">As informações em nosso site tem caráter meramente informativo e não substituem as orientações do seu médico.</p>
          </div>
        </div>
        <p class="assinatura">©2025 Centro Cadri | Todos os direitos reservados | <a href="#">Política de privacidade</a> | Desenvolvido pela <a href="#" target="_blank">Agência KOS</a></p> 
      </div>
    </footer>
    
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/padrao.js"></script>
      
  </body>
</html>