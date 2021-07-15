'use strict';
var Categorias = function () {
    var dataJSONArray = dataJSON;
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
                {data: 'DATOS'},
                {data: 'EMAIL'},
                {data: 'EMPRESA'},
                {data: 'ROL'},
                {data: 'MODIFICADO_POR'},
                {data: 'ULTIMA_MODIFICACION', className: 'kt-align-center'},
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
                        return '<a href="personas-detalle.html" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Detalle"><i class="fa fa-eye"></i></a><a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Editar"><i class="flaticon-edit"></i></a><a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md btn-reset-password" title="Restablecer Contraseña"><i class="flaticon-refresh"></i></a>';
                    },
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
    var handleResetPassword = function () {
        $('#kt_table tbody').on('click', 'tr > td > .btn-reset-password', function () {
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
    var handleAddPromedio = function () {
        $("#kt_repeater_nota").repeater({
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
    var handleDataTableLaboral = function () {
        $('#kt_table_laboral').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true
        });
    };
    var handleUploadFile = function () {
        $("#kt_dropzone_files").dropzone({
            url: 'https://keenthemes.com/scripts/void.php',
            paramName: 'file',
            maxFiles: 10,
            maxFilesize: 10,
            addRemoveLinks: !0
        })
    };
    return {
        init: function () {
            handleDataTable();
            handleDelete();
            handleResetPassword();
            handleAddPromedio();
            handleDataTableLaboral();
            handleUploadFile();
        }
    };
}();

$(document).ready(function () {
    Categorias.init();
});