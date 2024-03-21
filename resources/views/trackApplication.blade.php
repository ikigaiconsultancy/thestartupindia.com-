<?php $pageTitle = 'DSC - Track Application'; ?>
@include('layouts/intheader')
@include('layouts/header') 
<!-- Main Content -->
<div class="hk-pg-wrapper" style="background: white">
<!-- Container -->
<div class="container mb-30">
<!-- Row -->
<div class="row">
<div class="col-xl-12">
<h2 class="hk-sec-title display-5 font-weight-500 text-center text-dark bg-green-light-4 pb-10 pt-10">TRACK APPLICATION</h2>
<section class="hk-sec-wrapper shadow-xl text-dark  new-bg-dsc">
<h6 class="hk-sec-title text-center mb-10">You can track your application by using Tracking Id. Please check your email for Tracking Id.</h6>
<div class="row">
<div class="col-sm">
<form class="needs-validation" method="get" action="{{ route('dsc.track-application') }}" name="tracking-form" id="tracking-form" novalidate enctype="multipart/form-data">
<div class="row">
<div class="col-lg-6 mb-10">
<label for="validationCustom01"><strong>Tracking ID*</strong></label> 
<input type="text" class="form-control" name="tracking_id" placeholder="Enter Your Tracking ID" id="tracking_id" value="<?php if(!empty($_GET['tracking_id'])) echo $_GET['tracking_id']; ?>" required> 
<div class="invalid-feedback">
Please enter Track ID.
</div>
</div>
</div>
@if(!empty($_GET['tracking_id']))
@if(!empty($status_data->track_id) != $_GET['tracking_id'] )
<div class="row">
<div class="col-lg-6 mb-10">
<label>No Record Found.</label>  
</div>
</div>
@endif
@endif
<div class="row">
<div class="col-lg-6 mb-10">
<button type="submit" class="btn btn-orange bg-yellow-dark-3" >Submit form</button>  
</div>
</div>
</form>
@if( !empty( $_GET['tracking_id'] ) ) 
@if(!empty($dsc_data) && !empty($status_data->track_id))
<div class="row">
<div class="col-sm">
<div class="table-wrap">
<div class="table-responsive">
<table class="table table-bordered table-striped mb-0 table-sm">
<thead>
<tr>
<th><strong>Name</strong></th>
<th><strong>Details</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<strong>STATUS</strong>
</td>
<td class="font-weight-500">
@if( !empty($status_data->comments)) {{ $comment_msg }} @endif
@if($dsc_data->payment_status == 0)
<p>
<a href="{{ url('dsc-form/confirmation/'.$dsc_data->csrf_token) }}">Click here</a> to make a payment. 
</p>
@endif 
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-md-12 mb-10 mt-10">
<p class="text-center text-danger font-italic">
<strong>For any type of query & support, Kindly mail us on hello@digisignature.org</strong> 
</p>
</div>
</div>
@endif 
@endif 
</div>
</div>
</section>
</div>
</div>
</div>
</div>
@include('layouts/footer')
@include('layouts/footer_script')
</body>
</html>