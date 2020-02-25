<!doctype html>
<html class="no-js" lang="en">

<head>
  <!-- title -->
  <title> Cecomatec | Produto </title>
  <?php include_once("utils/start.php") ?>
</head>

<body>

  <?php include_once("utils/header.php") ?>

  <!-- <section class="wow fadeIn bg-light-gray padding-35px-top padding-35px-bottom page-title-small">
    <div class="container">
      <div class="row equalize xs-equalize-auto">
        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
          <div class="display-table-cell vertical-align-middle text-left xs-text-center">
            <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase">Produtos</h1>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right xs-text-left xs-margin-10px-top">
          <div class="display-table-cell vertical-align-middle breadcrumb text-small alt-font">
            <ul class="xs-text-center">
              <li><span class="text-dark-gray">Sempre o melhor para você</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="wow fadeIn animated no-padding-bottom pt-50px" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
      <div class="row equalize sm-equalize-auto">
        <div class="<?= sizeof($produto->imagens) > 1 ? "col-md-7" : "col-md-5" ?> col-sm-12 col-xs-12 text-center sm-margin-30px-bottom wow fadeInLeft height-100" style="visibility: visible; animation-name: fadeInLeft; height: 371px;">
          <div class="blog-post-content xs-margin-30px-bottom xs-text-center">
            <div class="row">
              <?php if (sizeof($produto->imagens) > 1) : ?>
                <div class="col-md-3">
                  <div class="swiper-container gallery-thumbs white-move mt-50px">
                    <div class="swiper-wrapper tiles">
                      <?php foreach ($produto->imagens as $imagem) : ?>
                        <div class="swiper-slide">
                          <div class="owl-product-thumb text-center">
                            <img src="<?= base_url("assets/uploads/produtos/" . $imagem->imagem) ?>" />
                          </div>
                        </div>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
              <?php endif ?>
              <div class="col-md-9">
                <div class="swiper-container gallery-top white-move">
                  <div class="swiper-wrapper tiles">
                    <?php foreach ($produto->imagens as $imagem) : ?>
                      <div class="swiper-slide align-items-center">
                        <div class="owl-product text-center">
                          <img src="<?= base_url("assets/uploads/produtos/" . $imagem->imagem) ?>" />
                        </div>
                      </div>
                    <?php endforeach ?>
                  </div>

                  <?php if (sizeof($produto->imagens) > 1) : ?>
                    <div class="swiper-pagination swiper-pagination-square swiper-pagination-white"></div>
                    <div class="swiper-button-next swiper-button-black-highlight"></div>
                    <div class="swiper-button-prev swiper-button-black-highlight"></div>
                  <?php endif ?>
                </div>
              </div>
            </div>

          </div>
          <?php if ($produto->video) : ?>
            <a href="<?= $produto->video ?>" class="popup-vimeo btn btn-medium btn-transparent-black text-medium btn-rounded mt-10px"> Vídeo <i class="fa fa-youtube-play icon-very-small" aria-hidden="true"></i></a>
          <?php endif ?>
        </div>

        <div class="<?= sizeof($produto->imagens) > 1 ? "col-md-5" : "col-md-7" ?> col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight; height: 371px;">
          <div class="display-table width-100 height-100">
            <div class="display-table-cell vertical-align-middle padding-eigth-lr sm-text-center sm-no-padding width-100">
              <h6 class="alt-font text-extra-dark-gray"><?= $produto->titulo ?></h6>
              <div class="text-medium">
                <p><?= nl2br($produto->descricao) ?></p>
              </div>

              <a href="#contact-form" class="btn btn-orange-style-2 btn-large btn-soft-rounded wow fadeInDown popup-with-form xs-margin-5px-bottom"> Solicite mais informações </a>
              <div class="col-md-12 col-sm-6 col-xs-12 sm-margin-seven-bottom xs-margin-40px-bottom wow fadeInRight last-paragraph-no-margin margin-30px-top no-padding-lr">
                <!-- <a href="https://www.bndes.gov.br/wps/portal/site/home/financiamento/finame/!ut/p/z1/04_iUlDg4tKPAFJABpSA0fpReYllmemJJZn5eYk5-hH6kVFm8T6W3q4eJv4GPu5mfk4Gji6Wlh7ezkaGBi5m-l76UfgVFGQHKgIAWRAQKw!!/" target="_blank"><img src="<?= base_url() ?>assets/site/img/bndes.jpg" style=" width:95px; margin-bottom:7px;" /></a> -->
                <a href="https://www.cartaobndes.gov.br/cartaobndes/" target="_blank">
                  <img src="<?= base_url() ?>assets/site/img/img_cartao.gif" style="width:80px; margin-bottom:7px; margin-right: 10px" />
                </a>
                <a href="https://www.bndes.gov.br/wps/portal/site/home/financiamento/finame/!ut/p/z1/04_iUlDg4tKPAFJABpSA0fpReYllmemJJZn5eYk5-hH6kVFm8T6W3q4eJv4GPu5mfk4Gji6Wlh7ezkaGBi5m-l76UfgVFGQHKgIAWRAQKw!!/" target="_blank">
                  <img src="<?= base_url() ?>assets/site/img/finame.webp" style="width:80px; margin-bottom:7px; margin-left: 10px" />
                </a>
                <a>
                  <img src="<?= base_url() ?>assets/site/img/logo_bndes.png" style="width:85px; margin-bottom:7px; margin-left: 10px" />
                </a>
              </div>
            </div>
          </div>
          <form id="contact-form" class="white-popup-block mfp-hide col-md-3 no-padding center-col">
            <input type="hidden" value="1" name="id" />
            <div class="padding-fifteen-all bg-white border-radius-6 md-padding-seven-all" style="line-height: 15px;">
              <div class="text-extra-dark-gray alt-font text-large font-weight-600">Solicitar Informações</div>
              <small style="font-size: 11px;">Nossos especialistas entrarão em contato para maiores informações</small>
              <div class="margin-30px-top">
                <div id="success-contact-form" class="no-margin-lr"></div>
                <input type="text" name="nome" placeholder="Nome Completo" class="input-bg" required>
                <input type="text" name="empresa" placeholder="Empresa" class="input-bg" required="">
                <input type="text" name="endereco" placeholder="Cidade / UF" class="input-bg" required>
                <input type="tel" name="telefone" placeholder="Telefone" class="input-bg" required>
                <input type="email" name="email" id="email" placeholder="Email" class="input-bg" required>
                <textarea name="mensagem" placeholder="Mensagem" class="input-bg" required=""></textarea>
                <div class="text-center">
                  <button id="enviar" type="button" class=" btn btn-orange-style-2 btn-large btn-soft-rounded width-100" style="border: 1px solid;"> Solicitar </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- start tab style 01 section -->
  <section class="wow fadeIn pb-50px pt-50px">
    <div class="container tab-style2">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!-- start tab navigation -->
          <ul class="nav nav-tabs alt-font text-uppercase text-small display-inherit text-center font-weight-600">
            <?php if ($produto->caracteristicas) : ?>
              <li class="active"><a href="#caracteristicas" data-toggle="tab">Características</a></li>
            <?php endif ?>
            <?php if ($produto->modelos) : ?>
              <li><a href="#modelos" data-toggle="tab">Modelos</a></li>
            <?php endif ?>
            <?php if ($produto->arquivo_pdf) : ?>
              <li><a href="#informacoes" data-toggle="tab">Informações</a></li>
            <?php endif ?>
          </ul>
          <!-- end tab navigation -->
        </div>
      </div>
      <div class="tab-content">
        <!-- start tab content -->
        <?php if ($produto->caracteristicas) : ?>
          <div class="tab-pane med-text fade in active" id="caracteristicas">
            <div class="row equalize">
              <div class="col-md-12 center-col">
                <div class="panel-body text-medium fr-view">
                  <?= $produto->caracteristicas ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif ?>
        <!-- end tab content -->
        <!-- start tab content -->
        <?php if ($produto->modelos) : ?>
          <div class="tab-pane fade in" id="modelos">
            <div class="row equalize">
              <div class="col-md-12 col-froala">
                <div class="panel-body text-medium text-center fr-view">
                  <?= $produto->modelos ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif ?>
        <!-- end tab content -->
        <!-- start tab content -->
        <?php if ($produto->arquivo_pdf) : ?>
          <div class="tab-pane fade in" id="informacoes">
            <div class="row equalize">
              <div class="col-md-12 center-col">
                <div class="panel-body text-medium text-center">
                  <a href="<?= base_url("assets/uploads/files/$produto->arquivo_pdf") ?>" download style="width: 100%;">
                    <button class="btn btn-small btn-soft-rounded btn-style-download">
                      <i class="fa fa-file-text-o" aria-hidden="true"></i>
                      Download
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endif ?>
        <!-- end tab content -->
      </div>
    </div>
  </section>
  <!-- end tab style 01 section -->

  <section class="no-padding">
    <div class="container-fluid">
      <div class="row equalize xs-equalize-auto">
        <div class="col-md-12 text-center sm-display-block height-auto">
          <h6 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-2 text-uppercase"> Produtos Relacionados </h6>
        </div>
        <?php foreach ($produtosRelacionados as $produtoRelacionado) : ?>
          <div class="col-md-3">
            <a href="<?= site_url("produtos/produto/$produtoRelacionado->slug") ?>">
              <figure>
                <div class="portfolio-img product-image p-30px portfolio-item-style position-relative text-center overflow-hidden">
                  <img class="cursor-pointer-and-opacity" src="<?= base_url("assets/uploads/produtos/" . $produtoRelacionado->primeiraImagemGaleria[0]->imagem) ?>" alt="" data-no-retina="">
                </div>
                <figcaption class="bg-white">
                  <div class="portfolio-hover-main text-center">
                    <div class="portfolio-hover-box vertical-align-middle">
                      <div class="portfolio-hover-content position-relative">
                        <span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase display-block"><?= $produtoRelacionado->titulo ?></span>
                        <p class="text-medium-gray text-extra-small text-uppercase"><?= $produtoRelacionado->categoria->nome ?></p>
                      </div>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </a>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <?php include_once("utils/footer.php"); ?>

  <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>

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

    $("#enviar").click(function() {
      $("contact-form").magnificPopup("close")

      let form = document.querySelector("#contact-form")
      let formData = new FormData(form)

      $.ajax({
        url: "<?= site_url("contato/enviarMensagem/$produto->id") ?>",
        type: "POST",
        cache: false,
        processData: false,
        contentType: false,
        data: formData,
        success(result) {
          result = JSON.parse(result)
          let message = "Erro ao enviar. Tente novamente"
          icon = "fa fa-exclamation"

          if (result.success) {
            message = "Mensagem enviada. Em breve retornaremos"
            icon = "fa fa-check"
            $("#contact-form")[0].reset()
          }

          showAlert(message, "warning", icon)
        },
      })
    })
  </script>
</body>

</html>