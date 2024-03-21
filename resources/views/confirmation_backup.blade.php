<?php $pageTitle = 'Complete your DSC Registration'; ?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta charset="UTF-8" />
<title><?php echo (isset($pageTitle)) ? $pageTitle : ''; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-control" content="no-transform">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6.0, user-scalable=no">
<meta name="Robots" content="noindex,nofollow">
<meta name="author" content="digisignature.org">
<!-- Favicon -->  
<link rel="icon" href="{{ asset('dist/img/digisignature-favicon.png') }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ asset('dist/img/digisignature-favicon.png') }}">
<!-- Daterangepicker CSS -->
<link href="{{ asset('vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
<!-- Toggles CSS -->
<link href="{{ asset('vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="{{ asset('dist/css/font-awesome.min.css') }}" rel="stylesheet">
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
<link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<!--  STYLE CSS --> 
<link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="{{ asset('custom/css/slick.css?v=3.8') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('custom/css/util.css?v=3.8') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('custom/css/main.css?v=3.9') }}" />
<script src="{{ asset('custom/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('custom/js/public/jquery.base64.js') }}"></script>
<style>
@media (max-width:768px) {.res-hide {display: none !important;min-height: 0;}}a.active {color: #e65540;}.al-center {margin: 0 auto;}.product-img {color: rgb(10, 47, 86);background: #eff9f2;opacity: 0.6;}.errorhtml {color: red;background: #dadedd;font-size: 32px;padding: 130px 0px;min-height: 360px;text-transform: uppercase;line-height: 1.5;text-align: center;}.productprice > .fa {vertical-align: top;margin: 20px 5px auto;font-size: 18px;}.productname {font-weight: 300;font-size: 11px;line-height: 28px;padding: 0px 5px 5px;}.produclink {opacity: 0.999;background-color: #ffd800;color: black;font-size: 20px;text-align: center;padding: 6px 0px 2px 0px;font-weight: 700;margin: 10px auto;width: 125px;}.bwt {background-color: #f7f6f6;color: black;font-size: 15px;text-align: center;padding: 4px 0 4px 0;border-bottom: 1px solid #ded6d6;}.header-table {width: 100%;margin-bottom: 4px;}.th-header {border: 5px solid white;padding: 4px;text-align: center;}.th1 {width: 186px;background: #878a89;color: white;}@media (max-width:768px) {.th1 {width: 100%;}}.th2 { /*width:17px;*/}.th3 { /*width: 98px;*/background: #878a89;color: white;}.th4 { /*width:96px;*/background: #878a89;color: white;}.th5 { /*width:100px;*/background: #878a89;color: white;}.th6 { /*width:103px;*/background: #878a89;color: white;}.imgmax {width: 660px;}.bblue {background-color: #364784 !important;color: white !important;}.bblue > a {color: white !important;}.rsdiv1 {color:#000000 !important;font-size: 55px;font-weight: 100;}.hide {display: none}
</style>
<style type="text/css">
.navbar-nav { 
margin-left: auto;
}  
</style>
</head> 
<body data-spy="scroll" data-target=".navbar" data-offset="60"> 
<div class="alt-nav bg-white">
<div class="container" style="max-width:720px">
<nav class="navbar navbar-expand-xl navbar-light bg-white pt-10 pb-0">
<div class="container pl-0">
<a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
<a class="navbar-brand text-green">
<img src="{{ asset('dist/img/logo/digisignature.png') }}" alt="Digital Signature" style="max-width: 280px;" />
</a> 
<div class="navbar-collapse collapse" id="navbarCollapseAlt"></div>
</div>
</nav>
</div> 
</div>
<div class="bg-white pt-0 mnh-600p">
<div class="container" style="max-width:720px">
<div class="container">
<div class="row mb-0">
<div class="col-xl-12">
<h2 class="display-6 font-weight-400 text-center font-20 bg-green-light-3 text-dark-100 mt-10 pt-10 pb-10">Make Payment to Complete Process</h2>
<section class="">
<div class="row">
<div class="col-sm">
<div class="table-wrap">
<div class="table-responsive">
<table class="table table-success mb-0 table-sm">  
<tbody>
<tr>
<td class="font-weight-500">Name</td>
<td>{{ ucfirst($dsc_data->name_of_person) }}</td>
</tr>
<tr>
<td>Mobile Number</td>
<td>{{ $dsc_data->mobile }}</td>
</tr> 
 </tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<section class="row mt-0 mb-10"> 
<section class=" ">
<div class="container">
<div class=" row">
<div class="col-sm-12 col-md-12 col-lg-12 al-center"> 
<!--          <h5>Please choose option to buy your dsc</h5> -->
<!-- <div class="pb-20 pt-20 akusagetype">
<label>Usage Type</label>
<select id ="akusagetype" class="m-l-30 input-sm">
<option data-type="0">-Select Type-</option>
<option data-type="IT" data-profile="Individuals;IND" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For Income Tax / MCA (ROC) / GST</option>
<option data-type="ICEGATE" data-profile="Organization;ORG" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For ICEGATE</option>
<option data-type="IREPS" data-profile="Organization;ORG" data-class="Class - 3" data-classify="Both" data-year="2" data-mode="hybrid">For IREPS (Indian Ralway)</option>
<option data-type="Trademark" data-profile="Individuals;IND" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For Trademark</option>
<option data-type="DKYC" data-profile="Individuals;IND" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For Director's KYC</option>
<option data-type="ETender" data-profile="Organization;ORG" data-class="Class - 3" data-classify="Both" data-year="2" data-mode="hybrid">For E-Tender</option>
<option data-type="DGFT" data-profile="IET (DGFT);IET" data-class="Class - 2" data-classify="Sign" data-year="2" data-mode="hybrid">For Foreign Trade (IET DGFT)</option>
<option data-type="MP" data-profile="Organization;ORG" data-class="Class - 3" data-classify="Both" data-year="2" data-mode="hybrid">For Multiple Purpose</option>
<option data-type="OP" data-profile="Individuals;IND" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For Other Purpose</option>
</select>
</div>
<div class="p-b-20 p-t-20 usagetype">
<label>Usage Type</label>
<select id="usagetype" class="m-l-30 input-sm">
<option data-type="0">-Select Type-</option>
<option data-type="IT" data-profile="Individuals;IND" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For Income Tax / MCA (ROC) / GST</option>
<option data-type="ICEGATE" data-profile="Organization;ORG" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For ICEGATE</option>
<option data-type="IREPS" data-profile="Organization;ORG" data-class="Class - 3" data-classify="Both" data-year="2" data-mode="hybrid">For IREPS (Indian Ralway)</option>
<option data-type="Trademark" data-profile="Individuals;IND" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For Trademark</option>
<option data-type="DKYC" data-profile="Individuals;IND" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For Director's KYC</option>
<option data-type="ETender" data-profile="Organization;ORG" data-class="Class - 3" data-classify="Both" data-year="2" data-mode="hybrid">For E-Tender</option>
<option data-type="DGFT" data-profile="IET (DGFT);IET" data-class="Class - 2" data-classify="Sign" data-year="2" data-mode="hybrid">For Foreign Trade (IET DGFT)</option>
<option data-type="MP" data-profile="Organization;ORG" data-class="Class - 3" data-classify="Both" data-year="2" data-mode="hybrid">For Multiple Purpose</option>
<option data-type="OP" data-profile="Individuals;IND" data-class="Class - 3" data-classify="Sign" data-year="2" data-mode="hybrid">For Other Purpose</option>
</select>
</div> -->
<div class="row col-sm-12 col-md-12 col-lg-12 col-xs-12 m-0 p-0 bx-prod1_up pt-10 mt-20">
<div class=" col-sm-12 col-md-12 col-xs-12 bx-prod1 p-1" id="bx-prod" >
<div class="col-md-12 col-sm-7 tab-pad tab-pad1 p-b-10" >
<div class="wrapper mobile_accor_table">
<ul class="mobile_accor_table_ul mobile_accor_table_inner aktblproducts row">
<li  class="col-md-12 col-sm-12 mobile_accor_table_li">
<input type="checkbox" class="mobile_tab_accordion" id="list-item-1"><label for="list-item-1" class="first mobile_tab_accordion"><a href="javascript:void(0);" data-profile ="Individuals;IND" class="tab_accor">Individuals</a><i class="fa fa-chevron-right"></i></label>
<ul class="mobile_accor_table_ul mobile_tab_panel">
<li class="profile  mobile_tab_option" data-value="Individuals">
<div class="bwt profile" data-profile="Individuals;IND"  data-value="Individuals"><a href="javascript:void(0);">Individuals</a></div>
</li>
<li class="profile mobile_tab_option" data-value="Organization">
<div class="bwt profile" data-profile="Organization;ORG" data-value="Organization"><a href="javascript:void(0);">Organization</a></div>
</li>
<li class="profile mobile_tab_option" data-value="IET (DGFT)">
<div class="bwt profile" data-profile="IET (DGFT);IET" data-value="IET (DGFT)"><a href="javascript:void(0);">IET (DGFT)</a></div>
</li>
<li  class="profile mobile_tab_option" data-value="Foreign Organization">
<div class="bwt profile" data-profile="Foreign Organization;FOR" data-value="Foreign Organization"><a href="javascript:void(0);">Foreign Organization</a></div>
</li>
<li class="profile mobile_tab_option" data-value="Foreign Individual">
<div class="bwt profile" data-profile="Foreign Individual;FIN" data-value="Foreign Individual"><a href="javascript:void(0);">Foreign Individual</a></div>
</li>
<li  class="profile mobile_tab_option" data-value="Document Signer">
<div class="bwt profile" data-profile="Document Signer;SIGN" data-value="Document Signer"><a href="javascript:void(0);">Document Signer</a></div>
</li>
</ul>
</li>
<li  class="col-md-6 col-sm-12 mobile_accor_table_li">
<input type="checkbox" id="list-item-2" class="mobile_tab_accordion"><label for="list-item-2" class="mobile_tab_accordion"><a href="javascript:void(0);" class="tab_accor">Class - 2</a><i class="fa fa-chevron-right"></i></label>
<ul class="mobile_accor_table_ul mobile_tab_panel">
<li class="cls mobile_tab_option" data-profile ="Class - 2" data-value="Class - 2" >
<div class="bwt cls" data-profile ="Class - 2" data-class="Class - 2" ><a href="javascript:void(0);"  >Class - 2</a></div>
</li>
<li class="cls mobile_tab_option" data-profile ="Class - 3" data-value="Class - 3">
<div class="bwt cls"  data-profile ="Class - 3" data-class="Class - 3"><a href="javascript:void(0);" >Class - 3</a></div>
</li>
</ul>
</li>
<li  class="col-md-6 col-sm-12 mobile_accor_table_li">
<input type="checkbox" id="list-item-3" class="mobile_tab_accordion"><label for="list-item-3" class="mobile_tab_accordion "><a href="javascript:void(0);" class="tab_accor">Sign</a><i class="fa fa-chevron-right"></i></label>
<ul class="mobile_accor_table_ul mobile_tab_panel">
<li class="clasfy mobile_tab_option" data-profile ="Sign" data-value="Sign">
<div class="bwt clasfy" data-profile ="Sign" data-classify="Sign"><a href="javascript:void(0);" >Sign</a></div>
</li>
<li class="clasfy mobile_tab_option" data-profile ="Encrypt" data-value="Encrypt">
<div class="bwt clasfy" data-profile ="Encrypt" data-classify="Encrypt"><a href="javascript:void(0);">Encrypt</a></div>
</li>
<li class="clasfy mobile_tab_option" data-profile ="Sign & Encrypt" data-value="Sign & Encrypt">
<div class="bwt clasfy" data-profile ="Sign & Encrypt" data-classify="Sign & Encrypt"><a href="javascript:void(0);">Sign & Encrypt</a></div>
</li>
</ul>
</li>
<li  class="col-md-6 col-sm-12 mobile_accor_table_li">
<input type="checkbox" id="list-item-4"  class="mobile_tab_accordion"><label for="list-item-4"  class="mobile_tab_accordion "><a href="javascript:void(0);" data-profile ="2" class="tab_accor">2 Years</a><i class="fa fa-chevron-right"></i></label>
<ul class="mobile_accor_table_ul mobile_tab_panel">
<li class="year mobile_tab_option" data-profile ="1" data-value="1 Year">
<div class="bwt year" data-profile ="1" data-year="1"><a href="javascript:void(0);">1 Year</a></div>
</li>
<li class="year mobile_tab_option" data-profile ="2" data-value="2 Years">
<div class="bwt year" data-profile ="2" data-year="2" ><a href="javascript:void(0);">2 Years</a></div>
</li>
<li class="year mobile_tab_option" data-profile ="3" data-value="3 Years">
<div class="bwt year" data-profile ="3" data-year="3"><a href="javascript:void(0);">3 Years</a></div>
</li>
</ul>
</li>
<li  class="col-md-6 col-sm-12 mobile_accor_table_li">
<input type="checkbox" id="list-item-5"  class="mobile_tab_accordion"><label for="list-item-5"  class=" mobile_tab_accordion  hide "><a href="javascript:void(0);" class="tab_accor" data-profile ="Hybrid" >Paperless</a><i class="fa fa-chevron-right"></i></label>
<ul class="mobile_accor_table_ul mobile_tab_panel">
<li class="mode mobile_tab_option"  data-value="Traditional">
<div  class="bwt mode  hide " data-profile ="Traditional" data-mode="Traditional"><a href="javascript:void(0);">Traditional</a></div>
</li>
<li class="mode mobile_tab_option"  data-value="Paperless">
<div class="bwt mode " data-profile ="hybrid" data-mode="Paperless"><a href="javascript:void(0);">Paperless</a></div>
</li>
</ul>
</li>
</ul>
</div>
<table class="tblproducts header-table">
<thead>
<tr>
<th class="th-header th1">Profile</th>
<th class="th-header th3">Class</th>
<th class="th-header th4">Classify</th>
<th class="th-header th5">Year</th>
<th class="th-header th6  hide ">Mode</th>
</tr>
</thead>
<tbody>
<tr>
<td class="profile">
<div class="bwt profile" data-profile="Individuals;IND" ><a href="javascript:void(0);">Individuals</a></div>
</td>
<td class="cls">
<!-- <div class="bwt cls" data-class="Class - 2"><a href="javascript:void(0);">Class - 2</a></div> -->
</td>
<td class="clasfy">
<div class="bwt clasfy" data-classify="Sign"><a href="javascript:void(0);">Sign</a></div>
</td>
<td class="year">
<div class="bwt year" data-year="1"><a href="javascript:void(0);">1 Year</a></div>
</td>
<td class="mode">
<div class="bwt mode  hide " data-mode="Traditional"><a href="javascript:void(0);">Traditional</a></div>
</td>
</tr>
<tr>
<td class="profile">
<div class="bwt profile" data-profile="Organization;ORG"><a href="javascript:void(0);">Organization</a></div>
</td>
<td class="cls">
<div class="bwt cls" data-class="Class - 3"><a href="javascript:void(0);">Class - 3</a></div>
</td>
<td class="clasfy">
<div class="bwt clasfy" data-classify="Encrypt"><a href="javascript:void(0);">Encrypt</a></div>
</td>
<td class="year">
<div class="bwt year" data-year="2"><a href="javascript:void(0);">2 Years</a></div>
</td>
<td class="mode">
<div class="bwt mode " data-mode="hybrid"><a href="javascript:void(0);">Paperless</a></div>
</td>
</tr>
<tr>
<td class="profile">
<!-- <div class="bwt profile" data-profile="IET (DGFT);IET"><a href="javascript:void(0);">IET (DGFT)</a></div> -->
</td>
<td></td>
<td class="clasfy">
<div class="bwt clasfy" data-classify="Sign & Encrypt"><a href="javascript:void(0);">Sign & Encrypt</a></div>
</td>
<td class="year">
<!-- <div class="bwt year" data-year="3"><a href="javascript:void(0);">3 Years</a></div> -->
</td>
<td class="mode">
<div class="bwt mode  hide " data-mode="OTP"><a href="javascript:void(0);">OTP</a></div>
</td>
</tr>
<!-- <tr>
<td class="profile">
<div class="bwt profile" data-profile="Goverment;GOV"><a href="javascript:void(0);">Government</a></div>
</td>
<td></td>
<td></td>
<td></td>
<td class="mode">
<div class="bwt mode  hide " data-mode="BIO"><a href="javascript:void(0);">BIO</a></div>
</td>
</tr>
<tr>
<td class="profile">
<div class="bwt profile" data-profile="Foreign Organization;FOR"><a href="javascript:void(0);">Foreign Organization</a></div>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td class="profile">
<div class="bwt profile" data-profile="Foreign Individual;FIN"><a href="javascript:void(0);">Foreign Individual</a></div>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td class="profile">
<div class="bwt profile" data-profile="Document Signer;SIGN"><a href="javascript:void(0);">Document Signer</a></div>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr> -->
</tbody>
</table>
</div>
<div class=" col-sm-5 col-xl-3 imgmax-float" style="padding-right: 0px; color: black; text-align: center; ">
<div class="results imgmax2 "></div>
</div>
<div class="clearfix"></div>
<div class="div-results"></div>
<!-- <div class=" col-md-12">
</div> -->
</div>
<div class="pt-20">
<div class="results imgmax"></div>
</div>
</div>
</div>
</div> 
</div>
</section>
</section>
</section>     
</div>
</div>
</div>
</div>
<!-- Footer - SECOND -->
<section class="bg-dark-100 mt-50">
<div class="container py-10 text-white font-weight-100">
<footer class="footer">
<div class="row">
<div class="col-md-6 col-sm-12">
<p class="d-inline-block text-white">All Rights Reserved <a href="https://udyogsuvidhakendra.in/" class="text-white">digisignature.org</a> © 2024</p>
</div>
<div class="col-md-6 col-sm-12 text-right">
<p class="d-inline-block text-white">Secured Payments</p>
<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-icon-style-4"><span class="btn-icon-wrap text-green font-20"><i class="fa fa-lock"></i></span></a>
<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-icon-style-4"><span class="btn-icon-wrap text-green"><i class="fa fa-credit-card"></i></span></a>
<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-icon-style-4"><span class="btn-icon-wrap text-green"><i class="fa fa-cc-mastercard"></i></span></a>
<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-icon-style-4"><span class="btn-icon-wrap text-green"><i class="fa fa-cc-paypal"></i></span></a>
</div>
</div>
</footer>
</div>
</section>
</div>
</body>
</html>
<!-- /Footer -->
@include('layouts/footer_script')
<script type="text/javascript">
$(document).ready(function() {
var _hash = window.location.hash;
if (_hash == "#Organization" || _hash == "#Individuals" || _hash == "#IETDGFT" || _hash == "#ForeignOrganization" || _hash == "#ForeignIndividual" || _hash == "#DocumentSigner") {
getSelected_Profile(_hash);
}
$(".mode").addClass("hide");
var _id = '';
var _profile = '';
var _class = '';
var _classify = '';
var _year = '';
var _mode = '';
var json = [{
"ProdList": [],
"Price": "2900.00",
"ProductId": "101",
"Name": "Class - 3 <mark>Digital Signature \u0026 Encryption</mark> Validity <mark>1 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Individuals;IND",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/101/class-3-sign-encrypt-valid-for-1-year-dsc-with-services-ind-paperless",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "2950.00",
"ProductId": "104",
"Name": "Class - 3 <mark>Digital Signature \u0026 Encryption</mark> Validity <mark>2 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Individuals;IND",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/104/class-3-sign-encrypt-valid-for-2-year-dsc-with-services-ind-paperless",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "2900.00",
"ProductId": "92",
"Name": "Class - 3 <mark>Digital Signature only</mark> Validity <mark>1 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Sign",
"Profile": "Individuals;IND",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/92/class-3-sign-valid-for-1-year-dsc-with-services-ind-paperless",
"ImageUrl": "/images/products/Class-3-Sign-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "2950.00",
"ProductId": "95",
"Name": "Class - 3 <mark>Digital Signature only</mark> Validity <mark>2 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Sign",
"Profile": "Individuals;IND",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/95/class-3-sign-valid-for-2-year-dsc-with-services-ind-paperless",
"ImageUrl": "/images/products/Class-3-Sign-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "2900.00",
"ProductId": "83",
"Name": "Class - 3 <mark>Digital Encryption only</mark> Validity <mark>1 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Encrypt",
"Profile": "Individuals;IND",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/83/class-3-encrypt-valid-for-1-year-dsc-with-services-ind-paperless",
"ImageUrl": "/images/products/Class-3-encrypt-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "2950.00",
"ProductId": "86",
"Name": "Class - 3 <mark>Digital Encryption only</mark> Validity <mark>2 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Encrypt",
"Profile": "Individuals;IND",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/86/class-3-encrypt-valid-for-2-year-dsc-with-services-ind-paperless",
"ImageUrl": "/images/products/Class-3-encrypt-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "3400.00",
"ProductId": "102",
"Name": "Class - 3 <mark>Digital Signature \u0026 Encryption</mark> Validity <mark>1 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Organization;ORG",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/102/class-3-sign-encrypt-valid-for-1-year-dsc-with-services-org-paperless",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "3450.00",
"ProductId": "105",
"Name": "Class - 3 <mark>Digital Signature \u0026 Encryption</mark> Validity <mark>2 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Organization;ORG",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/105/class-3-sign-encrypt-valid-for-2-year-dsc-with-services-org-paperless",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "2800.00",
"ProductId": "93",
"Name": "Class - 3 <mark>Digital Signature only</mark> Validity <mark>1 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Sign",
"Profile": "Organization;ORG",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/93/class-3-sign-valid-for-1-year-dsc-with-services-org-paperless",
"ImageUrl": "/images/products/Class-3-Sign-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "2900.00",
"ProductId": "96",
"Name": "Class - 3 <mark>Digital Signature only</mark> Validity <mark>2 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Sign",
"Profile": "Organization;ORG",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/96/class-3-sign-valid-for-2-year-dsc-with-services-org-paperless",
"ImageUrl": "/images/products/Class-3-Sign-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "2800.00",
"ProductId": "84",
"Name": "Class - 3 <mark>Digital Encryption only</mark> Validity <mark>1 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Encrypt",
"Profile": "Organization;ORG",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/84/class-3-encrypt-valid-for-1-year-dsc-with-services-org-paperless",
"ImageUrl": "/images/products/Class-3-encrypt-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "2900.00",
"ProductId": "87",
"Name": "Class - 3 <mark>Digital Encryption only</mark> Validity <mark>2 Year</mark><br>With USB Auto Token Hyp2003 (HyperSecu / ePass)<br><mark>Delivered to your address via Courier</mark>",
"Classify": "Encrypt",
"Profile": "Organization;ORG",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/87/class-3-encrypt-valid-for-2-year-dsc-with-services-org-paperless",
"ImageUrl": "/images/products/Class-3-encrypt-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "35,400.00",
"ProductId": "355",
"Name": "Class - 2 Sign \u0026 Encrypt valid for 1 Year Document Signer DSC with Services. (SIGN, Paperless )",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Document Signer;SIGN",
"Mode": "Hybrid",
"Class": "Class - 2",
"Year": "1",
"Category": "Document Signer DSC with Services.",
"Url": "/hybrid-form/355/class-2-sign-encrypt-valid-for-1-year-document-signer-dsc-with-services-sign-paperless-",
"ImageUrl": "/images/products/Document-signer-class-2-Sign-and-encrypt-1-year.png",
"Description": null
}, {
"ProdList": [],
"Price": "39,999.99",
"ProductId": "356",
"Name": "Class - 2 Sign \u0026 Encrypt valid for 2 Year Document Signer DSC with Services. (SIGN, Paperless )",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Document Signer;SIGN",
"Mode": "Hybrid",
"Class": "Class - 2",
"Year": "2",
"Category": "Document Signer DSC with Services.",
"Url": "/hybrid-form/356/class-2-sign-encrypt-valid-for-2-year-document-signer-dsc-with-services-sign-paperless-",
"ImageUrl": "/images/products/Document-signer-class-2-Sign-and-encrypt-2-year.png",
"Description": null
}, {
"ProdList": [],
"Price": "29,999.99",
"ProductId": "358",
"Name": "Class - 2 Sign valid for 1 Year Document Signer DSC with Services. (SIGN, Paperless )",
"Classify": "Sign",
"Profile": "Document Signer;SIGN",
"Mode": "Hybrid",
"Class": "Class - 2",
"Year": "1",
"Category": "Document Signer DSC with Services.",
"Url": "/hybrid-form/358/class-2-sign-valid-for-1-year-document-signer-dsc-with-services-sign-paperless-",
"ImageUrl": "/images/products/Document-signer-class-2-sign-1-year.png",
"Description": null
}, {
"ProdList": [],
"Price": "39,999.99",
"ProductId": "360",
"Name": "Class - 2 Sign valid for 2 Year Document Signer DSC with Services. (SIGN, Paperless )",
"Classify": "Sign",
"Profile": "Document Signer;SIGN",
"Mode": "Hybrid",
"Class": "Class - 2",
"Year": "2",
"Category": "Document Signer DSC with Services.",
"Url": "/hybrid-form/360/class-2-sign-valid-for-2-year-document-signer-dsc-with-services-sign-paperless-",
"ImageUrl": "/images/products/Document-signer-class-2-sign-2-year.png",
"Description": null
}, {
"ProdList": [],
"Price": "39,999.99",
"ProductId": "364",
"Name": "Class - 3 Sign valid for 1 Year Document Signer DSC with Services. (SIGN, Paperless )",
"Classify": "Sign",
"Profile": "Document Signer;SIGN",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "Document Signer DSC with Services.",
"Url": "/hybrid-form/364/class-3-sign-valid-for-1-year-document-signer-dsc-with-services-sign-paperless-",
"ImageUrl": "/images/products/Document-signer-class-3-sign-1-year.png",
"Description": null
}, {
"ProdList": [],
"Price": "54,999.87",
"ProductId": "365",
"Name": "Class - 3 Sign valid for 2 Year Document Signer DSC with Services. (SIGN, Paperless )",
"Classify": "Sign",
"Profile": "Document Signer;SIGN",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "Document Signer DSC with Services.",
"Url": "/hybrid-form/365/class-3-sign-valid-for-2-year-document-signer-dsc-with-services-sign-paperless-",
"ImageUrl": "/images/products/Document-signer-class-3-sign-2-year.png",
"Description": null
}, {
"ProdList": [],
"Price": "4,588.49",
"ProductId": "359",
"Name": "Class - 2 Sign valid for 1 Year IET  (IET, Paperless )",
"Classify": "Sign",
"Profile": "IET (DGFT);IET",
"Mode": "Hybrid",
"Class": "Class - 2",
"Year": "1",
"Category": "IET (DGFT) DSC with Services.",
"Url": "/hybrid-form/359/class-2-sign-valid-for-1-year-iet-iet-paperless-",
"ImageUrl": "/images/products/Iet-DGFT-class-2-sign-1-year.png",
"Description": null
}, {
"ProdList": [],
"Price": "6,882.74",
"ProductId": "361",
"Name": "Class - 2 Sign valid for 2 Year IET  (IET, Paperless )",
"Classify": "Sign",
"Profile": "IET (DGFT);IET",
"Mode": "Hybrid",
"Class": "Class - 2",
"Year": "2",
"Category": "IET (DGFT) DSC with Services.",
"Url": "/hybrid-form/361/class-2-sign-valid-for-2-year-iet-iet-paperless-",
"ImageUrl": "/images/products/Iet-DGFT-class-2-sign-2-year.png",
"Description": null
}, {
"ProdList": [],
"Price": "5,999.99",
"ProductId": "100",
"Name": "Class - 3 Sign \u0026 Encrypt valid for 1 Year DSC with Services. (GOV, Paperless)",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Goverment;GOV",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/100/class-3-sign-encrypt-valid-for-1-year-dsc-with-services-gov-paperless",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "6,199.99",
"ProductId": "103",
"Name": "Class - 3 Sign \u0026 Encrypt valid for 2 Year DSC with Services. (GOV, Paperless)",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Goverment;GOV",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/103/class-3-sign-encrypt-valid-for-2-year-dsc-with-services-gov-paperless",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "3,823.74",
"ProductId": "91",
"Name": "Class - 3 Sign valid for 1 Year DSC with Services. (GOV, Paperless)",
"Classify": "Sign",
"Profile": "Goverment;GOV",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/91/class-3-sign-valid-for-1-year-dsc-with-services-gov-paperless",
"ImageUrl": "/images/products/Class-3-Sign-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "4,340.00",
"ProductId": "94",
"Name": "Class - 3 Sign valid for 2 Year DSC with Services. (GOV, Paperless)",
"Classify": "Sign",
"Profile": "Goverment;GOV",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/94/class-3-sign-valid-for-2-year-dsc-with-services-gov-paperless",
"ImageUrl": "/images/products/Class-3-Sign-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "3,823.74",
"ProductId": "82",
"Name": "Class - 3 Encrypt valid for 1 Year DSC with Services. (GOV, Paperless)",
"Classify": "Encrypt",
"Profile": "Goverment;GOV",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/82/class-3-encrypt-valid-for-1-year-dsc-with-services-gov-paperless",
"ImageUrl": "/images/products/Class-3-encrypt-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "4,340.00",
"ProductId": "85",
"Name": "Class - 3 Encrypt valid for 2 Year DSC with Services. (GOV, Paperless)",
"Classify": "Encrypt",
"Profile": "Goverment;GOV",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/85/class-3-encrypt-valid-for-2-year-dsc-with-services-gov-paperless",
"ImageUrl": "/images/products/Class-3-encrypt-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "19,175.00",
"ProductId": "331",
"Name": "Class - 3 Sign \u0026 Encrypt valid for 1 Year DSC with Services. (FIN, Paperless )",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Foreign Individual;FIN",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/331/class-3-sign-encrypt-valid-for-1-year-dsc-with-services-fin-paperless-",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "23,010.00",
"ProductId": "332",
"Name": "Class - 3 Sign \u0026 Encrypt valid for 2 Year DSC with Services. (FIN, Paperless )",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Foreign Individual;FIN",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/332/class-3-sign-encrypt-valid-for-2-year-dsc-with-services-fin-paperless-",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "15,340.00",
"ProductId": "328",
"Name": "Class - 3 Sign valid for 1 Year DSC with Services. (FIN, Paperless )",
"Classify": "Sign",
"Profile": "Foreign Individual;FIN",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/328/class-3-sign-valid-for-1-year-dsc-with-services-fin-paperless-",
"ImageUrl": "/images/products/Class-3-Sign-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "19,175.00",
"ProductId": "329",
"Name": "Class - 3 Sign valid for 2 Year DSC with Services. (FIN, Paperless )",
"Classify": "Sign",
"Profile": "Foreign Individual;FIN",
"Mode": "Hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/329/class-3-sign-valid-for-2-year-dsc-with-services-fin-paperless-",
"ImageUrl": "/images/products/Class-3-Sign-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "19,175.00",
"ProductId": "307",
"Name": "Class - 3 Sign \u0026 Encrypt valid for 1 Year DSC with Services. (FOR, Paperless )",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Foreign Organization;FOR",
"Mode": "hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/307/class-3-sign-encrypt-valid-for-1-year-dsc-with-services-for-paperless-",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "23,010.00",
"ProductId": "308",
"Name": "Class - 3 Sign \u0026 Encrypt valid for 2 Year DSC with Services. (FOR, Paperless )",
"Classify": "Sign \u0026 Encrypt",
"Profile": "Foreign Organization;FOR",
"Mode": "hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/308/class-3-sign-encrypt-valid-for-2-year-dsc-with-services-for-paperless-",
"ImageUrl": "/images/products/Class-3-Sign-and-Encrypt-2-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "15,340.00",
"ProductId": "304",
"Name": "Class - 3 Sign valid for 1 Year DSC with Services. (FOR, Paperless )",
"Classify": "Sign",
"Profile": "Foreign Organization;FOR",
"Mode": "hybrid",
"Class": "Class - 3",
"Year": "1",
"Category": "DSC with Services.",
"Url": "/hybrid-form/304/class-3-sign-valid-for-1-year-dsc-with-services-for-paperless-",
"ImageUrl": "/images/products/Class-3-Sign-1-years.png",
"Description": null
}, {
"ProdList": [],
"Price": "19,175.00",
"ProductId": "305",
"Name": "Class - 3 Sign valid for 2 Year DSC with Services. (FOR, Paperless )",
"Classify": "Sign",
"Profile": "Foreign Organization;FOR",
"Mode": "hybrid",
"Class": "Class - 3",
"Year": "2",
"Category": "DSC with Services.",
"Url": "/hybrid-form/305/class-3-sign-valid-for-2-year-dsc-with-services-for-paperless-",
"ImageUrl": "/images/products/Class-3-Sign-2-years.png",
"Description": null
}];
_profile = "Individuals;IND";
_class = "Class - 3";
_clasify = "Sign";
_year = "2";
_mode = "hybrid";
$("div[ data-profile='" + _profile + "']").addClass('bblue');
$("div[ data-class='" + _class + "']").addClass('bblue');
$("div[ data-classify='" + _clasify + "']").addClass('bblue');
$("div[ data-year='" + _year + "']").addClass('bblue');
$("div[ data-mode='" + _mode + "']").addClass('bblue');
getProduct();
$(".tblproducts tbody a").click(function() {
$('#usagetype').val('-Select Type-');
var curr_class = $(this).parent().parent().attr("class");
$("." + curr_class).find("div").removeClass("bblue");
$(this).parent().addClass("bblue");
$(".div-results").html('');
$(".results").html('');
_profile = '';
_class = '';
_classify = '';
_year = '';
_mode = '';
getProduct();
});
$("#usagetype").change(function() {
$(".div-results").html('');
$(".results").html('');
var type = $(this).find('option:selected').attr('data-type');
if (type != "0") {
var profile = $(this).find('option:selected').attr('data-profile');
var cls = $(this).find('option:selected').attr('data-class');
var mode = $(this).find('option:selected').attr('data-mode');
var classify = $(this).find('option:selected').attr('data-classify');
var year = $(this).find('option:selected').attr('data-year');
if (classify == "Both") {
classify = "Sign & Encrypt";
}
$('td').find('div').removeClass('bblue');
$('td.profile').find('div').each(function() {
var _p = $(this).attr('data-profile');
if (profile == _p) {
$(this).addClass('bblue');
}
});
$('td.cls').find('div').each(function() {
var _cls = $(this).attr('data-class');
if (cls == _cls) {
$(this).addClass('bblue');
}
});
$('td.clasfy').find('div').each(function() {
var _clsfy = $(this).attr('data-classify');
if (classify == _clsfy) {
$(this).addClass('bblue');
}
});
$('td.year').find('div').each(function() {
var _year = $(this).attr('data-year');
if (year == _year) {
$(this).addClass('bblue');
}
});
$('td.mode').find('div').each(function() {
var _mode = $(this).attr('data-mode');
if (mode == _mode) {
$(this).addClass('bblue');
}
});
$(".div-results").html('');
$(".results").html('');
_profile = '';
_class = '';
_classify = '';
_year = '';
_mode = '';
getProduct();
}
});
function getProduct() {
var currentbox = $(".tblproducts");
_profile = $(currentbox).find(".profile.bblue").attr("data-profile");
_class = $(currentbox).find(".cls.bblue").attr("data-class");
_classify = $(currentbox).find(".clasfy.bblue").attr("data-classify");
_year = $(currentbox).find(".year.bblue").attr("data-year");
_mode = $(currentbox).find(".mode.bblue").attr("data-mode");
if (_profile != undefined && _class != undefined && _classify != undefined && _year != undefined) {
var obj = json.filter(function(el) {
return el.Profile.toLowerCase().trim() == _profile.toLowerCase().trim() && el.Class.toLowerCase().trim() == _class.toLowerCase().trim() && el.Classify.toLowerCase().trim() == _classify.toLowerCase().trim() && el.Year.toLowerCase().trim() == _year.toLowerCase().trim() && el.Mode.toLowerCase().trim() == _mode.toLowerCase().trim()
});
if (obj.length > 0) {
var name = obj[0].Name;
var price = obj[0].Price;
var id = obj[0].ProductId;
var url = obj[0].Url;
var imgUrl = obj[0].ImageUrl;
var r = "<button id='rzp-button1' class='btn  btn-rounded btn-success produclink' value=" + price + ">BUY NOW";
$(".div-results").html();
var a = "";
// a += "<a href='" + url + "'>";
// coomented by gajendra
// a += "<img src='" + imgUrl + "' alt='" + imgUrl + "' />"; 
// a += "<img src='{{ asset('custom/Class-3-encrypt-1-years.png') }}' alt='" + imgUrl + "' />";
// a += "<div class='fresult' style ='margin-top:-158px;'>";
a += "<div class='productprice product-img pt-20'><i class='fa fa-rupee'></i><span class='rsdiv1 price'>" + price + "</span> </div>";
a += "<div class='productname product-img font-18 pt-20 pb-30'> " + name + "</div>";
a += "<button id='rzp-button1' class='btn btn-lg  btn-rounded btn-success mt-20' value=" + price + ">Pay Now</button>";
a += "<a href='{{ url('dsc-form/edit/'.$dsc_data->csrf_token) }}' class='btn  btn-rounded btn-purple mt-20 ml-10'>Edit Application</a>";
// a += "<div class='produclink'>BUY NOW</div>";
a += "</div > ";
// a += "</a>";
$(".results").hide();
$(".results").html(a);
$(".results").slideDown();
} else {
var errorhtml = "";
errorhtml += "<div class='fresult'>";
errorhtml += "<div class='errorhtml'>DSC not available</div>";
errorhtml += "</div > ";
$(".results").html(errorhtml);
var r = "<div class='p-l-5 text-danger font-weight-bold'>DSC NOT AVAILABLE</div>";
$(".div-results").html(r);
}
}
} /* start table mobile accordian*/
$(".mobile_tab_option").click(function() {
$('#akusagetype').val('-Select Type-');
$(".mobile_tab_option").find("div").removeClass("bblue");
$(this).find("div").addClass("bblue");
var _val = $(this).attr("data-value");
var _prof = $(this).children('div').attr("data-profile");
$(this).parent().parent('li').find(".tab_accor").html(_val);
$(this).parent().parent('li').find(".tab_accor").attr("data-profile", _prof);
$(this).parent().hide();
$(this).parent().parent('li').find('i').removeClass("fa-chevron-down");
$(this).parent().parent('li').find('i').addClass("fa-chevron-right");
akgetProduct();
});
$('.mobile_accor_table_li  input[type="checkbox"]').click(function() {
$('#akusagetype').val('-Select Type-');
if ($(this).prop("checked") == true) {
$(this).parent('li').find('i').addClass("fa-chevron-down");
$(this).parent('li').find('i').removeClass("fa-chevron-right");
$(this).parent('li').find('.mobile_tab_panel').show();
} else if ($(this).prop("checked") == false) {
$(this).parent('li').find('i').addClass("fa-chevron-right");
$(this).parent('li').find('i').removeClass("fa-chevron-down");
$(this).parent('li').find('.mobile_tab_panel').hide();
}
});
$("#akusagetype").change(function() {
$(".div-results").html('');
$(".results").html('');
var type = $(this).find('option:selected').attr('data-type');
if (type != "0") {
var profile = $(this).find('option:selected').attr('data-profile');
var cls = $(this).find('option:selected').attr('data-class');
var mode = $(this).find('option:selected').attr('data-mode');
var classify = $(this).find('option:selected').attr('data-classify');
var year = $(this).find('option:selected').attr('data-year');
if (classify == "Both") {
classify = "Sign & Encrypt";
}
$('li.profile').find('div').each(function() {
var _p = $(this).attr('data-profile');
var _d = $(this).attr('data-value');
if (profile == _p) {
$(this).addClass('bblue');
$(".mobile_accor_table_li:nth-child(1)").find(".tab_accor").html(_d);
$(".mobile_accor_table_li:nth-child(1)").find(".tab_accor").attr("data-profile", _p);
}
});
$('li.cls').find('div').each(function() {
var _cls = $(this).attr('data-class');
if (cls == _cls) {
$(this).addClass('bblue');
$(".mobile_accor_table_li:nth-child(2)").find(".tab_accor").html(_cls);
$(".mobile_accor_table_li:nth-child(2)").find(".tab_accor").attr("data-profile", _cls);
}
});
$('li.clasfy').find('div').each(function() {
var _clsfy = $(this).attr('data-classify');
if (classify == _clsfy) {
$(this).addClass('bblue');
$(".mobile_accor_table_li:nth-child(3)").find(".tab_accor").html(_clsfy);
$(".mobile_accor_table_li:nth-child(3)").find(".tab_accor").attr("data-profile", _clsfy);
}
});
$('li.year').find('div').each(function() {
var _year = $(this).attr('data-year');
if (year == _year) {
$(this).addClass('bblue');
$(".mobile_accor_table_li:nth-child(4)").find(".tab_accor").html(_year + ' Years');
$(".mobile_accor_table_li:nth-child(4)").find(".tab_accor").attr("data-profile", _year);
}
});
$('li.mode').find('div').each(function() {
var _mode = $(this).attr('data-mode');
if (mode == _mode) {
$(this).addClass('bblue');
$(".mobile_accor_table_li:nth-child(5)").find(".tab_accor").html(_mode);
$(".mobile_accor_table_li:nth-child(5)").find(".tab_accor").attr("data-profile", _mode);
}
});
akgetProduct();
}
}); /*added by kamal*/
function akgetProduct() {
_profile = $("label[for=list-item-1]> a").attr("data-profile");
_class = $("label[for=list-item-2]")[0].innerText;
_classify = $("label[for=list-item-3]")[0].innerText;
_year = $("label[for=list-item-4]> a").attr("data-profile");
_mode = $("label[for=list-item-5]> a").attr("data-profile");
if (_profile != undefined && _class != undefined && _classify != undefined && _year != undefined) {
var obj = json.filter(function(el) {
return el.Profile.toLowerCase().trim() == _profile.toLowerCase().trim() && el.Class.toLowerCase().trim() == _class.toLowerCase().trim() && el.Classify.toLowerCase().trim() == _classify.toLowerCase().trim() && el.Year.toLowerCase().trim() == _year.toLowerCase().trim() && el.Mode.toLowerCase().trim() == _mode.toLowerCase().trim()
});
if (obj.length > 0) {
var name = obj[0].Name;
var price = obj[0].Price;
var id = obj[0].ProductId;
var url = obj[0].Url;
var imgUrl = obj[0].ImageUrl;
var r = "<a href='" + url + "' class='p-l-5 btn-link font-weight-bold' title='click to Buy Now'>" + name + " <span class='bblue p-l-5 p-r-5'>BUY NOW<span></a>";
$(".div-results").html(r);
var a = "";
a += "<a href='" + url + "'>";
a += "<img src='" + imgUrl + "' alt='" + imgUrl + "' />";
a += "<div class='fresult' style ='margin-top:-158px;'>";
a += "<div class='productprice product-img'><i class='fa fa-rupee'></i><span class='rsdiv1 price'>" + price + "</span> </div>";
a += "<div class='productname product-img'> " + name + "</div>";
a += "<div class='produclink'>BUY NOW</div>";
a += "</div > ";
a += "</a>";
$(".results").hide();
$(".results").html(a);
$(".results").slideDown();
} else {
var errorhtml = "";
errorhtml += "<div class='fresult'>";
errorhtml += "<div class='errorhtml'>DSC not available</div>";
errorhtml += "</div > ";
$(".results").html(errorhtml);
var r = "<div class='p-l-5 text-danger font-weight-bold'>DSC NOT AVAILABLE</div>";
$(".div-results").html(r);
}
}
}
});
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script> 
<script>
$('body').on('click','#rzp-button1',function(e){
e.preventDefault();
var amount_float  = $( "#rzp-button1" ).val();
var newStr = amount_float.replace(/,/g, '');
var amount = Math.round(newStr);
if(amount != '')
{
var user_id = "@php echo $dsc_data->id @endphp"; 
var email   = "@php echo $dsc_data->email @endphp"; 
var mobile  = "@php echo $dsc_data->mobile @endphp";  
var name_of_firm    = "@php echo $dsc_data->name_of_firm @endphp";
var image_path = "@php echo asset('dist/img/udyogsuvidhasquarelogo.png'); @endphp"; 
var service_type = "dsc-service";  
var total_amount = amount * 100;
var options = {
"key": "{{ env('RAZOR_KEY') }}", 
"amount": total_amount, 
"currency": "INR",
"name": "DSC Registration",
"description": "DSC Registration - udyogsuvidhakendra.in",
"image": image_path,
"order_id": "", 
"handler": function (response){
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type:'POST',
url:"{{ route('payment') }}",
data:{razorpay_payment_id:response.razorpay_payment_id,amount:amount,user_id:user_id,service_type:service_type},
success:function(data){
$('.success-message').text(data.success);
$('.success-alert').fadeIn('slow', function(){
$('.success-alert').delay(5000).fadeOut(); 
});
$('.amount').val('');
//it will redirect it to new page
window.location.replace(data);
}
});
},
"prefill": {
"name": name_of_firm,
"email": email,
"contact": mobile
},
"notes": {
"address": "Palghar"
},
"theme": {
"color": "#ab26aa"
},
"reminder_enable": true,
};
var rzp1 = new Razorpay(options);
rzp1.open();
} else {
alert('Something went wrong. Please contact us.')
}
});
</script>  