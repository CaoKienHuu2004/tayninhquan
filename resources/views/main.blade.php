<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <meta name="description" content="Cửa hàng tạp hóa Việt Nam - Tây Ninh Quán" />
    <meta
      name="keywords"
      content="tạp hóa, tạp hóa việt nam, tạp hóa tây ninh, tạp hóa quán"
    />
    <meta name="author" content="Tây Ninh Quán - Cửa hàng tạp hóa Việt Nam" />
    <meta name="robots" content="noindex, nofollow" />
    <title>@yield('title')</title>

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{ asset('assets/img/favicon.jpg') }}"
    />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" />

    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  </head>

  <body>
  <div id="global-loader">
      <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')
    </div>

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>