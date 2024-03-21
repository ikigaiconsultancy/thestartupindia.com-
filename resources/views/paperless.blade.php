@include('layouts/header')
@include('layouts/header_script')
             <div class="container-fluid">  
          <div class="container-fluid pt-30" >
           
                      <div class="col-sm-12"> 
                               <h3 class="title id=title text-center">Fill In The Simple DSC Form <span style="color:#003399;">Online</span> For Individual/Organization </h3>
                        </div>  
             </div>
  <!-- Row -->
        <div class="container-fluid pl-20 pr-20 pt-0 mt-0">
        <div class="row"> 
         <div class="col-xl-12"> 
        
                    <div class="row pl-10 pr-10 pt-10 font-weight-500">
                        <div class="col-sm">
                            <form class="needs-validation  font-16 font-weight" method="" action="" enctype="multipart/form-data" novalidate> 
                                 <h5 class=" text-white  bg-blue-dark-3 pt-10 pb-10  pl-10" id="passport_form"> 
                                1. Service Required</h5>
                                <section class="hk-sec-wrapper shadow-xl pt-20 pt-0">
                                <div class="row">   
                                      <div class="col-sm-4">
       <label class="mb-0">	Usage Type<span class="star text-red">*</span></label>
             <select   class="form-control custom-select d-block w-100  font-14 h-35p" id="usage_type" name="usage_type"  required>
                         <option value="" selected="selected">Please select</option>
                         <option value="For Multiple Purpose">For Multiple Purpose</option>
                         <option value="For GST">For GST</option>
                         <option value="For MCA (ROC)">For MCA (ROC)</option>
                         <option value="For Income Tax">For Income Tax</option>
                         <option value="For EPF">For EPF</option>
                         <option value="For Foreign Trade">For Foreign Trade</option>
                         <option value="For E-Tender">For E-Tender</option>
                         <option value="For Trademark">For Trademark</option>
                         <option value="For E-Ticketing">For E-Ticketing</option>
                         <option value="For Document Signer">For Document Signer</option>
                         <option value="For Director's KYC">For Director's KYC</option><option value="For Other Purpose">For Other Purpose</option>
               </select>
                 <div class="invalid-feedback">
                                            Please select your usage type...
                                        </div> 
      </div>
    <div class="col-sm-4 ">
         <label class="mb-0">Class Type<span class="star text-red">*</span></label>
               <select    class="form-control custom-select d-block w-100  font-14 h-35p " id="class_type" name="class_type"  required>
              <option value="">Please select</option>
              <option value="Class 3" selected="selected">Class 3</option>
              <option value="Class 2" style="display: none;">Class 2</option>
              <option value="DGFT" style="display: none;">DGFT</option>
               </select>   
                   <div class="invalid-feedback">
                                            Please select your class type...
                                        </div> 
    </div>
     <div class="col-sm-4 ">
         <label class="mb-0">User Type<span class="star text-red">*</span></label>
               <select    class="form-control custom-select d-block w-100  font-14 h-35p " id="user_type" name="user_type"  required>
              <option value="" selected="selected">Please select</option>
              <option value="Individual">Individual</option>
              <option value="Organization">Organization</option>
               </select>   
                   <div class="invalid-feedback">
                                            Please select user type...
                                        </div> 
    </div>
  </div>
<div class="row pt-20">
               <div class="col-sm-4">
                 <label class="mb-0"> Certificate Type<span class="star text-red">*</span></label>
                     <select   class="form-control custom-select d-block w-100  font-14 h-35p" id="certificate_type" name="certificate_type" required>
                      <option value="" selected="selected">Please select</option>
                      <option value="Signature">Signature</option>
                      <option value="Signature + Encryption">Signature + Encryption</option>
                      <option value="Document Signer" style="display: none;">Document Signer</option>
                     </select>
                         <div class="invalid-feedback">
                                            Please select certificate type...
                                        </div> 
               </div>
               <div class="col-sm-4">
                 <label class="mb-0"> Certificate Validity<span class="star text-red">*</span></label>
                     <select   class="form-control custom-select d-block w-100  font-14 h-35p" id="validity" name="validity"  required>
                       <option value="" selected="selected">Please select</option>
                       <option value="1 Year" style="display: none;">1 Year</option>
                       <option value="2 Years">2 Years</option>
                       <option value="3 Years">3 Years</option></select>
                               <div class="invalid-feedback">
                                            Please select certificate validity...
                                        </div> 
               </div>
            </div>
