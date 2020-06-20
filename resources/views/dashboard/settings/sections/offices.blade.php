<section class="card-section__primary">
    <div class="row">
        <div class="col-12 d-flex align-items-end justify-content-between ">
            <h5 class="color-primary">Mis oficinas</h5>
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalOffice">
                <i class="fa fa-plus" aria-hidden="true"></i> Añadir oficina
            </a>
        </div>
    </div>

    <div class="row card-deck mt-2">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card text-center mb-4 ">
                <div class="card-header d-flex flex-row align-items-center justify-content-between ">
                    <i class="fas fa-home color-primary"></i> Oficina Central

                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" id="cardMenu_01" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="cardMenu_01" >
                        <div class="dropdown-header">Acciones</div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalOffice">Editar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDeleteOffice">Eliminar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title color-primary">Barcelona</h5>
                    <p class="card-text">
                        C/ Lorem, nº 7<br />
                        España
                    </p>
                    <a href="#" class="btn btn-primary btn-see-office">Ver oficina</a>
                </div>
                <div class="card-footer text-muted">
                    {{ rand(10, 500)}} empleados
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card text-center mb-4">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    &nbsp;

                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; transform: translate3d(-156px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <div class="dropdown-header">Acciones</div>
                        <a class="dropdown-item" href="#">Editar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Eliminar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title color-primary">Girona</h5>
                    <p class="card-text">
                        C/ Ipsum, nº 47<br />
                        España
                    </p>
                    <a href="#" class="btn btn-primary">Ver oficina</a>
                </div>
                <div class="card-footer text-muted">
                    {{ rand(10, 500)}} empleados
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card text-center mb-4">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    &nbsp;

                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; transform: translate3d(-156px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <div class="dropdown-header">Acciones</div>
                        <a class="dropdown-item" href="#">Editar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Eliminar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title color-primary">Mollet del Vallès</h5>
                    <p class="card-text">
                        C/ Dolor, nº 24, 1º 2ª<br />
                        España
                    </p>
                    <a href="#" class="btn btn-primary">Ver oficina</a>
                </div>
                <div class="card-footer text-muted">
                    {{ rand(10, 500)}} empleados
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card text-center mb-4 ">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    &nbsp;

                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; transform: translate3d(-156px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <div class="dropdown-header">Acciones</div>
                        <a class="dropdown-item" href="#">Editar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Eliminar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title color-primary">Barcelona</h5>
                    <p class="card-text">
                        C/ Lorem, nº 7<br />
                        España
                    </p>
                    <a href="#" class="btn btn-primary">Ver oficina</a>
                </div>
                <div class="card-footer text-muted">
                    {{ rand(10, 500)}} empleados
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card text-center mb-4">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    &nbsp;

                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; transform: translate3d(-156px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <div class="dropdown-header">Acciones</div>
                        <a class="dropdown-item" href="#">Editar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Eliminar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title color-primary">Girona</h5>
                    <p class="card-text">
                        C/ Ipsum, nº 47<br />
                        España
                    </p>
                    <a href="#" class="btn btn-primary">Ver oficina</a>
                </div>
                <div class="card-footer text-muted">
                    {{ rand(10, 500)}} empleados
                </div>
            </div>
        </div>
    </div>
</section>

<section class="card-section__secundary closed">
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-primary btn-show-list" ><i class="fa fa-angle-double-left"></i> Volver al listado</a>
        </div>
    </div>
    <div class="row  mt-4">
        <div class="col-12 d-flex align-items-end justify-content-between ">
            <h5 class="color-primary">Oficina "Barcelona"</h5>
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalAddEmployeeToOffice">
                <i class="fa fa-plus" aria-hidden="true"></i> Añadir Empleado
            </a>
        </div>
    </div>
</section>

@section('modals-sections')
{{-- Editing Offices --}}
<div class="modal fade" id="modalOffice" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edición de Oficinas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>

            @include('dashboard.settings.sections.modals.office')

        </div>
    </div>
</div>

{{-- Removing Offices --}}
<div class="modal fade" id="modalDeleteOffice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminación de Oficina</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <p>
                ¿Seguro que desea eliminar la esta oficina?<br />
                <b class="text-danger">Esta operación no podrá desacerse.</b>
            </p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="#">Eliminar</a>
        </div>
      </div>
    </div>
</div>

{{-- Add employee to Office --}}
<div class="modal fade" id="modalAddEmployeeToOffice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Añadir empleados</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <p>
                ¿Seguro que desea eliminar la esta oficina?<br />
                <b class="text-danger">Esta operación no podrá desacerse.</b>
            </p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="#">Añadir</a>
        </div>
      </div>
    </div>
</div>
@endsection

@section('js')
<script>
$('.btn-see-office').click(function(e){
    e.preventDefault();
    e.stopImmediatePropagation();

    var section = $(".card-section__primary");
    section.addClass("closed");
    section.on('transitionend webkitTransitionEnd', function(e){
        var evt = e.originalEvent
        if( evt.propertyName === 'max-height') {
            $('.card-section__secundary').removeClass("closed");
            section.unbind('transitionend webkitTransitionEnd');
        }
    })
})

$('.btn-show-list').click(function(e){
    e.preventDefault();
    e.stopImmediatePropagation();

    var section = $(".card-section__secundary");
    section.addClass("closed");
    section.on('transitionend webkitTransitionEnd', function(e){
        var evt = e.originalEvent
        if( evt.propertyName === 'max-height') {
            $('.card-section__primary').removeClass("closed");
            section.unbind('transitionend webkitTransitionEnd');
        }
    })
})

$('#exampleModal').on('show.bs.modal', function (event) {
  /*
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
   */
})
</script>
@endsection
