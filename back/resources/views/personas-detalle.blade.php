@extends('layouts.layout')
@section('title', 'Personas')
@section('content')
                    <div id="kt_content" class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                        <div id="kt_subheader" class="kt-subheader kt-grid__item">
                            <div class="kt-container kt-container--fluid">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Mantenimiento de Personas</h3>
                                </div>
                            </div>
                        </div>
                        <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
                            <form id="kt_form" class="kt-form kt-form--fit kt-margin-b-20">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">
                                                    <span class="kt-portlet__head-icon"><i class="fa fa-check"></i></span>
                                                    <h3 class="kt-portlet__head-title">Detalle del Registro</h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                        <div class="kt-portlet__head-actions">
                                                            <a href="personas" class="btn btn-clean kt-margin-r-10">
                                                                <i class="la la-arrow-left"></i> <span class="kt-hidden-mobile">Regresar</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#" data-target="#kt_tabs_1_1">Información General</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2">Laboral</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3">Informes</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Apellido Paterno:</label>
                                                                <input type="text" class="form-control" value="OLIVERI" disabled>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Apellido Materno:</label>
                                                                <input type="text" class="form-control" value="SACO" disabled>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Nombres:</label>
                                                                <input type="text" class="form-control" value="JULIO CESAR" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Tipo Documento:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1" selected>DNI</option>
                                                                    <option value="2">Pasaporte</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Nro Documento:</label>
                                                                <input type="text" class="form-control" value="40123456" disabled>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Estado Civil:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1">Soltero</option>
                                                                    <option value="2" selected>Casado</option>
                                                                    <option value="3">Viudo</option>
                                                                    <option value="4">Divorciado</option>
                                                                    <option value="5">Conviviente</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Fecha Nacimiento:</label>
                                                                <input type="text" class="form-control" value="01/01/1984" disabled>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Lugar Nacimiento:</label>
                                                                <input type="text" class="form-control" value="Lima" disabled>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Sexo:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1" selected>Masculino</option>
                                                                    <option value="2">Femenino</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Correo Electrónico:</label>
                                                                <input type="text" class="form-control" value="julio.oliveri@demo.com" disabled>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Teléfono:</label>
                                                                <input type="text" class="form-control" value="2512345" disabled>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Celular:</label>
                                                                <input type="text" class="form-control" value="991234567" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Estado:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1" selected>Activo</option>
                                                                    <option value="2">Inactivo</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-8 form-group-sub">
                                                                <label>Roles:</label>
                                                                <div class="kt-checkbox-inline">
                                                                    <label class="kt-checkbox">
                                                                        <input type="checkbox" disabled> Super Administrador
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox">
                                                                        <input type="checkbox" disabled> Administrador
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox">
                                                                        <input type="checkbox" disabled checked> Usuario
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="kt_repeater_nota">
                                                            <div id="kt_repeater_nota" class="form-group form-group-last row">
                                                                <label class="col-lg-12 col-form-label kt-font-bold">Evaluaciones:</label>
                                                                <div class="col-lg-12" data-repeater-list="">
                                                                    <div class="form-group row align-items-center" data-repeater-item="">
                                                                        <div class="col-md-10">
                                                                            <div class="kt-form__group--inline">
                                                                                <div class="kt-form__control"><input type="text" class="form-control" value="Evaluación de Desempeño" disabled></div>
                                                                            </div>
                                                                            <div class="d-md-none kt-margin-b-10"></div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="kt-form__group--inline">
                                                                                <div class="kt-form__control"><input type="text" class="form-control" value="15" disabled></div>
                                                                            </div>
                                                                            <div class="d-md-none kt-margin-b-10"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                                    <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table id="kt_table_laboral" class="table table-striped table-bordered table-hover table-checkable">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Empresa</th>
                                                                        <th>Jefe</th>
                                                                        <th>Modificado Por</th>
                                                                        <th>Última Modificación</th>
                                                                        <th>Estado</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div id="kt_dropzone_files" class="dropzone dropzone-default dropzone-brand">
                                                                    <div class="dropzone-msg dz-message needsclick">
                                                                        <h3 class="dropzone-msg-title">Suelte los archivos aquí o haga clic para cargar.</h3>
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
                    <div id="kt_footer" class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                        <div class="kt-container kt-container--fluid">
                            <div class="kt-footer__copyright">2020&nbsp;&copy;&nbsp;Effectus Fischman Consultores</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN:: MODAL IMPORTAR PREGUNTAS -->
        <div id="kt_modal_importar" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Importar Personas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="kt-form">
                            <div class="form-group">
                                <label>Adjuntar Archivo Excel de Personas</label>
                                <div></div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Elegir Archivo...</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Importar Personas</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END:: MODAL CONTACTO -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>

        <script type="text/javascript" src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>  
        <script type="text/javascript" src="{{asset('assets/js/scripts.bundle.js')}}"></script>  
        <script type="text/javascript" src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>  
        <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>  
        <script type="text/javascript" src="{{asset('json/programar-encuestas.json')}}"></script>
        <script type="text/javascript" src="{{asset('json/personas.json')}}"></script>
        <script type="text/javascript" src="{{asset('json/personas-evaluadas.json')}}"></script>
        <script type="text/javascript" src="{{asset('json/preguntas.json')}}"></script>
        <script type="text/javascript" src="{{asset('json/contactos.json')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/programar-encuestas-cultura.js')}}"></script> 
@endsection
