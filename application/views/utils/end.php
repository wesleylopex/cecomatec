<script>
  
  const base_url = "<?= base_url() ?>";
  
  var configuracoes = <?= json_encode($configuracoes) ?>;

</script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/modernizr.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/skrollr.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/smooth-scroll.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/jquery.appear.js"></script>
<!-- menu navigation -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/bootsnav.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/jquery.nav.js"></script>
<!-- animation -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/wow.min.js"></script>
<!-- page scroll -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/page-scroll.js"></script>
<!-- swiper carousel -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/swiper.min.js"></script>
<!-- counter -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/jquery.count-to.js"></script>
<!-- parallax -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/jquery.stellar.js"></script>
<!-- magnific popup -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/jquery.magnific-popup.min.js"></script>
<!-- portfolio with shorting tab -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/isotope.pkgd.min.js"></script>
<!-- images loaded -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/imagesloaded.pkgd.min.js"></script>
<!-- pull menu -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/classie.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/hamburger-menu.js"></script>
<!-- counter  -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/counter.js"></script>
<!-- fit video  -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/jquery.fitvids.js"></script>
<!-- equalize -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/equalize.min.js"></script>
<!-- skill bars  -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/skill.bars.jquery.js"></script>
<!-- justified gallery  -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/justified-gallery.min.js"></script>
<!--pie chart-->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/jquery.easypiechart.min.js"></script>
<!-- instagram -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/instafeed.min.js"></script>
<!-- retina -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/retina.min.js"></script>
<!-- revolution -->
<script type="text/javascript" src="<?= base_url() ?>assets/site/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/js/main.js"></script>

<script src="<?= base_url() ?>assets/painel/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<script src="<?= base_url() ?>assets/site/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/plugins/cocoen/dist/js/cocoen.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/site/plugins/cocoen/dist/js/cocoen-jquery.min.js"></script>

<script type="text/javascript">

  $.cookie('googtrans', "/" + localStorage.getItem("language"));
</script>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'pt',
      includedLanguages: 'en,es,pt',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      autoDisplay: true
    }, 'google_translate_element');
  }

  $("[name=idioma] li").click(function() {
    language = $(this).attr("language")

    localStorage.setItem('language', language)

    location.reload()
  })

  $(document).ready(function() {

    $(".cocoen").cocoen()

    localLanguage = localStorage.getItem("language")

    let iconCountry = "bra.png"
    let languageName = "Português"

    if (localLanguage == "en") {
      languageName = "Inglês"
      iconCountry = "usa.png"
    } else if (localLanguage == "es") {
      languageName = "Espanhol"
      iconCountry = "Spain.png"
    }
    
    $("#selectedLanguage").text(languageName)
    $("#selectIconCountry").css("background", "url(" + base_url + "assets/site/img/country-flag-16X16/" + iconCountry + ")")
  })
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>