@include('layouts/header')
@include('layouts/header_script')
               <!--header-->
             <div class="container-fluid">  
          <div class="container-fluid pt-30" >
           
                      <div class="col-sm-12"> 
                               <h4 class="title id=title text-center">Driving Licence <span style="color:#003399;">Online</span> Application Form </h4>
                        </div>  
             </div> 
        <!-- Row -->
        <div class="container-fluid pl-20 pr-20 pt-0 mt-0">
        <div class="row"> 
         <div class="col-xl-12"> 
        
                    <div class="row pl-10 pr-10 pt-10 font-weight-500">
                        <div class="col-sm">
                            <eform class="needs-validation  font-16 font-weight" method="" action="" enctype="multipart/form-data" novalidate> 
                                 <h5 class=" text-white  bg-indigo-dark-4 pt-10 pb-10  pl-10" id="passport_form"> 
                                1. Service Required</h5>
                                <section class="hk-sec-wrapper shadow-xl pt-20 pt-0">
                                <div class="row">   
                                      <div class="col-sm-6">
       <label class="mb-0">State<span class="star">*</span></label>
             <select   class="form-control custom-select d-block w-100  font-14 h-35p" id="state_rto" name="state_rto" onchange="load_rto_cities(this.value)" data-fv-notempty data-fv-notempty-message="The state is required" required>
                           <option value="">Select State</option>
                         <option  value="391">Bihar</option>
                         <option  value="392">Chandigarh</option>
                         <option  value="393">Chhatisgarh</option>
                         <option  value="501">Daman & Diu</option>
                         <option  value="396">Delhi</option>
                         <option  value="397">Goa</option>
                         <option  value="398">Gujarat</option>
                         <option  value="399">Haryana</option>
                         <option  value="400">Himachal Pradesh</option>
                         <option  value="401">Jammu and Kashmir</option>
                         <option  value="402">Jharkhand</option>
                         <option  value="403">Karnataka</option>
                         <option  value="404">Kerala</option>
                         <option  value="407">Maharashtra</option>
                         <option  value="409">Meghalaya</option>
                        <option  value="413">Pondicherry</option>
                         <option  value="414">Punjab</option>
                        <option  value="412">Odisha</option>
                       <option  value="415">Rajasthan</option>
                         <option  value="417">Tamil Nadu</option>
                         <option  value="418">Tripura</option>
                         <option  value="420">Uttar Pradesh</option>
                         <option  value="419">Uttarakhand</option>
                         <option  value="421">West Bengal</option>
               
               </select>
                 <div class="invalid-feedback">
                                            Please select your state...
                                        </div> 
      </div>
    <div class="col-sm-6 ">
         <label class="mb-0">Applying for<span class="star">*</span></label>
               <select    class="form-control custom-select d-block w-100  font-14 h-35p frmApp" id="apply_for" name="apply_for"  required>
                <option value="select">Select</option>
                  <option value='Learning'  >Learning Licence</option>
                   <option value='Driving' Selected >Permanent Driving Licence</option>
                  <option value='Renewal'  >Renewal Driving Licence</option>
                   <option value='Combo'  >Learning and Driving Licence</option>
               </select>   
                   <div class="invalid-feedback">
                                            Please select you are applying for...
                                        </div> 
    </div>
  </div>
<div class="row pt-20">
               <div class="col-sm-6">
                 <label class="mb-0"> RTO Office<span class="star">*</span></label>
                     <select   class="form-control custom-select d-block w-100  font-14 h-35p" id="district_rto" name="district_rto" required>
                        <option value="">Select RTO Office</option>
                         <option value="">palghar</option>
                          <option value="">vasai</option>
                     </select>
                         <div class="invalid-feedback">
                                            Please select RTO office
                                        </div> 
               </div>
               <div class="col-sm-6">
                 <label class="mb-0"> Select Class of Vehicles<span class="star">*</span></label>
                     <select   class="form-control custom-select d-block w-100  font-14 h-35p" id="sel_vehicles" name="sel_vehicles" onchange="calculate_fees();" required>
                        <option value="">Select Vehicles</option>
                        <option value="2 Wheeler without Gear" >2 Wheeler without Gear</option>
                        <option value="2 Wheeler with Gear" >2 Wheeler with Gear</option>
                        <option value="4 Wheeler (LMV - Non Transport)" >4 Wheeler (LMV - Non Transport)</option>
                        <option value="2 Wheeler without Gear + 4 Wheeler" >2 Wheeler without Gear + 4 Wheeler</option>
                        <option value="2 Wheeler with Gear + 4 Wheeler" >2 Wheeler with Gear + 4 Wheeler</option>
                           </select> 
                               <div class="invalid-feedback">
                                            Please select vehicles
                                        </div> 
               </div>
            </div>
                 
