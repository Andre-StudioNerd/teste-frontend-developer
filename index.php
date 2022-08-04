<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Parranchos | RN</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <meta name="description" content="Complexo de lazer beira-mar com diversos atrativos" />
  <meta name="author" content="Andre Luis Fernandes"/>
  <meta name="reply-to" content="deco.luisfernandes@gmail.com">
  <meta name="generator" content="Visual Studio Code">
  <meta name="language" content="pt-br">
  <meta name="robots" content="index,nofollow" />
  <meta name="keywords" content="mergulho,natal,Parranchos"/>

  <!-- Favicons -->
  <link href="assets/img/mara_icon.png" rel="icon">
  <link href="assets/img/touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Arquivos -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


   <!-- Jquery Arquivo-->
   

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- CSS Arquivo-->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- JS Arquivo-->
  <script>

  </script>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- ======= Logotipo ======= -->
      <div class="logo">
        <h1 class="text-light"><a href="index.php"> <img src="assets/img/logo_parranchos.png" class="img-fluid img-style" alt="logo"></a></h1>
        
      </div>
       <!-- ======= Chamada telefone ======= -->
      <div class="phone">
        <p><a href="tel:+559999999999" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i> (91) 9999-9999</a></p>
      </div>
    

    </div>
  </header><!-- Final Header -->

  <!-- ======= Seção Form ======= -->
  <section id="hero">

    <div class="container alinha_banner" data-aos="fade-up">
        <div class="row space_row">

          <!-- ======= Slogan ======= -->
    <div class="col-xl-6 space">
      <h1>Parrachos Praia Clube</h1>
      <h2>Preencha o formulário de reserva</h2>
      <?php 
      include_once("includes/conecta.php");
      ?>
      <?php
      //mensagem obrigado
      if(isset($_SESSION['msg'])){
       echo $_SESSION['msg'];
      unset($_SESSION['msg']);
      }      
    ?>
   
    </div>
    <!-- ======= Cadastro form ======= -->
    <div class="col-xl-6">
      
    <form action="../ellos/includes/cadastro.php" method="POST" class="form" name="form" id="form_contato">
  <label class="form_title">Faça sua reserva</label>
  <p><input type="text" placeholder="Nome" id="txNome"  required minlength="6" maxlength="60" value="" name="nome" value=""></input></p>
  <p><input type="email" placeholder="E-mail" id="txEmail" minlength="6" maxlength="60" value="" name="email"  value=""></input></p>
  <p><input type="tel" placeholder="Telefone" id="telefone" required minlength="8" value="" name="telefone" value=""></input></p>
  <p><input type="text" placeholder="Mensagem" id="txMensagem" required maxlength="400" name="mensagem"></input></p>
  <button type="submit" id="enviar" name="enviar" value="Enviar">Enviar</button>
  
</form>
    </div>
    </div> 
</div>
  </section><!-- Final Form -->

  <main id="main">

    <!-- ======= Seção Sobre ======= -->
    <section id="about" class="about">
      <div class="container">
      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Quem Somos</h2>
          
        </div>
        <div class="row no-gutters">
          <!-- ======= Parte Descrição ======= -->
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>Parrachos Praia Clube</h3>
              <img src="assets/img/maracajau_deck.jpg" class="img-fluid img-style" alt="Parranchos">
              <p>
              É um complexo de lazer beira-mar com diversos atrativos como piscinas, áreas exclusivas para day use,  passeios de quadriciclo, catamarã, seabob (equipamento exclusivo no Brasil), mergulho livre, mergulho com cilindro e muito mais.
              
              </p>
              <!-- ======= Chamada contato ======= -->
              <a href="#cta" class="about-btn">Entre em contato<i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <!-- ======= Parte Icones ======= -->
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-directions"></i>
                  <h4>Localização</h4>
                  <p>Saindo de Ponta Negra, em Natal, o percurso tem cerca de uma hora. A distância estimada é de 60Km, até chegar em nossa unidade.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-accessibility"></i>
                  <h4>Acessibilidade</h4>
                  <p>Nossas estruturas são adaptadas para receber os diversos públicos, desde idosos até crianças ou adultos com necessidades especiais. Possuímos rampas de fácil acesso, corrimãos, sinalização e um atendimento qualificado.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-time"></i>
                  <h4>Horário</h4>
                  <p>O passeio em Maracajaú, ocorre conforme a tábua de maré do dia.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-first-aid"></i>
                  <h4>Seguro</h4>
                  <p>Contamos com o melhor seguro médico da América Latina para todos os passeios contratados na Parrachos Praia Clube.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- Final Seção Sobre -->

    <!-- ======= Seção Serviços ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Serviços</h2>
          
        </div>

        <div class="row">
          <!-- ======= Descrição Serviços Icones ======= -->
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-anchor"></i></div>
              <h4 class="title"><a href="">Mergulho</a></h4>
              <p class="description">Aproveite um passeio incrível de catamarã direto aos corais que formam piscinas naturais de águas azuis e cristalinas no meio do mar. Temos uma plataforma flutuante para servir petiscos, bebidas e apoio aos mergulhos livre e com snorkel.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-car"></i></div>
              <h4 class="title"><a href="">Buggy</a></h4>
              <p class="description">No passeio de buggy em Maracajaú você vai desfrutar de um roteiro incrível. O passeio tem saída do nosso Praia Clube, em Maracajaú. De lá, você vai percorrer pelas falésias que variam entre 1 a 10 metros de altura, onde é realizada uma parada para foto (trecho que formam pequenas grutas com colorações bem variadas).</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-store-alt"></i></div>
              <h4 class="title"><a href="">Bangalô VIP</a></h4>
              <p class="description">Com amplo espaço beira-mar, contamos com estacionamento próprio, área de lazer com quadra de beach tenis, restaurante, área VIP, piscinas, bar molhado, quiosques, duchas externas, banheiros com acessibilidade e lojinha.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-image-alt"></i></div>
              <h4 class="title"><a href="">Pacote de Foto</a></h4>
              <p class="description">Tenha registrado os momentos mais inesquecíveis do seu passeio subaquático em Maracajaú. O pacote conta com 15 fotos selecionadas em alta resolução e em formato digital, feitas por fotógrafos que irão acompanhar seu mergulho e reproduzir os melhores momentos.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Final Seção Serviços -->

    <!-- ======= Seção Contas ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">
           <!-- ======= Descrição Vantagens Icones ======= -->
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="+2329" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Comentários</strong> positivos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="52197" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Fotos</strong> tiradas</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Horas</strong> de suporte</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15989" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Clientes</strong> atendidos</p>
            </div>
          </div>

        </div>
        <!-- ======= Chamada contato ======= -->
        <div class="center-btn"><a href="#cta" class="btn-service">Entrar em contato</a></div>
        
        
      </div>
      
    </section><!-- Final Seção Contas -->

   

    <!-- ======= Seção FAQ ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Perguntas Frequentes</h2>
          
        </div>

        <div class="row no-gutters">
        <div class="faq-container">
          <!-- ======= FAQS ======= -->
        <div class="faq-item">
              <h5>
                A chuva atrapalha o passeio ?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
              Não. Realizamos os passeios normalmente mesmo com chuvas. A visibilidade embaixo da água não é prejudicada de forma alguma, e você pode realizar o passeio normal.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h5>
              É necessário fazer reserva antecipada ?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
               Recomendamos que sim pois as vagas são limitadas a disponibilidade. Para garantir o seu passeio é necessário fazer a reserva antecipada em nosso site.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h5>
              É preciso saber nadar para fazer o mergulho ?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
              Não é preciso saber nadar, pois contamos com barrigueiras, um tipo de boia flutuante que pode ser utilizado facilmente por pessoas de qualquer idade.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h5>
                Pago taxa para entrar no Praia Clube ?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
               Não. Em nossa unidade em Maracajaú, você não paga nenhuma taxa para entrar, paga somente o que consumir.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h5>
               Posso levar meus pertences para o Catamarã ?
                <span class="faq-plus">&plus;</span>
              </h5>
              <div class="faq-body">
              Leve somente o essencial: protetor solar, óculos de sol, toalhas, chinelo. Em nosso Restaurante possuímos armários (guarda volume). O aluguel pode ser contratado no caixa.
              </div>
            </div>
            <!-- ======= Final FAQS ======= -->
          </div>
        </div>
        </div>
    </section><!-- Final Seção FAQ -->

    <!-- ======= Seção CTA  ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Tem Alguma dúvida ???</h3>
          <h3>Entre em contato pelo nosso WhatsApp</h3>
          <!-- ======= Chamada whatsapp ======= -->
          <a class="cta-btn" href="https://web.whatsapp.com/send?phone=+5516996028689" target="_blank">WhatsApp</a>
        </div>

      </div>
    </section><!-- Final Seção CTA -->

  </main><!-- final do #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
           <!-- ======= Quadro de Informação ======= -->
          <div class="col-lg-4 col-md-6">
           
            <div class="footer-info">
              <h3>Parrachos Praia Clube</h3>
             
              <p>
                
                <strong>Telefone:</strong> 99 9999-9999<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                
                
              </div>
            </div>
          </div>
            <!-- ======= Menu da LP ======= -->
          <div class="col-lg-2 col-md-6 footer-links">
            
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Reserva</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Quem somos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">FAQ</a></li>
              
            </ul>
          </div>
        <!-- ======= Menu da Links Sites ======= -->
          <div class="col-lg-2 col-md-6 footer-links">
             
            <h4>Links Externos</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://reservasrn.parrachos.com.br/" target="_blank">Site</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://blog.parrachos.com.br/" target="_blank" >Blog</a></li>
            </ul>
          </div>
           <!-- ======= Lema ======= -->
          <div class="col-lg-4 col-md-6 footer-newsletter">
            
            <p>Aqui firmamos nosso compromisso em oferecer serviços de turismo de aventura e ecológico com excelência, fazendo da experiência dos nossos clientes, um momento especial de contato com a natureza e de despertar para uma consciência ecológica.</p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
       <!-- ======= Info do rodapé final ======= -->
      <div class="copyright">
        &copy; 2022-Copyright. Todos os direitos resevados.
      </div>
      <div class="credits">
       
        Desenvolvido por André Luís Fernandes
      </div>
    </div>
  </footer><!-- final Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS arquivos -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- JS arquivos -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/valida.js"></script>

<!-- JS FAQ -->
  <script type="text/javascript">
      $(".faq-plus").on('click',function(){
        $(this).parent().parent().find('.faq-body').slideToggle();
      });
    </script>

   
    
</body>

</html>