<!doctype html>
<html lang="en">
  <head>
    <?php session_start();?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>menu</title>
  </head>
  <body>
  
  <?php include 'layaut/navbars.php';
        include 'logic.php';
   $_SESSION['estudiantes'] = isset($_SESSION['estudiantes'])? $_SESSION['estudiantes'] : array();
    $estudiantes = $_SESSION['estudiantes'];

    if(!empty($estudiantes)){
      if(isset($_GET['carreraId'])){
          $estudiantes = filtrado($estudiantes,'carrera',$_GET['carreraId']);
         
      }
      
    }

  ?> 
    <?php nav();?>
    <div class="container pt-5">
      <h3 class="bg-dark text-light py-2 pl-1 text-center" style="margin-right:52%;">Lista de estudiantes</h3>
     <div class="btn-group mb-1">
      <a href="index.php" class="btn btn-dark text-ligh">Todos</a>
       <a href="index.php?carreraId=Software" class="btn btn-dark text-ligh">Software</a>
       <a href="index.php?carreraId=Multimedia" class="btn btn-dark text-ligh" >Multimedia</a>
       <a href="index.php?carreraId=Mecatronica" class="btn btn-dark text-ligh">Mecatronica</a>
       <a href="index.php?carreraId=Seguridad informatica" class="btn btn-dark text-ligh">Seguridad</a>
       <a href="index.php?carreraId=Redes" class="btn btn-dark text-ligh">Redes</a>
     </div>
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
    <?php
        $n = 1;
        foreach ($estudiantes as $value):?>
        <tr>
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
        </tr>
        <?php endforeach;?>
  </tbody>
</table>
    </div>
    
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="js/bootstrap.min.js"></script>
  </body>
</html>