<?php 

include("../../conexion.php");

if(isset($_GET['id'])){

    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conexion->prepare("SELECT * FROM contactos WHERE id=:txtid");
    $stm->bindParam(":txtid,$txtid");
    $stm->execute();
    $registro=$stm->fetch(PDO::FETCH_LAZY);
    $nombre=$registro['nombre'];
    $telefono=$registro['telefono'];
    $fecha=$registro['fecha'];


}
    

?>

<?php include("../../templates/header.php"); ?>


<form action="" method="post">

            <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>" placeholder="Ingrese Nombre"> 
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingrese Nombre"> 
            <label for="">Telefono</label>
            <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="Ingrese telefono">
            <label for="">Fecha</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>">
        </div>
        <div class="modal-footer">
          <a href="index.php" class="btn btn-danger">Cancelar</a>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>


      <?php include("../../templates/footer.php");?>
