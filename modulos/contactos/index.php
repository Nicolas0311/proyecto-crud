<?php 

include("../../conexion.php");

$stm=$conexion->prepare("SELECT * FROM contactos");
$stm->execute();
$contactos=$stm->fetchAll(PDO::FETCH_ASSOC);







?>



<?php include("../../templates/header.php");?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NUEVO">
  CREAR NUEVO CONTACTO
</button>

<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contactos as $i) { ?>
            <tr class="">
                <td scope="row"><?php echo $i['id']?></td>
                <td><?php echo $i['nombre']?></td>
                <td><?php echo $i['telefono']?></td>
                <td><?php echo $i['fecha']?></td>
                <td>editar|eliminar</td>       
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include("create.php"); ?>















<?php include("../../templates/footer.php");?>