<?php $pageTitle = 'Buy Digital Signature - Online DSC Registration'; ?>
<?php $pageDescription = "A digital signature certificate (DSC) is a secure digital key issued by recognised Certifying Authorities (CAs) to validate the identity of the certificate holder."; ?> 
<?php $ogurl = "https://digisignature.org";?>
<?php $pagecanonical = 'https://digisignature.org';?>
@include('layouts/header_css') 
@include('layouts/header') 
<section class="bg-white mt-0 pb-30">
    <div class="container py-30">
        <div class="row">
<!-- <div class="col-xl-5 shadow-xl pl-0 pr-0 bg-white"> 
<h1 class="display-5 font-weight-700 bg-white shadow-sm text-center text-orange pb-20 pt-20">Buy Digital Signature Certificate</h1>
</div> -->
<div class="col-xl-6 pl-0 pr-0 bg-white px-20 shadow-sm">
<h1 class="display-6 font-weight-700 bg-white text-left text-orange pt-20 pb-20">Renew DSC (Digital Signature Certificate)</h1>
<p class="text-left display-5 pb-5 font-16 font-weight-400 text-dark px-20"><i class="fa fa-check-square-o text-green font-weight-500" aria-hidden="true"></i> Used for ITR, GST Registration and Filling</p>
<p class="text-left display-5 pb-5 font-16 font-weight-400 text-dark px-20"><i class="fa fa-check-square-o text-green font-weight-500" aria-hidden="true"></i> Used For MCA Registration, Audit Filling, DIN Verification</p>
<p class="text-left display-5 pb-5 font-16 font-weight-400 text-dark px-20"><i class="fa fa-check-square-o text-green font-weight-500" aria-hidden="true"></i> Used for for IRCTC/E-Tickting / Railway</p>
<p class="text-left display-5 pb-5 font-16 font-weight-400 text-dark px-20"><i class="fa fa-check-square-o text-green font-weight-500" aria-hidden="true"></i> Used for e-tenders & e-procurement</p>
<p class="text-left display-5 pb-5 font-16 font-weight-400 text-dark px-20"><i class="fa fa-check-square-o text-green font-weight-500" aria-hidden="true"></i> DGFT Used for for Import Export Code</p>
<p class="text-left display-5 pb-5 font-16 font-weight-400 text-dark px-20"><i class="fa fa-check-square-o text-green font-weight-500" aria-hidden="true"></i> Used for  EPFO Filings and more</p>
<div class="row pl-20 pr-80 pt-20">
    @if ($errors->any()) 
    <div class="error-box">
    <div class="alert alert-warning">
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
    <form class="needs-validation font-14 font-weight-500 px-20" method="post" action="{{ url('dsc-form/store') }}" enctype="multipart/form-data" novalidate> 
    @csrf
    <div class="row pt-20">  
    <div class="col-md-12 mb-20">
    <label class="mb-0" for="name">Name</label>
    <input type="text" class="form-control form-control-sm mb-0" id="name_of_person" name="name_of_person" value="{{ old('name_of_person') }}"  placeholder="Enter your name" required>
    <div class="invalid-feedback">
    Please enter your name.
    </div>
    </div>
    <div class="col-md-12 mb-20">
    <label class="mb-0" for="mobile">Company Name<span class="font-12"> (If any)</span></label>
    <input type="text" class="form-control form-control-sm" id="name_of_firm" name="name_of_firm" value="{{ old('name_of_firm') }}"  placeholder="Enter your company name">
    <div class="invalid-feedback">
    Please enter your company name.
    </div>
    </div> 
    </div>
    <div class="row">  
    <div class="col-md-12 mb-20">
    <label class="mb-0" for="mobile">Mobile Number</label>
    <input type="text" class="form-control form-control-sm onlyNumber" id="mobile_id" name="mobile" value="{{ old('mobile') }}" placeholder="Enter your mobile number" maxlength="10" onblur="ValidateMobile();" required>
    <div class="invalid-feedback">
    Please enter your mobile number.
    </div>
    </div> 
    <div class="col-md-12 mb-20">
    <label class="mb-0" for="email">Email ID</label>
    <input type="text" class="form-control form-control-sm" id="email_id" name="email" value="{{ old('email') }}"  placeholder="Enter your email" onblur="ValidateEmail();" required>
    <div class="invalid-feedback">
    Please enter your email.
    </div> 
    </div>
    </div> 
    <!-- <div class="row"> 
    <div class="col-md-6 mb-20">
    <label class="mb-0" for="gst">Is GST Number Available?</label><br>
    <input type="radio" name="gst_radio" value="1"  /> <label>Yes</label>&nbsp&nbsp
    <input type="radio" name="gst_radio" value="0" checked/> <label>No</label>                       
    </div>
    <div class="col-md-6 mt-20 mb-20">
    <input type="text" class="form-control form-control-sm" id="gst_number" name="gst_number" value="{{ old('gst_number') }}" placeholder="Enter your GST Number" required>
    <div class="invalid-feedback">
    Please enter GST Number.
    </div>
    </div>
    </div> -->
    <div class="row">
    <div class="col-md-12 mb-20">
    <label class="mb-0" for="billing_address">Address</label>
    <input type="text" class="form-control form-control-sm" id="address" name="address" value="{{ old('address') }}"  placeholder="Enter your billing address">
    <div class="invalid-feedback">
    Please enter your billing address.
    </div>
    </div> 
    <div class="col-md-6 mb-20">
    <label class="mb-0" for="postal_code">Pin Code</label>
    <input type="text" class="form-control form-control-sm onlyNumber" id="postal_code" name="postal_code" value="{{ old('postal_code') }}"  placeholder="Enter your postal code" maxlength="6">
    <div class="invalid-feedback">
    Please enter your postal code.
    </div>
    </div> 
    </div>
    <div class="row">
    <div class="col-md-12 mb-0">
    <label class="mb-10" for="crypto_lb">Do you want us to send token to<br></label><br>
    <input type="radio" name="diffaddress_radio" value="0" id="diffaddno" checked/> 
    <label for="diffaddno">Above Address</label>&nbsp&nbsp&nbsp&nbsp
    <input type="radio" name="diffaddress_radio" value="1" id="diffaddyes" /> <label>Different address</label>
    </div>
    </div>
    <div class="row" style="display: none;" id="diffaddressdiv"> 
    <div class="col-md-12 mb-10">
    <label class="mb-0" for="diff_billing_address">Address</label>
    <input type="text" class="form-control form-control-sm" id="diff_address" name="diff_address" value="{{ old('diff_address') }}"  placeholder="Enter your billing address">
    <div class="invalid-feedback">
    Please enter your billing address.
    </div>
    </div>
    <div class="col-md-6 mb-10">
    <label class="mb-0" for="postal_code">Pin Code</label>
    <input type="text" class="form-control form-control-sm" id="diff_postal_code" name="diff_postal_code" value="{{ old('diff_postal_code') }}"  placeholder="Enter your postal code" maxlength="6">
    <div class="invalid-feedback">
    Please enter your postal code.
    </div>
    </div> 
  
    </div>
    <div class="col-md-12 mb-10 mt-10 text-justify">
    <div class="form-check custom-control  custom-checkbox">
    <input type="checkbox" class="form-check-input custom-control-input" id="invalidCheck" name="aadhaar-consent" required>
    <label class="form-check-label custom-control-label font-13 font-weight-400" for="invalidCheck"> 
    I, THE APPLICANT (OWNER OF AADHAAR NUMBER USED IN APPLICATION) AGREE TO SHARE DETAILS / PASSCODES ETC AS & WHEN REQUIRED FOR THE PURPOSE OF DSC REGISTRATION AND ITS RELATED SERVICES.<span class="text-red">[UPDATED]</span>
    </label>
    <div class="invalid-feedback mb-10">
    You Must agree both Terms before Submitting the Form.
    </div>
    </div>
    </div>
    <div class="col-md-12 mb-10 text-justify"> 
    <div class="form-check custom-control custom-checkbox">
    <input type="checkbox" class="form-check-input custom-control-input" id="invalidCheck1" name="terms_condition" required>
    <label class="form-check-label custom-control-label font-13 font-weight-400" for="invalidCheck1"> 
    I ACCEPT <a href="https://udyogsuvidhakendra.in/terms-conditions" target="_blank">Terms & Conditions</a>, <a href="https://udyogsuvidhakendra.in/privacy-policy" target="_blank">Privacy Policies</a> & <a href="https://udyogsuvidhakendra.in/refund-policy" target="_blank">Refund Policies</a> AND PROVIDE MY CONSENT TO REGISTER US ON GOVERNMENT PORTAL. I AGREE THAT FEES COLLECTED ARE FOR PROFESSIONAL CHARGES OF A PRIVATE CONSULTING FIRM AND DO NOT INCLUDE ANY GOVERNMENT FEES. 
    </label>
    <div class="invalid-feedback mb-10">
    You Must agree both Terms before Submitting the Form.
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center mb-30 mt-20">
    <button type="submit" class="btn btn-blue text-center">Submit & Review Form</button>
    </div>
    </div>
    </form>
