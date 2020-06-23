{{--FORM @lang('nav-pills.profile-documents')--}}

<form action="">
<h5>Subir documento</h5>


<div class="form-row mb-lg-5 mb-md-5 mb-sm-5">

    <div class="col-lg-5 col-md-5 col-sm-5">
        <label for="user_name">Nombre del documento</label>
        <input type="text" class="form-control" id="user_name" value="" placeholder="Nombre..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-7 col-md-7 col-sm-7">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo</label>
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">SUBIR</button>
</form>
<form action="">

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>
