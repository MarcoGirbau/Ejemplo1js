<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA DE PHP DE MIERDA CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: gray">
        <div class="container" id="principal">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center" style="color: white">EJEMPLO DE INICIO DE SESION EN PHP</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    
                </div>
                <div class="col-4">
                    <br>
                    
                        <input id="cajanombre" class="form-control" type="text" placeholder="Usuario" required="required">
                        <br>
                        <input id="cajapassword" class="form-control" type="password" placeholder="Contraseña">
                        <br>
                        <button id="boton" class="btn btn-primary btn-block" type="submit">Primary</button>
                        <br>
<!--                        <p>
                            <input class="form-control" data-validation="date" data-validation-format="yyyy-mm-dd" placeholder="Year (yyyy-mm-dd):">
                        </p>-->
                    
                </div>
                <div class="col-4">
                    
                </div>
            </div>
        </div>
        
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        //document ready se ejecuta cuando toda la pagina se ha cargado correctamente
//        $(document).ready(function()
//        {
//            $('#cajanombre').hide();
//        });
        $('#boton').click(function()
        {
            //leo el contenido de las cajas de nombre y contraseña
            var _cajanombre = $('#cajanombre').val();
            var _cajapassword = $('#cajapassword').val();
            $('#principal').load("login.php",
            {
                cajanombre : _cajanombre, 
                cajapassword : _cajapassword
            });
        });
        $.validate({lang: 'es'});
    </script>
</html>
