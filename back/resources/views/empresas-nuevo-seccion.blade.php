@extends('layouts.layout')
@section('title', 'Empresas')
@section('content')
                    <div id="kt_content" class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                        <div id="kt_subheader" class="kt-subheader kt-grid__item">
                            <div class="kt-container kt-container--fluid">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Mantenimiento de Empresas</h3>
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
                                            </div>
                                            <div class="kt-portlet__body">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#" data-target="#kt_tabs_1_1">Información General</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_2">Secciones</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="kt_tabs_1_1" role="tabpanel">
                                                        <div class="row row kt-margin-b-35">
                                                            <div class="col-lg-12 kt-align-right">
                                                                <a href="empresas.html" class="btn btn-clean kt-margin-r-10">
                                                                    <i class="la la-arrow-left"></i> <span class="kt-hidden-mobile">Regresar</span>
                                                                </a>
                                                                <button type="submit" class="btn btn-brand">
                                                                    <i class="la la-check"></i> <span class="kt-hidden-mobile">Guardar</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Código: *</label>
                                                                <input id="txtCodigo" name="txtCodigo" type="text" class="form-control">
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Tipo Documento: *</label>
                                                                <select id="cboTipoDocumento" name="cboTipoDocumento" class="form-control">
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1">RUC</option>
                                                                    <option value="2">RUT</option>
                                                                    <option value="3">NIT</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Nro Documento: *</label>
                                                                <input id="txtNumeroDocumento" name="txtNumeroDocumento" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Razón Social: *</label>
                                                                <input id="txtRazonSocial" name="txtRazonSocial" type="text" class="form-control">
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Razón Comercial:</label>
                                                                <input id="txtRazonComercial" name="txtRazonComercial" type="text" class="form-control">
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Logo:</label>
                                                                <div></div>
                                                                <div class="custom-file">
                                                                    <input id="filLogo" type="file" class="custom-file-input">
                                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Industria: *</label>
                                                                <select id="cboIndustria" name="cboIndustria" class="form-control">
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1">INDUSTRIA 1</option>
                                                                    <option value="2">INDUSTRIA 2</option>
                                                                    <option value="3">INDUSTRIA 3</option>
                                                                    <option value="4">INDUSTRIA 4</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Naturaleza:</label>
                                                                <select id="cboNaturaleza" name="cboNaturaleza" class="form-control">
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1">ASOCIACIONES</option>
                                                                    <option value="2">COLEGIO</option>
                                                                    <option value="3">COLEGIOS PROFESIONALES</option>
                                                                    <option value="4">EMBAJADAS</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Volumen de Ventas:</label>
                                                                <select id="cboVolumen" name="cboVolumen" class="form-control">
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1">5-10</option>
                                                                    <option value="2">11-30</option>
                                                                    <option value="3">31-75</option>
                                                                    <option value="4">76-100</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Nro Empleados:</label>
                                                                <select id="cboNroEmpleado" name="cboNroEmpleado" class="form-control">
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1">5-10</option>
                                                                    <option value="2">11-30</option>
                                                                    <option value="3">31-75</option>
                                                                    <option value="4">76-100</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Estado:</label>
                                                                <select id="cboEstado" name="cboEstado" class="form-control">
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="1">Activo</option>
                                                                    <option value="2">Inactivo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div id="kt_repeater_contact">
                                                            <div id="kt_repeater_contact" class="form-group form-group-last row">
                                                                <label class="col-lg-12 col-form-label kt-font-bold">Contactos:</label>
                                                                <div class="col-lg-12" data-repeater-list="">
                                                                    <div class="form-group row align-items-center" data-repeater-item="">
                                                                        <div class="col-md-3">
                                                                            <div class="kt-form__group--inline">
                                                                                <div class="kt-form__label"><label>Nombre:</label></div>
                                                                                <div class="kt-form__control"><input type="text" class="form-control"></div>
                                                                            </div>
                                                                            <div class="d-md-none kt-margin-b-10"></div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="kt-form__group--inline">
                                                                                <div class="kt-form__label"><label>Teléfono:</label></div>
                                                                                <div class="kt-form__control"><input type="text" class="form-control"></div>
                                                                            </div>
                                                                            <div class="d-md-none kt-margin-b-10"></div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="kt-form__group--inline">
                                                                                <div class="kt-form__label"><label>Celular:</label></div>
                                                                                <div class="kt-form__control"><input type="text" class="form-control"></div>
                                                                            </div>
                                                                            <div class="d-md-none kt-margin-b-10"></div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="kt-form__group--inline">
                                                                                <div class="kt-form__label"><label>Email:</label></div>
                                                                                <div class="kt-form__control"><input type="text" class="form-control"></div>
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
                                                                        <i class="la la-plus"></i> Agregar Contacto
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- AUDITORIA -->
                                                        <div id="accordion-audit" class="accordion accordion-light accordion-svg-icon kt-margin-t-30-desktop">
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
                                                    <div class="tab-pane active" id="kt_tabs_1_2" role="tabpanel">
                                                        <div class="kt-section">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="kt-section__title kt-pt10" style="margin:0">Nueva Sección</div>
                                                                </div>
                                                                <div class="col-lg-6 kt-align-right">
                                                                    <a href="empresas-nuevo.html" class="btn btn-clean kt-margin-r-10">
                                                                        <i class="la la-arrow-left"></i> <span class="kt-hidden-mobile">Regresar</span>
                                                                    </a>
                                                                    <button id="btn-save-section" type="button" class="btn btn-brand">
                                                                        <i class="la la-check"></i> <span class="kt-hidden-mobile">Guardar</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="kt-separator kt-separator--space-lg kt-separator--border-solid"></div>
                                                            <div class="form-group row kt-mt-25">
                                                                <div class="col-lg-8 form-group-sub">
                                                                    <label>Nombre de la Sección:</label>
                                                                    <input id="txtNombreSeccion" name="txtNombreSeccion" type="text" class="form-control">
                                                                </div>
                                                                <div class="col-lg-4 form-group-sub">
                                                                    <label>Estado:</label>
                                                                    <select id="cboEstadoSeccion" name="cboEstadoSeccion" class="form-control">
                                                                        <option value="">SELECCIONAR</option>
                                                                        <option value="Activo">Activo</option>
                                                                        <option value="Inactivo">Inactivo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div id="kt_repeater_section">
                                                                <div id="kt_repeater_section" class="form-group form-group-last row">
                                                                    <label class="col-lg-12 col-form-label kt-font-bold">Agregar Atributos:</label>
                                                                    <div class="col-lg-12" data-repeater-list="">
                                                                        <div class="form-group row align-items-center" data-repeater-item="">
                                                                            <div class="col-md-6">
                                                                                <div class="kt-form__group--inline">
                                                                                    <div class="kt-form__label"><label>Nombre:</label></div>
                                                                                    <div class="kt-form__control"><input type="text" class="form-control"></div>
                                                                                </div>
                                                                                <div class="d-md-none kt-margin-b-10"></div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="kt-form__group--inline">
                                                                                    <div class="kt-form__label"><label>Obligatorio:</label></div>
                                                                                    <div class="kt-align-center">
                                                                                        <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                                                                                            <label><input type="checkbox" name=""> <span></span></label>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-md-none kt-margin-b-10"></div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="kt-form__group--inline">
                                                                                    <div class="kt-form__label"><label>Listado:</label></div>
                                                                                    <div class="kt-align-center">
                                                                                        <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                                                                                            <label><input type="checkbox" name=""> <span></span></label>
                                                                                        </span>
                                                                                    </div>
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
                                                                            <i class="la la-plus"></i> Agregar Atributo
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- AUDITORIA -->
                                                        <div id="accordion-audit" class="accordion accordion-light accordion-svg-icon kt-margin-t-30-desktop">
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

        <script type="text/javascript" src="json/empresas.json"></script>
        <script type="text/javascript" src="json/contactos.json"></script>
        <script type="text/javascript" src="assets/js/empresas.js"></script>
@endsection
