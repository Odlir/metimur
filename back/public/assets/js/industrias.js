'use strict';
var Industrias = function () {
    var dataJSONArray = dataJSON;
    var handleDataTable = function () {
        var table = $('#kt_table').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,
            dom: "<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            serverSide: true,
	        ajax:"http://127.0.0.1:8000/api/industrias_dt",
            columns: [
                {data: 'id', className: 'kt-align-center'},
                {data: 'industria_nombre'},
                {data: 'industria_usuario_modificacion_id'},
                {data: 'updated_at', className: 'kt-align-center'},
                {data: 'industria_estado_id', className: 'kt-align-center'},
                {data: 'btn', className: 'kt-align-center', responsivePriority: -1},
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
                        return '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="' + data + '" class="kt-checkable delete_checkbox" data-id="'+data+'" id="'+data+'"><span></span></label>';
                    },
                },{
                    targets:3,
                    render: function (data, type, full, meta) {
                        if(data!=null){
                            data=data.replace("T"," ");
                            data=data.replace(".000000Z"," ");
                        }
                        return data;
                    },
                },
                {
                    targets: 4,
                    render: function (data, type, full, meta) {
                        console.log('data ',data);
                        var status = {
                            'Activo': {'class': ' kt-badge--success'},
                            'Inactivo': {'class': ' kt-badge--danger'}
                        };
                        console.log('statusd ',status[data]);
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
                        var idsArray = [];
                        $("input:checkbox[class=delete_checkbox]:checked").each(function () {
                            idsArray.push($(this).attr('data-id'));
                            console.log('object');
                        });
                        console.log(idsArray);
                        var unir_arrays_seleccionados = idsArray.join(",");
                        console.log(unir_arrays_seleccionados);
                        return false;
                        $.ajax({
                            url: 'http://127.0.0.1:8000/api/industrias/deletemulti',
                            type: 'DELETE',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: 'ids=' + unir_arrays_seleccionados,
                            success: function (data) {           
                            
                                if (data['msjtotal'] ) {
                                $.each(idsArray,function(indice,id) {
                                    var fila = $("#" + id).remove(); //Oculto las filas eliminadas
                                    console.log('indice: ' + indice + ' - - ' + 'id:' + id);
                                });
                                    //alert(data['mensaje']);
                                }else {
                                    console.log('Error, no se Eliminaron las industrias .. ' + data['error']);
                                }
                            },
                            error: function (data) {
                                alert(data.responseText);
                            }
                   
                        });
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
                txtNombre: {
                    required: true,
                    minlength: 3,
                    maxlength: 180
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
                }).then(()=>{
                    form.submit();
                });
                
            }
            /**
            submitHandler: function (form) {
                swal.fire({
                    'title': 'Exito',
                    'text': 'Registro guardado correctamente',
                    'type': 'success',
                    'confirmButtonClass': 'btn btn-secondary',
                    'onClose': function (e) {
                        location.href="/industrias";
                    }
                });
                return false;
            }
            */
        });
    };
    return {
        init: function () {
            handleDataTable();
            handleDelete();
            handleForm();
        }
    };
}();

$(document).ready(function () {
    Industrias.init();
});



