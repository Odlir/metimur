@extends('layouts.layout')
@section('title', 'Naturaleza')
@section('content')
                    <div id="kt_content" class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                        <div id="kt_subheader" class="kt-subheader kt-grid__item">
                            <div class="kt-container kt-container--fluid">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Mantenimiento de Naturaleza</h3>
                                </div>
                            </div>
                        </div>
                        <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
                            <form id="kt_form" class="kt-form kt-form--fit kt-margin-b-20" action="{{route('naturaleza.update',$naturaleza)}}" method="POST">
                                @csrf
                                {{--metodo put --}}
                                @method('put')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">
                                                    <span class="kt-portlet__head-icon"><i class="fa fa-check"></i></span>
                                                    <h3 class="kt-portlet__head-title">Nuevo Registro</h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                        <div class="kt-portlet__head-actions">
                                                            <a href="naturaleza" class="btn btn-clean kt-margin-r-10">
                                                                <i class="la la-arrow-left"></i> <span class="kt-hidden-mobile">Regresar</span>
                                                            </a>
                                                            <button type="submit" class="btn btn-brand">
                                                                <i class="la la-check"></i> <span class="kt-hidden-mobile">Guardar</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <div class="form-group row">
                                                    <div class="col-lg-8 form-group-sub">
                                                        <label>Nombre:</label>

                                                        <input id="txtNombre" name="txtNombre" type="text" class="form-control" value="{{old('naturaleza_nombre',$naturaleza->naturaleza_nombre)}}">
                                                    </div>
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Estado:</label>
                                                        <select id="cboEstado" name="cboEstado" class="form-control">
                                                            <option value="{{old('naturaleza_estado_id',$naturaleza->naturaleza_estado_id)}}">{{old('naturaleza_estado_id',$naturaleza->naturaleza_estado_id)}}</option>
                                                            @if ($naturaleza->naturaleza_estado_id == 'Activo')
                                                                <option value="Inactivo">Inactivo</option>
                                                            @else
                                                                <option value="Activo">Activo</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- AUDITORIA -->
                                                <div id="accordion-audit" class="accordion accordion-light accordion-svg-icon kt-margin-t-15-desktop">
                                                    <div class="card">
                                                        <div id="heading-audit" class="card-header">
                                                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapse-audit" aria-expanded="false" aria-controls="collapse-audit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                                                                    </g>
                                                                </svg> Información de Auditoría
                                                            </div>
                                                        </div>
                                                        <div id="collapse-audit" class="collapse" aria-labelledby="heading-audit" data-parent="#accordion-audit" style="">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="kt-widget30__items">
                                                                            <div class="kt-widget30__item">
                                                                                <div class="kt-widget30__info">
                                                                                    <p><b>Creado por</b><br>Jemmy Laura Porturas Rodriguez</p>
                                                                                    <p><b>Fecha Creación</b><br>14/11/2012 - 00:00</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="kt-widget30__item">
                                                                            <div class="kt-widget30__info">
                                                                                <p><b>Modificado por</b><br>Jemmy Laura Porturas Rodriguez</p>
                                                                                <p><b>Fecha Modificación</b><br>15/02/2016 - 21:40</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        <script type="text/javascript" src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/scripts.bundle.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('json/naturaleza.json')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/naturaleza.js')}}"></script>

@endsection
