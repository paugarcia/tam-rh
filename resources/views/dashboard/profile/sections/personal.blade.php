<form action="">
    {{-- FORM @lang('nav-pills.profile-general') --}}

<h3>Información General</h3>

<div class="form-row">

    <div class="col-lg-4 col-md-4 col-sm-4">
        <label for="user_name">Nombre</label>
        <input type="text" class="form-control" id="user_name" value="Nombre..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="user_surname">Apellidos</label>
        <input type="text" class="form-control" id="user_surname" value="Apellidos..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-2">
        <label for="user_birthdate">Nacimiento</label>
        <input type="text" class="form-control" id="user_birthdate" value="NACIMIENTO CHUNGO" required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

</div>

<div class="form-row">

    <div class="col-lg-3 col-md-3 col-sm-3">
        <label for="gender_id">Género</label>
        <select class="custom-select" id="gender_id" required>
            <option selected disabled value="">Femenino</option>
            <option>Masculino</option>
        </select>
        <div class="invalid-feedback">No has elegido opción</div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3">
        <label for="country_id">Nacionalidad</label>
        <div>
            <div class="form-group">
                <select class="selectpicker"
                        data-live-search="true"
                        data-live-search-placeholder="Búsqueda por nombre"
                        data-live-search-style='startsWith'
                        title="Seleccione"
                        id="country_id">
                    <option>Moza en Bike</option>
                    <option>Japonesa</option>
                    <option>Etrusca</option>
                    <option>Arapajoe profundo</option>
                </select>
            </div>
        </div>
        <div class="invalid-feedback">No has elegido opción</div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-2">
        <label for="user_phone_number">Teléfono</label>
        <input type="text" class="form-control" id="user_phone_number" value="Número" required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4">
        <label for="user_email">Correo</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control rounded-right" id="user_email" required>
        <div class="invalid-feedback">Please choose a username.</div>
        </div>
    </div>
    

</div>

<div class="form-row">
    <div class="progress axios">
        <div class="indeterminate"></div>
    </div>

    <button type="submit" class="btn btn-primary">GUARDAR</button>
</div>

</form>

<form action="">
    {{-- FORM @lang('nav-pills.profile-general') --}}

<h3>Documentos</h3>

<div class="form-row">

    <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="user_nif_nie">Documento de identidad</label>
        <input type="text" class="form-control" id="user_nif_nie" value="DNI/NIE" required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="user_social_security_number">Número de Seguridad Social</label>
        <input type="text" class="form-control" id="user_social_security_number" value="Número de la seguridad social..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

</div>

<div class="form-row">
    <div class="progress axios">
        <div class="indeterminate"></div>
    </div>

    <button type="submit" class="btn btn-primary">GUARDAR</button>
</div>

</form>