</div>
<!-- <div class="row text-dark font-15 px-20 py-20">
        <div class="row col-md-12 py-5 px-20">
        <div class="col-md-4">
            <p class="font-weight-300">Class Type</p>
        </div>
        <div class="col-md-6">
            <p class="font-weight-600">Class 3</p>
        </div>
        </div>
        <div class="row col-md-12 py-5 px-20">
        <div class="col-md-4">
            <p class="font-weight-300 pt-5">User Type</p>
        </div>
        <div class="col-md-6">
            <div class="toggle-wrap">
            <div class="toggle toggle-light toggle-bg-primary toggle2 mt-0 mb-0" style="height: 0px; width: 50px;"><div class="toggle-slide"><div class="toggle-inner" style="width: 75px; margin-left: 0px;"><div class="toggle-on active" style="height: 25px; width: 37.5px; text-indent: -8.33333px; line-height: 25px;">Individual</div><div class="toggle-blob" style="height: 25px; width: 25px; margin-left: -12.5px;"></div><div class="toggle-off" style="height: 25px; width: 37.5px; margin-left: -12.5px; text-indent: 8.33333px; line-height: 25px;">Company</div></div></div></div></div>
        </div>
        </div>
        <div class="row col-md-12 pb-5 px-20 pt-10">
        <div class="col-md-4">
            <p class="font-weight-300">Certificate Type</p>
        </div>
        <div class="col-md-8 pl-0">
            <label for="certificate_type" class="mb-0 "></label>&nbsp;&nbsp;
            <input type="radio" name="certificate_type" value="male" required="" > <label>Signature</label>
            <input type="radio" name="certificate_type" value="female" required=""> <label>Encryption</label> 
            <input type="radio" name="certificate_type" value="female" required="" checked> <label>Combo</label> 
            <div class="invalid-feedback">Please Select Certificate Type Required</div>
        </div>
        </div>
        <div class="row col-md-12 pt-0 pb-5 px-20">
        <div class="col-md-4">
            <p class="font-weight-300">Validity</p>
        </div>
        <div class="col-md-8 pl-0">
            <label for="validity" class="mb-0"></label>&nbsp;&nbsp;
            <input type="radio" name="validity" value="male" required="" > <label>1 year</label>
            <input type="radio" name="validity" value="female" required=""> <label>2 Year</label> 
            <input type="radio" name="validity" value="female" required="" checked> <label>3 Year</label> 
            <div class="invalid-feedback">Please Select Number of Years</div>
        </div>
        </div>
        <div class="col-md-8 text-justify">
        <div class="form-check custom-control custom-checkbox pl-30">
            <input type="checkbox" class="form-check-input custom-control-input" id="invalidCheck1" name="aadhaar-consent" required="">
            <label class="form-check-label custom-control-label font-15 font-weight-400" for="invalidCheck1"> 
                ARE YOU THE RESIDENT OF INDIA
            </label>
        </div>
    </div>
