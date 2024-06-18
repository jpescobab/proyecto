@extends('layouts.theme.app')
@section('title', __('Mi_Perfil'))

@section('styles')
<link href="imugi/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')    
    <!-- CONTENT AREA -->
<div class="layout-px-spacing">
    <div class="row layout-spacing">

                <!-- Content -->
                <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
                    <div class="user-profile layout-spacing">
                        <div class="widget-content widget-content-area">
                            <div class="d-flex justify-content-between">
                                <h3 class="">Información Alumno</h3>
                                <a href="user_account_setting.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                            </div>
                            <div class="text-center user-info">
                                <img src="assets/img/mati_01.png" alt="avatar">
                                <p class="">Matias Escobar Araya</p>
                            </div>
                            <div class="user-info-list">

                                <div class="">
                                    <ul class="contacts-block list-unstyled">
                                        <li class="contacts-block__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> Dragón
                                        </li>

                                        <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>Blanco / cinta Roja
                                        </li>


                                        <!-- <li class="contacts-block__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-medal"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> Blanco / Cinta Roja
                                        </li> -->
                                        <li class="contacts-block__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>27 Oct 2015
                                        </li>
                                        <li class="contacts-block__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>Coyhaique, Chile
                                        </li>
                                        <li class="contacts-block__item">
                                            <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>mati@gmail.com</a>
                                        </li>
                                        <li class="contacts-block__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> +1 (530) 555-12121
                                        </li>
                                        <!-- <li class="contacts-block__item">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <div class="social-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="social-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="social-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </div>                                    
                            </div>
                        </div>
                    </div>

                    <div class="education layout-spacing ">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Historia Marcial</h3>
                            <div class="timeline-alter">
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">04 Mar 2023</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>Ingreso</p>
                                        <p>Tiny Tiger</p>
                                    </div>
                                </div>
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">20 Dic 2023</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>Campeonato abierto Internacional</p>
                                        <p>Medalla Plata Forma mano vacía</p>
                                    </div>
                                </div>
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">29 Dic 2023</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>Graduación</p>
                                        <p>Blanco / Cinta Roja</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                </div>

                <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                    <!-- <div class="skills layout-spacing ">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Skills</h3>
                            <div class="progress br-30">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>PHP</span> <span>25%</span> </div></div>
                            </div>
                            <div class="progress br-30">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Wordpress</span> <span>50%</span> </div></div>
                            </div>
                            <div class="progress br-30">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Javascript</span> <span>70%</span> </div></div>
                            </div>
                            <div class="progress br-30">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>jQuery</span> <span>60%</span> </div></div>
                            </div>

                        </div>
                    </div> -->
                    <div class="bio layout-spacing ">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Biografía</h3>
                            <p>¡Bienvenido¡ Tang Soo Do es un arte marcial coreano súper emocionante. Te enseña a defenderte, ser disciplinado, fuerte y a tener un buen carácter. ¡Es como convertirte en un superhéroe! Un Poco de Historia Tang Soo Do es muy antiguo, con raíces que se remontan a miles de años en Corea. Se dice que comenzó en un lugar llamado el Reino de Silla, donde los guerreros Hwarang practicaban artes marciales para proteger su tierra. Estos guerreros eran famosos por su valentía y habilidades. El arte de Tang Soo Do combina estos movimientos tradicionales con técnicas modernas para crear un sistema muy completo y efectivo.
                            </p>
                            </br>
                        </div>
                        <div class="widget-content widget-content-area">    
                            <!-- <div class="bio-skill-box"> -->
                                <h4 class="">Requisitos mínimos de su Rango</h4>
                                <div class="row">
                                    
                                    <div class="col-12 col-xl-12 col-lg-12 mb-xl- mb-5 ">                                            
                                        <div class="d-flex b-skills">
                                            <div>
                                            </div>
                                            <div class="">
                                                <h5>Objetivos Generales</h5>
                                                <ul>
                                                    <li>
                                                        <h6>Introducción a las técnicas básicas de Tang Soo Do: </h6>
                                                        <p> 
                                                            Desarrollo de habilidades fundamentales en defensa personal. Familiarización con términos y procedimientos básicos.
                                                        </p>
                                                    </li>
                                                </ul>                                                        
                                            </div>
                                        </div>

                                        <div class="d-flex b-skills">
                                            <div>
                                            </div>
                                            <div class="">
                                                <h5>Técnicas Básicas</h5>
                                                <ul>
                                                    <li>
                                                        <h6>Técnicas de Manos: </h6>
                                                        <p> Defensa baja (Ha Dan Mahk Kee)
                                                                Puño al centro (Choong Dan Kong Kyuck)
                                                                Puño lateral (Tollyo Kong Kyuck)
                                                                Defensa lateral (Choong Dan Yup Mahk Kee)
                                                                Defensa reforzada (Sang Soo Ha Dan Mahk Kee)
                                                                Bloqueo de afuera hacia adentro (Ahneso Pahkuro Mahk Kee)
                                                                Bloqueo de adentro hacia afuera (Pahkeso Ahnero Mahk Kee)
                                                                Bloqueo alto (Sang Dan Mahk Kee)
                                                                Puño alto (Sang Dan Kong Kyuck)</p>


                                                                
                                                        <h6>Técnicas de Patadas: </h6>                                  
                                                            <p>Patada de frente (Ahp Cha Ki)
                                                                Patada de lado (Yup Cha Ki)
                                                                Patada semicircular (Tollyo Cha Ki)
                                                                Patada moviéndose de lado
                                                                Patadas básicas de brinco
                                                                Patada de hacha (Naeryo Cha Ki)
                                                            </p>
                                                    </li>
                                                </ul>                                                        
                                            </div>
                                        </div>

                                        <div class="d-flex b-skills">
                                            <div>
                                            </div>
                                            <div class="">
                                                <h5>Técnicas Básicas</h5>
                                                <ul>
                                                    <li>
                                                        <h6>Formas (Hyungs)</h6>
                                                        
                                                            Sae Kye Hyung Il Bu: Primer forma básica.
                                                            Sae Kye Hyung E Bu: Segunda forma básica.
                                                            Sae Kye Hyung Sam Bu: Tercera forma básica.
                        
                                                            <h6>Pelea Defensiva</h6>
                                                            Pelea de un paso: Técnicas básicas de manos y piernas (1 a la 5).
                        
                                                            <h6>Habilidad para Defenderse</h6>
                                                            <h6>Técnicas de Agarre:</h6>
                                                            Se deben conocer al menos 5 técnicas de defensa. Técnicas de agarre de la 1 a la 5
                                                    </li>
                                                </ul>                                                        
                                            </div>
                                        </div>

                                    <!-- </div> -->

                                    <!-- <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                        
                                        <div class="d-flex b-skills">
                                            <div>
                                            </div>
                                            <div class="">
                                                <h5>Github Countributer</h5>
                                                <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>

                                    </div> -->

                                    <!-- <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">
                                        
                                        <div class="d-flex b-skills">
                                            <div>
                                            </div>
                                            <div class="">
                                                <h5>Photograhpy</h5>
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia anim id est laborum.</p>
                                            </div>
                                        </div>

                                    </div> -->

                                    <!-- <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">
                                        
                                        <div class="d-flex b-skills">
                                            <div>
                                            </div>
                                            <div class="">
                                                <h5>Mobile Apps</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do et dolore magna aliqua.</p>
                                            </div>
                                        </div>

                                    </div> -->

                                </div>

                            </div>

                        </div>                                
                    </div>

                </div>

            </div>
</div>
@endsection

@section('scripts')
<script src="imugi/assets/js/custom.js"></script>
@endsection
