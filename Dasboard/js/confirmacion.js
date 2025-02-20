function borrar(aux){
    Swal.fire({
        title: '¿Estas seguro de eliminar a este usuario?',
        showCancelButton: true,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar',
        icon: 'question'
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "php/borrar.php?usuario="+aux+" ";
        }
      })
}