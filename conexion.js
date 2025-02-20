$('#formlogin').submit(function(e){
    e.preventDefault();
    var nombre = $.trim($("#nombre").val());
    var password = $.trim($("#password").val());
    console.log(nombre.length);
     if(nombre.length == "" || password == ""){
        Swal.fire({
            title: "Faltan campos por llenar",
            text: "nombre o contraseña estan vacios",
            icon: "warning"
        });
        return false;
     }else{
        $.ajax({
            url:"php/inicio.php",
            type:"POST",
            datatype:"json",
            data:{nombre:nombre, password:password},
            success:function(data){
                if (data == "null") {
                    Swal.fire({
                        title: "Algo salio mal",
                        text: "nombre o contraseña incorrectos",
                        icon: "error",
                        confirmButtonText:'volver a intentar'
                    });
                }else{
                    Swal.fire({
                        title: "¡Conexion exitosa!",
                        icon: "success",
                        confirmButtonText:'Ingresar'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "Dasboard/index.php";
                        }
                    }
                    
                    );
                }
            }
        });
     }
    });