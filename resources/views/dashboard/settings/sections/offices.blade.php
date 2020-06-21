<section class="card-section__primary">
    <div class="row">
        <div class="col-12 d-flex flex-wrap align-items-end justify-content-between ">
            <h5 class="color-primary">Mis oficinas</h5>
            <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modalOffice">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Añadir oficina</span>
            </a>
        </div>
    </div>

    <div class="row card-deck mt-2">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card text-center mb-4 ">
                <div class="card-header d-flex flex-row align-items-center justify-content-between ">
                    <span class="d-inline-block tooltiped" tabindex="0" data-toggle="tooltip" title="Oficina Central">
                        <i class="fas fa-home color-primary" ></i>
                    </span>
                    <h5 class="color-primary">Barcelona</h5>
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
                    {{-- <h5 class="card-title color-primary">Barcelona</h5> --}}
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
                    <h5 class="card-title color-primary">Girona</h5>
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
                    <h5 class="card-title color-primary">Mollet del Vallès</h5>
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
                    <h5 class="card-title color-primary">Barcelona</h5>
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
                    <h5 class="card-title color-primary">Girona</h5>
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
        <div class="col-12 ">
            <h5 class="color-primary">Oficina "Barcelona"</h5>

        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2 d-flex flex-wrap align-items-end justify-content-between ">
            <h5>Departamentos</h5>
            <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modalDepartment">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Añadir Departamento</span>
            </a>
        </div>
    </div>
    <div class="row mt-2 card-deck card-columns">
        @foreach( range(1, 5) as $rang )
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="card card-department text-center mb-6 ">
                <div class="card-header d-flex flex-row align-items-center justify-content-between ">
                    <p></p>
                    <h5 class="card-title color-primary">Departamento de Producción</h5>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" id="cardMenu_01" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="cardMenu_01" >
                        <div class="dropdown-header">Acciones</div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalAddEmployeeToDepartment">Añadir empleado/a</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDeleteDepartment">Eliminar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body row">
                    <div class="col-12 col-lg-4">
                        Responsable: <b>John Doe</b><br />
                        <b>Jefe Departamento</b><br />
                        <a href="#"><b>john.doe@tam-rh.com</b></a>
                        <div class="m-3">
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalDepartment">Editar</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8" >
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Filtrar por nombre" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <ul class="list-group list-employers" >
                            @php $randomNumber = rand(10, 50); @endphp
                            @foreach( range(1,$randomNumber) as $item )
                            <li class="list-group-item list-group-item-action list-employers-item">
                                <div class="row d-flex align-content-center justify-content-center">
                                    <div class="col-lg-6 d-flex align-items-center  align-self-center">
                                        <img class="rounded-circle thumb m-2"  src="https://randomuser.me/api/portraits/men/44.jpg">
                                        <div class="text-left">Jane Doe</div>
                                    </div>
                                    <div class="col-lg-6 ml-auto d-flex">
                                        <a href="#" class="btn btn-success m-1 align-self-center">Editar</a>
                                        <a href="#" class="btn btn-warning m-1 align-self-center" data-toggle="modal" data-target="#modalRemoveEmployeeFromDepartment">Desvincular</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    {{ $randomNumber }} empleados
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-12 mt-2 d-flex align-items-end justify-content-between ">
            <h5>Días Festivos</h5>
            <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modalAddEmployeeToOffice">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Añadir día/s festivo/s</span>
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
<div class="modal fade" id="modalAddEmployeeToDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Añadir empleados</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        @include('dashboard.settings.sections.modals.employee')

      </div>
    </div>
</div>

{{-- Editing Department --}}
<div class="modal fade" id="modalDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edición de Departamento</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        @include('dashboard.settings.sections.modals.department')


      </div>
    </div>
</div>

{{-- Removing Department --}}
<div class="modal fade" id="modalDeleteDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminación de Departamento</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <p>
                ¿Seguro que desea eliminar este departamento?<br />
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

{{-- Removing Employee from Department --}}
<div class="modal fade" id="modalRemoveEmployeeFromDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Desvinculación empleado</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <p>
                ¿Seguro que desea desvincular este empleado del departamento?<br />
            </p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="#">Desvincular</a>
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
