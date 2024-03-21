<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <title><?php echo (isset($pageTitle)) ? $pageTitle : ''; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="no-transform">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6.0, user-scalable=no">
    <meta name="Robots" content="noindex,nofollow">
    <meta name="author" content="digisignature.org">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->  
   <link rel="icon" href="{{ asset('dist/img/digisignature-favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('dist/img/digisignature-favicon.png') }}">
    <script  src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">    
    <!-- Daterangepicker CSS -->
    <link href="{{ asset('vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <!-- Toggles CSS -->
    <link href="{{ asset('vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">
    <!-- CSRF Token --> 
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="{{ asset('dist/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!--  STYLE CSS --> 
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- CSRF Token --> 
</head>
