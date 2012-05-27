<html>
<head>
<title>CRUD Operations using jQuery and Codeigniter</title>

<base href="<?php echo base_url() ?>" />

<!--<link type="text/css" rel="stylesheet" href="css/demo_table.css" />-->
<link type="text/css" rel="stylesheet" href="css/smoothness/jquery-ui-1.8.2.custom.css" />
<link type="text/css" rel="stylesheet" href="css/styles.css" />

</head>
<body>
<div id="ajaxLoadAni">
    <img src="images/ajax-loader.gif" alt="Ajax Loading Animation" />
    <span>Loading...</span>
</div>
<table width="100%" border="0">
  <tr valign="top" >
    <th scope="col" style="width:250px;">                            <?php echo form_open('bonfire/login/login/'); ?>

<div id="LoginUsuarios">
   <div class="fila">
      <div class="LoginUsuariosCabecera">E-mail:</div>
      <div class="LoginUsuariosDato"><input type="text" name="maillogin" value="<?= set_value('maillogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError">
      <?
      if(isset($error)){
         echo "<p>".$error."</p>";
      }
      echo form_error('maillogin');
      ?>
      </div>
   </div>      
   <div class="fila">
      <div class="LoginUsuariosCabecera">Contraseña:</div>
      <div class="LoginUsuariosDato"><input type="password" name="passwordlogin" value="<?= set_value('passwordlogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError"><?= form_error('passwordlogin');?></div>
   </div>
   <div class="fila">
      <div class="LoginUsuariosCabecera"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
   <div class="fila">
      <div class="LoginUsuariosCabecera"><input type="submit" value="Ingresar"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
</div>
</form>                            
                      </div></th>
    <th scope="col">
<div id="tabs">
    
    <ul>
        <li><a href="#read">Ver Usuarios</a></li>
        <li><a href="#create">Nuevo Usuario</a></li>
         <li><a href="#event">Eventos</a></li>
    </ul>
    
    <div id="read">
        <table id="records">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div id="create">
        <form action="" method="post">
           <p>
               <label for="cName">Nombre:</label>
               <input type="text" id="cName" name="cName" />
           </p>
           
           <p>
               <label for="cEmail">Email:</label>
               <input type="text" id="cEmail" name="cEmail" />
           </p>
             <p>
               <label for="cPass">Password:</label>
               <input type="text" id="cPass" name="cPass" />
           </p>
           
           <p>
               <label>&nbsp;</label>
               <input type="submit" name="createSubmit" value="Guardar" />
           </p>
        </form>
    </div>
 <div id="event">

        <table id="records">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</div> <!-- end tabs -->

<!-- update form in dialog box -->
<div id="updateDialog" title="Update">
    <div>
        <form action="" method="post">
            <p>
               <label for="name">Nombre:</label>
               <input type="text" id="name" name="name" />
            </p>
            
            <p>
               <label for="email">Correo:</label>
               <input type="text" id="email" name="email" />
            </p>
            
            
            <input type="hidden" id="userId" name="id" />
        </form>
    </div>
</div>

<!-- delete confirmation dialog box -->
<div id="delConfDialog" title="Confirm">
    <p>est'a Seguro?</p>
</div>


<!-- message dialog box -->
<div id="msgDialog"><p></p></div>


<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery-templ.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

<script type="text/template" id="readTemplate">
    <tr id="${id}">
        <td>${id}</td>
        <td>${name}</td>
        <td>${email}</td>
        <td><a class="updateBtn" href="${updateLink}">Editar</a> | <a class="deleteBtn" href="${deleteLink}">Borrar</a></td>
    </tr>
</script>

<script type="text/javascript" src="js/all.js"></script></th>
    <th scope="col">&nbsp;</th>
  </tr>
</table>



</body>
</html>