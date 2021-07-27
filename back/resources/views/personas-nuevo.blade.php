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
                                                    <h3 class="kt-portlet__head-title">Nuevo Registro</h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                        <div class="kt-portlet__head-actions">
                                                            <a href="personas" class="btn btn-clean kt-margin-r-10">
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
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Apellido Paterno:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Apellido Materno:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Nombres:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Tipo Documento:</label>
                                                        <select class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                            <option value="1">DNI</option>
                                                            <option value="2">Pasaporte</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Nro Documento:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Estado Civil:</label>
                                                        <select class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                            <option value="1">Soltero</option>
                                                            <option value="2">Casado</option>
                                                            <option value="3">Viudo</option>
                                                            <option value="4">Divorciado</option>
                                                            <option value="5">Conviviente</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Fecha Nacimiento:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Lugar Nacimiento:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Sexo:</label>
                                                        <select class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Femenino</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Correo Electrónico:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Teléfono:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Celular:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4 form-group-sub">
                                                        <label>Estado:</label>
                                                        <select class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                            <option value="1">Activo</option>
                                                            <option value="2">Inactivo</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-8 form-group-sub">
                                                        <label>Roles:</label>
                                                        <div class="kt-checkbox-inline">
                                                            <label class="kt-checkbox">
                                                                <input type="checkbox"> Super Administrador
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-checkbox">
                                                                <input type="checkbox"> Administrador
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-checkbox">
                                                                <input type="checkbox"> Usuario
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
                                                                <div class="col-md-8">
                                                                    <div class="kt-form__group--inline">
                                                                        <div class="kt-form__control"><input type="text" class="form-control" placeholder="Ingresar Nombre Evaluación"></div>
                                                                    </div>
                                                                    <div class="d-md-none kt-margin-b-10"></div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="kt-form__group--inline">
                                                                        <div class="kt-form__control"><input type="text" class="form-control" placeholder="Ingresar Evaluación"></div>
                                                                    </div>
                                                                    <div class="d-md-none kt-margin-b-10"></div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                                                                        <i class="la la-trash-o"></i> Eliminar
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <div class="col-lg-12">
                                                            <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                                                                <i class="la la-plus"></i> Agregar Evaluación
                                                            </a>
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

        <script type="text/javascript" src="json/personas.json"></script>
        <script type="text/javascript" src="assets/js/personas.js"></script>
@endsection
