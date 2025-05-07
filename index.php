<html>
    <head>
        <link rel="stylesheet" href="style-3.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title>Resultado</title>
    </head>
    <body>
        <?php
            $conexion=mysqli_connect("localhost","root","","portfolio") or
            die("Problemas con la conexión");
            mysqli_query($conexion,"insert into contacto(Nombre,Email,Texto) values 
            ('$_REQUEST[Nombre]','$_REQUEST[Email]','$_REQUEST[Texto]')")
            or die("Problemas en el select".mysqli_error($conexion));
            mysqli_close($conexion);
        ?>

        <p class="marca">By Ian Quintana</p>

        <h1 class="titulo" id="Brico">Formulario enviado!</h1>

        <a href="index.html" class="
        volver">Volver a la pagina anterior</a>

        <div id="cnt" class="contacto">

            <div class="links">
                <a title="WhatsApp" href="https://wa.me/5493364293798" target="_blank" title="WhatsApp"><i
                        class="bi bi-whatsapp"></i></a>
                <a title="Instagram" href="https://www.instagram.com/ianchu_018?igsh=cm5sdTgwaXAyejF5" target="_blank"
                    title="Instagram"><i class="bi bi-instagram"></i></a>
                <a title="Discord" href="https://discord.com/channels/@ianchu_018" target="_blank" title="Discord"><i
                        class="bi bi-discord"></i></a>
                <a title="Github" href="https://github.com/ianchu315" target="_blank" title="Github"><i
                        class="bi bi-github"></i></a>
            </div>
        </div>

        <footer>Ian Quintana &COPY; 2025 - Derechos reservados</footer>

    </body>
</html> 