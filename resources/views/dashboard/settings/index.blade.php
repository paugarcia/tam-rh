@extends('layouts.admin')

@section('content')
<!-- Content Row -->
<div class="row">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Configuración</h1>
    </div>

    <div class="card shadow col-lg-12 ">
    <div class="card-header ">

        <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#perfil"><i class="fas fa-fw fa-cog"></i> Perfil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#oficinas"><i class="fas fa-fw fa-building"></i> Oficinas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#departamentos"><i class="fas fa-fw fa-sitemap"></i> Departamentos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#documentos"><i class="fas fa-fw fa-clipboard"></i> Documentos</a>
        </li>
        </ul>
    </div>
    <div class="card-body p-0">
        <div class="tab-content" id="pills-tabContent">
        <div id="perfil" class="tab-pane fade show">

        </div>
        <div id="oficinas" class="tab-pane fade">

        </div>
        <div id="departamentos" class="tab-pane fade">

        </div>
        <div id="documentos" class="tab-pane fade">

        </div>
        </div>
    </div>
    </div>

</div>
@endsection
