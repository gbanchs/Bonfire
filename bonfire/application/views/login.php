<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Demo del script:   &iquest;C&oacute;mo hacer un login de usuarios en php?</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<link rel="stylesheet" href="http://www.blogdephp.com/script/php-login.css" type="text/css" media="screen">
<link rel="stylesheet" href="http://www.blogdephp.com/script/addtoany.min.css" type="text/css" media="screen">


</head>

<body style="margin-top:0px">
<?php echo form_open('login/login/'); ?>

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
  

</body>
</html> 