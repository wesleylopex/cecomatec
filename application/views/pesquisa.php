<!doctype html>
<html class="no-js" lang="en">

<head>
  <title>Cecomatec | Pesquisa</title>
  <?php include_once("utils/start.php") ?>
</head>

<body>
  <!-- start header -->
  <?php include_once("utils/header.php") ?>

  <!-- start page title section -->
  <section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space mt-0">
    <div class="container">
      <div class="row equalize xs-equalize-auto">
        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
          <div class="display-table-cell vertical-align-middle text-left xs-text-center">
            <!-- start page title -->
            <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase">Resultado para "<?= $pesquisa ?>"</h1>
            <!-- end page title -->
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right xs-text-left xs-margin-10px-top">
          <div class="display-table-cell vertical-align-middle breadcrumb text-small alt-font">
            <!-- start breadcrumb -->
            <ul class="xs-text-center">
              <li><a href="<?= base_url() ?>" class="text-dark-gray">Home</a></li>
              <li><a class="text-dark-gray">Pesquisa</a></li>
            </ul>
            <!-- end breadcrumb -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title section -->
  <!-- start section -->
  <section class="wow fadeIn">
    <div class="container">
      <div class="row">
        <main class="col-md-8 center-col col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom sm-padding-15px-lr center-col">

          <?php if ($size == 0) : ?>
            <h4 class="alt-font text-center text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase">Nenhum resultado encontrado para "<?= $pesquisa ?>"</h4>
          <?php elseif (isset($categorias) && sizeof($categorias) > 0): ?>
            <div class="row">
              <div class="col-md-3 width-auto">
                <h6 class="text-black">Categorias</h6>
              </div>
              <div class="col-md-9">
                <hr class="title-separator mt-15px">
              </div>
            </div>
          <?php endif ?>
          <!-- start post item -->
          <div class="items mb-120px">
            <?php foreach ($categorias as $categoria) : ?>
              <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                <div class="blog-text col-md-12 pb-20px display-table border-bottom border-color-extra-light-gray">
                  <div class="display-table-cell vertical-align-middle">
                    <div class="content margin-20px-bottom sm-no-padding-left ">
                      <a href="<?= site_url("produtos/categorias/$categoria->slug") ?>" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 display-inline-block"><?= $categoria->nome ?></a>
                      <!-- <p class="no-margin width-95"><?= $produto->descricao ?></p> -->
                    </div>
                    <a class="btn btn-very-small btn-dark-gray text-uppercase" href="<?= site_url("produtos/categorias/$categoria->slug") ?>">Saiba mais</a>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <?php if (isset($produtos) && sizeof($produtos) > 0) : ?>
            <div class="row">
              <div class="col-md-3 width-auto">
                <h6 class="text-black">Produtos</h6>
              </div>
              <div class="col-md-9">
                <hr class="title-separator mt-15px">
              </div>
            </div>
          <?php endif ?>
          <div class="items">
            <?php foreach ($produtos as $produto) : ?>
              <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom display-inline-block border-bottom border-color-extra-light-gray sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                <div class="blog-text col-md-12 display-table no-padding">
                  <div class="display-table-cell vertical-align-middle">
                    <div class="content margin-20px-bottom sm-no-padding-left ">
                      <a href="<?= site_url("produtos/produto/$produto->slug") ?>" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 display-inline-block"><?= $produto->titulo ?></a>
                      <p class="no-margin width-95"><?= $produto->descricao ?></p>
                    </div>
                    <a class="btn btn-very-small btn-dark-gray text-uppercase" href="<?= site_url("produtos/produto/$produto->slug") ?>">Saiba mais</a>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <?php if (isset($servicos) && sizeof($servicos) > 0) : ?>
            <div class="row">
              <div class="col-md-3 width-auto">
                <h6 class="text-black">Serviços</h6>
              </div>
              <div class="col-md-9">
                <hr class="title-separator mt-15px">
              </div>
            </div>
          <?php endif ?>
          <div class="items">
            <?php foreach ($servicos as $servico) : ?>
              <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom display-inline-block border-bottom border-color-extra-light-gray sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                <div class="blog-text col-md-12 display-table no-padding">
                  <div class="display-table-cell vertical-align-middle">
                    <div class="content margin-20px-bottom sm-no-padding-left ">
                      <a href="<?= site_url("servicos") ?>" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 display-inline-block"><?= $servico->titulo ?></a>
                      <p class="no-margin width-95"><?= $servico->descricao ?></p>
                    </div>
                    <a class="btn btn-very-small btn-dark-gray text-uppercase" href="<?= site_url("servicos") ?>">Saiba mais</a>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <!-- end post item -->
        </main>
      </div>
    </div>
  </section>
  <!-- start section -->
  <!-- start footer -->
  <?php include_once("utils/footer.php") ?>
  <!-- end footer -->

  <?php include_once("utils/end.php") ?>
</body>

</html>