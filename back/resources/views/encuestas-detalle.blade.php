@extends('layouts.layout')
@section('encuestas_detalle')
                    <div id="kt_content" class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                        <div id="kt_subheader" class="kt-subheader kt-grid__item">
                            <div class="kt-container kt-container--fluid">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Mantenimiento de Encuestas</h3>
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
                                            </div>
                                            <div class="kt-portlet__body">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#" data-target="#kt_tabs_1_1">Información General</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2">Preguntas</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                                                        <div class="row row kt-margin-b-20">
                                                            <div class="col-lg-12 kt-align-right">
                                                                <a href="encuestas.html" class="btn btn-clean kt-margin-r-10">
                                                                    <i class="la la-arrow-left"></i> <span class="kt-hidden-mobile">Regresar</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Categoría:</label>
                                                                <select id="cboCategoria" name="cboCategoria" class="form-control kt-select2" disabled="disabled">
                                                                    <option value="">Seleccionar</option>
                                                                    <option value="1">Ambición</option>
                                                                    <option value="2">Clima Empresarial</option>
                                                                    <option value="3">Cultura</option>
                                                                    <option value="4" selected="selected">Liderazgo</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6 form-group-sub">
                                                                <label>Nombre de Encuesta:</label>
                                                                <input id="txtNombre" name="txtNombre" type="text" class="form-control" disabled="disabled" value="Encuesta 360 - Cultura_Liderazgo">
                                                            </div>
                                                            <div class="col-lg-3 form-group-sub">
                                                                <label>Versión:</label>
                                                                <input id="txtVersion" name="txtVersion" type="text" class="form-control" disabled="disabled" value="1.0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12 form-group-sub">
                                                                <label>Descripción:</label>
                                                                <div class="kt-tinymce">
                                                                    <textarea id="txtDescripcion" name="txtDescripcion" class="tox-target" disabled="disabled">
                                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
                                                                        Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Tipo de Evaluación:</label>
                                                                <select id="cboTipoEvaluacion" name="cboTipoEvaluacion" class="form-control kt-select2" disabled="disabled">
                                                                    <option value="">Seleccionar</option>
                                                                    <option value="1">Autoevaluación</option>
                                                                    <option value="2" selected="selected">Evaluación 360</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Alineamiento:</label>
                                                                <select id="cboAlineamiento" name="cboAlineamiento" class="form-control kt-select2" disabled="disabled">
                                                                    <option value="">Seleccionar</option>
                                                                    <option value="1" selected="selected">Vertical</option>
                                                                    <option value="2">Horizontal</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label>Estado:</label>
                                                                <select id="cboEstado" name="cboEstado" class="form-control kt-select2" disabled="disabled">
                                                                    <option value="">Seleccionar</option>
                                                                    <option value="1" selected="selected">Activo</option>
                                                                    <option value="2">Inactivo</option>
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
                                                    <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                                                        <form class="kt-form kt-form--fit">
                                                            <div class="row kt-margin-b-20">
                                                                <div class="col-lg-12 kt-align-right">
                                                                    <div class="btn-group">
                                                                        <a href="javascript:;" data-toggle="modal" data-target="#kt_modal_importar" class="btn btn-warning btn-icon-sm"><i class="la la-upload"></i> Importar Preguntas</a>
                                                                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="kt-hidden">Toggle Dropdown</span>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="javascript:;"><i class="la la-download"></i> Descargar Plantilla</a>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn btn-danger btn-icon-sm"><i class="flaticon-delete"></i> <span class="kt-hidden-mobile">Eliminar Registro</span></button>
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
                                                                        <tfoot>
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
        <!-- BEGIN:: MODAL IMPORTAR PREGUNTAS -->
        <div id="kt_modal_importar" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Importar Preguntas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="kt-form">
                            <div class="form-group">
                                <label>Adjuntar Archivo Excel de Preguntas</label>
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
                        <button type="button" class="btn btn-primary">Importar Preguntas</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END:: MODAL CONTACTO -->
        <script type="text/javascript" src="json/encuestas.json"></script>
        <script type="text/javascript" src="json/preguntas.json"></script>
        <script type="text/javascript" src="assets/js/encuestas.js"></script>
@endsection