</div> -->
</div>
<div class="col-xl-6 text-dark">
    <div class="container pl-30 pr-30">
        <!-- <h2 class="pb-5 font-weight-600 font-18 mt-2" id="nav_link_0">Digital Signature Registration</h2>
        <a class="btn btn-sm btn-success pb-0 pt-0" href="/customer-review"> 4.8</a>
        <span class="pl-5 font-weight-400 text-dark">4355 customers</span>   
        <span class="fa fa-star text-sun"></span>
        <span class="fa fa-star text-sun"></span>
        <span class="fa fa-star text-sun"></span>
        <span class="fa fa-star text-sun"></span>
        <span class="fa fa-star text-sun"></span> -->
        <img class="d-block w-100 mt-20" src="{{ asset('dist/img/home-banner/dsc-registration.jpg') }}" height="350" width="575" alt="Steps for Digital Signature Registration">
        <div class="mt-20  font-15 text-justify">
            <h3 class="py-20 display-6 font-weight-700 text-orange text-left">Renew Digital Signature Certificate</h3>
            <div class="row text-dark font-15 text-justify">
                <div class="col-sm-12 mb-20">
                    <p>Our professionals will help you get your DSC in just three simple steps:</p>
                </div>
                <div class="col-sm-12 mb-20">
                    <h5 class="mb-5 font-16 font-weight-600">
                        Step 1: Fill Online Application Form
                    </h5>
                    <p>We will collect basic details like Name, Gender, Address, Nationality, Country, Email Id, Mobile number, and the usage type of DSC you are applying for. It could be for company incorporation, MCA e-filing, IT filing, GST filing, Foreign trade, e-Tenders or personal use. Accordingly, we will guide you in selecting the right class.</p>
                </div>
                <div class="col-sm-12 mb-20">
                    <h5 class="mb-5 font-16 font-weight-600">
                        Step 2: Submission of supporting documents
                    </h5>
                    <p>All the necessary documents like PAN card, address proof, passport, etc. with relevant attestation will be collected.</p>
                </div>
                <div class="col-sm-12 mb-20">
                    <h5 class="mb-5 font-16 font-weight-600">
                        Step 3: Documents Validation
                    </h5>
                    <p class="mb-20">Once the payment is made and the information is verified against the PAN card as in the Income Tax portal, we will validate your documents in two ways:</p>
                    <p class="pl-10 mb-20">
                        <span class="font-weight-500 text-dark-100">1) Video Recording:</span>
                        You will receive a video link to your registered mobile number and email address, where you need to record your personal information like name, DOB, etc. and send it to us.
                    </p>
                    <p class="pl-10">
                        <span class="font-weight-500 text-dark-100">2) SMS:</span>
                        You will then receive an SMS with the DSC application ID and a mobile number to which you need to reply with your DSC application ID, name, mobile number and email ID.
                        Upon successful verification we will dispatch your Digital Signature Certificate USB token, which is a password-protected physical device containing your digital signature. A USB token also called e-token, dongle or digital signature has a special built-in software that recognises and opens your digital signature.
                    </p>
                </div> 
            </div>
        </div>
    </div>
