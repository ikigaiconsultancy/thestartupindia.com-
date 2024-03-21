    <head>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="60"> 
        <!-- HK Wrapper -->
        <div class="hk-wrapper hk-alt-nav hk-landing">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar hk-navbar-alt">
                <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>

                <div class="collapse navbar-collapse" id="navbarCollapseAlt"> 
                    <ul class="navbar-nav">
                        <li class="nav-item"><img class="navbar-brand d-block" src="{{ asset('dist/img/logo/digisignaturelogo.png') }}" width="300" alt="digisignature Logo" title="digisignature Logo"></img></li>
                        <li class="nav-item dropdown show-on-hover active">
                            <a class="nav-link" href="{{ url('/dashboard') }}" role="button"  aria-haspopup="true" aria-expanded="false">
                                Dashboard 
                            </a> 
                        </li> 
                    </ul>
                </div>  
                <ul class="navbar-nav hk-navbar-content">
                    <li class="nav-item dropdown dropdown-authentication">
                        <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media"> 
                                <div class="media-body"> 
                                    <span>
    <!--  @if(Session::has('user')) 
    {{ Session::get('user->name') }} 
    @else 
    {{ 'Admin' }} 
    @endif -->
    Admin<i class="zmdi zmdi-chevron-down"></i></span>
</div>
</div>
</a>
<div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">   
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
        <i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span>
    </a>
    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>
</li>
</ul> 
</nav>
    <!-- /Top Navbar -->