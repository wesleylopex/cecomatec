<!doctype html>
<html class="no-js" lang="en">

<head>
  <title> Cecomatec | Produtos </title>
  <?php include("utils/start.php"); ?>
</head>

<body>
  <!-- start header -->
  <?php include_once("utils/header.php"); ?>

  <!-- start portfolio section -->
  <section class="wow fadeIn pt-65px sm-padding-50px-top xs-padding-30px-top" style="min-height: 500px;">
    <div class="container pb-30px">
      <div class="row">
        <div class="col-md-3 col-md-offset-2">
          <div class="select-style medium-select icon-search-div">
            <input type="text" name="pesquisar" class="bg-transparent no-margin-bottom" placeholder="Pesquisar em produtos">
          </div>
        </div>
        <div class="col-md-3">
          <div class="select-style medium-select cat-select">
            <select name="categorias" id="categorias" class="bg-transparent no-margin-bottom">
              <option value="*">Todos</option>
              <?php foreach ($categorias as $categoria) : ?>
                <option value="<?= $categoria->id ?>"><?= $categoria->nome ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="select-style medium-select subcat-select" style="display: none">
            <select name="subcategorias" id="subcategorias" class="bg-transparent no-margin-bottom">
              <option value="*">Todos</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <!-- start filter content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 no-padding xs-padding-15px-lr text-center">
          <div class="filter-content overflow-hidden">
            <ul class="ml-100px portfolio-grid border-around work-4col gutter-medium hover-option6 lightbox-portfolio">
              <li class="grid-sizer"></li>
              <!-- start portfolio-item item -->
              <?php foreach ($produtos as $produto) : ?>
                <li class="subcat-<?= $produto->id_subcategoria ?> cat-<?= $produto->id_categoria ?> grid-item fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 22.9901%; top: 0px;">
                  <a href="<?= site_url("produtos/produto/$produto->slug") ?>">
                    <figure>
                      <div class="portfolio-img product-image p-30px portfolio-item-style position-relative text-center overflow-hidden">
                        <img class="cursor-pointer-and-opacity" src="<?= base_url("assets/uploads/".$produto->primeiraImagemGaleria[0]->imagem) ?>" alt="" data-no-retina="">
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
              <!-- end portfolio item -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end filter content -->
  </section>
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

    let header_categoria = <?= isset($header_categoria) ? json_encode($header_categoria) : "[]" ?>;
    let header_subcategoria = <?= isset($header_subcategoria) ? json_encode($header_subcategoria) : "[]" ?>;

    $(document).ready(function() {
      if (header_categoria.id)
        $("#categorias").val(header_categoria.id).change()
      if (header_subcategoria.id)
        $("#subcategorias").val(header_subcategoria.id).change()
    })

    $("#subcategorias").on("change", function() {
      if ($(this).val() == "*") {
        $('.portfolio-grid').isotope({
          filter: ".cat-" + $("#categorias").val()
        })
      } else {
        $('.portfolio-grid').isotope({
          filter: ".cat-" + $("#categorias").val() + ".subcat-" + $(this).val()
        })
      }
    })

    $("#categorias").on("change", function() {
      if ($(this).val() != "*")
        setOptionsOnSelectSubcategories($(this).val())
      else {
        $(".subcat-select").hide()
        $('.portfolio-grid').isotope({
          filter: "*"
        })

      }
    })

    function setOptionsOnSelectSubcategories(id) {
      let categoria = getCategoriaById(id)
      let subcategorias = getSubcategoriasFromCategoria(categoria)

      let produtos = <?= json_encode($produtos) ?>;

      $('.portfolio-grid').isotope({
        filter: ".cat-" + categoria.id
      });

      if (subcategorias.length > 0) {
        $(".subcat-select").show()
        $("#subcategorias").html("<option value='*'>Todos</option>")

        subcategorias.forEach(subcategoria => {
          $("#subcategorias").append("<option value='" + subcategoria.id + "'>" + subcategoria.nome + "</option>")
        });
      }
    }

    function getSubcategoriasFromCategoria(categoria) {
      let subcategorias = <?= json_encode($subcategorias) ?>;

      return subcategorias.filter((subcategoria) => {
        return subcategoria.id_categoria == categoria.id
      })
    }

    function getCategoriaById(id) {
      let categorias = <?= json_encode($categorias) ?>;
      return categorias.filter((categoria) => {
        return categoria.id == parseInt(id)
      })[0]
    }
  </script>
</body>

</html>