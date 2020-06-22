<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    @yield('css')

</head>
<body id="page-top">
  <div class="progress axios">
    <div class="indeterminate"></div>
  </div>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('dashboard.partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Topbar -->
      @include('dashboard.partials.topbar')
      <!-- End of Topbar -->

      <!-- Main Content -->
      <div id="content" class="">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('dashboard.partials.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Tan pronto?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sessión" si está seguro de terminar la sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.html">Cerrar sessión</a>
        </div>
      </div>
    </div>
  </div>

  @yield('modals-sections')

  <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken'          => csrf_token(),
        'app_debug'          => config('app.debug'),
        'url'                => url('/'),
    ]); ?>
  </script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
  @switch ( app()->getLocale() )
      @case('en')
        <script src="{{ asset('js/bootstrap-select/i18n/defaults-en_US.js') }}"></script>
      @break
      @default
        <script src="{{ asset('js/bootstrap-select/i18n/defaults-' . locale_get_default( app()->getLocale() ) .'.js') }}"></script>
      @break
  @endswitch
  @yield('js')
</body>
</html>
