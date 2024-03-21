<?php $pageTitle = 'DSC Registration - Edit'; ?> 
@include('layouts/intheader')  
<!-- Main Content -->
<div class="hk-pg-wrapper bg-white pt-10">
    <!-- Container -->
    <div class="container"> 
        <!-- Row -->
        <div class="row"> 
            <div class="col-xl-12"> 
                <h2 class="display-6 font-weight-600 text-center text-dark-60 pt-20 pb-20 bg-green-light-4">Edit Application Form For Digital Signature Certificate</h2> 
                <section class="hk-sec-wrapper shadow-xl new-bg-gem"> 
                    @if ($errors->any()) 
                    <div class="error-box">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul> 
                        </div>
                    </div>
                    @endif 
                    <div class="row">
                        <div class="col-sm">
                            <form class="needs-validation font-weight-500 font-16" method="post" action="{{ url('dsc-form/update')}}" novalidate>
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $dsc_data->id }}">
                                <div class="row">  
                                    <div class="col-md-6 mb-10">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name_of_person" value="{{ $dsc_data->name_of_person }}"  placeholder="Enter your name" required>
                                        <div class="invalid-feedback">
                                            Please enter your name.
                                        </div>
                                    </div> 
                                </div>
                                <div class="row pr-80">  
                                <div class="col-md-12 mb-20">
                                    <label for="validationCustom03" class="mb-0">Aadhaar Number*</label>
                                    <input type="text" class="form-control form-control-sm onlyNumber" id="validationCustom03" name="aadhaar_number"  value="{{ $dsc_data->aadhaar_number }}" placeholder="Enter your aadhaar number" maxlength="12" required>
                                    <div class="invalid-feedback">
                                        Please enter aadhaar number of authorized person.
                                    </div>
                                </div>
                                </div>
                                <div class="row pr-80">  
                                <div class="col-md-12 mb-20">
                                    <label for="validationCustom04" class="mb-0">Pan Number*</label>
                                    <input type="text" class="form-control form-control-sm" id="validationCustom04" name="pan_number" value="{{ $dsc_data->pan_number }}" placeholder="Enter your pan number" maxlength="10" required>
                                    <div class="invalid-feedback">
                                        Please enter pan number.
                                    </div>
                                </div> 
                                </div>
                                <div class="row">  
                                    <div class="col-md-6 mb-10">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $dsc_data->mobile }}"  placeholder="Enter your mobile number" maxlength="10"  required>
                                        <div class="invalid-feedback">
                                            Please enter your mobile number.
                                        </div>
                                    </div> 
                                    <div class="col-md-6 mb-10">
                                        <label for="email">Email ID</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{ $dsc_data->email }}"  placeholder="Enter your email"  required>
                                        <div class="invalid-feedback">
                                            Please enter your email.
                                        </div> 
                                    </div>
                                </div> 
                                <!-- <div class="row">  
                                    <div class="col-md-6 mb-10">
                                        <label for="mobile">Company Name</label>
                                        <input type="text" class="form-control" id="name_of_firm" name="name_of_firm" value="{{ $dsc_data->name_of_firm }}"  placeholder="Enter your company name">
                                        <div class="invalid-feedback">
                                            Please enter your company name.
                                        </div>
                                    </div> 
                                    <div class="col-md-6 mb-10">
                                        <label for="gst">Is GSTIN Available?</label>&nbsp&nbsp
                                        <input type="radio" name="gst_radio" value="1" @if($dsc_data->gst_radio == '1') checked @endif /> <label>Yes</label>&nbsp&nbsp
                                        <input type="radio" name="gst_radio" value="0" @if($dsc_data->gst_radio == '0') checked @endif /> <label>No</label> 
                                        <input type="text" class="form-control" id="gst_number" name="gst_number" value="{{ $dsc_data->gst_number }}" placeholder="Enter your GST Number">
                                        <div class="invalid-feedback">
                                            Please enter GST Number.
                                        </div>                            
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-6 mb-10">
                                        <label for="billing_address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{ $dsc_data->address }}"  placeholder="Enter your billing address">
                                        <div class="invalid-feedback">
                                            Please enter your billing address.
                                        </div>
                                    </div> 
                                    <div class="col-md-6 mb-10">
                                        <label for="postal_code">Postal Code</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $dsc_data->postal_code }}"  placeholder="Enter your postal code">
                                        <div class="invalid-feedback">
                                            Please enter your postal code.
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <!-- <div class="col-md-6 mb-10" >
                                        <label for="state" class="mb-0">State*</label>
                                        <select class="form-control custom-select d-block w-100" id="state_dropdown" name="state" required>
                                            <option value="" selected>Select State</option> 
                                            @foreach($all_states as $all_state)
                                            <option name="state" value="{{ $all_state->id }}" @if( $dsc_data->state == $all_state->id ) selected @endif> 
                                                {{ $all_state->state_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select state.
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-6 mb-10">
                                            <label for="district" class="mb-0">District*</label>
                                            <select class="form-control custom-select d-block w-100" id="district_dropdown" name="district" required> 
                                                <option value="">Select District</option>
                                                @foreach($selected_district as $selected_district)
                                                <option  value="@if(!empty($selected_district->id) ) {{ $selected_district->id }} @endif" 
                                                   @if( $dsc_data->district == $selected_district->id ) selected @endif>{{ $selected_district->district_name }}</option>
                                                   @endforeach
                                               </select>
                                               <div class="invalid-feedback">
                                                Please select district.
                                            </div>
                                        </div>  -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-10">
                                            <label for="crypto_lb">Delivery Address for Crypto Token</label><br>
                                            Do you want us to send token to a
                                            &nbsp&nbsp&nbsp&nbsp
                                            <input type="radio" name="diffaddress_radio" value="0" id="diffaddno" @if($dsc_data->diffaddress_radio == '0') checked @endif /> 
                                            <label for="diffaddno">Above Address</label>&nbsp&nbsp&nbsp&nbsp
                                            <input type="radio" name="diffaddress_radio" value="1" id="diffaddyes" @if($dsc_data->diffaddress_radio == '1') checked @endif/> <label>Different address</label>
                                        </div>
                                    </div>
                                    <div class="row" style="display: none;" id="diffaddressdiv"> 
                                        <div class="col-md-6 mb-10">
                                            <label for="diff_billing_address">Address</label>
                                            <input type="text" class="form-control" id="diff_address" name="diff_address" value="{{ $dsc_data->diff_address }}"  placeholder="Enter your billing address">
                                            <div class="invalid-feedback">
                                                Please enter your billing address.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" class="form-control" id="diff_postal_code" name="diff_postal_code" value="{{ $dsc_data->diff_postal_code }}"  placeholder="Enter your postal code">
                                            <div class="invalid-feedback">
                                                Please enter your postal code.
                                            </div>
                                        </div> 
                                        <!-- <div class="col-md-6 mb-10" >
                                            <label for="diff_state" class="mb-0">State*</label>
                                            <select class="form-control custom-select d-block w-100" id="diff_state_dropdown" name="diff_state">
                                                <option value="" selected>Select State</option> 
                                                @foreach($all_states as $all_state)
                                                <option name="diff_state" value="{{ $all_state->id }}" @if( $dsc_data->diff_state == $all_state->id ) selected @endif>{{ $all_state->state_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select state.
                                            </div>
                                        </div> -->   
                                        <!-- <div class="col-md-6 mb-10">
                                            <label for="diff_district" class="mb-0">District*</label>
                                            <select class="form-control custom-select d-block w-100" id="diff_district_dropdown" name="diff_district"> 
                                                <option value="">Select District</option>
                                                @foreach($selected_diff_district as $selected_diff_district)
                                                <option  value="@if(!empty($selected_diff_district->id) ) {{ $selected_diff_district->id }} @endif" 
                                                   @if( $dsc_data->diff_district == $selected_diff_district->id ) selected @endif>{{ $selected_diff_district->district_name }}</option>
                                                   @endforeach
                                               </select>
                                               <div class="invalid-feedback">
                                                Please select district.
                                            </div>
                                        </div>  --> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-10">
                                            <p>Protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center mb-10">
                                            <button type="submit" class="btn btn-blue text-center">Submit & Review Form</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div> 
        </div>
        <!-- /Container -->
    </div>
    <!-- /Main Content -->
</div>
<!-- /HK Wrapper -->
@include('layouts/footer_script')
<script type="text/javascript">
    var gst_radio_value =  $('input:radio[name="gst_radio"]:checked').val()
    if(gst_radio_value == 0) { 
        $('#gst_number').attr('readonly', 'readonly'); 
    } else { 
        $('#gst_number').removeAttr('readonly');
    }
    $('input:radio[name="gst_radio"]').change(
        function(){
            if ($(this).is(':checked') && $(this).val() == '1') {
                $('#gst_number').removeAttr('readonly');
                $('#gst_number').attr('required', true);   
            }  
            if ($(this).is(':checked') && $(this).val() == '0') { 
                $('#gst_number').attr('required', false);   
                $('#gst_number').attr('readonly', 'readonly'); 
                document.getElementById('gst_number').value = "";
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready( function() {
            $('#state_dropdown').on('change', function() {  
                var state_id = this.value;  
                $.ajax({
                    url : "{{ url('dsc/district') }}",
                    type : "post",
                    data : { "_token": "{{ csrf_token() }}",
                    "state_id" : state_id },
                    cache : false,
                    success : function(result) { 
                        $("#district_dropdown").html(result); 
                    }
                });
            });
        }); 
    </script>
    <script type="text/javascript"> 
        var diffaddress_radio_value =  $('input:radio[name="diffaddress_radio"]:checked').val()
        if(diffaddress_radio_value == 0) { 
            $("#diffaddressdiv").hide();
        } else { 
            $("#diffaddressdiv").show();
        }
        $('input:radio[name="diffaddress_radio"]').change(
            function(){
                if ($(this).is(':checked') && $(this).val() == '0') {
                    $('#diffaddressdiv').hide();  
                    $('#diff_address').attr('required', false);  
                    $('#diff_postal_code').attr('required', false);  
                    $('#diff_state_dropdown').attr('required', false);  
                    $('#diff_district_dropdown').attr('required', false);
                }  
                if ($(this).is(':checked') && $(this).val() == '1') { 
                    $('#diffaddressdiv').show(); 
                    $('#diff_address').attr('required', true);  
                    $('#diff_postal_code').attr('required', true);  
                    $('#diff_state_dropdown').attr('required', true);  
                    $('#diff_district_dropdown').attr('required', true);  
                }
            });
        </script>
        <script type="text/javascript">
            $(document).ready( function() {
                $('#diff_state_dropdown').on('change', function() {  
                    var state_id = this.value;  
                    $.ajax({
                        url : "{{ url('dsc/district') }}",
                        type : "post",
                        data : { "_token": "{{ csrf_token() }}",
                        "state_id" : state_id },
                        cache : false,
                        success : function(result) { 
                            $("#diff_district_dropdown").html(result); 
                        }
                    });
                });
            }); 
        </script>
        <script type="text/javascript">
            function ValidateMobile()
            {  
                var phoneno = /^\d{10}$/;
                var inputText = $('#mobile').val(); 
                if(inputText.match(phoneno))
                { 
                    return true;
                }
                else
                {
                    alert("Please enter 10 digit mobile number!"); 
                    document.getElementById('mobile').value = "";
                    return false;
                }
            }
            function ValidateEmail()
            {  
                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                var inputText = $('#email').val();   
                if(inputText.match(mailformat))
                { 
                    return true;
                }
                else
                {
                    alert("You have entered an invalid email address!");
//document.form.email.focus();
document.getElementById('email').value = "";
return false;
}
}
</script>
</body> 
</html> 