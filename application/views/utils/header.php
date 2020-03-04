<div id="loader_div">
  <div id="loader"></div>
</div>

<header class="header-with-topbar padding-100px-bottom">
  <!-- topbar -->
  <div class="top-header-area bg-extra-dark-gray padding-5px-tb">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 alt-font xs-no-padding-lr xs-text-center">
          <a class="text-link-orange xs-width-100"><?= $configuracoes->telefone_principal ?></a>
          <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-lr hidden-xs position-relative vertical-align-middle top-minus1"></div>
          <a href="mailto:<?= $configuracoes->email ?>" class="font-12px text-link-orange xs-width-100"><?= $configuracoes->email ?></a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 hidden-xs xs-no-padding-lr text-right">

          <div id="google_translate_element" style="display: none;"></div>
          <div class="btn-group dropdown-style-1 xs-width-100 xs-text-center xs-margin-three-bottom display-inline-block">
            <button type="button" class="btn dropdown-toggle xs-width-100 hover-orange" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="icon-country" id="selectIconCountry"></span>
              <span id="selectedLanguage">Idioma</span>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu xs-width-100" name="idioma">
              <li language="pt"><span class="icon-country" style="background: url(<?= base_url("assets/site/img/country-flag-16X16/bra.png") ?>)"></span>Português</li>
              <li language="en"><span class="icon-country" style="background: url(<?= base_url("assets/site/img/country-flag-16X16/usa.png") ?>)"></span>Inglês</li>
              <li language="es"><span class="icon-country" style="background: url(<?= base_url("assets/site/img/country-flag-16X16/Spain.png") ?>)"></span>Espanhol</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- start navigation -->
  <nav class="navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width" style="opacity: 1;">
    <div class="container nav-header-container">
      <div class="row">
        <!-- start logo -->
        <div class="col-md-4 col-xs-5">
          <a href="<?= base_url() ?>" class="logo">
            <img src="<?= base_url() ?>assets/site/img/logo_cecomatec.png" data-no-retina class="logo-dark default" style="max-height:40px;">
          </a>
        </div>
        <!-- end logo -->

        <div class="col-md-2">
          <!-- <div class="header-searchbar">
            <a href="#search-header" class="header-search-form text-white"><i class="fa fa-search search-button"></i></a>
            
            <?= form_open(site_url("pesquisa"), ["id" => "search-header", "class" => "search-form-result"]) ?>
            <div class="search-form position-relative">
              <button type="submit" class="fa fa-search close-search search-button"></button>
              <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar" autocomplete="off">
            </div>
            </form>
          </div> -->
          <?= form_open(site_url("pesquisa"), ["id" => "search-header", "class" => "search-form-result"]) ?>
          <div class="select-style medium-select icon-search-div mb-0">
            <input type="text" name="pesquisa" class="bg-transparent no-margin-bottom" placeholder="Pesquisar">
          </div>
          </form>
        </div>

        <div class="col-md-6 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
          <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
            <span class="sr-only">toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
            <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
              <!-- start menu item -->

              <li class="dropdown simple-dropdown <?= $page == "produtos" ? "active" : "" ?>">
                <a class="hover-orange" href="<?= site_url("produtos") ?>">Produtos</a>
                <ul class="dropdown-menu animated fadeOut" role="menu" style="top: 72px; display: none; opacity: 1;background-color:white;border:1px solid #f9f9f9; width: 250px;">
                  <?php foreach ($categorias as $categoria) : ?>
                    <li class='dropdown'>
                      <a href="<?= site_url("produtos/categorias/$categoria->slug") ?>" class='dropdown-toggle hover-orange' data-toggle='dropdown' style='color:black;'><?= $categoria->nome ?></i></a>
                    </li>
                  <?php endforeach ?>
                </ul>
              </li>

              <li class="dropdown simple-dropdown <?= $page == "servicos" ? "active" : "" ?>">
                <a class="hover-orange" href="<?= site_url("servicos") ?>">Serviços</a>
                <ul class="dropdown-menu animated fadeOut" role="menu" style="top: 72px; display: none; opacity: 1;background-color:white;border:1px solid #f9f9f9;">
                  <li><a href="<?= site_url("servicos") ?>" class="hover-orange" style="color:black;">Assessoria Microfusão</a></li>
                  <li><a href="<?= site_url("servicos") ?>" class="hover-orange" style="color:black;">Usinagem</a></li>
                  <li><a href="<?= site_url("servicos") ?>" class="hover-orange" style="color:black;">Reformas e Adequações NR-12</a></li>
                </ul>
              </li>

              <li class="<?= $page == "empresa" ? "active" : "" ?>">
                <a class="hover-orange" href="<?= site_url("empresa") ?>">Empresa</a>
              </li>

              <li class="<?= $page == "contato" ? "active" : "" ?>">
                <a class="hover-orange" href="<?= site_url("contato") ?>">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- end navigation -->
</header>