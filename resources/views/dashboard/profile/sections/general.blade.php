
<form action="">
    {{-- FORM @lang('nav-pills.profile-general') --}}


<div class="container-fluid">

    <div class="row">
        <div class="col">
            <h4>INFORMACIÓN DEL PUESTO DE TRABAJO</h4>
        </div>
    </div>
   
    <div class="form-row">      
        <div class="form-group col-lg-4 col-md-4 col-sm-6">
            <label for="office_id">Grajo Majo</label>
            <select class="selectpicker form-control"
                    data-live-search="true"
                    data-live-search-placeholder="Búsqueda por nombre"
                    data-live-search-style='startsWith'
                    title="Seleccione"
                    id="office_id">
                <option>Oficina 1</option>
                <option>oficina 2</option>
                <option>Ooficina 3</option>
            </select>  
        </div> 

    <div class="col-lg-5 col-md-4 col-sm-6">   
        <div class="form-group">
            <select class="selectpicker"
                    data-live-search="true"
                    data-live-search-placeholder="Búsqueda por nombre"
                    data-live-search-style='startsWith'
                    title="Seleccione">
                <option>Departamento 1</option>
                <option>Deepartament 2</option>
                <option>Ddepartamento 3</option>
            </select>
        </div>
    </div>
    <div class="col-lg-5 col-md-4 col-sm-6">   
    One of three columns
    </div>
    </div>
</div>

</form>
