function cerrar(){
    Swal.fire({
        title: 'Estas seguro de salir?',
        showCancelButton: true,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar',
        icon: 'question'
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "php/cerrar.php";
        }
      })
}