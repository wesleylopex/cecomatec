<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("application/views/painel/utils/start.php") ?>
</head>

<body data-background-color="bg3">
  <div class="wrapper">
    <?php include_once("application/views/painel/utils/header.php") ?>
    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="page-header">
            <h4 class="page-title"><?= $nomes["singular"] ?></h4>
            <ul class="breadcrumbs">
              <li class="nav-home">
                <a href="<?= base_url("painel") ?>"> Home </a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("painel/" . $nomes["link"]) ?>"><?= $nomes["plural"] ?></a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <?= $nomes["singular"] ?>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <?= form_open_multipart("painel/" . $nomes["link"] . "/salvar") ?>

                  <div class="form-row">
                    <?php foreach ($campos as $key => $campo) : ?>

                      <?php if ($campo["type"] == "separator") : ?>
                        <div class="form-group col-md-12 no-pb pt-30px">
                          <div class="row">
                            <div class="col-auto">
                              <div class="title-section">
                                <h6><?= $campo["nome"] ?></h6>
                              </div>
                            </div>
                            <div class="col">
                              <hr class="title-separator mt-10px">
                            </div>
                          </div>
                        </div>
                      <?php endif ?>
                      <!-- CONFIGURAÇÕES PARA OS CAMPOS NÃO FICAREM POLUÍDOS -->
                      <?php $disabled = false; ?>
                      <?php if (isset($campo["disabled"]) && $campo["disabled"]) $disabled = true; ?>

                      <?php $required = false; ?>
                      <?php if (isset($campo["required"]) && $campo["required"]) $required = true; ?>

                      <?php $class = ""; ?>
                      <?php if (isset($campo["class"]) && $campo["class"]) $class = $campo["class"];  ?>

                      <?php $col = "col-md-12"; ?>
                      <?php if (isset($campo["col"]) && $campo["col"] && $campo["type"] != "image") $col = $campo["col"]; ?>

                      <!-- CAMPO HIDDEN (ID) -->
                      <?php if ($campo["type"] == "hidden") : ?>
                        <input type="hidden" class="form-control <?= $class ?>" <?php if ($disabled) : ?> disabled <?php endif ?> name="<?= $key ?>" value="<?= isset($registro) ? $registro->{$key} : "" ?>">
                      <?php endif ?>

                      <!-- DEMAIS CAMPOS -->
                      <?php if ($campo["type"] != "hidden" && $campo["type"] != "separator") : ?>
                        <div class="form-group <?= $col ?> form-show-validation">
                          <label class="d-flex align-items-center">
                            <?= $campo["nome"] ?><?= isset($campo["label"]) && $campo["label"] ? " " . $campo["label"] : "" ?>
                            <?php if ($campo["type"] == "gallery") : ?>
                              <a class="btn-excluir-file" data-toggle="tooltip" data-placement="right" title="Excluir todos">
                                <i class="la la-trash"></i>
                              </a>
                            <?php endif ?>
                          </label>

                          <?php if ($campo["type"] == "text") : ?>
                            <input type="text" class="form-control <?= $class ?>" <?php if ($disabled) : ?> disabled <?php endif ?> name="<?= $key ?>" value="<?= isset($registro) ? $registro->{$key} : "" ?>" <?php if ($required) : ?> required <?php endif ?>>
                          <?php endif ?>

                          <?php if ($campo["type"] == "password") : ?>
                            <input type="password" class="form-control <?= $class ?>" <?php if ($disabled) : ?> disabled <?php endif ?> name="<?= $key ?>" <?php if ($required) : ?> required <?php endif ?>>
                          <?php endif ?>

                          <?php if ($campo["type"] == "textarea") : ?>
                            <textarea name="<?= $key ?>" rows="5" <?php if ($disabled) : ?> disabled <?php endif ?> class="form-control <?= $class ?>" <?php if ($required) : ?> required <?php endif ?>><?= isset($registro) ? $registro->{$key} : "" ?></textarea>
                          <?php endif ?>

                          <?php if ($campo["type"] == "image") : ?>
                            <div class="input-file input-file-image">
                              <img class="img-upload-preview" width="150" src="<?= isset($registro) ? base_url("assets/uploads/images/" . $registro->{$key}) : "" ?>" alt="">
                              <input type="file" class="form-control form-control-file" id="<?= $key ?>" name="<?= $key ?>" accept="image/*">
                              <label for="<?= $key ?>" class="label-input-file btn btn-icon btn-green btn-lg"><i class="la la-file-image-o"></i> Escolher imagem</label>
                            </div>
                          <?php endif ?>

                          <?php if ($campo["type"] == "file") : ?>
                            <div class="custom-file">
                              <input type="file" name="<?= $key ?>" class="custom-file-input" id="<?= $key ?>" accept="application/pdf">
                              <label class="custom-file-label" for="<?= $key ?>" data-browse="Procurar">Escolher um arquivo</label>
                            </div>
                          <?php endif ?>

                          <?php if ($campo["type"] == "select") : ?>
                            <?= form_dropdown($key, $campo["options"], isset($registro) ? $registro->{$key} : "", ["class" => "form-control $class select2", $disabled ? "disabled" : "" => "disabled", $required ? "required" : "" => "required"]) ?>
                          <?php endif ?>

                          <?php if ($campo["type"] == "date") : ?>
                            <div class="input-group">
                              <input type="text" class="form-control date" name="<?= $key ?>" value="<?= isset($registro) ? date("d/m/Y", strtotime($registro->{$key})) : "" ?>">
                              <div class="input-group-append">
                                <span class="input-group-text">
                                  <i class="la la-calendar-check-o"></i>
                                </span>
                              </div>
                            </div>
                          <?php endif ?>

                          <?php if ($campo["type"] == "gallery") : ?>
                            <div action="<?= base_url("painel/" . $nomes["link"] . "/uploadDropzoneImage") ?>" class="dropzone">
                              <div class="dz-message" data-dz-message>
                                <div class="icon">
                                  <i class="flaticon-picture"></i>
                                </div>
                                <h4 class="message">Arraste e solte imagens</h4>
                                <div class="note">(Ou clique e selecione)</div>
                              </div>
                              <div class="fallback">
                                <input name="file" type="file" multiple />
                              </div>
                            </div>
                          <?php endif ?>

                        </div>
                      <?php endif ?>
                    <?php endforeach ?>
                  </div>
                  </form>
                </div>
                <div class="card-action">
                  <button type="submit" class="btn btn-black float-right btn-save">Feito!</button>
                  <a href="<?= site_url("painel/" . $nomes["link"]) ?>" class="btn btn-black btn-border float-right">Cancelar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Custom template -->
  </div>
  <!--   Core JS Files   -->
  <?php include_once("application/views/painel/utils/end.php") ?>
  <script>
    $(".date").datetimepicker({
      format: 'DD/MM/YYYY'
    });

    $('.select2').select2({
      theme: "bootstrap",
      minimumResultsForSearch: 10
    });

    $('input[type=file]').on('change', function() {
      //get the file name
      var fileName = $(this).val().replace("C:\\fakepath\\", "");
      //replace the "Choose a file" label
      if (fileName)
        $(this).next('.custom-file-label').html(fileName);
      else
        $(this).next('.custom-file-label').html("Escolher um arquivo");
    })

    function showAlert(type = "primary", message = null, icon = "la la-trash", title = null) {
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

    function removeFilesFromDataBase(ids = []) {
      $.ajax({
        url: "<?= base_url("painel/" . $nomes["link"] . "/removeFilesFromDataBase") ?>",
        data: {
          ids
        },
        type: 'POST',
        success(result) {
          alert(result)
        }
      });
    }

    function removeAllFilesFromDataBase(idRegistro = []) {
      $.ajax({
        url: "<?= base_url("painel/" . $nomes["link"] . "/removeAllFilesFromDataBase") ?>",
        data: {
          idRegistro
        },
        type: 'POST',
      });
    }

    var nomes = {
      link: "<?= $nomes["link"] ?>"
    }
    var ids = []
    var removeAllFiles = false
    var registro = <?= isset($registro) ? json_encode($registro) : json_encode([]) ?>

    if ($(".dropzone").length > 0) {

      var myDropzone = new Dropzone(".dropzone", {
        url: `${base_url}/painel/${nomes.link}/uploadDropzoneImage`,
        autoProcessQueue: false,

        parallelUploads: 10,
        // uploadMultiple: true,
        addRemoveLinks: true,
        // parallelChunkUploads: true,
        dictRemoveFile: "Excluir",
        dictCancelUpload: "Cancelar",
        removedfile(file) {
          ids.push(file.id)
          file.previewElement.remove();
        }
      })
      if (registro.imagens) {
        registro.imagens.forEach(imagem => {
          let file = {
            name: imagem.imagem,
            id: imagem.id,
            size: 1000000
          }
          myDropzone.emit("addedfile", file);
          myDropzone.emit("thumbnail", file, `${base_url}assets/uploads/${imagem.imagem}`);
          myDropzone.emit("complete", file);
          myDropzone.files.push(file);
        });
      }

      $(".btn-excluir-file").click(function() {
        removeAllFiles = true
        myDropzone.removeAllFiles()
      })
    }

    $(".btn-save").click(function() {
      saveRegister()
    })

    $("form").submit(function() {
      saveRegister()
      return false
    })

    $(document).not("textarea").keypress(function(event) {
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if (keycode == "13")
        saveRegister()
    });

    function executeProcessQueue() {
      if ($(".dropzone").length > 0) {
        let dropzone = Dropzone.forElement(".dropzone");
        dropzone.processQueue();
      }
    }

    function saveRegister() {

      let form = document.querySelector("form")
      let formData = new FormData(form);

      $.ajax({
        url: "<?= base_url("painel/" . $nomes["link"] . "/salvar"); ?>",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        beforeSend() {
          executeProcessQueue()
        },
        type: 'POST',
        success(result) {
          try {
            response = JSON.parse(result)

            if (response.success) {
              removeFilesFromDataBase(ids)

              if (removeAllFiles)
                removeAllFilesFromDataBase(registro.id)

              showAlert("primary", response.message, response.icon)

              setTimeout(function() {
                // location.href = `${base_url}painel/${nomes.link}`
              }, 1500)
            } else
              showAlert("primary", response.message, response.icon)
          } catch (e) {
            result = removeArrayFromString(["<p>", "</p>"], result)
            // showAlert("primary", result, "la la-close")
            showAlert("danger", "Erro, tente novamente.", "la la-close")
          }
        },
        error(result) {
          showAlert("primary", result, "la la-close")
        }
      });
    }

    function removeArrayFromString(items = [], string = null) {
      for (item of items) {
        string = string.replace(item, "")
      }

      return string
    }
  </script>
</body>

</html>