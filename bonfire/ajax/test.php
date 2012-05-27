 <!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#cargar_html").click(function(){
            $("#contenido").load("<?php echo base_url() ?>ajax/");
        });
    });
</script>
</head>
<body>
    <div id="container">
        <h1>Cargar contenido con Ajax</h1>
        <div id="body">
            <p>Presione el boton <input type="button" id="cargar_html" value="Mostrar Contenido"></p>
            <div id="contenido"></div>
        </div>
    </div>
</body>
</html>