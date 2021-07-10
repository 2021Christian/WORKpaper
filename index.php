<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workpaper</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/fontello.css">
</head>
<link  rel="icon"   href="img-workpaper/favicon1.ico" type="image/png" />

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="spinner">
        </div>
    </div>
    <a href="https://wa.link/x6x94r" class="btn-wsp" target="_blank"> <i class="icon-whatsapp"></i></a>

    <header id="header" class="header">
        <div class="container">
            <div class="row">

                <div class="four columns">
                    <img src="img-workpaper/logo.png" width="180" height="50" alt="" id="logo">
                </div>

                <div class="two columns u-pull-right">
                    <ul>
                        <li class="submenu">
                            <img src="img-workpaper/cart.png" width="40" height="40" alt="" id="img-carrito">
                            <div id="carrito">
                                <table id="lista-carrito" class="u-full-width">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="four columns">
                        <ul class="navct">
                            <li class="four columns "><a href="index.php">Inicio</a></li>
                            <li class="four columns "><a href="sobre.php">Nosotros</a></li>
                            <li class="four columns "><a href="contacto.php">Contacto</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <div id="hero">
        <div class="container">
            <div class="row">
                <div class="six columns">
                    <div class="contenido-hero">
                        <h2>Lider en venta de insumos para la impresión</h2>
                        <p>Las resmas más económicas del mercado</p>
                        <form action="#" id="busqueda" method="post" class="formulario">
                            <input class="u-full-width" type="text" placeholder="Que te gustaria comprar" id="buscador">
                            <input type="submit" id="submit-buscador" class="submit-buscador">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="barra">
        <div class="container">
            <div class="row">
                <div class="four columns icono icono1">
                    <p>Resmas de excelente calidad<br>
                        Elegí la marca que más te guste.
                    </p>
                </div>
                <div class="four columns icono icono2">
                    <p>Cuidamos <br> el medio ambiente.
                    </p>
                </div>
                <div class="four columns icono icono3">
                    <p>Garantizamos las entregas <br>en un 100%.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="lista-cafe" class="container">
        <h1 id="encabezado" class="encabezado">Pedidos en linea</h1>
        <!-- aca traigo los productos -->
        <div class="row" id="space-list">
            
            
        </div>
        <!--.row-->
    </div>

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <nav id="principal" class="menu">
                        <a class="enlace" href="#">Conviertete en socio</a>
                        <a class="enlace" href="#">Favoritos</a>
                    </nav>
                </div>
                <div class="four columns">
                    <nav id="secundaria" class="menu">
                        <a class="enlace" href="#">¿Quienes somos?</a>
                        <a class="enlace" href="#">Empleo</a>
                        <a class="enlace" href="#">Contacto</a>
                    </nav>
                </div>
            </div>
            <a href="https://sinergiadigital.github.io/SinergiaDigital/" target="_blank" rel="noopener noreferrer"><img src="img-workpaper/hechopor.png" width="160" height="40" alt=""></a>
        </div>
    </footer>

    <script src="js/app.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/chris.js"></script>        
</body>

</html>