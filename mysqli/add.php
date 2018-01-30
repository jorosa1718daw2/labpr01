<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>



<form action="" method="post">
  <div class="form-group">
    <label >Nombre Armario:</label>
    <input name="n_armari"  class="form-control">
  </div>
  <div class="form-group">
    <label>Nombre Producto:</label>
    <input name="n_producte" class="form-control" >
  </div>
  <div class="form-group">
    <label>Stock Inicial:</label>
    <input name="s_inicial" class="form-control" >
  </div>
  <div class="form-group">
    <label>Stock Actual:</label>
    <input name="s_actual" class="form-control" >
  </div>
  <div class="form-group">
    <label>Proveedor:</label>
    <input name="proveedor" class="form-control" >
  </div>
  <div class="form-group">
    <label> Referencia Proveedor:</label>
    <input name="ref" class="form-control" >
  </div>
  <div class="form-group">
    <label>Marca Equipo:</label>
    <input name="m_equip" class="form-control" >
  </div>
  <div class="form-group">
    <label>Numero Lote:</label>
    <input name="n_lote" class="form-control" >
  </div>
  
  <button type="submit" value=" Submit " name="submit" class="btn btn-primary">Submit</button>
</form>






<?php
include_once 'DB.php';
if(isset($_POST["submit"])){
$connection = new createCon();
$connection->connect();
$connection->insert();
}

?>


</body>
</html>
