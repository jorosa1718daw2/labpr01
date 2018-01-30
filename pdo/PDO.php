<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
$dbhost='localhost';
$dbusername='root';
$dbuserpassword='';
$baseDades='demo';
try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$baseDades", $dbusername, $dbuserpassword);
    // echo "<b>Connexió a la BD  $baseDades realitzada amb èxit</b><br><br>";
    $consulta = 'SELECT * FROM armarid';
    $resultat = $pdo->query($consulta);
    // echo "<b>Entrades de la base de dades $baseDades: </b><br><br>";
   
?>

<div class="container">
<div class="row">
<div class="col-md-12">
    <h2>Lista de Armario D <a href="add.php" style="float: right;font-size: 18px;">Añadir Productos</a></h2>

<table class="table table-bordered">
        <thead>
            <th scope="col">Nombre Armario</th>
            <th scope="col">Nombre Producto</th>
            <th scope="col">Stock Inicial</th>
            <th scope="col">Stock Actual</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Referencia Proveedor</th>
            <th scope="col">Marca Equipo</th>
            <th scope="col">Numero Lote</th>
            <th scope="col">Edit</th>
            
            <th scope="col">Delete</th>
        </thead>

        <?php
        while ($fila = $resultat->fetch(PDO::FETCH_ASSOC)) {
            foreach ($fila as $valor_columna) {
                ?>

        <tbody>

               <th scope="row"><?php echo $valor_columna["nom_armari"]?></th>
            <td><?php echo $valor_columna["nom_producte"]?></td>
            <td><?php echo $valor_columna["stock_inicial"]?></td>
            <td><?php echo $valor_columna["stock_actual"]?></td>
            <td><?php echo $valor_columna["proveedor"]?></td>
            <td><?php echo $valor_columna["referencia_proveedor"]?></td>
            <td><?php echo $valor_columna["marca_equip"]?></td>
            <td><?php echo $valor_columna["num_lot"]?></td>
            <td><a href='edit.php?id="<?php echo $valor_columna["id"]?>"' class="btn btn-info" role="button">Edit</a></td>

            <td><a onclick="return confirm('¿Estas Seguro?')" href='msqli.php?idd="<?php echo $valor_columna["id"]?>"' class="btn btn-danger" role="button" >Delete</a></td>
     
        </tbody>
<?php
            }
        }
    
        $pdo=null;//Tancant connexió
} catch (PDOException $e) {
    print "Error!!! ".$e->getMessage()."<br>";
    die();
}
    ?>
     </table>

     </div>
</div>
</div>
</body>
</html>
