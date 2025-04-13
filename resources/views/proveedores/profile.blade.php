@extends('layouts.theme.app')

@section('title', 'Perfil Alumno')

@section('styles')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/users/user-profile.css') }}">
@endsection

@section('content')
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-spacing">
                <!-- Columna Izquierda -->
                <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
                    <div class="user-profile layout-spacing">
                        <div class="widget-content widget-content-area">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/mati_01.png') }}" alt="avatar">
                                <img src="{{ asset('assets/img/belt_yellow.PNG') }}" alt="avatar">
                                <p></p>
                            </div>
                            <div class="user-info-list">
                                <div>
                                    <ul class="contacts-block list-unstyled">
                                        <li class="contacts-block__item">
                                            <h6 class="text-center">Dragon</h6>
                                            <p>Matias Ignacio Escobar Araya</p>
                                        </li>
                                        <li class="contacts-block__item">
                                            <svg ...></svg>
                                            5to Dragón
                                        </li>
                                        <li class="contacts-block__item">
                                            <svg ...></svg>
                                            27 Oct 2015
                                        </li>
                                        <li class="contacts-block__item">
                                            <svg ...></svg>
                                            Coyhaique, Chile
                                        </li>
                                        <li class="contacts-block__item">
                                            <a href="mailto:example@mail.com">
                                                <svg ...></svg>
                                                mati@gmail.com
                                            </a>
                                        </li>
                                        <li class="contacts-block__item">
                                            <svg ...></svg>
                                            +1 (530) 555-12121
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="education layout-spacing">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Historia Marcial</h3>
                            <div class="timeline-alter">
                                <!-- Historial -->
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p>04 Mar 2023</p>
                                    </div>
                                    <div class="t-dot"></div>
                                    <div class="t-text">
                                        <p>Ingreso</p>
                                        <p>Tiny Tiger</p>
                                    </div>
                                </div>
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p>20 Dic 2023</p>
                                    </div>
                                    <div class="t-dot"></div>
                                    <div class="t-text">
                                        <p>Campeonato abierto Internacional</p>
                                        <p>Medalla Plata Forma mano vacía</p>
                                    </div>
                                </div>
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p>29 Dic 2023</p>
                                    </div>
                                    <div class="t-dot"></div>
                                    <div class="t-text">
                                        <p>Graduación</p>
                                        <p>Blanco / Cinta Roja</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha -->
                <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                    <div class="bio layout-spacing">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Biografía</h3>
                            <h4>Tang Soo Do</h4>
                            <p>¡Bienvenido! Tang Soo Do es un arte marcial coreano...</p>
                            <h4>Requisitos mínimos de su Rango</h4>
                            <h5>Objetivos Generales</h5>
                            <p>Desarrollo de habilidades fundamentales...</p>
                            <!-- Más contenido de biografía -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection
