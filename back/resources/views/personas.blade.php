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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="kt-portlet kt-portlet--mobile">
                                        <div class="kt-portlet__head kt-portlet__head--lg">
                                            <div class="kt-portlet__head-label">
                                                <span class="kt-portlet__head-icon"><i class="fa fa-check"></i></span>
                                                <h3 class="kt-portlet__head-title">Listado de Registros</h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <div class="kt-portlet__head-wrapper">
                                                    <div class="kt-portlet__head-actions">
                                                        <a href="personas-nuevo" class="btn btn-brand btn-icon-sm">
                                                            <i class="la la-plus"></i> <span class="kt-hidden-mobile">Nuevo Registro</span>
                                                        </a>
                                                        <a href="javascript:;" data-toggle="modal" data-target="#kt_modal_importar" class="btn btn-warning btn-icon-sm">
                                                            <i class="la la-upload"></i> <span class="kt-hidden-mobile">Importar</span>
                                                        </a>
                                                        <button id="btn-delete" class="btn btn-danger btn-icon-sm"><i class="flaticon-delete"></i> <span class="kt-hidden-mobile">Eliminar Registro</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__body">
                                            <form class="kt-form kt-form--fit kt-margin-b-20">
                                                <div class="row kt-margin-b-20 align-items-center">
                                                    <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Datos:</label>
                                                        <input type="text" class="form-control kt-input" data-col-index="0">
                                                    </div>
                                                    <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Email:</label>
                                                        <input type="text" class="form-control kt-input">
                                                    </div>
                                                    <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Empresa:</label>
                                                        <input type="text" class="form-control kt-input">
                                                    </div>
                                                    <div class="col-lg-3 kt-align-right">
                                                        <button id="kt_search" class="btn btn-brand btn-brand--icon">
                                                            <span><i class="la la-search"></i> <span>Buscar</span></span>
                                                        </button>
                                                        &nbsp;&nbsp;
                                                        <button id="kt_reset" class="btn btn-secondary btn-secondary--icon">
                                                            <span><i class="la la-close"></i> <span>Limpiar</span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="kt-separator kt-separator--md kt-separator--dashed"></div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table id="kt_table" class="table table-striped table-bordered table-hover table-checkable">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Datos</th>
                                                                    <th>Email</th>
                                                                    <th>Empresa</th>
                                                                    <th>Rol</th>
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
                    <script type="text/javascript" src="assets/plugins/global/plugins.bundle.js"></script>
                    <script type="text/javascript" src="assets/js/scripts.bundle.js"></script>
                    <script type="text/javascript" src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
                    <script type="text/javascript" src="assets/js/app.js"></script>
                    <script type="text/javascript" src="json/personas.json"></script>
                    <script type="text/javascript" src="assets/js/personas.js"></script>
@endsection
