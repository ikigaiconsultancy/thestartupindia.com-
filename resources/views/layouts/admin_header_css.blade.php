<!DOCTYPE html>  
<html lang="en">  
<head> 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
    <title><?php echo (isset($pageTitle)) ? $pageTitle : ''; ?></title>
    <!-- Favicon --> 
<link rel="icon" href="{{ asset('dist/img/digisignature-favicon.png') }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ asset('dist/img/digisignature-favicon.png') }}">
     <script async src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!--  STYLE CSS -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom datepicker CSS added on 17/11/20  -->
    <!-- <link href="{{ asset('custom/datepicker.css') }}" rel="stylesheet" type="text/css"> -->
    <!-- Daterangepicker CSS -->
    <link href="{{ asset('vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
     <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Data Table CSS -->
    <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
</head>