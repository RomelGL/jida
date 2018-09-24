$(function () {
    $('#form-actualizacion').validate({
        rules: {
            'nombre':{
                required:true,
                minlength : 2,
                alpha: true
            },
            'telefono':{
                required:true,
                minlength : 11,
                maxlength: 11,
                digits: true
            },
            'correo':{
                required : true,
                email: true,
                maxlength: 60
            }
        },
        messages:
        {
            cedula:{required: 'El campo es requerido', minlength: 'Debe ser mayor o igual a 7 caracteres', digits: 'Permitido solo números', maxlength: 'Debe ser menor o igual a 8 caracteres'},
            nac:{required: 'El campo es requerido'},
            email:{required: 'El campo es requerido', email: 'Dirección de Correo invalido', maxlength: 'Debe ser menor o igual 100 caracteres'}
        },

        highlight: function (input) {
            //console.log(input);
            $(input).parents('.form-group').addClass('rojo');
        },
        unhighlight: function (input) {
            $(input).parents('.form-group').removeClass('rojo');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        },
        submitHandler: function (form) {

            $('#btn-actualizar').attr('disabled', true);
            ajax_actualizacion();
            $('#btn-actualizar').removeAttr('disabled');
            }
    });
});

$.validator.addMethod( "alpha", function( value, element ) {
    return this.optional( element ) || /^([-a-z_ñÑ ])+$/i.test( value );
}, "No se aceptan caracteres especiales o números" );


