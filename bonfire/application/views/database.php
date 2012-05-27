<html>
 <head>
  <title><?=$page_title?></title>
 </head>
 <body>
 <table width="100%" border="1">
  <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Categoria</th>
    <th scope="col">descripcion</th>
  </tr>
 <?php    foreach($result as $row):?>    <tr>
    <td> <div align="center">
      <?=$row->id?>
    </div></td>
    <td><div align="center">
      <?=$row->ad_state?>
    </div></td>
    <td><div align="center">
      <?=$row->ad_text?>
    </div></td>
  </tr> <?php endforeach;?>
</table>


   
  
   
  


 
  
  
 
 
 </body>
</html>