</div>
</div>
<div class="d-flex align-items-center py-30">
            <img class="img-fluid" src="{{ asset('dist/img/home-banner/dsc/procure-your-digital-signature-min.png') }}" alt="Who Can Apply for Digital Certificate"/>
        </div>
</div>
</section>
<!-- Row End -->
<!--ROW - Modal -->
<div class="row">
    <div class="col-sm"> 
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header"> 
                        <h5 class="modal-title">ERROR</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="mobile_error"></p>
                        <p id="email_error"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bg-grey-light-5 py-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h3 class="py-20 display-6 font-weight-700 text-orange text-left">Who Can Buy Digital Certificate</h3>
                <div class="row text-dark font-15 text-justify">
                    <div class="col-md-12 mb-10 pt-10">
                        <p class="pb-10 ">There is no limitation on who could buy our certificates, people and organizations from India and outside India can buy our certificates, provided they meet our Verification Guidelines. Please look at our list below to select an appropriate application form.</p>
                        <h5 class="mb-0 pt-10 font-16 font-weight-600">Individuals</h5>
                        <p>The DSC is for Indians, who do not want their organization name to be part of the certificate.</p>
                    </div>
                    <div class="col-md-12 mb-10 pt-10"> 
                        <h5 class="mb-0 font-16 font-weight-600">Organization</h5>
                        <p>Ths DSC is for companies (any type of entity), who want their organization name to be part of DSC.</p>
                    </div>
                    <div class="col-md-12 mb-10 pt-10"> 
                        <h5 class="mb-0 font-16 font-weight-600">Foreign Individuals</h5>
                        <p>The DSC is for foreigners and would like to use our certificate in their name.</p>
                    </div>
                    <div class="col-md-12 mb-10 pt-10"> 
                        <h5 class="mb-0 font-16 font-weight-600">Foreign Organization</h5>
                        <p>The DSC is for Organizations registered outside India would like to use our Digital certificates.</p>
                    </div>
                    <div class="col-md-12 mb-10 pt-10"> 
                        <h5 class="mb-0 font-16 font-weight-600">Document Signer Certificate</h5>
                        <p>If you intend to use our certificate for bulk signing of documents, you could use our Bulk Signer Certificates. We would offer this certificate in the PFX file for Class 2 and is sold to Organizations only.</p>
                    </div>
                    <div class="col-md-12 mb-10 pt-10"> 
                        <h5 class="mb-0 font-16 font-weight-600">IET Certificates</h5>
                        <p>We have a special Digital Signature certificate for IEC code holders, this certificate is specifically used for DGFT portal.</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-5">
            <div class="d-flex align-items-center  offset-md-1 mt-50 ">
                <img class="img-fluid" src="{{ asset('dist/img/home-banner/dsc/who-can-apply-for-digital-certificate.jpg') }}" alt="Who Can Apply for Digital Certificate"/>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="bg-white text-dark">  
    <div class="container py-60">
        <h4 class="py-20 display-6 font-weight-700 text-orange text-center">Documents Required to Get Digital Certificate</h4>
        <div class="row">
            <div class="col-md-3 ">
                <div class="d-flex">
                    <img class="img-fluid" src="{{ asset('dist/img/home-banner/dsc/documents-required-for-dsc.png') }}" alt="documents-required-for-dsc"/>
                </div>
            </div>
            <div class="col-md-9"> 
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <th colspan="1"></th>
                                <th><h6 class="text-center"><strong>Indian</strong></h6></th>
                                <th><h6 class="text-center"><strong>Foreign </strong></h6></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Individuals</strong></td>
                                    <td>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp ID proof: Passport/Driving license or any Photo Identity issued by the Govt.<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp PAN card<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp Address proof: Aadhaar card/Voter ID/Driving license/Registration Certificate<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp Attesting Officer proof<br>
                                    </td>
                                    <td rowspan="2">
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp Attested copy of applicant’s passport<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp Attested copy of Visa, if the applicant is out of their native country<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp Attested copy of Resident Permit certificate, if the applicant is in India<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp Attested copy of any Govt-issued address proof<br>
                                        <p class="font-weight-500 pt-10">Foreign attestation procedure for DSC:</p>
                                        <p>
                                            Authorisation letter must be sought with the respective company seal and signature.
                                        </p>
                                        <p class="pl-10">- Embassy of native country (If applicant is out of native country)</p>
                                        <p class="pl-10">- Apostilled by native country, after Public Notary (if country is in Hague Convention).<br> For example Austria, Greece, Oman, Australia, Iceland, Ireland, Japan, etc.</p>
                                        <p class="pl-10">- Consularized by native country, after Public Notary (if country is not in Hague Convention).<br> For example, China, Indonesia, Malaysia, Myanmar, etc.</p>
                                    </td>
                                </tr> 
                                <tr>
                                    <td><strong>Organizations </strong></td>    
                                    <td>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp Organizational PAN<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp Partnership deed, if applicable<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp List of Authorised Signatories which could be the list of Directors,Board resolution<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp Authorised Signatory ID proof<br>
                                        <i class="fa fa-check" aria-hidden="true"></i>&nbsp&nbsp GST certificate<br>
                                        <p class="font-weight-500 pt-10">*Note : For Indian companies, the documents may differ depending upon the type<br> of entity like Partnership, Proprietorship or sole ownership, LLP, etc.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
        </div>
