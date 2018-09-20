<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA DE PHP DE MIERDA CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <button id="boton" class="btn btn-primary">Primary</button>
                </div>
                <div class="col-4">
                    <input id="cajanombre" name="usuario_nombre" type="text" placeholder="Usuario">
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <?php
        
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script>
        //document ready se ejecuta cuando toda la pagina se ha cargado correctamente
        $(document).ready(function()
        {
            $('#cajanombre').hide();
        });
        $(document).click(function()
        {
            $('#cajanombre').show(200);
        });
//        $('#boton').click(function()
//        {
//            console.log("aqui si que llega");
//            $('#nombre').val("Me quiero morir");
//            $('input[name=usuario_nombre]').val("Me quiero morir2");
//        });
    </script>
</html>
