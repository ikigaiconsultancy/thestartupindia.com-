<?php $pageTitle = 'Egovservices Registration |  Egovservices Portal | Egovservices Registration'; ?>
<?php $pageDescription = "Egovservices online registration is for manufacturers, resellers, and service providers. Easy to apply. Self Online Gem Portal Registration. Apply on Government e-Marketplace."; ?> 
@include('layouts/header_css') 
@include('layouts/header')
<style type="text/css">
    .new-bg-gem {
        background-color:#ffffff;
    }
    .text-purple-defined {
        color: #3a3588;
    }
</style> 
<!-- Main Content -->
<div class="hk-pg-wrapper pt-0 mt-0" style="background:#dadada;">
    <section class="hk-landing-sec pb-10 pt-0 mt-0">
        <div class="row">
            <div class="col-sm">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('dist/img/home-banner/web-consultant.png') }}" alt="First slide">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Container -->
            <div class="container-fluid pl-40 pr-40"> 
            </div> 
            <!-- /Container -->
            <!-- Footer - FIRST -->    
            <div class="mnh-300p bg-blue-dark-5
            "> 
            <!-- Container -->
            <div class="container-fluid pl-40 pr-40">
                <section class="hk-landing-sec pb-0 pt-40">
                    <footer class="footer"> 
                        <div class="row">
                            <div class="col-md-3 col-sm-12 mb-20">
                                <h4 class="mb-10"><span class="text-white">DISCLAIMER</span></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-light-30">Information displayed on this website is for information purpose only. This website is not Associated with the Directorate General of Supplies & Disposal (DGS&D), Also we are not Government e-market Place. We are Owned & Operated by a Private Organization.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-20"> 
                                <h4 class="mb-10"><span class="text-white">Internal Links</span></h4> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="text-light-30"> 
                                            <li><i class="fa fa-angle-right"></i><a href="terms_conditions" class="text-light-30"> Terms & Conditions</a></li> 
                                            <li><i class="fa fa-angle-right"></i><a href="disclosure_policy" class="text-light-30"> Disclaimer Policies</a></li> 
                                            <li><i class="fa fa-angle-right"></i><a href="refund_policy" class="text-light-30"> Refund policies</a></li> 
                                            <li><i class="fa fa-angle-right"></i><a href="privacy_policy" class="text-light-30"> Privacy Policy</a></li> 
                                            <li><i class="fa fa-angle-right"></i><a href="#" class="text-light-30"> Contact us</a></li>  
                                            <li><i class="fa fa-angle-right"></i><a href="grievance_policy" class="text-light-30"> Grievance Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-20"> 
                                <h4 class="mb-10"><span class="text-white">Useful Links</span></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="text-light-30"> 
                                            <li><i class="fa fa-angle-right"></i><a href="#" class="text-light-30"> Udyam Registration</a></li>
                                            <li><i class="fa fa-angle-right"></i><a href="#" class="text-light-30"> GST Registration</a></li>
                                            <li><i class="fa fa-angle-right"></i><a href="#" class="text-light-30"> Gumasta Registration</a></li>  
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-20"> 
                                <h4 class="mb-10"><span class="text-white">Contact Us</span></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="text-light-30">
                                            <li>IKIGAI MANAGEMENT <br>63, Kardal,<br> Maharashtra , India <br>
                                            </li> 
                                            <li>
                                                <a href=" support@egovservices.org" class="text-white">Support@egovservices.org</a>
                                            </li>
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </footer>
                </section>
            </div>
        </div>
        <!-- /Footer -->
        <!-- Footer - SECOND -->
        <div class="hk-footer-wrap container px-15">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>All rights reserved<a href="{{ url('/') }}" class="text-dark">Support@egovservices.org</a> © 2021</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Secured Payments</p>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap text-green font-20"><i class="fa fa-lock"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-credit-card"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-cc-mastercard"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-cc-paypal"></i></span></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Footer -->
    </div>
    <!-- /Main Content -->
</div>
<!-- /HK Wrapper -->
@include('layouts/footer_script')   
<script> 
    $(function() { 
        $(".onlyNumber").on('input', function(e) { 
            $(this).val($(this).val().replace(/[^0-9]/g, '')); 
        }); 
    }); 
</script>  
<script> 
</script>
<script type="text/javascript">
    $(document).ready( function() {
        $('#state_dropdown').on('change', function() {  
            var state_id = this.value;  
            $.ajax({
                url : "{{ url('gem_form/district') }}",
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
<!-- Add/Remove Poducts -->
<script type="text/javascript">
    $(document).ready(function() {  
        var x = 1;  
        var maxField = 10;  
        var addButton = $('.add_products');  
//Once add button is clicked
$(addButton).click(function(){ 
    var input = '<div class="col-md-6 mb-20 product_id_'+x+'"><input type="text" class="form-control" id="list_of_products" name="list_of_products[]" value="{{ old('list_of_products[]') }}"  placeholder="Enter name of your product"  /></div><div class="col-lg-6 remove_id_'+x+'"><a href="javascript:void(0);" class="btn btn-sm  remove_partner" href_id="'+x+'" title="Remove Product" style="margin-top: auto;"><button type="button" class="btn-sm btn-outline-danger">Remove</button></a> </div>';
//Check maximum number of input fields
if(x < maxField){ 
x++; //Increment field counter
$('#formID').append(input); //Add More Product html
}
});  
//Once remove button is clicked
$('.field_wrapper').on('click', '.remove_partner', function(e){  
    e.preventDefault();
    var num = $(this).attr('href_id') ; 
    $('.remove_id_'+num).remove();
    $('.product_id_'+num).remove();
x--; //Decrement field counter
});
});
</script>
<script>
    function ValidateEmail()
    {  
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var inputText = $('#email_id').val();  
        if(inputText.match(mailformat))
        { 
            return true;
        }
        else
        {
            alert("You have entered an invalid email address!");
            document.form.email.focus();
            return false;
        }
    }
    function ValidateMobile()
    {  
        var phoneno = /^\d{10}$/;
        var inputText = $('#mobile_id').val();  
        if(inputText.match(phoneno))
        { 
            return true;
        }
        else
        {
            alert("Please enter 10 digit mobile number!");
            document.form.mobile.focus();
            return false;
        }
    }
</script>
</body> 
</html> 