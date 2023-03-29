<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="web/img/favicon-16x16.png">

    <link rel="stylesheet" href="web/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/css/PanelAdmin.css">


    <title>Administracion</title>
</head>
<body>
    <header>
        <nav class="container-fluid">
            <div class="row">
                <div class="col-12 border">
                    <h1 class="">CityBiker</h1>
                </div>
            </div>
        </nav>
    </header>

    <main clas="container-fluid">
    <div class="row">
        <div class="col-3 pe-5 opcionesAdmin">
            <section>
                <div class="row">
                    <div class="col-12">
                        <a href="/">Inicio</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="/produtos">Productos</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @yield("contenido")
</main><footer></footer>
</body>
</html>