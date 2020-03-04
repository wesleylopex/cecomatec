<html class="no-js" lang="pt-br">

<head>
  <title> Cecomatec | Contato </title>
  <?php include("utils/start.php"); ?>
</head>

<body>
  <?php include_once("utils/header.php"); ?>


  <!-- <section class="wow fadeIn bg-light-gray padding-35px-top padding-35px-bottom page-title-small">
    <div class="container">
      <div class="row equalize xs-equalize-auto">
        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
          <div class="display-table-cell vertical-align-middle text-left xs-text-center">
            <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase">Fale com a Cecomatec</h1>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right xs-text-left xs-margin-10px-top">
          <div class="display-table-cell vertical-align-middle breadcrumb text-small alt-font">
            <ul class="xs-text-center">
              <li><span class="text-dark-gray">Estamos sempre prontos para lhe atender</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- start contact form -->
  <section id="contact" class="no-padding">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-6 padding-fifteen-tb padding-two-lr">
          <div class="row">
            <div class="col-md-12">
              <!-- start contact info item -->
              <div class="col-md-4 col-xs-12 text-center xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                <div class="display-inline-block margin-20px-bottom">
                  <div class="bg-extra-medium-gray icon-round-very-small" style="background-color:orange"><i class="icon-map-pin icon-small text-white"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Faça uma visita</div>
                <p class="center-col"><?= $configuracoes->endereco ?></p>
                <a href="#map" class="scroll text-uppercase text-green-jocc text-small margin-15px-top xs-margin-10px-top display-inline-block" style="color:#FF8C00">VEJA NO MAPA</a>
              </div>
              <!-- end contact info item -->
              <!-- start contact info item -->
              <div class="col-md-4 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="display-inline-block margin-20px-bottom">
                  <div class="bg-extra-dark-gray icon-round-very-small" style="background-color:orange"><i class="icon-chat icon-small text-white"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Vamos conversar</div>
                <p class="center-col">
                  <a class="emails hover-orange">
                    <?= $configuracoes->telefone_principal ?>
                  </a>
                  <br>
                  <a class="emails hover-orange">
                    <?= $configuracoes->telefone_secundario ?>
                  </a>
                </p>
                <a class="text-uppercase text-green-jocc text-small margin-15px-top xs-margin-10px-top display-inline-block" style="color:#FF8C00">nos ligue</a>
              </div>
              <!-- end contact info item -->
              <!-- start contact info item -->
              <div class="col-md-4 col-xs-12 text-center wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="display-inline-block margin-20px-bottom">
                  <div class="bg-extra-dark-gray icon-round-very-small" style="background-color:orange"><i class="icon-envelope icon-small text-white"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">deixe um recado</div>
                <p class="center-col"><a href="mailto:<?= $configuracoes->email ?>" class="emails hover-orange"><?= $configuracoes->email ?></a></p><br>
                <a href="mailto:<?= $configuracoes->email ?>" class="text-uppercase  text-small margin-15px-top xs-margin-10px-top display-inline-block" style="color:#FF8C00">envie um e-mail</a>
              </div>
              <!-- end contact info item -->
            </div>
          </div>
        </div>

        <div class="col-md-6" style="background-color: #f9f9f9;">
          <div class="padding-eleven-all text-center xs-no-padding-lr">
            <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom xs-margin-three-bottom">preencha o formulário e retornaremos em breve</div>

            <h5 class="margin-55px-bottom text-dark-gray alt-font font-weight-700 text-uppercase xs-margin-ten-bottom">Contato Via e-mail</h5>

            <form id="project-contact-form" action="javascript:void(0)" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div id="success-project-contact-form" class="no-margin-lr"></div>
                </div>
                <div class="col-md-6">
                  <input type="text" name="nome" placeholder="Nome" class="bg-transparent border-color-medium-gray medium-input border-radius-5 border-color-dark-gray-hover transition-zero4">
                </div>
                <div class="col-md-6">
                  <input type="text" name="telefone" placeholder="Telefone" class="bg-transparent border-color-medium-gray medium-input border-radius-5 border-color-dark-gray-hover transition-zero4">
                </div>
                <div class="col-md-6">
                  <input type="text" name="empresa" placeholder="Empresa" class="bg-transparent border-color-medium-gray medium-input border-radius-5 border-color-dark-gray-hover transition-zero4">
                </div>
                <div class="col-md-6">
                  <input type="text" name="endereco" placeholder="Cidade / Estado" class="bg-transparent border-color-medium-gray medium-input border-radius-5 border-color-dark-gray-hover transition-zero4">
                </div>
                <div class="col-md-12">
                  <input type="text" name="email" placeholder="E-mail" class="bg-transparent border-color-medium-gray medium-input border-radius-5 border-color-dark-gray-hover transition-zero4">
                </div>
                <div class="col-md-12">
                  <textarea name="mensagem" placeholder="Mensagem" rows="6" class="bg-transparent border-color-medium-gray medium-textarea border-radius-5 border-color-dark-gray-hover transition-zero4"></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <button id="sendMessage" type="button" class="text-white btn btn-orange-style-2 btn-large margin-20px-top" style="border-radius: 5px; border: 1px solid">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact form -->

  <!-- start map section -->
  <section class="no-padding">
    <div class="row">
      <div class="col-md-12">
        <div id="map" style="height: 330px; opacity: 0.87;"></div>
      </div>
    </div>
  </section>
  <!-- end map section -->

  <!-- start footer -->
  <?php include_once("utils/footer.php"); ?>
  <!-- end footer -->

  <!-- start scroll to top -->
  <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
  <!-- end scroll to top  -->
  <script>
    var configuracoes = <?= json_encode($configuracoes) ?>;
  </script>
  <script src="<?= base_url("assets/site/js/map.js") ?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlYRX4JcJLzJQ4S8lnVZy6FdvipuszGKY&callback=initMap" defer></script>

  <?php include_once("utils/end.php") ?>

  <script>
    function showAlert(message = null, type = "primary", icon = "fa fa-check", title = null) {
      $.notify({
        icon: icon,
        title: title,
        message: message,
      }, {
        type: type,
        placement: {
          from: "bottom",
          align: "right"
        },
        time: 1000,
      });
    }

    $("#sendMessage").click(function() {
      let form = document.querySelector("#project-contact-form")
      let formData = new FormData(form)

      $.ajax({
        url: "<?= site_url("contato/enviarMensagem/") ?>",
        type: "POST",
        cache: false,
        processData: false,
        contentType: false,
        data: formData,
        success(result) {
          result = JSON.parse(result)
          let message = "Erro ao enviar. Tente novamente"
          let icon = "fa fa-exclamation"

          if (result.success) {
            message = "Mensagem enviada. Em breve retornaremos"
            icon = "fa fa-check"
            $("#project-contact-form")[0].reset()
          }

          showAlert(message, "warning", icon)

        },
      })
    })
  </script>
</body>

</html>