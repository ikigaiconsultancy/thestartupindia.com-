<?php $pageTitle = 'View User - Admin Dashboard'; ?>
@include('layouts/admin_header_css')
@include('layouts/admin_header')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item active" aria-current="page"><a href="#">View User</a></li> 
        </ol>
    </nav>
    <!-- /Breadcrumb -->
    <!-- Container -->
    <div class="container">  
        @if(Session::has('success'))
                <div class="alert alert-success success-alert alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <span class="success-message">{{Session::get('success')}}</span>
                    {{ Session::forget('success') }}
                </div>
            @endif
	    <!-- Row -->
	    <div class="row">
	        <div class="col-xl-12"> 
	        	<section class="hk-sec-wrapper">  
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-0 table-sm">  
                                        <tbody>
                                            <tr>
                                                <td>Created At</td>
                                                <td>{{ date('d-m-Y h:i:s', strtotime($dsc_data->created_at)) }}</td>
                                            </tr> 
                                            <tr>
                                                <td>Updated At</td>
                                                <td>{{ date('d-m-Y h:i:s', strtotime($dsc_data->updated_at)) }}</td>
                                            </tr> 
                                            <tr>
                                                <td>Payment Status</td>
                                                <td>
                                                    @if($dsc_data->payment_status == 1) 
                                                        {{ 'Done' }}
                                                    @else 
                                                        {{ 'Pending' }}
                                                    @endif
                                                </td>
                                            </tr> 
                                        <form action="{{ url('admin/edit-status') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $dsc_data->id }}">
                                            <tr>  
                                                <td class="font-weight-600">Client Status</td>
                                                <td>
                                                    <select class="form-control custom-select d-block w-100" id="client_status" name="client_status">
                                                        <option value="">Select Status</option>
                                                        <option value="processing" @if($dsc_data->client_status == 'processing') selected @endif>Processing</option>
                                                        <option value="pending" @if($dsc_data->client_status == 'pending') selected @endif>Pending</option>
                                                        <option value="on_hold" @if($dsc_data->client_status == 'on_hold') selected @endif>On Hold</option>
                                                        <option value="completed" @if($dsc_data->client_status == 'completed') selected @endif>Completed</option>
                                                        <option value="cancelled" @if($dsc_data->client_status == 'cancelled') selected @endif>Cancelled</option>
                                                        <option value="refund" @if($dsc_data->client_status == 'refund') selected @endif>Refund</option> 
                                                        <option value="refund_completed" @if($dsc_data->client_status == 'refund_completed') selected @endif>Refund Completed</option> 
                                                    </select>
                                                </td> 
                                            </tr> 
                                            <tr> 
                                                <td class="font-weight-600">Remarks</td>
                                                <td>
                                                    <input class="form-control" id="remarks"name="remarks" value="{{ $dsc_data->remarks }}">
                                                </td>
                                                  
                                            </tr> 
                                            <tr> 
                                                <td class="font-weight-600">Tracking Status</td>
                                                <td>   
                                                    <select class="form-control custom-select d-block w-100" id="tracking_status" name="tracking_status" >
                                                        <option value="" >Select Tracking Status</option>
                                                        <option  value="0" style="box-sizing: content-box;" @if( $dsc_data->comments == 0 ) selected @endif > Your Digital Signature Certificate process is underway. Our associate will call you soon. Kindly check status after 12 Hours. 
                                                        </option>
                                                        <option  value="1" @if( $dsc_data->comments == 1 ) selected @endif>Your Digital Signature Certificate process is Completed.</option>
                                                    </select>
                                                </td> 
                                                <button type="submit" class="btn-lg btn-purple mb-10 float-right">Save</button></td> 
                                            </tr>
                                        </form>
                                            <tr>
                                                <td>Name</td>
                                                <td>{{ $dsc_data->name_of_person }}</td>
                                            </tr> 
                                            <tr>
                                                <td>Aadhaar Number Of Authorized Person</td>
                                                <td>{{ $dsc_data->aadhaar_number }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pan Number Of Authorized Person</td>
                                                <td>{{ $dsc_data->pan_number }}</td>
                                            </tr>  
                                            <tr>
                                                <td>Email-ID</td>
                                                <td>{{ $dsc_data->email }}</td>
                                            </tr> 
                                            <tr>
                                                <td>Mobile Number</td>
                                                <td>{{ $dsc_data->mobile }}</td>
                                            </tr>
                                            <tr>
                                            	<td>GST Number</td>
                                            	<td>{{ $dsc_data->gst_number }}</td>
                                            </tr>
                                            <tr>
                                            	<td>Address</td>
                                            	<td>{{ $dsc_data->address }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pincode </td>
                                                <td>{{ $dsc_data->postal_code }}</td>
                                            </tr>
                                            <tr>
                                            	<td>State</td>
                                            	<td>
                                                    @if( !empty($state_name->state_name) ) 
                                                        {{ $state_name->state_name }}
                                                    @else 
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                            </tr> 
                                            <tr>
                                            	<td>District</td>
                                            	<td>
                                                    @if( !empty($district_name->district_name) ) 
                                                        {{ $district_name->district_name }}
                                                    @else 
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                            </tr> 
                                            <tr> 
                                                <td class="font-weight-600">Different Address</td>
                                                <td></td>   
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>{{ $dsc_data->diff_address }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pincode </td>
                                                <td>{{ $dsc_data->diff_postal_code }}</td>
                                            </tr>
                                            <tr>
                                                <td>State</td>
                                                <td>
                                                    @if( !empty($diff_state_name->state_name) ) 
                                                        {{ $diff_state_name->state_name }}
                                                    @else 
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td>District</td>
                                                <td>
                                                    @if( !empty($diff_district_name->district_name) ) 
                                                        {{ $diff_district_name->district_name }}
                                                    @else 
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                            </tr> 
                                            <tr>
                                            	<td>Tracking ID</td>
                                                <td><a class="text-blue" target="_blank" href="{{ url('track-application?tracking_id='.$dsc_data->track_id) }}">{{ $dsc_data->track_id }}</a></td>
                                            	<td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>  
	            </section> 
	        </div>
	    </div> 
	    <!-- /Row -->
	</div>
	<!-- / Container -->
</div>
<!-- / Main Content -->
@include('layouts/footer_script')
 
</body> 
</html>