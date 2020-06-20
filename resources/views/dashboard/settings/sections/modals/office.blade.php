<form action="" class="form">
    <div class="modal-body">
        <div class="form-row">
            <div class="form-group col-12">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitches">
                    <label class="custom-control-label" for="customSwitches">Oficina Principal</label><br />
                    <small class="text-info">Si selecciona esta oficina como principal, la asginada actualmente dejará de serlo.</small>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-6 validate">
                <label for="name">Nombre</label>
                <input type="name" class="form-control" required name="name" id="name" placeholder="">
            </div>
            <div class="form-group col-6 validate">
                <label for="name">Dirección</label>
                <input type="name" class="form-control" required name="name" id="name" placeholder="">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-3 validate">
                <label for="name">Ciudad</label>
                <input type="name" class="form-control" required name="name" id="name" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label for="business_name">Código Postal</label>
                <input type="text" class="form-control" name="business_name"  id="business_name" placeholder="">
            </div>
            <div class="form-group col-3">
                <label for="business_name">Estado/Provincia/Región</label>
                <input type="text" class="form-control" name="business_name"  id="business_name" placeholder="">
            </div>
            <div class="form-group col-3">
                <label for="inputAddress2">País</label>
                <select class="form-control selectpicker"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="true"
                        data-live-search-placeholder="Filtrar por nombre"
                        data-live-search-style='startsWith'
                        title="Seleccione">
                    @foreach( \App\Country::all() as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address">Teléfono</label>
              <input type="text" class="form-control" id="address" id="address">
            </div>
            <div class="form-group col-md-6">
              <label for="address_secondary">Email</label>
              <input type="email" class="form-control" name="address_secondary" id="address_secondary">
            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7054.394745532382!2d2.818289082581704!3d41.97864602412097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12bae6d91d7f873d%3A0xc3711afc1ce2e897!2sCalle%20de%20Sant%20Joan%20Bta.%20la%20Salle%2C%2017002%20Gerona%2C%20Girona!5e0!3m2!1ses!2ses!4v1592665655156!5m2!1ses!2ses" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <div class="modal-footer">
        <button class="btn btn-secondary " type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="#">Guardar</a>
    </div>
</form>

