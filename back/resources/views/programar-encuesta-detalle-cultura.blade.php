@extends('layouts.layout')
@section('title', 'Programar Encuestas')
@section('content')
                    <div id="kt_content" class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                        <div id="kt_subheader" class="kt-subheader kt-grid__item">
                            <div class="kt-container kt-container--fluid">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Programación de Encuestas</h3>
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
                                                    <h3 class="kt-portlet__head-title">Detalle de la Programación</h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                        <div class="kt-portlet__head-actions">
                                                            <a href="programar-encuesta.html" class="btn btn-clean kt-margin-r-10">
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
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2">Secciones</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3">Personas</a>
                                                    </li>
                                                    <!--
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_4">Evaluaciones</a>
                                                    </li>
                                                    -->
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_5">Preguntas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_6">Notificaciones</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                                                        <div class="form-group row">
                                                            <div class="col-lg-6 form-group-sub">
                                                                <label>Encuesta:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1" selected>Evaluación 180°</option>
                                                                    <option value="2">Evaluación 180° - EWOS Chile</option>
                                                                    <option value="3">Medición de Liderazgo - Programa NOC</option>
                                                                    <option value="4">Inteligencia Emocional</option>
                                                                    <option value="5">El Capital de la Confianza</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6 form-group-sub">
                                                                <label>Empresa:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1" selected>AMBEV PERU</option>
                                                                    <option value="2">ANIXTER</option>
                                                                    <option value="3">BACKUS</option>
                                                                    <option value="4">BANCO CENTRAL DE RESERVA</option>
                                                                    <option value="5">BANCO INTERBANK</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Encuesta Anonima:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1">SI</option>
                                                                    <option value="2" selected>NO</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Encuesta Relacionada:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Fecha Inicio:</label>
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control dt-picker" readonly="" value="01/04/2020" disabled>
                                                                    <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Fecha Fin:</label>
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control dt-picker" readonly="" value="30/04/2020" disabled>
                                                                    <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Alineamiento:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1">Horizontal</option>
                                                                    <option value="2" selected>Vertical</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Orden de Preguntas:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1" selected>Aleatorio</option>
                                                                    <option value="2">Correlativo</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Barra de Estado:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1" selected>Por Sección</option>
                                                                    <option value="2">Por Pregunta</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Estado:</label>
                                                                <select class="form-control kt-select2" disabled>
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1" selected>Activo</option>
                                                                    <option value="2">Inactivo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12 form-group-sub">
                                                                <label>Términos y Condiciones:</label>
                                                                <div class="kt-tinymce">
                                                                    <textarea class="tox-target tinymce" disabled>
                                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12 form-group-sub">
                                                                <label>Mensaje de Agradecimiento por Envío de Encuesta:</label>
                                                                <div class="kt-tinymce">
                                                                    <textarea class="tox-target tinymce" disabled>
                                                                        Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis.
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12 form-group-sub">
                                                                <label>Mensaje de Fin de Encuesta:</label>
                                                                <div class="kt-tinymce">
                                                                    <textarea class="tox-target tinymce" disabled>
                                                                        Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus.
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12 form-group-sub">
                                                                <label>Mensaje de Encuesta Inactiva:</label>
                                                                <div class="kt-tinymce">
                                                                    <textarea class="tox-target tinymce" disabled>
                                                                        Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu.
                                                                    </textarea>
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
                                                        <form class="kt-form kt-form--fit">
                                                            <div class="row kt-margin-b-20">
                                                                <div class="col-lg-12 kt-align-right">
                                                                    <a href="programar-encuesta-detalle-cultura-nueva-seccion.html" class="btn btn-brand btn-icon-sm"><i class="la la-plus"></i> Nueva Sección</a>
                                                                    <button type="button" class="btn btn-danger btn-icon-sm"><i class="flaticon-delete"></i> <span class="kt-hidden-mobile">Eliminar</span></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <table id="kt_table_secciones" class="table table-striped table-bordered table-hover table-checkable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>Sección</th>
                                                                                <th>Modificado Por</th>
                                                                                <th>Última Modificación</th>
                                                                                <th>Estado</th>
                                                                                <th>Acciones</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
                                                        <form class="kt-form kt-form--fit">
                                                            <div class="row kt-margin-b-20">
                                                                <div class="col-lg-12 kt-align-right">
                                                                    <a href="javascript:;" data-toggle="modal" data-target="#kt_modal_importar" class="btn btn-warning btn-icon-sm"><i class="la la-upload"></i> Importar Personas</a>
                                                                    <a href="javascript:;" data-toggle="modal" data-target="#kt_modal_importar" class="btn btn-warning btn-icon-sm"><i class="la la-upload"></i> Importar Datos Adicionales</a>
                                                                    <a href="javascript:;" data-toggle="modal" data-target="#kt_modal_compartir" class="btn btn-default btn-icon-sm"><i class="fa fa-link"></i> Compartir Enlace</a>
                                                                    <button type="button" class="btn btn-danger btn-icon-sm"><i class="flaticon-delete"></i> <span class="kt-hidden-mobile">Eliminar</span></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <table id="kt_table_personas_cultura" class="table table-striped table-bordered table-hover table-checkable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>Email</th>
                                                                                <th>Modificado Por</th>
                                                                                <th>Última Modificación</th>
                                                                                <th>Estado</th>
                                                                                <th>Acciones</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="kt_tabs_1_4" role="tabpanel">
                                                        <form class="kt-form kt-form--fit">
                                                            <div class="row kt-margin-b-20">
                                                                <div class="col-lg-12 kt-align-right">
                                                                    <div class="btn-group">
                                                                        <a href="javascript:;" data-toggle="modal" data-target="#kt_modal_importar" class="btn btn-warning btn-icon-sm"><i class="la la-upload"></i> Importar</a>
                                                                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="kt-hidden">Toggle Dropdown</span>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="javascript:;"><i class="la la-download"></i> Descargar Plantilla</a>
                                                                        </div>
                                                                    </div>
                                                                    <a href="javascript:;" data-toggle="modal" data-target="#kt_modal_asignar_evaluado" class="btn btn-brand btn-icon-sm"><i class="la la-plus"></i> Asignar</a>
                                                                    <button type="button" class="btn btn-danger btn-icon-sm"><i class="flaticon-delete"></i> <span class="kt-hidden-mobile">Eliminar</span></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <table id="kt_table_personas_evaluados" class="table table-striped table-bordered table-hover table-checkable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>Evaluado Código</th>
                                                                                <th>Evaluado Nombre</th>
                                                                                <th>Evaluador Código</th>
                                                                                <th>Evaluador Nombre</th>
                                                                                <th>Modificado Por</th>
                                                                                <th>Última Modificación</th>
                                                                                <th>Acciones</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="kt_tabs_1_5" role="tabpanel">
                                                        <form class="kt-form kt-form--fit">
                                                            <div class="row kt-margin-b-20">
                                                                <div class="col-lg-12 kt-align-right">
                                                                    <button type="button" class="btn btn-danger btn-icon-sm"><i class="flaticon-delete"></i> <span class="kt-hidden-mobile">Eliminar</span></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <table id="kt_table_question" class="table table-striped table-bordered table-hover table-checkable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Código</th>
                                                                                <th>Sección</th>
                                                                                <th>Pregunta</th>
                                                                                <th>Orden</th>
                                                                                <th>Tipo</th>
                                                                                <th>Modificado Por</th>
                                                                                <th>Última Modificación</th>
                                                                                <th>Estado</th>
                                                                                <th>Acciones</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="kt_tabs_1_6" role="tabpanel">
                                                        <form class="kt-form kt-form--fit">
                                                            <div class="row kt-margin-b-20">
                                                                <div class="col-lg-12 kt-align-right">
                                                                    <a href="javascript:;" data-toggle="modal" data-target="#kt_modal_notificacion" class="btn btn-brand btn-icon-sm"><i class="la la-plus"></i> Crear Notificación</a>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <table id="kt_table_config" class="table table-striped table-bordered table-hover table-checkable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Código</th>
                                                                                <th>Nombre</th>
                                                                                <th>Tipo</th>
                                                                                <th>Predecesora</th>
                                                                                <th>Modificado Por</th>
                                                                                <th>Última Modificación</th>
                                                                                <th>Estado</th>
                                                                                <th>Acciones</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
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
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        <!-- BEGIN:: MODAL IMPORTAR PERSONAS -->
        <div id="kt_modal_importar" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Importar Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="kt-form">
                            <div class="form-group">
                                <label>Adjuntar Archivo Excel</label>
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
                        <button type="button" class="btn btn-primary">Importar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END:: MODAL IMPORTAR PERSONAS -->
        <!-- BEGIN:: MODAL ASIGNAR PERSONAS -->
        <div id="kt_modal_asignar" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Asignar Personas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <table id="kt_table_personas_asignar" class="table table-striped table-bordered table-hover table-checkable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Datos</th>
                                <th>Email</th>
                                <th>Estado</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Asignar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END:: MODAL ASIGNAR PERSONAS -->
        <!-- BEGIN:: MODAL ASIGNAR EVALUADOS -->
        <div id="kt_modal_asignar_evaluado" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Asignar Evaluación</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="kt_form" class="kt-form kt-form--fit kt-margin-b-20">
                            <div class="form-group row">
                                <div class="col-lg-8 form-group-sub">
                                    <label>Evaluado:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4 form-group-sub">
                                    <label>Tipo:</label>
                                    <select class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="1">Uno a Uno</option>
                                        <option value="2">Colaboradores</option>
                                        <option value="3">Jefe</option>
                                        <option value="4">360</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 form-group-sub">
                                    <label>Evaluador:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4 form-group-sub">
                                    <label>Tipo:</label>
                                    <select class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="1">Jefe</option>
                                        <option value="2">Par</option>
                                        <option value="3">Colaborador</option>
                                        <option value="4">Autoevaluado</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Asignar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END:: MODAL ASIGNAR EVALUADOS -->
        <!-- BEGIN:: MODAL NOTIFICACIÓN -->
        <div id="kt_modal_notificacion" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Notificación</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="kt_form" class="kt-form kt-form--fit kt-margin-b-20">
                            <div class="form-group row">
                                <div class="col-lg-6 form-group-sub">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3 form-group-sub">
                                    <label>Tipo:</label>
                                    <select class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="1">Encuesta</option>
                                        <option value="2">Mensaje</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 form-group-sub">
                                    <label>Estado:</label>
                                    <select class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 form-group-sub">
                                    <label>Asunto:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 form-group-sub">
                                    <label>Mensaje:</label>
                                    <div class="kt-tinymce">
                                        <textarea class="tox-target tinymce">

                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 form-group-sub">
                                    <label>Ejecución:</label>
                                    <select class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="1">Automatica</option>
                                        <option value="2">Manual</option>
                                        <option value="3">Con Disparador</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 form-group-sub">
                                    <label>Predecesora:</label>
                                    <select class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="1">Ninguna</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 form-group-sub">
                                    <label>Cuando (Días):</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3 form-group-sub">
                                    <label>Se Repite:</label>
                                    <select class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="1">No se repite</option>
                                        <option value="2">Cada Día</option>
                                        <option value="3">Cada Semana</option>
                                        <option value="3">Cada Año</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Crear Notificación</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END:: MODAL NOTIFICACIÓN -->
        <!-- BEGIN:: MODAL COMPARTIR ENLACE -->
        <div id="kt_modal_compartir" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Compartir Enlace</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="kt-form">
                            <div class="form-group">
                                <label>Compartir mediante enlace:</label>
                                <input type="text" class="form-control" value="https://fischman.com/encuesta/1p7qyFgCn7cFBFpfEtcxP2zlNC_aPZ1aB?usp=sharing">
                            </div>
                            <div class="kt-form__group--inline">
                                <div class="kt-form__label"><label>Restringir por IP:</label></div>
                                <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                                    <label><input type="checkbox" name=""> <span></span></label>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN:: MODAL COMPARTIR ENLACE -->

        <script type="text/javascript" src="json/programar-encuestas.json"></script>
        <script type="text/javascript" src="json/personas.json"></script>
        <script type="text/javascript" src="json/personas-evaluadas.json"></script>
        <script type="text/javascript" src="json/preguntas.json"></script>
        <script type="text/javascript" src="json/contactos.json"></script>
        <script type="text/javascript" src="assets/js/programar-encuestas-cultura.js"></script>
@endsection
