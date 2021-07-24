@extends('layouts.layout')
@section('title', 'Tipo Evaluacion')
@section('content')
                    <div id="kt_content" class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                        <div id="kt_subheader" class="kt-subheader kt-grid__item">
                            <div class="kt-container kt-container--fluid">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Mantenimiento de Tipo de Evaluación</h3>
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
                                                        <a href="tipo-evaluacion-nuevo" class="btn btn-brand btn-icon-sm">
                                                            <i class="la la-plus"></i> <span class="kt-hidden-mobile">Nuevo Registro</span>
                                                        </a>
                                                        <button id="btn-delete" class="btn btn-danger btn-icon-sm"><i class="flaticon-delete"></i> <span class="kt-hidden-mobile">Eliminar Registro</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__body">
                                            <form class="kt-form kt-form--fit kt-margin-b-20">
                                                <div class="row kt-margin-b-20 align-items-center">
                                                    <div class="col-lg-6 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Nombre:</label>
                                                        <input type="text" class="form-control kt-input" data-col-index="0">
                                                    </div>
                                                    <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Estado:</label>
                                                        <select class="form-control kt-select2" data-col-index="1">
                                                            <option value="1">Todos</option>
                                                            <option value="2">Activos</option>
                                                            <option value="3">Inactivos</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
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
                                                                    <th>Nombre</th>
                                                                    <th>Modificado Por</th>
                                                                    <th>Última Modificación</th>
                                                                    <th>Estado</th>
                                                                    <th>Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Nombre</th>
                                                                    <th>Modificado Por</th>
                                                                    <th>Última Modificación</th>
                                                                    <th>Estado</th>
                                                                    <th>Acciones</th>
                                                                </tr>
                                                            </tfoot>
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
                </div>
            </div>
        </div>
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
                    <script type="text/javascript" src="assets/plugins/global/plugins.bundle.js"></script>
                    <script type="text/javascript" src="assets/js/scripts.bundle.js"></script>
                    <script type="text/javascript" src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
                    <script type="text/javascript" src="assets/js/app.js"></script>
                    <script type="text/javascript" src="json/tipo-evaluacion.json"></script>
                    <script type="text/javascript" src="assets/js/tipo-evaluacion.js"></script>
@endsection
