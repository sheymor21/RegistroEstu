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
   $nombre = $_GET['nom'];
   $id = $_GET['id'];
   $apellido = $_GET['ape'];
   $estatus = $_GET['st'];
    $cursa = $_GET['cr'];
    $count=array_search($cursa,$carreras);
    unset($carreras[$count]);
     $carreras = array_values($carreras);
    array_unshift($carreras,$cursa);
        if(isset($_GET['nEdit']) && isset($_GET['aEdit'])){
            $nombre = $_GET['nEdit'];
            $apellido = $_GET['aEdit'];
            if(!$_GET['check'] == null){
                $estatus = $_GET['check'];
            }else{
                $estatus = 'inactivo';
            }
            
            $cursa = $_GET['carreraEdit'];
            $id = $_GET['ids'];
            foreach($estudiantes as $keys =>$value){
                if($id == $keys){
                    $estudiantes[$id]['nombre'] = $nombre;
                    $estudiantes[$id]['apellido'] = $apellido;
                    $estudiantes[$id]['status'] = $estatus;
                    $estudiantes[$id]['carrera'] = $cursa;
                 
                    $_SESSION['estudiantes'] = $estudiantes;
                    header('location: SelectEditar.php');
                    exit();
                }
                   
                }
            }
            
          
        
  ?> 
    <?php nav(true,true,false,true,false);?>
    <div class="container pt-5">
    <form action="editar.php" method="get">
    <div class="form-group">
      <input type="text" class="form-control" id="nombreEdit" placeholder="" name="ids" value='<?php echo $id?>' hidden>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput" class="font-weight-bold">Nuevo Nombre</label>
      <input type="text" class="form-control" id="nombreEdit" placeholder="" name="nEdit" value='<?php echo $nombre?>'>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2" class="font-weight-bold">Nuevo Apellido</label>
      <input type="text" class="form-control" id="apellidoEdit" placeholder="" name="aEdit" value='<?php echo $apellido?>'>
    </div>
    <label for="validationTooltip01" class="font-weight-bold">Nueva Carrera</label>
     <select class="custom-select"  name="carreraEdit" tabindex="3">
     <?php foreach ($carreras as $materias):?>
      <option value="<?php echo $materias;?>" name="cEdit"><?php echo $materias;?></option>
     <?php endforeach; ?>
     </select>
     <div class="form-check my-3">
     
    <input class="form-check-input" type="checkbox" value="activo" id="checkbox1" name="check">
    <label class="form-check-label " for="defaultCheck1">Marcar si el estudiante esta activo</label>
  </div>
    <div class="input-group mb-3">
        <div class="input-group-append">
        <a href="SelectEditar.php" class="btn btn-outline-primary mt-2">Volver</a>
        <button class="btn btn-outline-primary mt-2" type="submit" id="button-addon3" style="margin-left: 20%;">Cambiar</button>
        
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


