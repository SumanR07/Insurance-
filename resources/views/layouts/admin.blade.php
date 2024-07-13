<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Admin</title>

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/css/vendor.bundle.base.css')}}">
 
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <!-- @livewireStyles -->
   
</head> 
   
<body> 


    <div class="container-scroller">  
            @include('layouts.inc.admin.adminNav')
        <div class="container-fluid page-body-wrapper">  
            @include('layouts.inc.admin.adminSidebar') 

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                    @yield('script')
                </div>
            </div>
        
        </div>

    </div>



<script src="{{asset('assets/admin/vendors/js/vendor.bundle.base.js')}}"></script>

  <script src="{{asset('assets/admin/vendors/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  
    <script src="{{asset('assets/admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/admin/js/template.js')}}"></script>
    <script src="{{asset('assets/admin/js/settings.js')}}"></script>
    <script src="{{asset('assets/admin/js/todolist.js')}}"></script>
    <script src="{{asset('assets/admin/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/admin/js/proBanner.js')}}"></script>
@livewireScripts 

@stack('script')
</body>