</div>
</section>
<section class="bg-grey-light-5 py-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12"> 
                <h4 class="py-20 display-6 font-weight-700 text-orange text-center">Types of Digital Signature Certificate</h4>
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <th><h6 class="text-center"><strong>Sign</strong></h6></th>
                                <th><h6 class="text-center"><strong>Encrypt</strong></h6></th>
                                <th><h6 class="text-center"><strong>Sign & Encrypt</strong></h6></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-justify">
                                        Sign DSC can only be used for signing documents. The most popular usage of is signing the PDF file for Tax Returns, MCA and other websites. Signing via DSC gives the assurance of not only the integrity of the signer but also the data. It is proof of untampered and unaltered data.
                                    </td>
                                    <td class="text-justify">Encrypt DSC can only be used to encrypt a document, it is popularly used in the tender portal, to help companies encrypt the documents and upload. You could also use the certificate to encrypt and send classified information. Encrypt DSC is fit for e-commerce documents, legal documentation and sharing documents that are highly confidential and contains information that needs to be protected. We are selling Encrypt certificates as a standalone product as well.</td>
                                    <td class="text-justify">Our Sign & Encrypt DSC can be used for both signing and encrypting. It is convenient for users who need to authenticate and maintain the confidentiality of the information shared. Its usage includes filing government form and application.</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<section class="bg-white py-60">
    <div class="container">
        <h3 class="display-6 font-weight-700 text-orange text-center">What is a Digital Signature Certificate?</h3>
        <div class="text-dark font-15 pt-10 pl-10 pr-10">
            <div class="row">
                <div class="col-md-5 mb-10 pt-10 text-justify">
                    <h3 class="display-6 font-weight-700 text-orange text-center pb-10">An Overview</h3>
                    <p>A digital signature certificate (DSC) is a secure digital key issued by recognised Certifying Authorities (CAs) to validate the identity of the certificate holder. It contains an individual’s name, digital signature, date of issuance of the certificate and date of expiry, and the name of the CA.</p>
                    <h4 class="display-6 font-weight-700 text-orange text-center pt-20 pb-10">Benefits</h4>
                    <p class="pb-10 pt-0">Apart from authenticating the certificate holder’s identity, DSC helps in the following ways:</p>
                    <h5 class="mb-0 font-16 font-weight-600 pb-0">Time-saving and cost-saving:</h5>
                    <p>Digital signatures ensure a smoother workflow in an organization by limiting the time and cost spent on signing documents and contracts. Documents can be signed by the required persons in a click of a button. This is especially useful when the signer is located in a different area and there is no dependency for him/her to be physically present.</p>
                    <h5 class="mb-0 font-16 font-weight-600 pt-10">Enhanced security:</h5>
                    <p>Added security features in DSC prevents unauthorised use of your document and data. No one can fake your signature, tamper the data or alter your document. DSC ensures your signature is valid, verified and legitimate.</p>
                    <h5 class="mb-0 font-16 font-weight-600 pt-10">Legal validity:</h5>
                    <p>According to the Information Technology Act, 2000, a DSC is accepted evidence in any court of law similar to the acceptance of any signed document.</p>
                    <h5 class="mb-0 font-16 font-weight-600 pt-10">Global acceptance:</h5>
                    <p>Apart from government bodies like GST, MCA, Income Tax, etc., a DSC is being accepted in all the countries across the world as it offers greater security. DSC is important for companies looking to take part in government tenders.</p>
                </div>
                <div class="col-md-7 py-20">
                    <div class="d-flex">
                        <img class="w-100" src="{{ asset('dist/img/home-banner/dsc/what-is-digital-certificate.jpg') }}" alt="what-is-digital-certificate"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-grey-light-5 text-dark py-60">
    <div class="container">
        <h4 class="display-6 font-weight-700 text-orange text-center">Classes of a Digital Signature Certificate</h4>
        <div class="row py-20">
            <div class="col-md-5">
                <p class="pb-10 pt-20 text-justify">The IT law allows us three Classes of DSC Class 1, Class 2 and Class 3 used for different purposes based on the type of entity and need. C, however we only sell Class 2 and Class 3 certificates. We are not selling Class 1 Certificates.</p>
                <h5 class="mb-0 font-16 font-weight-600">Class 1:</h5>
                <p class="text-justify">Class 1 certificate is issued to both businesses and individuals, or private subscribers, to confirm the user’s name and email id as mentioned in the consumer database. This is just a basic assurance and is usually not considered to be of major significance.</p>
            </div>
            <div class="col-md-7">
                <div class="d-flex">
                    <img class="w-100" src="{{ asset('dist/img/home-banner/dsc/class1.jpg') }}" alt="what-is-digital-certificate"/>
                </div>
            </div>
            </div>
            <div class="row py-20">
            <div class="col-md-7">
                <div class="col-md-7">
                    <div class="d-flex">
                        <img class="h-100" src="{{ asset('dist/img/home-banner/dsc/class2.jpg') }}" alt="what-is-digital-certificate"/>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-10 pt-10">
                <h5 class="mb-0 font-16 font-weight-600">Class 2:</h5>
                <p class="text-justify">Similar to Class 1, Class 2 certificate is issued to both the entities - businesses and private subscribers for confirmation of information in the database. It is used during monetary transactions or to access one’s personal information, and for other transactions, where there is a substantial risk of malicious activity. Also, Class 2 is used to file various government forms in India. More uses of Class 2 Digital Signature Certificates are given below.</p>
                <p class="mb-0">- MCA e-filing</p>
                <p class="mb-0">- Income Tax e-filing</p>
                <p class="mb-0">- LLP registration</p>
                <p class="mb-0">- GST application</p>
                <p class="mb-0">- IE code registration</p>
                <p class="mb-0">- Form 16,etc</p>
            </div>
            </div>
            <div class="row">
            <div class="col-md-5 mb-30 pt-10">
                <h5 class="mb-0 font-16 font-weight-600">Class 3</h5>
                <p class="text-justify">Class 3 certificate is an upgraded version of Class 2. It is issued to individuals and organisations that want to participate in bidding for government tenders or online tenders and auctions. Sometimes the applicants may be expected to be physically present before the CAs to receive a Class 3 certificate. Class 3 signatures are relevant to environments that are prone to data theft, fraudulence and failure of security. Following are the main functions of Class 3 certificates</p>
                <p class="mb-0">- E-tendering</p>
                <p class="mb-0">- Patent and trademark e-filing</p>
                <p class="mb-0">- MCA e-filing</p>
                <p class="mb-0">- Customs e-filing</p>
                <p class="mb-0">- E-procurement</p>
                <p class="mb-0">- E-biding</p>
                <p class="mb-0">- E-auction</p>
            </div>
            <div class="col-md-7">
                <div class="col-md-7">
                    <div class="d-flex">
                        <img class="h-100" src="{{ asset('dist/img/home-banner/dsc/class3.jpg') }}" alt="what-is-digital-certificate"/>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white py-60 text-dark">
    <div class="container">
        <div class="row pb-40">
        <div class="col-md-12 mb-10 pt-10">
            <h4 class="display-6 font-weight-700 text-orange text-center">How DSCs Work?</h4>
            <p class="pb-10 pt-20 text-justify">A DSC is created based on the PKI mechanism where two keys - a public key and private key are generated. The private key is kept by the signer and the public key is required by the receiver to decrypt the information regarding the identity of the user during information exchange. The user can store the private key on a computer or hard disk as a token and access it with his/her respective password issued.</p> 
            <p class="text-justify">During the transfer of information, both the keys are used by the browser and the server to encrypt and decrypt information, to authorise the identity of the user. The public key is disseminated with the encrypted information. The authentication process fails even if one of the keys does not match. Hence the encrypted data cannot be decrypted making it impossible for unauthorised access.</p>
        </div>
    </div>
        <h3 class="display-6 font-weight-700 text-orange text-center">Recent Updates</h3>
        <div class="text-dark font-15 pt-10 pl-10 pr-10">
            <div class="row">
                <div class="col-md-12 mb-10 pt-20 font-16"> 
                    <h5 class="mb-0 font-16 font-weight-600">1) October 27, 2020 : Digital Signature Global Market Set To Grow At Record Rate!</h5> 
                    <p class="pl-20 text-justify">Currently valued at 17.72 billion USD, the global digital signature is set to reach 31.1% Compound annual growth rate (CAGR) by 2027. The main factors driving the increase is the growing dependency on digital signatures to overcome fraud and ensure the security of various documents.</p>
                </div>
                <div class="col-md-12 mb-10 pt-10">
                    <h5 class="mb-0 font-16 font-weight-600">2) August 5, 2020 : SEBI extends use of DSC for Authentication till Dec 31st</h5> 
                    <p class="pl-20 text-justify">The Securities and Exchange Board of India (SEBI) has issued a circular on extending the use of digital signature certifications (DSC) till 31st December, 2020. DSC is used for authentication/certification of filings/ submissions made under the SEBI Regulations, 2015 to the Stock Exchanges. This relaxation was in view of the COVID-19 disruption.</p>
                </div>
                <div class="col-md-12 mb-10 pt-10">
                    <h5 class="mb-0 font-16 font-weight-600">3) June 9, 2020: The Digital Signature Market is Expected to Grow Substantially</h5> 
                    <p class="pl-20 text-justify">Due to COVID19, more corporations are venturing into the use of digital signatures for verification purposes. For this reason, the digital signing market is expected to grow substantially in the next few years. Digital PoS system developer, IDSign, plans to invest 20 Million USD on this market within India, and another 100 Million USD across other geographies.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts/footer')
