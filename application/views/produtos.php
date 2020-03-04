<!doctype html>
<html class="no-js" lang="en">

<head>
  <title> Cecomatec | Produtos </title>
  <?php include("utils/start.php"); ?>
</head>

<body>
  <!-- start header -->
  <?php include_once("utils/header.php"); ?>

  <?php if (isset($categories) && sizeof($categories) > 0) : ?>
    <section class="wow fadeIn">
      <div class="container">
        <div class="row">
          <?php foreach ($categories as $category) : ?>
            <div class="col-md-3 col-sm-4 col-xs-12 margin-30px-bottom wow fadeIn">
              <div class="position-relative overflow-hidden">
                <img src="<?= base_url("assets/uploads/images/$category->thumbnail") ?>" class="width-100" alt="">
                <div class="opacity-extra-medium bg-dark-gray"></div>
                <div class="blog-box">
                  <div class="blog-box-image height-100">
                    <div class="display-table width-100 height-100 text-center">
                      <div class="display-table-cell vertical-align-middle">
                        <span class="text-white text-uppercase alt-font font-weight-600 text-small letter-spacing-2"><?= $category->nome ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="blog-box-content height-100">
                    <div class="display-table width-100 height-100 text-center">
                      <div class="display-table-cell vertical-align-middle">
                        <a href="<?= site_url("produtos/categorias/$category->slug") ?>" class="btn btn-white btn-rounded btn-small">Ver mais</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>
  <?php else : ?>

    <section class="wow fadeIn parallax small-height" data-stellar-background-ratio="0" style="background-image:url('<?= base_url("assets/uploads/images/$category->banner") ?>'); background-size: contain; background-repeat: no-repeat;">
    <!-- <section class="wow fadeIn parallax small-height" data-stellar-background-ratio="0" style="background-image:url('https://placehold.it/1420x500'); background-size: contain"> -->
      <div class="opacity-medium" style="background: rgba(51, 51, 51, 0.7)"></div>
      <div class="container small-height">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
            <div class="display-table-cell vertical-align-middle text-center">
              <!-- start page title -->
              <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom"><?= $category->nome ?></h1>
              <!-- end page title -->
              <!-- start sub title -->
              <span class="text-white alt-font font-18px"><?= nl2br($category->descricao) ?></span>
              <!-- end sub title -->
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif ?>

  <!-- start portfolio section -->

  <?php if (isset($produtos) && sizeof($produtos) > 0) : ?>

    <section class="wow fadeIn pt-65px">
      <!-- start filter content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 no-padding xs-padding-15px-lr text-center">
            <div class="filter-content overflow-hidden">
              <ul class="ml-100px portfolio-grid border-around work-4col gutter-medium hover-option6 lightbox-portfolio">
                <li class="grid-sizer"></li>
                <!-- start portfolio-item item -->
                <?php foreach ($produtos as $produto) : ?>
                  <li class="grid-item fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 22.9901%; top: 0px;">
                    <a href="<?= site_url("produtos/produto/$produto->slug") ?>">
                      <figure>
                        <div class="portfolio-img product-image p-30px portfolio-item-style position-relative text-center overflow-hidden">
                          <img class="cursor-pointer-and-opacity" src="<?= base_url("assets/uploads/produtos/" . $produto->primeiraImagemGaleria[0]->imagem) ?>" alt="" data-no-retina="">
                        </div>
                        <figcaption class="bg-white">
                          <div class="portfolio-hover-main text-center">
                            <div class="portfolio-hover-box vertical-align-middle">
                              <div class="portfolio-hover-content position-relative">
                                <span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase display-block"><?= $produto->titulo ?></span>
                                <p class="text-medium-gray text-extra-small text-uppercase"><?= $produto->categoria->nome ?></p>
                              </div>
                            </div>
                          </div>
                        </figcaption>
                      </figure>
                    </a>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end filter content -->
    </section>
  <?php endif ?>
  <!-- end portfolio section -->
  <!-- start footer -->
  <?php include_once("utils/footer.php"); ?>
  <!-- end footer -->
  <!-- start scroll to top -->
  <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
  <!-- end scroll to top  -->
  <!-- javascript libraries -->
  <?php include_once("utils/end.php") ?>
  <script>
    // quick search regex
    var qsRegex;

    // init Isotope
    var $grid = $('.portfolio-grid').isotope({
      itemSelector: '.grid-item',
      layoutMode: 'fitRows',
      filter: function() {
        return qsRegex ? $(this).text().match(qsRegex) : true;
      }
    });

    // use value of search field to filter
    var $quicksearch = $("[name=pesquisar]").on("keyup", debounce(function() {
      qsRegex = new RegExp($quicksearch.val(), 'gi');
      $grid.isotope();
    }, 200));

    // debounce so filtering doesn't happen every millisecond
    function debounce(fn, threshold) {
      var timeout;
      threshold = threshold || 100;
      return function debounced() {
        clearTimeout(timeout);
        var args = arguments;
        var _this = this;

        function delayed() {
          fn.apply(_this, args);
        }
        timeout = setTimeout(delayed, threshold);
      };
    }
  </script>
</body>

</html>