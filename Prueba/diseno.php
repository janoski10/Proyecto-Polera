<?php
    include 'template/header.php';
?>
<main class="contenedor sombra">
<div class="contenedor">
  <div class="form-group col-xs-12 col-sm-6 col-md-4">
    <label for="banner">Cargar archivo:</label>
    <div class="input-group">
        <label class="input-group-btn">
			<span class="btn btn-primary btn-file">
                 <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="banner" type="file" id="banner">
            </span>
        </label>
        <input class="form-control" id="banner_captura" readonly="readonly" name="banner_captura" type="text" value="">
    </div>
</div>

        </main>
<?php
    include 'template/footer.php';
?>