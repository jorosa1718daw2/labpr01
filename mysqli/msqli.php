<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<?php
include_once 'DB.php';

$connection = new createCon();
$connection->connect();

$sql = "SELECT * FROM armaric";
$result = mysqli_query($connection->myconn, $sql);
?>

<div class="container">
<div class="row">
<div class="col-md-12">
    <h2>Lista de Armario C <a href="add.php" style="float: right;font-size: 18px;">Añadir Productos</a></h2>

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

if ($result->num_rows > 0) 
    // output data of each row
while ($row = $result->fetch_assoc()) {
        ?>
            <tbody>
            <th scope="row"><?php echo $row["nom_armari"]?></th>
            <td><?php echo $row["nom_producte"]?></td>
            <td><?php echo $row["stock_inicial"]?></td>
            <td><?php echo $row["stock_actual"]?></td>
            <td><?php echo $row["proveedor"]?></td>
            <td><?php echo $row["referencia_proveedor"]?></td>
            <td><?php echo $row["marca_equip"]?></td>
            <td><?php echo $row["num_lot"]?></td>
            <td><a href='edit.php?id="<?php echo $row["id"]?>"' class="btn btn-info" role="button">Edit</a></td>

            <td><a onclick="return confirm('¿Estas Seguro?')" href='msqli.php?idd="<?php echo $row["id"]?>"' class="btn btn-danger" role="button" >Delete</a></td>
     
        </tbody>
        <?php
    if (isset($_GET['idd'])) {
        $idd = $_GET['idd'];
        $result = mysqli_query("DELETE FROM armaric where id ='$idd'");
        if ($result) {
            ?>
            <script>
                alert("Succes to delete data");
                window.location.href="msqli.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Fail to delete data");
                window.location.href="msqli.php";
            </script>
            <?php
        }
    }

            
        ?>
<?php    
}else{
    echo "0 results";
}
?>
   
   </table>

    
</div>
</div>
</div>
</body>
</html>