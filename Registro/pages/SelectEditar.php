<!doctype html>
<html lang="en">
  <head>
  <?php session_start();?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>menu</title>
  </head>
  <body>
  <?php include '../layaut/navbars.php';
        include '../logic.php';
   $_SESSION['estudiantes'] = isset($_SESSION['estudiantes'])? $_SESSION['estudiantes'] : array();
   $carreras = ['Software','Mecatronica','Redes','Seguridad informatica','Multimedia'];
   $estudiantes = $_SESSION['estudiantes'];
   $nombre;
   $apellido;
   $estatus;
   if(isset($_POST['editarId'])){
     $editar = seleccion($_POST['editarId']);
         if($editar>=0){
           foreach($estudiantes as $keys=>$valu){
             if($editar == $keys){
               $id = $editar;
               $nombre = $valu['nombre'];
               $apellido = $valu['apellido'];
               $estatus = $valu['status'];
               $cursa = $valu['carrera'];
              header("location: editar.php?id={$id}&nom={$nombre}&ape={$apellido}&st={$estatus}&cr={$cursa}");
              exit();
             }
           }
         }

        }
   if(empty($estudiantes)){
     $editar = -2;
   }
 
  ?> 
    <?php nav(true,true,false,true,false);?>
    <div class="container pt-5">
    <form action="SelectEditar.php" method="POST">
     <?php if($editar == -1 || $editar>count($estudiantes)):?>
      <div class="alert alert-danger" role="alert">Usted a ingresado una letra o un ID inexistente, vuelva a digitar</div>
     <?php endif; ?>
     <?php if($editar == -2):?>
      <div class="alert alert-danger" role="alert">No existen estudiantes</div>
     <?php endif; ?>
    <div class="input-group mb-3">
        <input type="text" class="form-control mt-2" placeholder="ID del estudiante que desea editar" aria-label="Recipient's username" aria-describedby="button-addon2" id="inputEliminar" name="editarId">
        <div class="input-group-append">
          <button class="btn btn-outline-primary mt-2" type="submit" id="button-addon2">Editar</button> 

        </div>
      </div>
    </form>
 
      <!-- tabla -->
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Carrera</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <?php $estudiantes = $_SESSION['estudiantes'];
        $n = 1;
        $i = 0;
        foreach ($estudiantes as $value):?>
        <tr id="estu<?php echo $i++;?>">
          <th scope="row"><?php echo $n++; ?></th>
          <td><?php echo $value['nombre']," ",$value['apellido']; ?></td>
          <td><?php echo $value['carrera']; ?></td>
          <td><?php if($value['status'] == 'activo'):?>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked disabled>
              <label class="form-check-label text-success" for="defaultCheck1">Activo</label>
            </div></td>
          <?php elseif($value['status'] == 'inactivo'):?>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"  disabled>
              <label class="form-check-label text-danger" for="defaultCheck1">Inactivo</label>
            </div></td>
          <?php endif; ?>
        <?php endforeach;?>
  </tbody>
</table>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="../js/bootstrap.min.js"></script>
  </body>
</html>