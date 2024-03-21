<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <style type="text/css">
    .navbar-nav { 
        margin-left: auto;
        margin-right: auto;
    }
</style>
<!-- HK Wrapper --> 
    <div class="alt-nav"> 
        <nav class="navbar navbar-expand-sm header-navbar pt-5 pb-5 bg-indigo-light-5" id="navbar_top">           
         <div class="container">
            <p class="text-dark font-12 font-weight-400"><i class="fa fa-envelope-o" aria-hidden="true"></i> hello@digisignature.org</p>
           <p class="text-dark font-12 font-weight-400"><i class="fa fa-phone-square" aria-hidden="true"></i> Support Timing: 10:30 AM to 06:00 PM, Monday To Saturday</p>
           
        </div>
        </nav> 
    </div>
    <div class="alt-nav">
    <nav class="bg-white navbar navbar-expand-sm navbar-light shadow-xl pt-5 pb-5" role="navigation">        
        <div class="container">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><img class="navbar-brand d-block" src="{{ asset('dist/img/logo/digisignature.png') }}" width="250" alt="digisignature Logo" title="digisignature Logo"></img></li>
                    <li class="nav-item nav-toggle"><a class="nav-link nav-toggle" data-toggle="collapse"></a></li>
                </ul>
            </div>
            <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></span></a>
            <div class="navbar-collapse collapse" id="navbarCollapseAlt">
                @php 
                $currentURL = url()->current();
                $homeUrl = '';
                $faqHomeUrl = '';
                if( $currentURL != url('/') ) {
                    $homeUrl = url('/#dsc-form'); 
                } else {
                    $homeUrl = url(''); 
                }
                @endphp
                <ul class="navbar-nav nav nav-pills font-15 pt-10"> 
                    @if($currentURL == url('/'))
                    <li class="nav-item px-5"> 
                        <a class="nav-link font-weight-600 font-16 text-dark bg-orange-light-4 py-5" href="/">Buy Certificate</a>  
                    </li>
                    @else
                    <li class="nav-item px-5"> 
                        <a class="nav-link text-dark " href="/">Buy Certificate</a>  
                    </li>
                    @endif
                    @if($currentURL == url('/renew-certificate'))
                    <li class="nav-item px-5">
                        <a class="nav-link font-weight-600 font-15 text-dark bg-orange-light-4" href="{{ url('/renew-certificate') }}">Renew Certificate</a>
                    </li>
                    @else
                    <li class="nav-item px-5">
                        <a class="nav-link text-dark" href="{{ url('/renew-certificate') }}">Renew Certificate</a>
                    </li> 
                    @endif
                    @if($currentURL == url('/buy-token'))
                    <li class="nav-item px-5">
                        <a class="nav-link font-weight-600 font-15 text-dark bg-orange-light-4" href="{{ url('/buy-token') }}">Buy Token</a>
                    </li>
                    @else
                    <li class="nav-item px-5">
                        <a class="nav-link text-dark" href="{{ url('/buy-token') }}">Buy Token</a>
                    </li> 
                    @endif
                    
                    @if($currentURL == url('/about-us'))
                    <li class="nav-item px-5"> 
                        <a class="nav-link font-weight-600 font-15 text-dark bg-orange-light-4" href="{{ url('about-us') }}">About Us</a> 
                    </li>
                    @else
                    <li class="nav-item px-5"> 
                        <a class="nav-link text-dark" href="{{ url('about-us') }}">About Us</a> 
                    </li>
                    @endif
                   <!--  @if($currentURL == url('/faqs'))
                    <li class="nav-item px-5"> 
                        <a class="nav-link font-weight-600 font-15 text-dark bg-orange-light-4" href="{{ url('faqs') }}">FAQ's</a> 
                    </li>
                    @else
                    <li class="nav-item"> 
                        <a class="nav-link text-dark " href="{{ url('faqs') }}">FAQ's</a> 
                    </li>
                    @endif -->             
                    <!-- @if($currentURL == url('/blogs'))  
                    <li class="nav-item">
                        <a class="nav-link font-weight-600 font-15 text-dark bg-orange-light-4" href="{{ url('blogs') }}">Blogs</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('blogs') }}">Blogs</a>
                    </li>
                    @endif   -->
                    @if($currentURL == url('/pricing'))  
                    <li class="nav-item">
                        <a class="nav-link font-weight-600 font-15 text-dark bg-orange-light-4" href="{{ url('pricing') }}">Pricing</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('pricing') }}">Pricing</a>
                    </li>
                    @endif                                                 
                </ul> 
            </div> 
            <ul class="navbar-nav ml-10">
                @if($currentURL == url('/track-application')) 
                <li class="nav-item"> 
                    <a href="{{ url('track-application') }}" class="btn btn-sm pl-20 pr-20 bg-green-light-2  btn-rounded font-weight-500 text-white font-15">Track Application</a> 
                </li>
                @else
                <li class="nav-item"> 
                    <a href="{{ url('track-application') }}" class="btn btn-sm btn-rounded  text-dark font-weight-500">Track Application</a> 
                </li>
                @endif
            </ul> 
        </div>
    </nav>
</div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
});
</script> 