@extends('layouts.dashboard')

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
                <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.profile')) }}"><i class="fas fa-fw fa-cog"></i> @lang('nav-pills.profile')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.offices')) }}"><i class="fas fa-fw fa-building"></i> @lang('nav-pills.offices')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.departments')) }}"><i class="fas fa-fw fa-sitemap"></i> @lang('nav-pills.departments')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.documents')) }}"><i class="fas fa-fw fa-clipboard"></i> @lang('nav-pills.documents')</a>
            </li>
        </ul>
    </div>
    <div class="card-body p-0">
        <div class="tab-content" id="pills-tabContent">
            <div id="{{ str_slug(\Lang::get('nav-pills.profile')) }}" class="tab-pane fade show">
                @include('dashboard.settings.sections.profile')
            </div>
            <div id="{{ str_slug(\Lang::get('nav-pills.offices')) }}" class="tab-pane fade">
                @include('dashboard.settings.sections.offices')
            </div>
            <div id="{{ str_slug(\Lang::get('nav-pills.departments')) }}" class="tab-pane fade">
                @include('dashboard.settings.sections.departments')
            </div>
            <div id="{{ str_slug(\Lang::get('nav-pills.documents')) }}" class="tab-pane fade">
                @include('dashboard.settings.sections.documents')
            </div>
        </div>
    </div>
    </div>

</div>
@endsection

@section('js')
if(window.location.hash != "") {
    $('a[href="' + window.location.hash + '"]').click()
} else {
  $('a[href="#perfil"]').click()
}
@endsection
