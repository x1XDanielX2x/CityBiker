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
                <div class="col-8 py-2">
                    <h1 class="ms-4"><a href="/admin" class="logo">CityBiker</a></h1>
                </div>
                <div class="col-4 espacio-login">
                    <button type="submit" name="btnLogin" class="btn-primary">Iniciar Session</button>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid">
        <div class="row">
        <aside class="barra_lateral col-4">
            <nav class="menu">
                <a href="/admin" class="py-3 mt-3">Inicio</a>
                <a href="/productos" class="py-3">Productos</a>
                <a href="/clientes" class="py-3">Clientes</a>
                <a href="/categorias" class="py-3">Categorias</a>
            </nav>
        </aside>    
        <div class="col-8">
            @yield("contenido")
        </div>
    </div>
</main>
<footer></footer>
</body>
</html>