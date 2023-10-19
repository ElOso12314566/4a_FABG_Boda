$("#email").change(function(){
    $(".alert").remove();   

    var email= $(this).val()
    //console.log("Tu email es: ",email);
    var datos= new FormData();
    datos.append("validarEmail", email);

    $.ajax({

        url: "ajax/formularios.ajax.php",
        method: "POST",
        data: datos,
        cache: falce,
        contentType: falce,
        processData: falce,
        dateType: "JSON",
        success: function(respuesta){
            //console.log("Contenedor de respuesta: ", respuesta);
            if (respuesta){
                $("#email").val("");
                $("#email").parent().after(`
                <div class="alert alert-warning">
                    <b> ERROR:</b>
                    ¡El correo ya existe en la base de datos! Ingrese uno diferente.
                    </div> 
                `);
            }
        }
    });
}) 