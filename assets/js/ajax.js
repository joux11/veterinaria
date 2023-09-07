const loaderContainer = $('#loader-container');
const loaderForm = $('#loaderForm');
function login() {


    $("form[name='login_form']").submit(function (e) {
        e.preventDefault(); // Evita el envío del formulario por defecto



        $("form input").on("input", function () {
            $(this).removeClass("is-invalid");
        });
        // Obtén los valores de los campos
        var email = $("input[type='text']").val();
        var password = $("input[type='password']").val();



        if (email === "" || password === "") {
            if (email.trim() === "") {
                $("input[type='text']").addClass("is-invalid");
            } else {
                $("input[type='text']").removeClass("is-invalid");
                $("input[type='text']").addClass("is-valid");
            }
            if (password.trim() === "") {
                $("input[type='password']").addClass("is-invalid");
            } else {
                $("input[type='password']").removeClass("is-invalid");
                $("input[type='password']").addClass("is-valid");
            }
        } else {

            loaderContainer.css('display', 'flex');
            const fd = new FormData();
            fd.append('txtEmail', email);
            fd.append('txtPassword', password);
            $.ajax({

                type: "POST",
                url: base_url + "Login/getUsers",
                data: fd,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {
                        loaderContainer.css('display', 'none');
                        window.location = base_url + "dashboard";

                    } else {
                        loaderContainer.css('display', 'none');
                        Swal.fire(
                            'Atencion',
                            response.msg,
                            'error'
                        )
                    }
                }
            });
        }
        // Valida si el campo de correo electrónico está vacío



    });

}

function fnMascotas() {
    $('#datatableDefault').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            }
        },
        destroy: true,
        lengthMenu: [10, 20, 30, 40, 50],
        responsive: true

    });

    $.ajax({


        type: "POST",
        url: base_url + "mascotas/getTablaMascotas",


        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $("#datatableDefault").html(response);
        }
    });




}

function btnEditMascota(id) {
    $('#propietario').empty();
    $("#modalLg").modal('show');

    getPropietarios();

    const fd = new FormData();
    fd.append('id', id);
    $.ajax({

        type: "POST",
        url: base_url + "mascotas/getAllById",
        data: fd,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $('#txtNombreMascota').val(response.nombreMascota);
            $('#propietario').val(response.idpropietario);
            $('#txtEspecie').val(response.especie);
            $('#txtRaza').val(response.raza);
            $('#txtColor').val(response.color);
            $('#txtPelaje').val(response.pelaje);
            $('#txtTamaño').val(response.tamanio);
            $('#txtSexo').val(response.sexo);
            $('#txtEdad').val(response.edad);
        }
    });
}

function btnDelMascota(id) {
    Swal.fire({
        title: 'Esta seguro de Eliminar?!!',
        text: "Esto no es reversible",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
    }).then((result) => {
        var fd = new FormData();
        if (result.isConfirmed) {
            fd.append('id', id);
            $.ajax({
                type: "POST",
                url: base_url + "mascotas/deleteById",
                data: fd,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {
                        Swal.fire(
                            'Deleted!',
                            response.msg,
                            'success'
                        )
                        fnMascotas()
                    } else {
                        Swal.fire(
                            'Deleted!',
                            response.msg,
                            'error'
                        )
                    }

                }
            });
        }
    })
}

function getPropietarios() {
    $.ajax({
        type: "POST",
        url: base_url + "propietarios/getPropietarios",
        cache: false,
        contentType: false,
        processData: false,

        success: function (response) {
            $("#propietario").append(response);
        }
    });
}

