<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Admin Panel">
    <title> @yield('title') Admin Panel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL('public/admin/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500&display=swap" rel="stylesheet"> 
    <style>
     .quick-med{
       font-family: 'Quicksand', sans-serif;
     }
    </style>
    @yield('css')
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    @include('admin.layout.header')
  
    <!-- Sidebar menu-->
    @include('admin.layout.sidebar')
    
    <main class="app-content" id="app" style="background-color:rgb(240,240,240)">
       @yield('content')
    </main>
    
    <!-- Essential javascripts for application to work-->
    <script src="{{URL('public/admin/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL('public/admin/js/popper.min.js')}}"></script>
    <script src="{{URL('public/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{URL('public/admin/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{URL('public/admin/js/plugins/pace.min.js')}}"></script>
    <script src="{{URL('public/vue.js')}}"></script>
    
     @yield('scripts')
   
    <style>
     .modal-full {
    min-width: 90%;
}

.modal-full .modal-content {
    min-height: 60vh;
}
    </style>
  </body>
</html>