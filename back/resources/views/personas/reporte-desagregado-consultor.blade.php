@extends('layouts.layout')
@section('reporte_desagrado_consultor')
                    <div id="kt_content" class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                        <div id="kt_subheader" class="kt-subheader kt-grid__item">
                            <div class="kt-container kt-container--fluid">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Reporte Desagregado Consultor</h3>
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
                                                    <span class="kt-portlet__head-icon"><i class="fa fa-filter"></i></span>
                                                    <h3 class="kt-portlet__head-title">Filtros</h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-brand">
                                                            <i class="la la-check"></i>
                                                            <span class="kt-hidden-mobile">Visualizar Resultados</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <div class="row form-group">
                                                    <div class="col-lg-6 form-group-sub">
                                                        <label>Empresa: *</label>
                                                        <select id="cboEmpresa" name="cboEmpresa" class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 form-group-sub">
                                                        <label>Encuesta: *</label>
                                                        <select id="cboEncuesta" name="cboEncuesta" class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Fecha Fin Encuesta: *</label>
                                                        <input id="txtFechaFin" name="txtFechaFin" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Evaluado: *</label>
                                                        <select id="cboEvaluado" name="cboEvaluado" class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
@endsection