</section>
                    <h5 class=" text-white  bg-indigo-dark-4 pt-10 pb-10  pl-10" id="passport_form"> 
                                 2. Applicant Details</h5>
                                <section class="hk-sec-wrapper shadow-xl"> 
                                 <div class="row">
               <div class="col-md-6 pb-20">
                     <label class="mb-0">Learning Licence Number</label>
                         <input   type="text" class="form-control font-14 h-35p"  placeholder="Enter Learning Licence Number." id="Learninglicence" name="Learninglicence" value= "" pattern="^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{4}$" required>
                          <div class="invalid-feedback">
                                            Please enter driving licence number.
                                        </div>
                      </div>
              
            </div>
 <div class="row">
                                    <div class="col-md-6 mb-20 ">
                                        <label for="name_of_person" class="mb-0">Applicant’s First Name *</label>
                                        <input type="text" class="form-control font-14 h-35p" id="first_name" name="first_name" value=""  placeholder="Enter your First Name" required>
                                        <div class="invalid-feedback">
                                            Please enter your first name.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-20">
                                        <label for="name_of_person" class="mb-0">Applicant’s Middle Name *</label>
                                        <input type="text" class="form-control font-14 h-35p" id="middle_name" name="middle_name" value=""  placeholder="Enter your Middle Name" required>
                                        <div class="invalid-feedback">
                                            Please enter your middle name.
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <label for="name_of_person" class="mb-0">Applicant’s Last Name *</label>
                                        <input type="text" class="form-control font-14 h-35p" id="last_name" name="lirst_name" value=""  placeholder="Enter your Last Name" required>
                                        <div class="invalid-feedback">
                                            Please enter your last name.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label for="aadhaar_number" class="mb-0">Aadhaar Number*</label>
                                        <input type="text" class="form-control onlyNumber font-14 h-35p" id="aadhaar_number" name="aadhaar_number" value="" placeholder="Enter your aadhaar number" maxlength="12" required>
                                        <div class="invalid-feedback">
                                            Please enter aadhaar number .
                                        </div>
                                    </div> 
                                </div>
                                     <div class="row">
                                    <div class="col-md-6 "> 
                                        <label class="mb-0">Gender*</label>
                                        <select class="form-control custom-select d-block w-100 font-14 h-35p"  id="gender"  name="gender" required>
                                            <option value=""  selected>Select your Gender</option>
                                            <option value="M" >Male</option>
                                            <option value="F">Female</option> 
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select your gender.
                                        </div>
                                    </div>
                                    <div class="col-md-6 "> 
                                        <label class="mb-0">Blood Group*</label>
                                        <select class="form-control custom-select d-block w-100 font-14 h-35p" id="marital-status" name="marital-status" required>
                                            <option value="" >Select</option>
                         <option value='A+' >A+</option>
                         <option value='A-' >A-</option>
                         <option value='B+' >B+</option>
                         <option value='B-' >B-</option>
                         <option value='O+' >O+</option>
                         <option value='O-' >O-</option>
                         <option value='AB+' >AB+</option>
                         <option value='AB-' >AB-</option>
                         <option value='UNKNOWN' >UNKNOWN</option>
                         <option value='A1+' >A1+</option>
                         <option value='A1-' >A1-</option>
                         <option value='B1+' >B1+</option>
                         <option value='B1-' >B1-</option>
                         <option value='A1B+' >A1B+</option>
                         <option value='A1B-' >A1B-</option>
                         <option value='A2B+' >A2B+</option>
                         <option value='A2B-' >A2B-</option>
                         <option value='OH+' >OH+</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select your Marital Status.
                                        </div>
                                    </div>
                                </div><br>
                                     <div class="row">
                                    <div class="col-md-6 ">
                                        <label  class="mb-0">Date of Birth*</label>
                                        <div  id="datepicker">
                                        <input type="text"class="form-control date disableFuturedate1 font-14 h-35p" id="date_of_birth" name="date_of_birth" value=""  placeholder="Select Your Date of Birth (As per Pan Card)"  required>  
                                         <div class="invalid-feedback">
                                            Please select date of birth.
                                        </div>
                                          </div>          
                                       
                                    </div>
                                    <div class="col-md-6 ">
                                       <label for="is-birth-india"class="mb-0">Is your Place of Birth out of India?</label> 
                                       <select class="form-control custom-select d-block w-100 font-14 h-35p"  id="is-birth-india" name="is-birth-india" required>
                                        <option value="">select</option>
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option> </select>
                                        <div class="invalid-feedback">
                                            Please select Is your Place of Birth out of India
                                        </div>
                                    </div>
                                </div>
                                     <div class="row">
                                    <div class="col-md-6 pt-20">
                                        <label class="mb-0">Birth Village or Town or City <em>*</em></label> <input type="text" name="birth-city" id="birth-city" class="form-control font-14 h-35p" placeholder="Village or Town or City " required="required">
                                         <div class="invalid-feedback">
                                            Please select your village or town
                                        </div>
                                    </div>
                                        <div class="col-md-6 pt-20">
                                            <label class="mb-0">Country</label> <select class="form-control custom-select d-block w-100 font-14 h-35p"id="applicant-country" name="applicant-country" required>
                                                <option value="" >select your Country</option> 
                                                <option value="india" >India</option> </select>
                                              <div class="invalid-feedback">
                                            Please select your country
                                        </div>
                                        </div>
                                    </div>
                                             <div class="row">
                                            <div class="col-md-6 pt-20" >
                                                <label for="state" class="mb-0">State*</label>
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
                                            <div class="col-md-6 pt-20">
                                                <label for="district" class="mb-0">District*</label>
                                                <select class="form-control custom-select d-block w-100 font-14 h-35p" id="district_dropdown" name="district" required> 
                                                    <option value="" selected>Select District</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select district.
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                             <div class="col-md-6 pt-20">
                                                <label class="mb-0">Citizenship of India by</label> <select class="form-control custom-select d-block w-100 font-14 h-35p" id="applicant-citizenship" name="applicant-citizenship" required><option value="">Select</option>
                                                    <option value="birth">Birth</option><option value="descent">Descent</option>
                                                    <option value="registration-naturalization">Registration/ Naturalization</option> </select>
                                                 <div class="invalid-feedback">
                                                    Please select Citizenship of India by
                                                </div>
                                            </div>
                                                <div class="col-md-6 pt-20">
                                        <label for="pan_number" class="mb-0">Pan Number*</label>
                                        <input type="text" class="form-control font-14 h-35p" id="pan_number" name="pan_number" value="" placeholder="Enter your pan number" maxlength="10" required>
                                        <div class="invalid-feedback">
                                            Please enter pan number.
                                        </div>
                                    </div>
                                </div>
                                                 <div class="row">
                                                
                                                     <div class="col-md-6 pt-20">
                                                         <label class="mb-0">Educational Qualification <em>*</em></label> <select class="form-control custom-select d-block w-100 font-14 h-35p" id="applicant-educational" name="applicant-educational" required="required"><option value="">Select Educational Qualification</option><option value="7th-pass-or-less">7th pass or less</option><option value="between-8th-and-9th-standard">Between 8th and 9th standard</option><option value="10th-pass-and-above">10th pass and above</option><option value="graduate-and-above">Graduate and above</option> </select>
                                                          <div class="invalid-feedback">
                                            Please select Educational Qualification
                                        </div>
                                                     </div>
                                                       <div class="col-md-6 pt-20"> <label for="applicant-family-father-fname" class="mb-0">Applicant Father/ Mother/ Husband/Guardian. <em>*</em></label> <input type="text" name="applicant-family-father-fname" id="applicant-family-father-fname" class="form-control font-14 h-35p" placeholder="Father's First Name" required="required">
                                                              <div class="invalid-feedback">
                                                                Please enter Father’s First Name
                                                            </div>
                                            </div>
                                                 </div>
                                                         <div class="row pb-20">        
                                          
                                          
                                            <div class="col-md-6 pt-20"> <label for="applicant-family-father-mname" class="mb-0">Middle Name</label> <input type="text" name="applicant-family-father-mname" id="applicant-family-father-mname" class="form-control font-14 h-35p" placeholder="Middle Name" required="">
                                                              <div class="invalid-feedback">
                                                                Please enter Middle Name
                                                            </div>
                                            </div>
                                            <div class="col-md-6 pt-20"> <label for="applicant-family-father-sname" class="mb-0">Surname</label> <input type="text" name="applicant-family-father-sname" id="applicant-family-father-sname" class="form-control font-14 h-35p" placeholder="Surname" required="">
                                                    <div class="invalid-feedback">
                                                                Please enter surname Name
                                                            </div>
                                            </div>
                                                 
                                                 </section>
                                        
                                         <h5 class=" text-white  bg-indigo-dark-4 pt-10 pb-10  pl-10" id="passport_form"> 
                                3. Present Residential Address Details (where applicant presently resides)</h5>
                                <section class="hk-sec-wrapper shadow-xl">
                                     <div class="row">
                                          
                                          <div class="col-md-6 pt-20">
                                                     <label class="mb-0">Is your present address out of India? <em>*</em></label> <select class="form-control custom-select d-block w-100 font-14 h-35p" id="present address" name="present address" required>
                                                        <option value="">select</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option> </select>
                                                     <div class="invalid-feedback">
                                                                Please select Is your present address out of India?
                                                            </div>
                                                            </div>
                                                                <div class="col-md-6 pt-20">
                                                             <label for="applicant-address" class="mb-0">House No. and Street Name <em>*</em></label> <input type="text" name="applicant-address" id="applicant-address" class="form-control font-14 h-35p" placeholder="House No. and Street Name "required>
                                                             <div class="invalid-feedback">
                                                              Please enter House No. and Street Name
                                                          </div>
                                                      </div>
                                                  </div>
                                     <div class="row">
                                    <div class="col-md-6 pt-20">
                                        <label class="mb-0"> Village or Town or City <em>*</em></label> <input type="text" name="village" id="village" class="form-control font-14 h-35p" placeholder="Village or Town or City " required="required">
                                         <div class="invalid-feedback">
                                            Please select your village or town
                                        </div>
                                    </div>
                                            <div class="col-md-6 pt-20" >
                                                <label for="state" class="mb-0">State*</label>
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
                                        </div>
                                             <div class="row">
                                            <div class="col-md-6 pt-20">
                                                <label for="district" class="mb-0">District*</label>
                                                <select class="form-control custom-select d-block w-100 font-14 h-35p" id="district_dropdown" name="district" required> 
                                                    <option value="" selected>Select District</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select district.
                                                </div>
                                            </div>
                                              <div class="col-md-6 pt-20">
                                             <label for="applicant-detail-pin" class="mb-0">Pincode<em>*</em></label> <input type="text" name="applicant-detail-pin" id="applicant-detail-pin" class="form-control font-14 h-35p" placeholder="Pincode" required="required">
                                                 <div class="invalid-feedback">
                                                    Please enter pincode.
                                                </div>
                                         </div>
                                     </div>
                                             <div class="row">
                                             <div class="col-md-6 pt-20">
                                             <label for="applicant-police-station" class="mb-0 font-14 h-35p">Police Station (Nearest) <em>*</em></label> <input type="text" name="applicant-police-station" id="applicant-police-station" class="form-control" placeholder="Police Station (Nearest)" required="required">
                                              <div class="invalid-feedback">
                                                    Please enter Nearest Police Station 
                                                </div>
                                         </div>
                                    <div class="col-md-6 pt-20">
                                        <label for="email" class="mb-0">E-Mail ID*</label>
                                        <input type="text" class="form-control font-14 h-35p" id="email" name="email" value="" placeholder="Enter your email id" onblur="ValidateEmail()" required>
                                        <div class="invalid-feedback">
                                            Please enter your email id.
                                        </div>
                                    </div>
                                </div>
                                    
                                    <div class="row">
                                    <div class="col-md-6 pt-20">
                                        <label for="mobile" class="mb-0">Mobile No.*</label>
                                        <input type="text" class="form-control onlyNumber font-14 h-35p" id="mobile" name="mobile" value="" placeholder="Enter your mobile number" maxlength="10" onblur="ValidateMobile()" required>
                                        <div class="invalid-feedback">
                                            Please enter your mobile number.
                                        </div>
                                    </div>
                                        <div class="col-md-6 pt-20">
                                         <label for="applicant-detail-permanent-address" class="mb-0">Do you have a Permanent Address? <em>*</em></label> <select class="form-control  custom-select d-block w-100 font-14 h-35p" id="applicant-detail-permanent-address" name="applicant-detail-permanent-address" required="required">
                                            <option value="">select</option>
                                            <option value="no">No</option><option value="yes">Yes</option> </select>
                                          <div class="invalid-feedback">
                                            Please select you have a Permanent Address?
                                        </div>
                                     </div>
                                 </div>
                             </section>
                              
                                     
                             <h5 class=" text-white  bg-indigo-dark-4 pt-10 pb-10  pl-10" id="passport_form"> 
                            4. Documents Submitted as Proof</h5>
                                <section class="hk-sec-wrapper shadow-xl">
                                <div class="row">
                                      
                                  <div class="col-md-6 pt-20">
                                    <label for="applicant-proof-birth" class="mb-0">Proof of Birth <em>*</em></label> 
                                    <select class="form-control custom-select d-block w-100 font-14 h-35p" id="applicant-proof-birth" name="applicant-proof-birth" required="required"><option value="">Select</option><option value="pan-card">Pan Card</option><option value="aadhar-card">Aadhar Card</option><option value="driving-licence">Driving Licence</option><option value="voter-id">Voter ID</option><option value="birth-certificate">Birth Certificate</option><option value="transfer-school-leaving-certificate">Transfer/School Leaving Certificate</option><option value="matriculation-10th-12th-certificate">Matriculation/10th/12th Certificate</option><option value="service-record-pay-pension-order">Service Record/Pay Pension Order</option><option value="policy-bond">Policy Bond</option><option value="orphan-declaration">Orphan Declaration</option> </select>
                            
                                          <div class="invalid-feedback">
                                           please select Documents Submitted as Proof
                                        </div>
                                </div>
                                <div class="col-md-6 pt-20">
                                <label for="applicant-proof-residential-address" class="mb-0">Proof of Present Residential Address <em>*</em></label> 
                                <select class="form-control custom-select d-block w-100 font-14 h-35p" id="applicant-proof-residential-address" name="applicant-proof-residential-address" required="required">
                                    <option value="">Select</option>
                                    <option value="aadhaar-card">Aadhaar Card</option><option value="voter-id">Voter ID</option>
                                    <option value="electricity-bill">Electricity Bill</option><option value="telephone-bill">Telephone Bill</option>
                                    <option value="water-bill">Water Bill</option>
                                    <option value="spause-passport">Spause Passport</option>
                                    <option value="parents-passport">Parents Passport</option>
                                    <option value="rent-agreement">Rent Agreement</option>
                                    <option value="bank-account-passbook">Bank Account Passbook</option><option value="gas-connection-bill">Gas Connection Bill</option>
                                    <option value="it-assessment-order">IT Assessment Order</option>
                                    <option value="employer-certificate">Employer Certificate</option> </select>
                                          <div class="invalid-feedback">
                                           please select Proof of Present Residential Address
                                        </div>
                                </div>
                                 </div>
                                   <div class="pt-20">
                                 <span style="color: #1c3155;margin-top:50px">
                                                     You can send <font style="font-weight:bold; color:#ff8000"> Documents </font> on <i class="fa fa-envelope swapp"></i> <font style="font-weight:bold"> &nbsp;<a href="mailto:info@eparivahan.online">driving@gmail.com</a></font>
                                            </span>
                                          </div>
                             </section>
                                  <div class="row text-center"> 
                                    <div class="col-md-12  pt-20 pb-50 pl-30" >
                                        <button type="submit" class="btn btn-orange ">Submit & Review Form</button>        
                                    </div> 
                                </div>
 </form>
</div>
</div>
</div>
</div>
</div>
    </section>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
   $(document).ready(function () {
      var currentDate = new Date();
      $('.disableFuturedate1').datepicker({
      format: 'dd/mm/yyyy',
      autoclose:true,
      endDate: "currentDate",
      maxDate: currentDate
      }).on('changeDate', function (ev) {
         $(this).datepicker('hide');
      });
      $('.disableFuturedate1').keyup(function () {
         if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9^-]/g, '');
         }
      });
   });
</script>
<script> 
    $(function() { 
        $(".onlyNumber").on('input', function(e) { 
            $(this).val($(this).val().replace(/[^0-9]/g, '')); 
        }); 
    }); 
</script>  
   </body>
   </html>
@include('layouts/footer')
