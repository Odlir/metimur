'use strict';
var Empresas = function () {
    var dataJSONArray = dataJSON;
    var dataJSONArrayContact = dataJSONContact;
    var handleDataTable = function () {
        var table = $('#kt_table').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,
            dom: "<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            data: dataJSONArray,
            columns: [
                {data: 'Id', className: 'kt-align-center'},
                {data: 'RUC', className: 'kt-align-center'},
                {data: 'RAZON_SOCIAL'},
                {data: 'NATURALEZA'},
                {data: 'CONTACTO', className: 'kt-align-center'},
                {data: 'MODIFICADO', className: 'kt-align-center'},
                {data: 'FECHA', className: 'kt-align-center'},
                {data: 'ESTADO', className: 'kt-align-center'},
                {data: 'ACCIONES', className: 'kt-align-center', responsivePriority: -1, width: '10%'},
            ],
            order: [[2, 'asc']],
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
                        return '<a href="empresas-detalle.html" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Detalle"><i class="fa fa-eye"></i></a><a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Editar"><i class="flaticon-edit"></i></a>';
                    },
                },
                {
                    targets: 4,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '<a href="javascript:;" data-toggle="modal" data-target="#kt_modal_contacto" class="kt-link" title="Contactos"><i class="flaticon2-avatar" style="font-size:1.2rem"></i> ' + data + '</a>';
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
    var handleForm = function () {
        $('#kt_form').validate({
            rules: {
                txtCodigo: {
                    required: true
                },
                cboTipoDocumento: {
                    required: true
                },
                txtNumeroDocumento: {
                    required: true
                },
                txtRazonSocial: {
                    required: true
                },
                cboIndustria: {
                    required: true
                },
                cboEstado: {
                    required: true
                }
            },
            invalidHandler: function (event, validator) {
                swal.fire({
                    'title': 'Validaciones',
                    'text': 'Hay algunos errores en el formulario de registro.',
                    'type': 'error',
                    'confirmButtonClass': 'btn btn-secondary'
                });
                event.preventDefault();
            },
            submitHandler: function (form) {
                swal.fire({
                    'title': 'Exito',
                    'text': 'Registro guardado correctamente',
                    'type': 'success',
                    'confirmButtonClass': 'btn btn-secondary',
                    'onClose': function (e) {
                        $(window).attr('location', 'empresas.html');
                    }
                });
                return false;
            }
        });
    };
    var handleTableContact = function () {
        $('#kt_table_contact').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,
            data: dataJSONArrayContact,
            columns: [
                {data: 'CONTACTO'},
                {data: 'TELEFONO', className: 'kt-align-right'},
                {data: 'CELULAR', className: 'kt-align-right'},
                {data: 'EMAIL'}
            ],
            order: [[0, 'asc']],
        });
    };
    var handleAddContact = function () {
        $("#kt_repeater_contact").repeater({
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
    var handleTableSection = function () {
        $('#kt_table_section').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,
            order: [[1, 'asc']],
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
            handleForm();
            handleTableContact();
            handleAddContact();
            handleTableSection();
            handleAddSection();
        }
    };
}();

$(document).ready(function () {
    Empresas.init();
});