</section>
  <h5 class=" text-white  bg-blue-dark-3 pt-10 pb-10  pl-10" id="passport_form"> 
                                 2. Applicant Details</h5>
                                <section class="hk-sec-wrapper shadow-xl"> 
                                 <div class="row">
             
            </div>
 <div class="row">
                                    <div class="col-md-4 mb-20 ">
                                        <label for="name_of_person" class="mb-0">Applicant's  Name<span class="star text-red">*</span> </label>
                                        <input type="text" class="form-control font-14 h-35p" id="first_name" name="first_name" value=""  placeholder="Enter your First Name" required>
                                        <div class="invalid-feedback">
                                            Please enter your first name.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4 mb-20">
                                        <label for="name_of_person" class="mb-0">Applicant’s Middle Name <span class="star text-red">*</span></label>
                                        <input type="text" class="form-control font-14 h-35p" id="middle_name" name="middle_name" value=""  placeholder="Enter your Middle Name" required>
                                        <div class="invalid-feedback">
                                            Please enter your middle name.
                                        </div>
                                    </div>
                                      <div class="col-md-4 mb-20">
                                        <label for="name_of_person" class="mb-0">Applicant’s Last Name <span class="star text-red">*</span></label>
                                        <input type="text" class="form-control font-14 h-35p" id="last_name" name="lirst_name" value=""  placeholder="Enter your Last Name" required>
                                        <div class="invalid-feedback">
                                            Please enter your last name.
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                   
                                     <div class="col-md-4 mb-20">
                                        <label for="email" class="mb-0">E-Mail ID<span class="star text-red">*</span></label>
                                        <input type="text" class="form-control font-14 h-35p" id="email" name="email" value="" placeholder="Enter your email id" onblur="ValidateEmail()" required>
                                        <div class="invalid-feedback">
                                            Please enter your email id.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-20">
                                        <label for="aadhaar_number" class="mb-0">Aadhaar Number<span class="star text-red">*</span></label>
                                        <input type="text" class="form-control onlyNumber font-14 h-35p" id="aadhaar_number" name="aadhaar_number" value="" placeholder="Enter your aadhaar number" maxlength="12" required>
                                        <div class="invalid-feedback">
                                            Please enter aadhaar number .
                                        </div>
                                    </div> 
                                     <div class="col-md-4"> 
                                        <label class="mb-0">Gender<span class="star text-red">*</span></label>
                                        <select class="form-control custom-select d-block w-100 font-14 h-35p"  id="gender"  name="gender" required>
                                            <option value=""  selected>Select your Gender</option>
                                            <option value="M" >Male</option>
                                            <option value="F">Female</option> 
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select your gender.
                                        </div>
                                    </div>
                                </div>
                                      <div class="row">
                                    <div class="col-md-4 ">
                                        <label  class="mb-0">Date of Birth<span class="star text-red">*</span></label>
                                        <div  id="datepicker">
                                        <input type="text"class="form-control date disableFuturedate1 font-14 h-35p" id="date_of_birth" name="date_of_birth" value=""  placeholder="Select Your Date of Birth (As per Pan Card)"  required>  
                                         <div class="invalid-feedback">
                                            Please select date of birth.
                                        </div>
                                          </div>          
                                       
                                    </div>
                                   
 									 <div class="col-md-4 pb-20">
                                        <label for="mobile" class="mb-0">Mobile No.<span class="star text-red">*</span></label>
                                        <input type="text" class="form-control onlyNumber font-14 h-35p" id="mobile" name="mobile" value="" placeholder="Enter your mobile number" maxlength="10" onblur="ValidateMobile()" required>
                                        <div class="invalid-feedback">
                                            Please enter your mobile number.
                                        </div>
                                    </div>
                                     <div class="col-md-4 mb-20">
                                        <label for="aadhaar_number" class="mb-0">Pan Card<span class="star text-red">*</span></label>
                                        <input type="text" class="form-control onlyNumber font-14 h-35p" id="pan_number" name="pan_number" value="" placeholder="Enter your pan number" maxlength="12" required>
                                        <div class="invalid-feedback">
                                            Please enter pan number .
                                        </div>
                                    </div> 
                                </div>
                                     <div class="row">
                                     	  <div class="col-md-4 pb-20">
                                             <label for="applicant-detail-pin" class="mb-0">Pincode<em><span class="star text-red">*</span></em></label> <input type="text" name="applicant-detail-pin" id="applicant-detail-pin" class="form-control font-14 h-35p" placeholder="Pincode" required="required">
                                                 <div class="invalid-feedback">
                                                    Please enter pincode.
                                                </div>
                                         </div>
                                     <div class="col-md-4 ">
                                            <label class="mb-0">Nationality <span class="star text-red">*</span></label> <select class="form-control custom-select d-block w-100 font-14 h-35p"id="applicant-country" name="applicant-country" required>
                                                <option value="" >select your Country</option> 
                                                <option value="india" >India</option> </select>
                                              <div class="invalid-feedback">
                                            Please select your country
                                        </div>
                                        </div>
                                         <div class="col-md-4 ">
                                            <label class="mb-0">Country <span class="star text-red">*</span></label> <select class="form-control custom-select d-block w-100 font-14 h-35p"id="applicant-country" name="applicant-country" required>
                                                <option value="" >select your Country</option> 
                                                <option value="india" >India</option> </select>
                                              <div class="invalid-feedback">
                                            Please select your country
                                        </div>
                                        </div>
                                    
                                </div>
                                     <div class="row">
                                       <div class="col-md-4 " >
                                                <label for="state" class="mb-0">State<span class="star text-red">*</span></label>
                                                <select class="form-control custom-select d-block w-100 font-14 h-35p" id="state_dropdown" name="state" required>
                                                    <option value="" selected>Select State</option> 
                                                    <option name="state" value="1" >ANDAMAN AND NICOBAR ISLANDS</option>
                                                    <option name="state" value="2" >ANDHRA PRADESH</option>
                                                    <option name="state" value="3" >ARUNACHAL PRADESH</option>
                                                    <option name="state" value="4" >ASSAM</option>
                                                    <option name="state" value="5" >BIHAR</option>
                                                    <option name="state" value="6" >CHANDIGARH</option>
                                                    <option name="state" value="7" >CHHATTISGARH</option>
                                                    <option name="state" value="8" >DADRA AND NAGAR HAVELI</option>
                                                    <option name="state" value="9" >DAMAN AND DIU</option>
                                                    <option name="state" value="10" >DELHI</option>
                                                    <option name="state" value="11" >GOA</option>
                                                    <option name="state" value="12" >GUJARAT</option>
                                                    <option name="state" value="13" >HARYANA</option>
                                                    <option name="state" value="14" >HIMACHAL PRADESH</option>
                                                    <option name="state" value="15" >JAMMU AND KASHMIR</option>
                                                    <option name="state" value="16" >JHARKHAND</option>
                                                    <option name="state" value="17" >KARNATAKA</option>
                                                    <option name="state" value="18" >KERALA</option>
                                                    <option name="state" value="37" >Ladakh</option>
                                                    <option name="state" value="19" >LAKSHADWEEP</option>
                                                    <option name="state" value="20" >MADHYA PRADESH</option>
                                                    <option name="state" value="21" >MAHARASHTRA</option>
                                                    <option name="state" value="22" >MANIPUR</option>
                                                    <option name="state" value="23" >MEGHALAYA</option>
                                                    <option name="state" value="24" >MIZORAM</option>
                                                    <option name="state" value="25" >NAGALAND</option>
                                                    <option name="state" value="26" >ODISHA</option>
                                                    <option name="state" value="27" >PUDUCHERRY</option>
                                                    <option name="state" value="28" >PUNJAB</option>
                                                    <option name="state" value="29" >RAJASTHAN</option>
                                                    <option name="state" value="30" >SIKKIM</option>
                                                    <option name="state" value="31" >TAMIL NADU</option>
                                                    <option name="state" value="32" >TELANGANA</option>
                                                    <option name="state" value="33" >TRIPURA</option>
                                                    <option name="state" value="35" >UTTAR PRADESH</option>
                                                    <option name="state" value="34" >UTTARAKHAND</option>
                                                    <option name="state" value="36" >WEST BENGAL</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select state.
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <label for="district" class="mb-0">District<span class="star text-red">*</span></label>
                                                <select class="form-control custom-select d-block w-100 font-14 h-35p" id="district_dropdown" name="district" required> 
                                                    <option value="" selected>Select District</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select district.
                                                </div>
                                            </div>
                                 
                                                         
                   <div class="col-md-4 pb-20">
                                        <label for="mobile" class="mb-0">Alternative Mobile No.<span class="star text-red">*</span></label>
                                        <input type="text" class="form-control onlyNumber font-14 h-35p" id="altmobile" name="altmobile" value="" placeholder="Enter your Alternative mobile number" maxlength="10" onblur="ValidateMobile()" required>
                                        <div class="invalid-feedback">
                                            Please enter your mobile number.
                                        </div>
                                    </div>
                                    </div>
                                                                                              
                                                 </section>
    
  <h5 class=" text-white  bg-blue-dark-3 pt-10 pb-10  pl-10" id="passport_form"> 
                                 3.Documents Submitted as Proof (Individual)</h5>
                                <section class="hk-sec-wrapper shadow-xl">                                     
  <!-- Main Content -->
    <div class="hk-pg-wrapper">
    
      
      <!-- Container -->
      <div class="container-fluid">
    
        
        <!-- Row -->
        <div class="row">
          <div class="col-md-4">
            <section class="">
              <h5 class="hk-sec-title">Upload Your Aadhaar Card Front Side*</h5>
              <p class=""></p>
              <div  class="row">
                <div class="col-sm">
                  <form action="#" class="dropzone text-center pt-0" id="remove_link">
                    <div class="fallback">
                      <input name="file" type="file" multiple />
                    </div>
                  </form>
                </div>
              </div>
                <div class="col-sm">
                  <form action="#" class="dropzone text-center pt-0" id="remove_link">
                    <div class="fallback">
                      <input name="file" type="file" multiple />
                    </div>
                  </form>
                </div>
            </section>
           
          </div>  
            
        </div>
        <!-- /Row -->
      </div>
      <!-- /Container -->
