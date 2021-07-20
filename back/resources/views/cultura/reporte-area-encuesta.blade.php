@extends('layouts.layout')
@section('content')
                    <div id="kt_content" class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                        <div id="kt_subheader" class="kt-subheader kt-grid__item">
                            <div class="kt-container kt-container--fluid">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Reporte de Área de Encuesta</h3>
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
                                                            <i class="flaticon-graphic"></i>
                                                            <span class="kt-hidden-mobile">Generar Gráfico</span>
                                                        </button>
                                                        <button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__item">
                                                                    <a href="javascript:;" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon fa fa-file-pdf"></i>
                                                                        <span class="kt-nav__link-text">Generar Reporte PDF</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="javascript:;" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon fa fa-file-excel"></i>
                                                                        <span class="kt-nav__link-text">Generar Reporte Excel</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="javascript:;" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon fa fa-file-word"></i>
                                                                        <span class="kt-nav__link-text">Generar Reporte Word</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <div class="row form-group">
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Empresa: *</label>
                                                        <select id="cboEmpresa" name="cboEmpresa" class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Encuesta: *</label>
                                                        <select id="cboEncuesta" name="cboEncuesta" class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Grandes Areas: *</label>
                                                        <select id="cboGrandesAreas" name="cboGrandesAreas" class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Areas Específicas:</label>
                                                        <select id="cboAreasEspecificas" name="cboAreasEspecificas" class="form-control kt-select2">
                                                            <option value="">SELECCIONAR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- SECCIONES DINAMICAS -->
                                                <div class="row form-group">
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Sede:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <label class="kt-checkbox kt-checkbox--single">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </span>
                                                            </div>
                                                            <select id="cboSede" name="cboSede" class="form-control kt-select2">
                                                                <option value="">SELECCIONAR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Cargo:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <label class="kt-checkbox kt-checkbox--single">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </span>
                                                            </div>
                                                            <select id="cboCargo" name="cboCargo" class="form-control kt-select2">
                                                                <option value="">SELECCIONAR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Sexo:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <label class="kt-checkbox kt-checkbox--single">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </span>
                                                            </div>
                                                            <select id="cboSexo" name="cboSexo" class="form-control kt-select2">
                                                                <option value="">SELECCIONAR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Edad:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <label class="kt-checkbox kt-checkbox--single">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </span>
                                                            </div>
                                                            <select id="cboEdad" name="cboEdad" class="form-control kt-select2">
                                                                <option value="">SELECCIONAR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- SECCIONES DINAMICAS -->
                                                <div class="row form-group">
                                                    <div class="col-lg-2 form-group-sub">
                                                        <label>Rojo: *</label>
                                                        <input id="txtRojo" name="txtRojo" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-2 form-group-sub">
                                                        <label>Amarillo: *</label>
                                                        <input id="txtAmarillo" name="txtAmarillo" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-2 form-group-sub">
                                                        <label>Verde: *</label>
                                                        <input id="txtVerde" name="txtVerde" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Título Reporte:</label>
                                                        <input id="txtTitulo" name="txtTitulo" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-3 form-group-sub">
                                                        <label>Comparar con:</label>
                                                        <select id="cboComparar" name="cboComparar" class="form-control kt-select2">
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
