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
<!-- Microsoft tag -->
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
<!-- Microsoft tag -->
<!-- Google tag (gtag.js) -->
<!-- Event snippet for Purchase conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-10991283010/ufhPCNT2kYIZEMLWhvko',
      'transaction_id': ''
  });
</script>
<!-- Google tag (gtag.js) -->

</head>
<?php $pageTitle = 'DSC REGISTRATION - Payment Successful'; ?>
@include('layouts/header')  
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container"> 
                <!-- Row -->
                    <div class="row"> 
                        <div class="col-xl-12">  
                            <h1 class="display-6 text-center text-dark font-weight-500 bg-smoke-light-4 pt-20 pb-20 pl-10 pr-10">THANK YOU FOR PAYMENT <i class="fa fa-thumbs-up"></i></h1> 
                            <section class="hk-sec-wrapper shadow-xl text-dark"> 
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-md-12 mb-30 text-center"> 
                                                <h5 class="display-6 font-20 text-dark font-weight-500 text-center mb-10">Our Registration Professionals will call you within 12 to 24 Hours.<br>Kindly Verify OTP over Telephonic call with our Experts.<br>Thank You.</h5> 
                                            </div>
                                            <div class="col-md-12 mb-10">
                                                <P>You can check the status of your application by using a tracking ID.<br>
                                                <strong>Tracking ID :</strong> 
                                            @if(!empty($track_id)) {{ $track_id }} @else {{ 'Check on your registered email.'}} @endif</P>
                                            </div> 
                                            <div class="col-sm-12 pt-5 mb-10"> 
                                                <p>For any type of query & support, Kindly mail us on hello@digisignature.org</p>
                                                <p><strong>Note:</strong> We have sent your Tracking ID on your registered email address.</p>
                                            </div>
                                            <div class="col-sm-12 pt-5">
                                                <p class="text-danger text-center font-italic">Payment made after 6:30 PM will be processed at Next business day after 10.30AM.</p> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>  
@include('layouts/footer')
@include('layouts/footer_script')