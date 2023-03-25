@extends("web/plantilla")

@section("contenido")

    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contactanos</h1>
            <p>
                Tus aportes son el futuro de nuesta compañia, cuentanos como fue tu experiencia con nuestro servicio.
            </p>
        </div>
    </div>

    

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" class="form-control mt-1" id="txtNombre" name="txtNombre" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="txtCorreo">Correo Electronico</label>
                        <input type="email" class="form-control mt-1" id="txtCorreo" name="txtCorreo" placeholder="Correo Electronico" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="txtTelefono">Telefono</label>
                    <input type="text" class="form-control mt-1" id="txtTelefono" name="txtTelefono" placeholder="Numero contacto">
                </div>
                <div class="mb-3">
                    <label for="txtMensaje">Mensaje</label>
                    <textarea class="form-control mt-1" id="txtMensaje" name="txtMensaje" placeholder="Dejanos tu mensaje" rows="8" required></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">¡Contactar!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->

@endsection