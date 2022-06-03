$(document).ready(function () {
    $(".eliminarAlojamiento").submit(function (event) {
        event.preventDefault();

        Swal.fire({
            title: "Estas seguro",
            text: "¡El alojamiento será eliminado!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, eliminar!",
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    });

    $(".cancelarReserva").submit(function (event) {
        event.preventDefault();

        Swal.fire({
            title: "Estas seguro",
            text: "¡La reserva será cancelada!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, cancelar!",
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    });
});