function fnNuevaMascota() {

    getPropietarios()

    const btnGuardarMascota = document.querySelector("#btnGuardarMascota");
    btnGuardarMascota.addEventListener('click', () => {
        const nombreMascota = $('#txtNombreMascota');
        const propietario = $('#propietario');
        const especie = $('#txtEspecie');
        const raza = $('#txtRaza');
        const color = $('#txtColor');
        const pelaje = $('#txtPelaje');
        const tamaño = $('#txtTamaño');
        const sexo = $('#txtSexo');
        const edad = $('#txtEdad');

        $("input").on("input", function () {
            $(this).removeClass("is-invalid");
        });
        $("select").on("change", function () {
            $(this).removeClass("is-invalid");
        });

        if (propietario.val() === 'Seleccione' || nombreMascota.val().trim() === '' || especie.val() === 'Elija la especie' || color.val().trim() === '' || pelaje.val() === 'Elija Pelaje') {
            if (propietario.val() === 'Seleccione') {
                propietario.addClass('is-invalid');

            } else {
                propietario.removeClass('is-invalid');
            }

            // Validar el campo de nombre de mascota

            if (nombreMascota.val().trim() === '') {
                nombreMascota.addClass('is-invalid');

            } else {
                nombreMascota.removeClass('is-invalid');
            }

            // Validar el campo de especie

            if (especie.val() === 'Elija la especie') {
                especie.addClass('is-invalid');

            } else {
                especie.removeClass('is-invalid');
            }



            // Validar el campo de color

            if (color.val().trim() === '') {
                color.addClass('is-invalid');

            } else {
                color.removeClass('is-invalid');
            }

            // Validar el campo de pelaje

            if (pelaje.val() === 'Elija Pelaje') {
                pelaje.addClass('is-invalid');

            } else {
                pelaje.removeClass('is-invalid');
            }

            // Validar el campo de tamaño

            if (tamaño.val() === 'Elija el tamaño') {
                tamaño.addClass('is-invalid');

            } else {
                tamaño.removeClass('is-invalid');
            }

            // Validar el campo de sexo

            if (sexo.val() === 'Elija un Sexo') {
                sexo.addClass('is-invalid');

            } else {
                sexo.removeClass('is-invalid');
            }

            // Validar el campo de edad

            if (edad.val().trim() === '') {
                edad.addClass('is-invalid');

            } else {
                edad.removeClass('is-invalid');
            }
        } else {
            var foto = document.getElementById('inputFoto');
            var file = foto.files[0];

            const formData = new FormData();
            formData.append('txtNombreMascota', $('#txtNombreMascota').val());
            formData.append('propietario', $('#propietario').val());
            formData.append('txtEspecie', $('#txtEspecie').val());
            formData.append('txtRaza', $('#txtRaza').val());
            formData.append('txtColor', $('#txtColor').val());
            formData.append('txtPelaje', $('#txtPelaje').val());
            formData.append('txtTamaño', $('#txtTamaño').val());
            formData.append('txtSexo', $('#txtSexo').val());
            formData.append('txtEdad', $('#txtEdad').val());
            formData.append('dirFoto', file)




            loaderForm.css('display', 'flex');
            $.ajax({

                type: "POST",
                url: base_url + "mascotas/insertMascota",
                data: formData,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {

                    if (response.status) {

                        Swal.fire({
                            title: 'Guardado',
                            text: response.msg,
                            icon: 'success',

                            confirmButtonColor: '#3085d6',

                            confirmButtonText: 'OK'

                        },
                            loaderForm.css('display', 'none'),
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location = base_url + "mascotas";
                            }
                        });

                    } else {
                        loaderForm.css('display', 'none');
                        Swal.fire(
                            'Atencion',
                            response.msg,
                            'error'
                        )

                    }
                }
            });

        }




    })
}




/* //////////////// FUNCIONES DE PROPIETARIOS //////////////////// */
function fnPropietario() {


    const btnAgregarPropietario = document.querySelector("#btnAgregarPropietario");
    btnAgregarPropietario.addEventListener('click', () => {


        const txtCedula = $("#txtCedula").val();
        const txtNombre = $("#txtNombre").val();
        const txtApellidoPa = $("#txtApellidoPa").val();
        const txtApellidoMa = $("#txtApellidoMa").val();
        const txtCelular = $("#txtCelular").val();
        const txtDireccion = $("#txtDireccion").val();

        $("input").on("input", function () {
            $(this).removeClass("is-invalid");
        });


        if (txtCedula == "" || txtNombre == "" || txtApellidoPa == "" || txtCelular == "") {
            if (txtCedula.trim() === "") {
                $("#txtCedula").addClass("is-invalid");

            } else {
                $("#txtCedula").removeClass("is-invalid");
            }

            // Validación de nombre
            if (txtNombre.trim() === "") {
                $("#txtNombre").addClass("is-invalid");

            } else {
                $("#txtNombre").removeClass("is-invalid");
            }

            // Validación de apellido paterno
            if (txtApellidoPa.trim() === "") {
                $("#txtApellidoPa").addClass("is-invalid");

            } else {
                $("#txtApellidoPa").removeClass("is-invalid");
            }

            // Validación de celular
            if (txtCelular.trim() === "") {
                $("#txtCelular").addClass("is-invalid");

            } else {
                $("#txtCelular").removeClass("is-invalid");
            }



        } else {
            const fd = new FormData();
            fd.append('txtCedula', txtCedula);
            fd.append('txtNombre', txtNombre);
            fd.append('txtApellidoPa', txtApellidoPa);
            fd.append('txtApellidoMa', txtApellidoMa);
            fd.append('txtCelular', txtCelular);
            fd.append('txtDireccion', txtDireccion);


            loaderForm.css('display', 'flex');
            $.ajax({

                type: "POST",
                url: base_url + "propietarios/insertPropietario",
                data: fd,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {

                        Swal.fire({
                            title: 'Guardado',
                            text: response.msg,
                            icon: 'success',

                            confirmButtonColor: '#3085d6',

                            confirmButtonText: 'OK'

                        },
                            loaderForm.css('display', 'none'),
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location = base_url + "propietarios";
                            }
                        });

                    } else {
                        loaderForm.css('display', 'none');
                        Swal.fire(
                            'Atencion',
                            response.msg,
                            'error'
                        )

                    }
                }
            });

        }



    });


}

