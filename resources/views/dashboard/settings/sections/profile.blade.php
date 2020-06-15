
<form action="">
    <div class="row">
        <div class="col-12">
            <h5 class="color-primary">Información básica</h5>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4 validate">
            <label for="name">Nombre de la empresa</label>
            <input type="name" class="form-control" required name="name" id="name" placeholder="">
        </div>
        <div class="form-group col-md-4">
            <label for="business_name">Razón Social</label>
            <input type="text" class="form-control" name="business_name"  id="business_name" placeholder="">
        </div>
        <div class="form-group col-md-4">
            <label for="inputAddress2">CIF</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address">Direccion principal</label>
          <input type="text" class="form-control" id="address" id="address">
        </div>
        <div class="form-group col-md-6">
          <label for="address_secondary">Dirección secundaria</label>
          <input type="text" class="form-control" name="address_secondary" id="address_secondary">
        </div>
     </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="name">Ciudad</label>
            <input type="name" class="form-control" name="name" id="name" placeholder="">
        </div>
        <div class="form-group col-md-3">
            <label for="business_name">Código Postal</label>
            <input type="text" class="form-control" name="business_name"  id="business_name" placeholder="">
        </div>
        <div class="form-group col-md-3">
            <label for="inputAddress2">Estado/Provincia/Región</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
        </div>
        <div class="form-group col-md-3">
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
        <div class="form-group col-md-3">
          <label for="address">Teléfono</label>
          <input type="text" class="form-control" id="address" id="address">
        </div>
        <div class="form-group col-md-3">
          <label for="address_secondary">Email</label>
          <input type="email" class="form-control" name="address_secondary" id="address_secondary">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>

    <div class="dropdown-divider"></div>

      <h5>Idoma y moneda</h5>
    - "Idioma" (desplegable idiomas disponibles de la app, inicialmente: Español, Català i a valorar English)
    - "Formato"
      * desplegable con los siguientes valores:
        value="es"    -> ES (07/05/2020 - 1234,56 €)
        value="es-do" -> DO (07/05/2020 - 1234,56 €)
        value="es-us" -> US (05/07/2020 - 1234,56 €)
        value="es-mx" -> MX (07/05/2020 - 1234,56 €)
        value="es-ar" -> AR (07/05/2020 - € 1,234.56)
        value="es-co" -> CO (07/05/2020 - 1234,56 €
    - "Moneda" (desplegable monedas)


    <div class="form-group">
        <select class="selectpicker"
                data-live-search="true"
                data-live-search-placeholder="Búsqueda por nombre"
                data-live-search-style='startsWith'
                title="Seleccione">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Barbecue</option>
        </select>
    </div>

</form>