@include('layouts/footer_script')
</body>
</html>
<script> 
    $(function() { 
        $(".onlyNumber").on('input', function(e) { 
            $(this).val($(this).val().replace(/[^0-9]/g, '')); 
        }); 
    }); 
</script> 
<script type="text/javascript">
    $('input:radio[name="gst_radio"]').change(
        function(){
            if ($(this).is(':checked') && $(this).val() == '1') {
                $('#gst_number').removeAttr('readonly');
                $('#gst_number').attr('required', true);   
            }  
            if ($(this).is(':checked') && $(this).val() == '0') { 
                $('#gst_number').attr('required', false);   
                $('#gst_number').attr('readonly', 'readonly');   
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
        $(document).ready(function(){ 
            $.ajax({
                url : "{{ url('dsc/modal') }}",
                type : "post",
                data : { "_token": "{{ csrf_token() }}"},
                success:function(response){
                    $(".modal-body").html(response);
                    $("#dynamicModal").modal('show'); 
                }
            }) 
        }) 
    </script>
    <script type="text/javascript">
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
        <script>
            function ValidateEmail()
            {  
                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                var inputText = $('#email_id').val();  
                if(inputText.match(mailformat))
                { 
                    document.getElementById("email_error").innerHTML = '';
                    return true;
                }
                else
                {
                    document.getElementById('email_id').value = ''; 
                    document.getElementById("email_error").innerHTML = 'You have entered an invalid email address!';
                    $('#exampleModalCenter').modal('show');
                    return false; 
                }
            }
            function ValidateMobile()
            {  
                var phoneno = /^\d{10}$/;
                var inputText = $('#mobile_id').val();  
                if(inputText.match(phoneno))
                { 
                    document.getElementById("mobile_error").innerHTML = '';
                    return true;
                }
                else
                {
                    document.getElementById('mobile_id').value = ''; 
                    document.getElementById("mobile_error").innerHTML = 'Please Enter Your 10 Digit Mobile Number!';
                    $('#exampleModalCenter').modal('show');
                    return false;
                }
            }
        </script>
  