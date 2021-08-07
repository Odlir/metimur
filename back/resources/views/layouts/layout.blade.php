<!DOCTYPE html>
<html lang="es">
<head>
    <title>Effectus Fischman | @yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.bundle.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/effectus/header/base/light.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/effectus/header/menu/light.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/effectus/brand/dark.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/effectus/aside/dark.css')}}" />
</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed">
    <div class="kt-header-mobile__logo">
        <a href="{{ route('dashboard.main')}}">
            <img src="{{ asset('assets/media/logos/logo-responsive.png')}}'" alt="Effectus Fischman Consultores" />
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button id="kt_aside_mobile_toggler" class="kt-header-mobile__toggler kt-header-mobile__toggler--left"><span></span></button>
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div id="kt_aside" class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop">
            <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="{{ route('dashboard.main')}}">
                        <img src="{{ asset('assets/media/logos/logo-dark.png')}}" alt="Effectus Fischman Consultores" />
                    </a>
                </div>
                <div class="kt-aside__brand-tools">
                    <button id="kt_aside_toggler" class="kt-aside__brand-aside-toggler">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                                  fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                            <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                                  fill="#000000" fill-rule="nonzero" opacity="0.6" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                        </g>
                                    </svg>
                                </span>
                        <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                  fill="#000000" fill-rule="nonzero"/>
                                            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                  fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                                         </g>
                                    </svg>
                                </span>
                    </button>
                </div>
            </div>
            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                <div id="kt_aside_menu" class="kt-aside-menu" data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
                    <ul class="kt-menu__nav">
                        <li class="kt-menu__item" aria-haspopup="true">
                            <a href="{{ route('dashboard.main')}}" class="kt-menu__link ">
                                <i class="kt-menu__link-icon flaticon-home"></i>
                                <span class="kt-menu__link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--open kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <i class="kt-menu__link-icon flaticon-edit"></i>
                                <span class="kt-menu__link-text">Mantenimientos</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="kt-menu__submenu">
                                <span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item kt-menu__item--parent" aria-haspopup="true">
                                        <span class="kt-menu__link"><span class="kt-menu__link-text">Mantenimientos</span></span>
                                    </li>
                                    <li class="kt-menu__item kt-menu__item--active" aria-haspopup="true">
                                        <a href="{{ route('categorias.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Categorías</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item" aria-haspopup="true">
                                        <a href="{{ route('empresas.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Empresas</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item" aria-haspopup="true">
                                        <a href="{{ route('encuestas.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Encuestas</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item" aria-haspopup="true">
                                        <a href="{{ route('industrias.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Industrias</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item" aria-haspopup="true">
                                        <a href="{{ route('naturaleza.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Naturaleza</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item" aria-haspopup="true">
                                        <a href="{{ route('personas.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Personas</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item" aria-haspopup="true">
                                        <a href="{{ route('roles.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Roles</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item" aria-haspopup="true">
                                        <a href="{{ route('tipo-documento.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Tipo de Documento</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item" aria-haspopup="true">
                                        <a href="{{ route('tipo-evaluacion.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Tipo de Evaluación</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <i class="kt-menu__link-icon flaticon-clock-2"></i>
                                <span class="kt-menu__link-text">Programación</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="kt-menu__submenu">
                                <span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item kt-menu__item--parent" aria-haspopup="true">
                                        <span class="kt-menu__link"><span class="kt-menu__link-text">Programación</span></span>
                                    </li>
                                    <li class="kt-menu__item" aria-haspopup="true">
                                        <a href="{{ route('programar-encuesta.main')}}" class="kt-menu__link">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Encuestas</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <i class="kt-menu__link-icon flaticon-statistics"></i>
                                <span class="kt-menu__link-text">Reporte</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="kt-menu__submenu">
                                <span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
                                        <span class="kt-menu__link"><span class="kt-menu__link-text">Reportes</span></span>
                                    </li>
                                    <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Reportes de Cultura</span>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="kt-menu__submenu" style="display: none; overflow: hidden;" kt-hidden-height="160">
                                            <span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-generales.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Generales</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-grandes-areas.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Grandes Áreas / Areas Específicas</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-area-encuesta.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Área de Encuesta</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-preguntas.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Preguntas</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-preguntas-especificas.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Preguntas Específicas</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-semaforo-area-encuesta.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Semáforo por Área de la Encuesta</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                            <span class="kt-menu__link-text">Reportes de Personas</span>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="kt-menu__submenu" style="display: none; overflow: hidden;" kt-hidden-height="160">
                                            <span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-generales.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Generales</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-equipos.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">De Equipos</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-seccion-encuesta.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Por Seccion de Encuesta</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-rangos.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Por Rangos</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-top-bottom.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Por Top/Bottom</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-seccion-dinamica.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Por Sección Dinámica</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-seguimiento.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">De Seguimiento</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-desagregado.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Desagregado</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-desagregado-consultor.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Desagregado Consultor</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-tipo-personas.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Competencia por Tipo de Personas</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-personas-rango.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Competencia de Personas por Rangos</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-competencia-general.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Competencia Generales de Personas</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-cruzado-personas.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Cruzado por Personas</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-cruzado-preguntas.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Cruzado por Preguntas</span>
                                                    </a>
                                                </li>
                                                <li class="kt-menu__item" aria-haspopup="true">
                                                    <a href="{{ route('reporte-benckmarking-externo.main')}}" class="kt-menu__link">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Benchmarking Externo</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_wrapper" class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper">
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed">
                <div id="kt_header_menu_wrapper" class="kt-header-menu-wrapper">

                </div>
                <div class="kt-header__topbar">
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-header__topbar-welcome kt-hidden-mobile">Bienvenido,</span>
                                <span class="kt-header__topbar-username kt-hidden-mobile">Ricardo Oyola Leyton</span>
                                <img src="{{ asset('assets/media/avatar.png')}}" alt="">
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/media/bg/bg-banner-1.jpg)">
                                <div class="kt-user-card__avatar">
                                    <img src="{{ asset('assets/media/avatar.png')}}" alt="">
                                </div>
                                <div class="kt-user-card__name">Ricardo Oyola Leyton</div>
                            </div>
                            <div class="kt-notification">
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon-users-1 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Mi Perfil
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon-refresh kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Cambiar Contraseña
                                        </div>
                                    </div>
                                </a>
                                <div class="kt-notification__custom kt-space-between">
                                    <a href="index.html" class="btn btn-label btn-label-brand btn-sm btn-bold">Cerrar Sesión</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--general--}}
            @yield('content')

            <div id="kt_footer" class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                <div class="kt-container kt-container--fluid">
                    <div class="kt-footer__copyright">2020&nbsp;&copy;&nbsp;Effectus Fischman Consultores</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

</body>
</html>
