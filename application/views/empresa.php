<!doctype html>
<html class="no-js" lang="pt-br">

<head>
  <title> Cecomatec | Empresa </title>
  <?php include("utils/start.php"); ?>
</head>

<body>
  <!-- start header -->
  <?php include_once("utils/header.php"); ?>
  <!-- end header -->

  <!-- start feature box section -->
  <section class="wow fadeIn no-padding" id="Microfusao">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 text-center no-padding-bottom last-paragraph-no-margin padding-seven-tb sm-padding-70px-top">
          <h5 class="margin-three-bottom text-dark-gray alt-font font-weight-300 xs-margin-ten-bottom">Desde 1988, desenvolvendo máquinas para Fundição de Precisão / Microfusão.</span></h5>
          <!-- <div class="text-medium-gray text-medium margin-5px-bottom xs-margin-three-bottom">A Cecomatec é uma empresa familiar e pioneira no desenvolvimento de máquinas para Microfusão/Fundição de precisão, tendo fabricado e instalado grande parte das máquinas em funcionamento atualmente no Brasil
            Atualmente, tem diversificado suas atividades, atuando em desenvolvimento de projetos, fabricação de máquinas, equipamentos e peças técnicas para atendimento de variados setores da indústria, nacionais e internacionais.
          </div> -->
        </div>
      </div>

      <div class="row" style="margin-bottom: 100px">
        <!-- start process step item -->
        <div class="col-md-6 text-center feature-box-10 sm-margin-20px-bottom wow fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
          <div class="d-inline-block padding-five-all margin-10px-bottom center-all">
            <span class="center-all number alt-font border-width-2 border-all rounded-circle letter-spacing-minus-1 text-extra-dark-gray">1988</span>
          </div>
          <div class="alt-font text-medium text-extra-dark-gray margin-10px-bottom">Início das atividades</div>
          <p class="mx-auto">
            A Cecomatec é uma empresa familiar e pioneira no desenvolvimento de máquinas para Microfusão/Fundição de precisão, tendo fabricado e instalado grande parte das máquinas em funcionamento atualmente no Brasil
          </p>
        </div>
        <!-- end process step item -->
        <!-- start process step item -->
        <div class="col-md-6 text-center feature-box-10 sm-margin-20px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
          <div class="d-inline-block padding-five-all margin-10px-bottom center-all">
            <span class="number number-center alt-font border-width-2 center-all border-all rounded-circle letter-spacing-minus-1 text-extra-dark-gray" id="current-year">0000</span>
          </div>
          <div class="alt-font text-medium text-extra-dark-gray margin-10px-bottom">Atualmente</div>
          <p class="mx-auto">
            Atualmente, tem diversificado suas atividades, atuando em desenvolvimento de projetos, fabricação de máquinas, equipamentos e peças técnicas para atendimento de variados setores da indústria, nacionais e internacionais.
          </p>
        </div>
        <!-- end process step item -->
        <!-- start process step item -->
        <!-- <div class="col-md-6 text-center feature-box-10 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <div class="d-inline-block padding-five-all margin-10px-bottom center-all">
            <span class="number alt-font border-width-2 border-all center-all border-color-deep-pink rounded-circle letter-spacing-minus-1 text-extra-dark-gray">03</span>
          </div>
          <div class="alt-font text-medium text-extra-dark-gray margin-10px-bottom">Testing for Perfection</div>
          <p class="mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
        </div> -->
        <!-- end process step item -->
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 text-center last-paragraph-no-margin padding-seven-tb no-padding-top">
          <h5 class="margin-5px-bottom text-extra-dark-gray alt-font font-weight-600 xs-margin-three-bottom text-uppercase"><span class="font-weight-700">Tecnologia e robustez no produto e dedicação ao cliente, são o foco de nosso trabalho.</h5>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 text-center no-padding sm-padding-70px-top">
          <img src="<?= base_url("assets/site/img/empresa.jpg") ?>" alt="" class="border-radius-10px">
        </div>
      </div>
    </div>
  </section>

  <!-- end fancy text box style 02 section -->

  <!-- start contact section -->
  <section class="wow fadeIn padding-60px-tb">
    <div class="container">
      <div class="row text-center padding-one-half-bottom">

        <div class="col-md-12 col-sm-12 col-xs-12 sm-margin-10px-bottom sm-text-center wow fadeInDown">
          <span class="alt-font text-large sm-no-margin-top display-inline-block width-100" style="color:#6f6f6f;"> Quer saber mais sobre nossos produtos? </span>
        </div>
      </div>

      <div class="row text-center">

        <div class="col-md-12 col-sm-12 col-xs-12 sm-text-center wow fadeInDown">
          <a href="<?= site_url("contato") ?>" class="btn btn-orange-style-2 btn-large btn-soft-rounded" data-wow-delay="0.4s">Fale com a Cecomatec </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- start footer -->
  <?php include_once("utils/footer.php"); ?>
  <!-- end footer -->

  <!-- start scroll to top -->
  <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
  <!-- end scroll to top  -->
  <?php include_once("utils/end.php") ?>

  <script>
    $("#current-year").text(new Date().getFullYear())
  </script>
</body>

</html>