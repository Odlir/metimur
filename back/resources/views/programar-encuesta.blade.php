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
                                                        <a href="programar-encuesta-nuevo.html" class="btn btn-brand btn-icon-sm">
                                                            <i class="la la-clock-o"></i> <span class="kt-hidden-mobile">Programar Encuesta</span>
                                                        </a>
                                                        <button id="btn-delete" class="btn btn-danger btn-icon-sm"><i class="flaticon-delete"></i> <span class="kt-hidden-mobile">Eliminar Registro</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__body">
                                            <form class="kt-form kt-form--fit kt-margin-b-20">
                                                <div class="row kt-margin-b-20 align-items-center">
                                                    <div class="col-lg-4 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Nombre Encuesta:</label>
                                                        <input type="text" class="form-control kt-input" data-col-index="0">
                                                    </div>
                                                    <div class="col-lg-4 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Nombre Empresa:</label>
                                                        <input type="text" class="form-control kt-input" data-col-index="1">
                                                    </div>
                                                    <div class="col-lg-4 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Categoría:</label>
                                                        <select class="form-control kt-select2">
                                                            <option value="1">Todos</option>
                                                            <option value="2">Ambición</option>
                                                            <option value="3">Comunicación</option>
                                                            <option value="4">Cultura</option>
                                                            <option value="5">Liderazgo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row kt-margin-b-20 align-items-center">
                                                    <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Fecha Inicio:</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control dt-picker" readonly="" value="20/03/2020">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Fecha Fin:</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control dt-picker" readonly="" value="20/03/2020">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
                                                        <label>Estado:</label>
                                                        <select class="form-control kt-select2">
                                                            <option value="1">Todos</option>
                                                            <option value="2">Activos</option>
                                                            <option value="3">Inactivos</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 kt-align-right">
                                                        <button id="kt_search" class="btn btn-brand btn-brand--icon">
                                                            <span><i class="la la-search"></i> <span>Buscar</span></span>
                                                        </button>
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
                                                                    <th>Categoría</th>
                                                                    <th>Empresa</th>
                                                                    <th>Fecha Inicio</th>
                                                                    <th>Fecha Fin</th>
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
                    <script type="text/javascript" src="json/programar-encuestas.json"></script>
                    <script type="text/javascript" src="json/personas.json"></script>
                    <script type="text/javascript" src="json/personas-evaluadas.json"></script>
                    <script type="text/javascript" src="json/preguntas.json"></script>
                    <script type="text/javascript" src="json/contactos.json"></script>
                    <script type="text/javascript" src="assets/js/programar-encuestas.js"></script>
@endsection