</div>
</section>
         </div>
<script> 
    $(function() { 
        $(".onlyNumber").on('input', function(e) { 
            $(this).val($(this).val().replace(/[^0-9]/g, '')); 
        }); 
    }); 
</script> 
  <!-- jQuery -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap Core JavaScript -->
  <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  
  
  <!-- Slimscroll JavaScript -->
  <script src="dist/js/jquery.slimscroll.js"></script>
  <!-- Fancy Dropdown JS -->
  <script src="dist/js/dropdown-bootstrap-extended.js"></script>
  
  <!-- Dropzone JavaScript -->
  <script src="vendors/dropzone/dist/dropzone.js"></script>
  
  <!-- Dropify JavaScript -->
  <script src="vendors/dropify/dist/js/dropify.min.js"></script>
  
  <!-- Form Flie Upload Data JavaScript -->
  <script src="dist/js/form-file-upload-data.js"></script>
  
  <!-- FeatherIcons JavaScript -->
  <script src="dist/js/feather.min.js"></script>
  
  <!-- Toggles JavaScript -->
  <script src="vendors/jquery-toggles/toggles.min.js"></script>
  <script src="dist/js/toggle-data.js"></script>
  
  <!-- Init JavaScript -->
  <script src="dist/js/init.js"></script>
