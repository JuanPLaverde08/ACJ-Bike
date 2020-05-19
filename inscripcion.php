<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A.C.J Bike</title>
    <!--Agregando el estilo CSS a la pagina-->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header"><!--La division Header es para la parte superior de la página-->
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.html">
                    <!--Asi se suben imagenes-->
                    <!--Src ubicacion, alt texto alternativo si no carga imagen-->
                    <img src="img/logo.png" alt="Logotipo Empresa">
                </a>
                <nav id="navegacion" class="icono">
                <a href="https://www.facebook.com/juanplaverde123" target="_blank">
                    <img src="img/fbnormal.png" alt="Logo facebook">
                </a>
                <a href="https://wa.link/krj4kc" target="_blank">
                    <img src="img/wpnormal.png" alt="Logo wpp">
                </a>
                <a href="https://www.instagram.com/juanplaverdeh/" target="_blank">
                    <img src="img/instanormal.png" alt="Logo instagram">
                </a>
            </nav>

                <nav id="navegacion" class="navegacion"><!--La division Nav es para los enlaces de navegación-->
                    <!--Enlaces de navegacion-->
                    <a href="nosotros.html">Nosotros</a>
                    <a href="servicios.html">Servicios</a>
                    <a href="productos.html">Productos</a>
                    <a href="contacto.html">Contacto</a>
                    <a href="inscripcion.php">Inscribete al evento</a>
                </nav>
            </div>
        </div>
    </header>
    <form method="post">
        <h1>¡Inscribete a nuestro proximo evento!</h1>
        <input type="text" name="documento" placeholder="Numero de documento">
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="categoria" placeholder="Categoria de participación">
        <input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <p>juan_laverde82162@elpoli.edu.co<br>(+57) 3226140689</br></p>
            <nav id="navegacion" class="icono">
                <a href="https://www.facebook.com/juanplaverde123" target="_blank">
                    <img src="img/fbnormal.png" alt="Logo facebook">
                </a>
                <a href="https://wa.link/krj4kc" target="_blank">
                    <img src="img/wpnormal.png" alt="Logo wpp">
                </a>
                <a href="https://www.instagram.com/juanplaverdeh/" target="_blank">
                    <img src="img/instanormal.png" alt="Logo instagram">
                </a>
            </nav>
            <p>Carera 73 # 43-20 (Medellin - Antioquia)</p>
        </div>
    </footer>
</body>
</html>