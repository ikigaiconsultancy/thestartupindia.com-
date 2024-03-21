<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta charset="utf-8">
<title><?php echo (isset($pageTitle)) ? $pageTitle : ''; ?></title>
<meta name="description" content="<?php echo (isset($pageDescription)) ? $pageDescription : ''; ?>">
<link rel="canonical" href="<?php echo (isset($pagecanonical)) ? $pagecanonical : ''; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6.0">
<meta name="Robots" content="index,follow">
<meta name="author" content="digisignature.org">
<!-- CSRF Token --> 
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Favicon -->  
<link rel="icon" href="{{ asset('dist/img/digisignature-favicon.png') }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ asset('dist/img/digisignature-favicon.png') }}">
<link rel="dns-prefetch" href="https://fonts.googleapis.com"/>
<link rel="dns-prefetch" href="https://kit.fontawesome.com"/>
<link rel="dns-prefetch" href="https://www.google-analytics.com"/>
<link rel="dns-prefetch" href="https://www.google.com"/>
<link rel="dns-prefetch" href="https://www.google.co.in"/>
<link rel="dns-prefetch" href="https://www.gstatic.com"/>
<link rel="dns-prefetch" href="https://fonts.gstatic.com"/>
<link rel="dns-prefetch" href="https://www.googletagmanager.com"/>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com"/>
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net"/>
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
<link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
<!--START Microsoft tag -->
<script>
    (function(w,d,t,r,u)
    {
        var f,n,i;
        w[u]=w[u]||[],f=function()
        {
            var o={ti:"17530208", enableAutoSpaTracking: true};
            o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")
        },
        n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function()
        {
            var s=this.readyState;
            s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)
        },
        i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)
    })
    (window,document,"script","//bat.bing.com/bat.js","uetq");
</script>
<!--END Microsoft tag -->
<!--START Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10991283010"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10991283010');
</script>
<!--END Google tag (gtag.js) -->
</head>