function fnPropietarios() {
    $('#datatableDefault').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            }
        },
        destroy: true,
        lengthMenu: [10, 20, 30, 40, 50],
        responsive: true

    });


    $.ajax({

        type: "POST",
        url: base_url + "propietarios/getTablaPropietarios",


        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $("#datatableDefault").html(response);
        }
    });

}
function btnEditarPropietario(id) {
    const fd = new FormData();
    fd.append('id', id);
    $.ajax({

        type: "POST",
        url: base_url + "propietarios/getAllById",
        data: fd,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $("#editP").modal('show');
            $("#idpropietario").val(response.idpropietario);
            $("#txtCedula").val(response.cedula);
            $("#txtNombre").val(response.nombre);
            $("#txtApellidoMa").val(response.apellido_ma);
            $("#txtApellidoPa").val(response.apellido_pa);
            $("#txtCelular").val(response.celular);
            $("#txtDireccion").val(response.direccion);

        }
    });
}
function btnEliminarPropietario(id) {
    Swal.fire({
        title: 'Esta seguro de Eliminar?!!',
        text: "Esto no es reversible",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
    }).then((result) => {
        var fd = new FormData();
        if (result.isConfirmed) {
            fd.append('id', id);
            $.ajax({
                type: "POST",
                url: base_url + "propietarios/deletePropById",
                data: fd,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {
                        Swal.fire(
                            'Deleted!',
                            response.msg,
                            'success'
                        )
                        fnPropietarios()
                    } else {
                        Swal.fire(
                            'Deleted!',
                            response.msg,
                            'error'
                        )
                    }

                }
            });
        }

    })
}

/***************************************************************************************************/


function fnHMascotas() {
    const urlParams = new URLSearchParams(window.location.search);
    const valorRecibido = urlParams.get('id');

    const fd = new FormData();
    fd.append('id', valorRecibido);
    $.ajax({

        type: "POST",
        url: base_url + "mascotas/getDatosMascota",
        data: fd,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {

            $("#btnNuevaConsulta").attr("href", "nuevaConsulta?id=" + response.idmascota);
            $("#btnNuevoServicio").attr("href", "nuevoServicio?id=" + response.idmascota);
            $("#btngenerarPdf").attr("href", "generarpdf?id=" + response.idmascota);
            $("#txtNombreMascota").text(response.nombreMascota);
            $("#idmascota").val(response.idmascota);
            $("#txtNombreMascotaF").val(response.nombreMascota);
            $("#txtColor").text(response.color);
            $("#txtTamanio").text(response.tamanio);
            $("#txtEdad").text(response.edad);
            $("#txtEspecie").text(response.especie);
            $("#txtPelaje").text(response.pelaje);
            $("#txtSexo").text(response.sexo);
            $("#txtRaza").text(response.raza);
            $("#txtNombreProp").text(response.nombres);
            $("#txtDireccion").text(response.direccion);
            $("#txtCelular").text(response.celular);
            $("#txtCedula").text(response.cedula);

            if (response.foto == null || response.foto == "") {
                $("#fotoMascota").attr("src", "../assets/uploads/sinFoto.jpg");
            } else {
                $("#fotoMascota").attr("src", response.foto);
            }



        }
    });
    $.ajax({
        type: "POST",
        url: base_url + "mascotas/getTablaConsultas",
        data: fd,
        
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $("#Tconsultas").html(response);
        }
    });

    $.ajax({
        type: "POST",
        url: base_url + "mascotas/getTablaServicio",
        data: fd,
        
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $("#Tservicios").html(response);
        }
    });



}

