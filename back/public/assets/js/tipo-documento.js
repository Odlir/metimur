'use strict';

const api = "{{ env('API_URL') }}";

var TipoDocumento = function () {
    var dataJSONArray = dataJSON;
    var handleDataTable = function () {
        var table = $('#kt_table').DataTable({
            language: {
                url: 'json/spanish.json'
            },
            responsive: true,
            dom: "<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
	        ajax:"http://127.0.0.1:8000/api/tipo_documento_dt",
            columns: [
                {data: 'id', className: 'kt-align-center'},
                {data: 'tipo_documento_nombre'},
                {data: 'tipo_documento_usuario_modificacion_id'},
                {data: 'updated_at', className: 'kt-align-center'},
                {data: 'tipo_documento_estado_id', className: 'kt-align-center'},
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
                        return '<label class="kt-checkbox kt-checkbox--single"><input type="checkbox" value="' + data + '" class="kt-checkable"><span></span></label>';
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
                        var status = {
                            'Activo': {'class': ' kt-badge--success'},
                            'Inactivo': {'class': ' kt-badge--danger'}
                        };
                        return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + data + '</span>';
                    },
                }
            ],
        });
        //guarda los check totales (activa/desactiva)
        table.on('change', '.kt-group-checkable', function () {
            //console.log('se esta ejecutando');
            var set = $(this).closest('table').find('td:first-child .kt-checkable');
            //console.log('set ',set);
            var checked = $(this).is(':checked');
            //console.log(checked);
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
        //guarda los check individuales
        table.on('change', 'tbody tr .kt-checkbox', function () {
            console.log('segundo');
            $(this).parents('tr').toggleClass('active');
        });
    };
    var handleDelete = function () {
        $('#btn-delete').click(function () {
            
            $(this).addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
            /********
            var checkbox = $('#kt_table tbody input:checkbox:checked').map(function () {
                return $(this).val();
            }).get(); 
            ****/
            
            //nuevo checkbox
            var checkbox = [];
            $("input:checked", $('#kt_table').dataTable().fnGetNodes()).each(function () {
                checkbox.push($(this).val());
            });
            console.log('checkbox ',checkbox);
          
            if (checkbox.length == 0) {
                swal.fire('Un momento...', 'Debe seleccionar 1 registro para eliminar');
            } else {
                var code = {ids: checkbox}
                console.log('code ',code);
                swal.fire({
                    title: '¿Desea eliminar registro(s)?',
                    text: 'Recuerda que no podrás revertir esto.',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, eliminar'
                }).then(function (result) {
                    if (result.value) {
                        
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax(
                            {
                                url: 'http://127.0.0.1:8000/api/tipo_documento_borrar',
                                type: 'delete', 
                                data: code, 
                                dataType: 'json',
                                success: function (response)
                                {
                                    //response es el json devuelto por la api
                                    $('#kt_table').DataTable().ajax.reload();
                                    console.log('completo',response);
                                    
                                },
                                error: function(xhr) {
                                 console.log(xhr.responseText);
                               }
                            });
                        
                        swal.fire('Eliminado!', 'Registro(s) eliminado(s) correctamente.', 'success').then(()=>{
                            //window.location.href='http://127.0.0.1:8000/tipo-documento';
                        });
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
        });
    };
    var busqueda = function (){

        $('#kt_search').on( 'click', function (event) {
            event.preventDefault();
            console.log('busqueda');
            var request = [];
            request.push($('#txtNombre').val());
            request.push($('#indEstado').val());
            var code = {ids: request}
            console.log('code: ',code);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax(
                {
                    url: 'http://127.0.0.1:8000/api/tipo_documento_dt',
                    type: 'GET', 
                    data: code, 
                    dataType: 'json',
                    success: function (response)
                    {
                        console.log(response);
                        $('#kt_table').DataTable().clear().draw();
                        $('#kt_table').DataTable().rows.add(response.data).draw();    
                  
                    },
                    error: function(xhr) {
                     console.log(xhr.responseText);
                   }
                });     
        } );

        $('#kt_reset').on( 'click', function (event) {
            event.preventDefault();
            $("#form_busqueda")[0].reset();//limpiar los input del form
            $('#indEstado').prop('selectedIndex',0);//cambia el index a 0 
            $('.kt-select2').select2({
                placeholder: 'SELECCIONAR',
                allowClear: true
            });//cambia el placeholder
            $('#kt_table').DataTable().ajax.reload();//recarga la tabla
        });


    };
    return {
        init: function () {
            handleDataTable();
            handleDelete();
            handleForm();
            busqueda();
        }
    };
}();

$(document).ready(function () {
    TipoDocumento.init();
});