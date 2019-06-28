<!DOCTYPE html>

<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Contacto</title>
        <style>
            label{
                width: 150px;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <form method="post" action="<?php echo base_url(); ?>assets/enviar2.php ">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            </br>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
            </br>
            <label for="asunto">asunto</label>
            <input type="text" name="asunto" id="asunto">
            </br>
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
            </br>
            <input type="submit" id="bt_mensaje">
        </form>
    </body>
</html>