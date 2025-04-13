<header class="header navbar navbar-expand-sm">

<a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

<div class="nav-logo align-self-center">
    <!-- <a class="navbar-brand" href="index.html"><img alt="logo" src="/img/logoPJ.jpg"> <span class="navbar-brand-name"> + CAPJ</span></a> -->
    <a class="navbar-brand" href="#"><span class="navbar-brand-name"> + CAPJ</span></a>
</div>

<ul class="navbar-item flex-row nav-dropdowns ml-auto">
    <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media">
                <img src="{{asset('img/90x90.jpg')}}" class="img-fluid" alt="admin-profile">              
                <div class="media-body align-self-center">
                        @if (auth()->check())
                        <h6><span>Hola,</span> {{ auth()->user()->name }}</h6>                      
                        @endif
                        
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                    <polyline points="6 9 12 15 18 9"> </polyline>
            </svg>
        </a>
        <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="user-profile-dropdown">
            <div class="">
                <div class="dropdown-item">
                    <a class="" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                        </svg> Mi perfil
                    </a>
                </div>
                
                <div class="dropdown-item">
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ...></svg>
                            Cerrar Sesión
                        </a>
                    </form>
                </div>
                               
            </div>
        </div>
    </li>
</ul>
</header>






