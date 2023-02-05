<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/frontend/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/frontend/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>@yield('title') - {{ config('app.name') }}</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport'/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
  <link href="{{ public_asset('/assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <link href="{{ public_mix('/assets/frontend/css/now-ui-kit.css') }}" rel="stylesheet"/>
  <link href="{{ public_asset('/assets/frontend/css/styles.css') }}" rel="stylesheet"/>
  @yield('css')
</head>

<body class="login-page" style="background: #222534;">
<!-- Navbar -->

<!-- End Navbar -->
<div class="page-header">

  <div class="container">
    @yield('content')
  </div>
  <footer class="footer">
  <div class="row">   
  <div class="col-md-4">
  </div>   
  <div class="col-md-4">
   <div align="center" style="color:white">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>
        , powered by
        <a href="http://www.phpvms.net" style="color: #279fba;" target="_blank">phpvms</a>. Now-UI by
        <a href="https://www.creative-tim.com" style="color: #279fba;" target="_blank">Creative Tim</a>
      </div>
  </div>   
  <div class="col-md-4">
  </div> 
  </div>    
  </footer>
</div>
</body>

<script src="{{ public_asset('/assets/global/js/jquery.js') }}" type="text/javascript"></script>

@yield('scripts')

</html>
