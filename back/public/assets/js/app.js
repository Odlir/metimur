var KTAppOptions = {
    'colors': {
        'state': {
            'brand': '#5d78ff',
            'dark': '#282a3c',
            'light': '#ffffff',
            'primary': '#5867dd',
            'success': '#34bfa3',
            'info': '#36a3f7',
            'warning': '#ffb822',
            'danger': '#fd3995'
        },
        'base': {
            'label': [
                '#c5cbe3',
                '#a1a8c3',
                '#3d4465',
                '#3e4466'
            ],
            'shape': [
                '#f0f3ff',
                '#d9dffa',
                '#afb4d4',
                '#646c9a'
            ]
        }
    }
};
var App = function () {
    var t;
    t = { leftArrow: '<i class="la la-angle-left"></i>', rightArrow: '<i class="la la-angle-right"></i>' };
    var handleInitComponent = function () {
        $('.kt-select2').select2({
            placeholder: 'SELECCIONAR',
            allowClear: true
        });
        $('.dt-picker').datepicker({
            language: 'es',
            todayBtn: 'linked',
            todayHighlight: !0,
            templates: t,
            format: 'dd/mm/yyyy'
        })
    };
    return {
        init: function () {
            handleInitComponent();
        }
    };
}();
$(document).ready(function () {
    App.init();
});