function fnMasDetalles(id){
    $("#modalDetalles").modal('show');
    const fd = new FormData();
    fd.append('id',id);

    $.ajax({
        type: "POST",
        url: base_url+"mascotas/getAllConsulta",
        data:fd ,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $('#txtVeterinario').text(response.veterinario);
            $('#txtFecha').text(response.fecha);
            $('#txtTemperatura').text(response.temperatura);
            $('#txtFCard').text(response.frecuenciaCardiaca);
            $('#txtFRes').text(response.frecuenciaRespiratoria);
            $('#txtMucosa').text(response.mucosa);
            $('#txtPeso').text(response.peso);
            $('#txtMotivo').text(response.motivo);
            
        }
    });

}

function fnEliminarConsulta(id){
    Swal.fire({
        title: 'Esta seguro de Eliminar?!!',
        text: "Esto no es reversible",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
    }).then((result) => {
        var fd = new FormData();
        if (result.isConfirmed) {
            fd.append('id', id);
            $.ajax({
                type: "POST",
                url: base_url + "mascotas/delConsulta",
                data: fd,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {
                        Swal.fire(
                            'Deleted!',
                            response.msg,
                            'success'
                        )
                        fnHMascotas()
                    } else {
                        Swal.fire(
                            'Deleted!',
                            response.msg,
                            'error'
                        )
                    }

                }
            });
        }

    })
}

function fnNuevaConsulta() {
    fnHMascotas();


    $("input").on("input", function () {
        $(this).removeClass("is-invalid");
    });
    $("#fechaConsulta").change(function () {
        $(this).removeClass("is-invalid");
    });

    const btnGuardarConsulta = document.querySelector("#btnGuardarConsulta");
    btnGuardarConsulta.addEventListener('click', () => {
        const idmascota = $("#idmascota").val()
        const idveterinario = $("#idveterinario").val()

        const fechaConsulta = $("#fechaConsulta").val();
        const temperatura = $("#temperatura").val();
        const frecuenciaCardiaca = $("#frecuenciaCardiaca").val();
        const frecuenciaRespiratoria = $("#frecuenciaRespiratoria").val();
        const mucosa = $("#mucosa").val();
        const peso = $("#peso").val()
        const motivo = $("#motivo").val()

        if (fechaConsulta == "" || temperatura == "" || frecuenciaCardiaca == "" || frecuenciaRespiratoria == "" || mucosa == "") {

            if (fechaConsulta.trim() === "") {
                $("#fechaConsulta").addClass("is-invalid");

            } else {
                $("#fechaConsulta").removeClass("is-invalid");
            }


            if (temperatura.trim() === "") {
                $("#temperatura").addClass("is-invalid");

            } else {
                $("#temperatura").removeClass("is-invalid");
            }


            if (frecuenciaCardiaca.trim() === "") {
                $("#frecuenciaCardiaca").addClass("is-invalid");

            } else {
                $("#frecuenciaCardiaca").removeClass("is-invalid");
            }


            if (frecuenciaRespiratoria.trim() === "") {
                $("#frecuenciaRespiratoria").addClass("is-invalid");

            } else {
                $("#frecuenciaRespiratoria").removeClass("is-invalid");
            }
            if (mucosa.trim() === "") {
                $("#mucosa").addClass("is-invalid");

            } else {
                $("#mucosa").removeClass("is-invalid");
            }
            if (peso.trim() === "") {
                $("#peso").addClass("is-invalid");

            } else {
                $("#peso").removeClass("is-invalid");
            }
            if (motivo.trim() === "") {
                $("#motivo").addClass("is-invalid");

            } else {
                $("#motivo").removeClass("is-invalid");
            }

        } else {

            const fd = new FormData();


            fd.append('idmascota', idmascota);
            fd.append('idveterinario', idveterinario);
            fd.append('fechaConsulta', fechaConsulta);
            fd.append('temperatura', temperatura);
            fd.append('frecuenciaCardiaca', frecuenciaCardiaca);
            fd.append('frecuenciaRespiratoria', frecuenciaRespiratoria);
            fd.append('mucosa', mucosa);
            fd.append('peso', peso);
            fd.append('motivo', motivo);

            


            $.ajax({
                type: "POST",
                url: base_url+"mascotas/insertConsulta",
                data: fd,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {

                        Swal.fire({
                            title: 'Guardado',
                            text: response.msg,
                            icon: 'success',

                            confirmButtonColor: '#3085d6',

                            confirmButtonText: 'OK'

                        },
                            loaderForm.css('display', 'none'),
                        ).then((result) => {
                            if (result.isConfirmed) {
                                location.href = base_url+"mascotas/historialMedico?id="+idmascota;
                            }
                        });

                    } else {
                        loaderForm.css('display', 'none');
                        Swal.fire(
                            'Atencion',
                            response.msg,
                            'error'
                        )

                    }
                }
            });


        }

    })







}

