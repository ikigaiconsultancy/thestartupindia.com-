<?php $pageTitle = 'Login - Digital Signature Portal'; ?>
@include('layouts/admin_header_css')  
<!-- HK Wrapper -->
    <div class="hk-wrapper">
      
      <!-- Main Content -->
      <div class="hk-pg-wrapper hk-auth-wrapper"> 
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 pa-0">
              <div class="auth-form-wrap pt-xl-0 pt-70">
                <div class="auth-form w-xl-35 w-lg-55 w-sm-75 w-100">
                  <span class="font-24 font-weight-500 auth-brand text-center d-block mb-20">
                  LOGIN</span> 
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
                            @if(Session::has('message'))
                <div class="alert alert-success success-alert alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <span class="success-message">{{Session::get('message')}}</span>
                    {{ Session::forget('message') }}
                </div>
            @endif
                  <form method="post" action="{{ route('login') }}">
                      @csrf
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input class="form-control" placeholder="Email" type="text" name="email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <div class="input-group"> 
                        <input class="form-control" placeholder="Password" type="password" name="password">
                        <div class="input-group-append">
                          <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                        </div>
                      </div>
                    </div> 
                    <button class="btn btn-danger btn-block" type="submit">Login</button> 
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Main Content -->
    
    </div>
    <!-- /HK Wrapper -->
@include('layouts/footer_script') 