'use strict';
var Encuestas = function () {
    var dataJSONArray = dataJSONEncuesta;
    var dataJSONArrayPersonas = dataJSON;
    var dataJSONArrayContacto = dataJSONContact;
    var dataJSONArrayEvaluados = dataJSONEvaluadas;
    var dataJSONArrayPreguntas = dataPreguntasJSON;

    var handleDataTable = function () {
        var table = $('#kt_table').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,
            dom: "<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            data: dataJSONArray,
            columns: [
                {data: 'ID', className: 'kt-align-center'},
                {data: 'NOMBRE'},
                {data: 'CATEGORIA'},
                {data: 'EMPRESA'},
                {data: 'INICIO', className: 'kt-align-center'},
                {data: 'FIN', className: 'kt-align-center'},
                {data: 'MODIFICADO_POR'},
                {data: 'ULTIMA_MODIFICACION', className: 'kt-align-center'},
                {data: 'ESTADO', className: 'kt-align-center'},
                {data: 'ACCIONES', className: 'kt-align-center', responsivePriority: -1, width: '12%'},
            ],
            order: [[1, 'asc']],
            headerCallback: function (thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="" class="kt-group-checkable"><span></span></label>';
            },
            columnDefs: [
                {
                    targets: 0,
                    width: '30px',
                    className: 'dt-right',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="' + data + '" class="kt-checkable"><span></span></label>';
                    },
                },
                {
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<a href="programar-encuesta-detalle.html" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Detalle"><i class="fa fa-eye"></i></a><a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Editar"><i class="flaticon-edit"></i></a><a href="programar-encuesta-contacto.html" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Asociar Contacto"><i class="flaticon-avatar"></i></a>';
                    },
                },
                {
                    targets: 8,
                    render: function (data, type, full, meta) {
                        var status = {
                            'Activo': {'class': ' kt-badge--success'},
                            'Inactivo': {'class': ' kt-badge--danger'}
                        };
                        return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + data + '</span>';
                    },
                }
            ],
        });
        table.on('change', '.kt-group-checkable', function () {
            var set = $(this).closest('table').find('td:first-child .kt-checkable');
            var checked = $(this).is(':checked');
            $(set).each(function () {
                if (checked) {
                    $(this).prop('checked', true);
                    $(this).closest('tr').addClass('active');
                } else {
                    $(this).prop('checked', false);
                    $(this).closest('tr').removeClass('active');
                }
            });
        });
        table.on('change', 'tbody tr .kt-checkbox', function () {
            $(this).parents('tr').toggleClass('active');
        });
    };
    var handleDelete = function () {
        $('#btn-delete').click(function () {
            $(this).addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
            var checkbox = $('#kt_table tbody input:checkbox:checked').map(function () {
                return $(this).val();
            }).get();
            if (checkbox == '') {
                swal.fire('Un momento...', 'Debe seleccionar 1 registro para eliminar');
            } else {
                var code = {ids: checkbox}
                swal.fire({
                    title: '¿Desea eliminar registro(s)?',
                    text: 'Recuerda que no podrás revertir esto.',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, eliminar'
                }).then(function (result) {
                    if (result.value) {
                        swal.fire('Eliminado!', 'Registro(s) eliminado(s) correctamente.', 'success');
                    }
                });
            }
            $(this).removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
        });
    };
    var handleDataTablePersonas = function () {
        $('#kt_table_secciones, #kt_table_personas_cultura, #kt_table_config').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true
        });
    };
    var handleDataTablePersonasAsignar = function () {
        var table = $('#kt_table_personas_asignar').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,

            data: dataJSONArrayPersonas,
            columns: [
                {data: 'ID', className: 'kt-align-center'},
                {data: 'DATOS'},
                {data: 'EMAIL'},
                {data: 'ESTADO', className: 'kt-align-center'}
            ],
            order: [[1, 'asc']],
            headerCallback: function (thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="" class="kt-group-checkable"><span></span></label>';
            },
            columnDefs: [
                {
                    targets: 0,
                    width: '30px',
                    className: 'dt-right',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="' + data + '" class="kt-checkable"><span></span></label>';
                    },
                },
                {
                    targets: 3,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        var status = {
                            'Activo': {'class': ' kt-badge--success'},
                            'Inactivo': {'class': ' kt-badge--danger'}
                        };
                        return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + data + '</span>';
                    },
                }
            ],
        });
        table.on('change', '.kt-group-checkable', function () {
            var set = $(this).closest('table').find('td:first-child .kt-checkable');
            var checked = $(this).is(':checked');
            $(set).each(function () {
                if (checked) {
                    $(this).prop('checked', true);
                    $(this).closest('tr').addClass('active');
                } else {
                    $(this).prop('checked', false);
                    $(this).closest('tr').removeClass('active');
                }
            });
        });
        table.on('change', 'tbody tr .kt-checkbox', function () {
            $(this).parents('tr').toggleClass('active');
        });
    };
    var handleDataTablePersonasEvaluados = function () {
        var table = $('#kt_table_personas_evaluados').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,

            data: dataJSONArrayEvaluados,
            columns: [
                {data: 'ID', className: 'kt-align-center'},
                {data: 'EVALUADO_CODIGO', className: 'kt-align-center'},
                {data: 'EVALUADO_NOMBRE'},
                {data: 'EVALUADOR_CODIGO', className: 'kt-align-center'},
                {data: 'EVALUADOR_NOMBRE'},
                {data: 'MODIFICADO_POR'},
                {data: 'ULTIMA_MODIFICACION', className: 'kt-align-center'},
                {data: 'ACCION', className: 'kt-align-center', responsivePriority: -1}
            ],
            order: [[1, 'asc']],
            headerCallback: function (thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="" class="kt-group-checkable"><span></span></label>';
            },
            columnDefs: [
                {
                    targets: 0,
                    width: '30px',
                    className: 'dt-right',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="' + data + '" class="kt-checkable"><span></span></label>';
                    },
                },
                {
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Editar"><i class="flaticon-edit"></i></a>';
                    },
                },
            ],
        });
        table.on('change', '.kt-group-checkable', function () {
            var set = $(this).closest('table').find('td:first-child .kt-checkable');
            var checked = $(this).is(':checked');
            $(set).each(function () {
                if (checked) {
                    $(this).prop('checked', true);
                    $(this).closest('tr').addClass('active');
                } else {
                    $(this).prop('checked', false);
                    $(this).closest('tr').removeClass('active');
                }
            });
        });
        table.on('change', 'tbody tr .kt-checkbox', function () {
            $(this).parents('tr').toggleClass('active');
        });
    };
    var handleDataTablePreguntas = function () {
        var table = $('#kt_table_question').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,
            data: dataJSONArrayPreguntas,
            columns: [
                {data: 'ID', className: 'kt-align-center'},
                {data: 'SECCION'},
                {data: 'PREGUNTA'},
                {data: 'ORDEN', className: 'kt-align-center'},
                {data: 'TIPO'},
                {data: 'MODIFICADO_POR'},
                {data: 'ULTIMA_MODIFICACION', className: 'kt-align-center'},
                {data: 'ESTADO', className: 'kt-align-center'},
                {data: 'ACCIONES', className: 'kt-align-center', responsivePriority: -1, width: '12%'},
            ],
            order: [[1, 'asc']],
            headerCallback: function (thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="" class="kt-group-checkable"><span></span></label>';
            },
            columnDefs: [
                {
                    targets: 0,
                    width: '30px',
                    className: 'dt-right',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="' + data + '" class="kt-checkable"><span></span></label>';
                    },
                },
                {
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Detalle"><i class="fa fa-eye"></i></a><a href="encuestas-editar-pregunta.html" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Editar"><i class="flaticon-edit"></i></a>';
                    },
                },
                {
                    targets: 1,
                    visible: !1
                },
                {
                    targets: 7,
                    render: function (data, type, full, meta) {
                        var status = {
                            'Activo': {'class': ' kt-badge--success'},
                            'Inactivo': {'class': ' kt-badge--danger'}
                        };
                        return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + data + '</span>';
                    },
                }
            ],
            drawCallback: function(a) {
                var t = this.api(), e = t.rows({ page: 'current' }).nodes(), n = null;
                t.column(1, {
                    page: "current"
                }).data().each(function(a, t) {
                    n !== a && ($(e).eq(t).before('<tr class="group"><td colspan="9">' + a + "</td></tr>"), n = a)
                })
            }
        });
        table.on('change', '.kt-group-checkable', function () {
            var set = $(this).closest('table').find('td:first-child .kt-checkable');
            var checked = $(this).is(':checked');
            $(set).each(function () {
                if (checked) {
                    $(this).prop('checked', true);
                    $(this).closest('tr').addClass('active');
                } else {
                    $(this).prop('checked', false);
                    $(this).closest('tr').removeClass('active');
                }
            });
        });
        table.on('change', 'tbody tr .kt-checkbox', function () {
            $(this).parents('tr').toggleClass('active');
        });
    };
    var handleDataTableContacto = function () {
        var table = $('#kt_table_contacto').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,

            data: dataJSONArrayContacto,
            columns: [
                {data: 'ID', className: 'kt-align-center'},
                {data: 'CONTACTO'},
                {data: 'TELEFONO'},
                {data: 'CELULAR'},
                {data: 'EMAIL'},
                {data: 'ESTADO', className: 'kt-align-center'},
                {data: 'ACCION', className: 'kt-align-center', responsivePriority: -1},
            ],
            order: [[1, 'asc']],
            headerCallback: function (thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="" class="kt-group-checkable"><span></span></label>';
            },
            columnDefs: [
                {
                    targets: 0,
                    width: '30px',
                    className: 'dt-right',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="' + data + '" class="kt-checkable"><span></span></label>';
                    },
                },
                {
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Detalle"><i class="fa fa-eye"></i></a><a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Editar"><i class="flaticon-edit"></i></a><a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md btn-reset-password" title="Restablecer Contraseña"><i class="flaticon-refresh"></i></a>';
                    },
                },
                {
                    targets: 5,
                    render: function (data, type, full, meta) {
                        var status = {
                            'Activo': {'class': ' kt-badge--success'},
                            'Inactivo': {'class': ' kt-badge--danger'}
                        };
                        return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + data + '</span>';
                    },
                }
            ],
        });
        table.on('change', '.kt-group-checkable', function () {
            var set = $(this).closest('table').find('td:first-child .kt-checkable');
            var checked = $(this).is(':checked');
            $(set).each(function () {
                if (checked) {
                    $(this).prop('checked', true);
                    $(this).closest('tr').addClass('active');
                } else {
                    $(this).prop('checked', false);
                    $(this).closest('tr').removeClass('active');
                }
            });
        });
        table.on('change', 'tbody tr .kt-checkbox', function () {
            $(this).parents('tr').toggleClass('active');
        });
    };
    var handleResetPassword = function () {
        $('#kt_table_contacto tbody').on('click', 'tr > td > .btn-reset-password', function () {
            swal.fire({
                title: '¿Desea Restablecer la Contraseña?',
                text: 'Recuerda que se le enviará una nueva contraseña al correo electrónico.',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, restablecer'
            }).then(function (result) {
                if (result.value) {
                    swal.fire('Contraseña Enviada!', 'Se envío una nueva contraseña al correo electrónico.', 'success');
                }
            });
        });
    };
    var handleAddSection = function () {
        $("#kt_repeater_section").repeater({
            initEmpty: !1,
            defaultValues: {
                'text-input': 'foo'
            },
            show: function() {
                $(this).slideDown()
            },
            hide: function(e) {
                $(this).slideUp(e)
            }
        })
    };
    return {
        init: function () {
            handleDataTable();
            handleDelete();
            handleDataTablePersonas();
            handleDataTablePersonasAsignar();
            handleDataTablePersonasEvaluados();
            handleDataTablePreguntas();
            handleDataTableContacto();
            handleResetPassword();
            handleAddSection();
            tinymce.init({
                language: 'es',
                selector: '.tinymce',
                menubar: !1,
                toolbar: ['styleselect fontselect fontsizeselect', 'undo redo | cut copy paste | bold italic | link image media | alignleft aligncenter alignright alignjustify', 'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | code'],
                plugins: 'advlist autolink image link media lists charmap print preview code',
                height: 300
            })
        }
    };
}();

$(document).ready(function () {
    Encuestas.init();
});