function fnNuevoServicio() {
    fnHMascotas();
    $("input").on("input", function () {
        $(this).removeClass("is-invalid");
    });
    $("#fechaConsulta").change(function () {
        $(this).removeClass("is-invalid");
    })
    const btnGuardarServicio = document.querySelector("#btnGuardarServicio");
    btnGuardarServicio.addEventListener('click', () => {
        const idmascota = $("#idmascota").val()
        const idveterinario = $("#idveterinario").val();

        const fecha = $("#fechaConsulta").val();
        const observacion = $("#observacion").val();
        const costo = $("#costo").val()
        const tipoAtencion = $("#tipoAtencion").val()

        if(fecha == "" || observacion == "" || costo == "" || tipoAtencion == "" ){
            if (fecha.trim() === "") {
                $("#fechaConsulta").addClass("is-invalid");

            } else {
                $("#fechaConsulta").removeClass("is-invalid");
            }

            if (observacion.trim() === "") {
                $("#observacion").addClass("is-invalid");

            } else {
                $("#observacion").removeClass("is-invalid");
            }

            if (costo.trim() === "") {
                $("#costo").addClass("is-invalid");

            } else {
                $("#costo").removeClass("is-invalid");
            }

            if (mottipoAtencionivo.trim() === "") {
                $("#tipoAtencion").addClass("is-invalid");

            } else {
                $("#tipoAtencion").removeClass("is-invalid");
            }
        }else{
            const fd = new FormData();
            fd.append('idmascota', idmascota);
            fd.append('idveterinario', idveterinario);
            fd.append('fecha', fecha);
            fd.append('observacion', observacion);
            fd.append('costo', costo);
            fd.append('tipoAtencion', tipoAtencion);

            $.ajax({
                type: "POST",
                url: base_url+"mascotas/insertServicio",
                data: fd,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {

                        Swal.fire({
                            title: 'Guardado',
                            text: response.msg,
                            icon: 'success',

                            confirmButtonColor: '#3085d6',

                            confirmButtonText: 'OK'

                        },
                            loaderForm.css('display', 'none'),
                        ).then((result) => {
                            if (result.isConfirmed) {
                                location.href = base_url+"mascotas/historialMedico?id="+idmascota;
                            }
                        });

                    } else {
                        loaderForm.css('display', 'none');
                        Swal.fire(
                            'Atencion',
                            response.msg,
                            'error'
                        )

                    }
                }
            });
        }
    });
}

function fnEditarServicio(id){
    Swal.fire({
        title: 'Esta seguro de Aprobar el servicio?!!',
        text: "Esto no es reversible",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Aprobar!'
    }).then((result) => {
        var fd = new FormData();
        if (result.isConfirmed) {
            fd.append('id', id);
            $.ajax({
                type: "POST",
                url: base_url + "mascotas/editServicio",
                data: fd,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {
                        Swal.fire(
                            'Aprobado!',
                            response.msg,
                            'success'
                        )
                        fnHMascotas()
                    } else {
                        Swal.fire(
                            'Aprobado!',
                            response.msg,
                            'error'
                        )
                    }

                }
            });
        }

    })
}

function fnEliminarServicio(id){

Swal.fire({
        title: 'Esta seguro de Eliminar?!!',
        text: "Esto no es reversible",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
    }).then((result) => {
        var fd = new FormData();
        if (result.isConfirmed) {
            fd.append('id', id);
            $.ajax({
                type: "POST",
                url: base_url + "mascotas/delServicio",
                data: fd,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {
                        Swal.fire(
                            'Deleted!',
                            response.msg,
                            'success'
                        )
                        fnHMascotas()
                    } else {
                        Swal.fire(
                            'Deleted!',
                            response.msg,
                            'error'
                        )
                    }

                }
            });
        }

    })
}

function fnServicios(){
    $('#datatableDefault').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            }
        },
        destroy: true,
        lengthMenu: [10, 20, 30, 40, 50],
        responsive: true

    });

    $.ajax({

        type: "POST",
        url: base_url + "servicios/getTablaServicios",


        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $("#datatableDefault").html(response);
        }
    });
}



