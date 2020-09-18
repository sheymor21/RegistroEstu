
<!doctype html>
<html lang="en">
  <head>
    <title>Tabla Periodica</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
  
    <!--variables-->
  <?php
   $elementos = [
     "fila1"=>['H','He'],
     "fila2"=>['Li','Be','B','C','N','O','F','Ne'],
     "fila3"=>['Na','Mg','Al','Si','P','S','Cl','Ar'],
     "fila4"=>['K','Ca','Sc','Ti','V','Cr','Mn','Fe','Co','Ni','Cu','Zn','Ga','Ge','As','Se','Br','Kr'],
     "fila5"=>['Rb','Sr','Y','Zr','Nb','Mo','Tc','Ru','Rh','Pd','Ag','Cd','In','Sn','Sb','Te','I','Xe'],
     "fila6"=>['Cs','Ba','La-Lu','Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg','Ti','Pb','Bi','Po','At','Rn'],
     "fila7"=>['Fr','Ra','Ac-Lr','Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn','Nh','FI','Mc','Lv','Ts','Og'],
     "fila8"=>['La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu'],
     "fila9"=>['Ac','Th','Pa','U','Np','Pu','Am',' Cm','Bk','Cf','Es','Fm','Md','No','Lr']];
     

  ?>
  <!--Funcion de monstra-->
  <?php 
    function tabla($fila){
      $index = 0;   
      if(in_array('Li',$fila)==true){
        $index = 2;
      } else if(in_array('Na',$fila) == true){
        $index = 10;
      }else if(in_array('K',$fila) ==true){
        $index = 18;
      }else if(in_array('Rb',$fila)==true){
        $index = 36;
      }else if(in_array('Cs',$fila)==true){
        $index = 54;
      }else if(in_array('Fr',$fila)==true){
        $index = 86;
      }else if(in_array('La',$fila)==true){
       $index = 106;
      }else if(in_array('Ac',$fila)==true){
        $index = 121;
      }
      foreach($fila as $valor){

            if($index == 0 ||$index == 5 ||$index == 6 ||$index == 7 ||$index == 14 ||$index == 15 ||$index == 33){
              echo "<style>.ele{$index}{background-color: darkseagreen;}</style>";
            }else  if($index == 1 ||$index == 9 ||$index == 17 ||$index == 35 ||$index == 53 ||$index == 71 ||$index == 103){
              echo "<style>.ele{$index}{background-color: cornflowerblue;}</style>";
            }else  if($index == 8 ||$index == 16 ||$index == 34 ||$index == 52 ||$index == 53 ||$index == 70 ||$index == 102){
              echo "<style>.ele{$index}{background-color: rgba(45, 187, 168, 0.863);}</style>";
            }else  if($index == 2 ||$index == 10 ||$index == 18 ||$index == 36 ||$index == 54 ||$index == 86){
              echo "<style>.ele{$index}{background-color: rgb(191, 167, 240);}</style>";
            }else  if($index == 3 ||$index == 11 ||$index == 19 ||$index == 37 ||$index == 55 ||$index == 87){
              echo "<style>.ele{$index}{background-color:plum;}</style>";
            }else  if($index == 56 ||$index == 106 ||$index == 107 ||$index == 108 ||$index == 109 ||$index == 110 ||$index == 111 ||$index == 112 ||$index == 113 ||$index == 114 ||$index == 115 ||$index == 116 ||$index == 117 ||$index == 118 ||$index == 119 ||$index == 120){
              echo "<style>.ele{$index}{background-color:sandybrown;}</style>";
            }else  if($index == 88 ||$index == 121 ||$index == 122 ||$index == 123 ||$index == 124 ||$index == 125 ||$index == 126 ||$index == 127 ||$index == 128 ||$index == 129 ||$index == 130 ||$index == 131 ||$index == 132 ||$index == 133 ||$index == 134 ||$index == 135){
              echo "<style>.ele{$index}{background-color:lightcoral;}</style>";
            }else  if($index == 12 ||$index == 30 ||$index == 48 ||$index == 49 ||$index == 66 ||$index == 67 ||$index == 68 ||$index == 98 ||$index == 99 ||$index == 100 ||$index == 101 ){
              echo "<style>.ele{$index}{background-color:gold;}</style>";
            }else  if($index == 4 ||$index == 13 ||$index == 31 ||$index == 32 ||$index == 50 ||$index == 51 ||$index == 69){
              echo "<style>.ele{$index}{background-color:rgb(204, 202, 105);}</style>";
            }else  if($index == 20 ||$index == 21 ||$index == 22 ||$index == 23 ||$index == 24 ||$index == 25 ||$index == 26 ||$index == 27||$index == 28||$index == 29||$index == 38||$index == 39||$index == 40||$index == 41||$index == 42||$index == 43||$index == 44||$index == 45){
              echo "<style>.ele{$index}{background-color:goldenrod;}</style>";
            }else  if($index == 46 ||$index == 47 ||$index == 56 ||$index == 57 ||$index == 58 ||$index == 59 ||$index == 60 ||$index == 61||$index == 62||$index == 63||$index == 64||$index == 65||$index == 89||$index == 90||$index == 91||$index == 92||$index == 93||$index == 94 ||$index == 95||$index == 96||$index == 97){
              echo "<style>.ele{$index}{background-color:goldenrod;}</style>";
            }
            echo"<tb id='col' class='ele{$index}'>{$valor}</tb>";
            $index++;
          
          
          
          //asignacion de colores
         
        
         }
    }

  ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 id="titulo">Tabla Periodica</h1>
      <div class="row">
        <div class="col-5">
          <p id="met">Metales</p>
          <!--leyenda-->
              <div class="row" id="leyenda">
                <div class="col" style="background-color: rgb(191, 167, 240);"><p>Alcalinos</p></div>
                <div class="col" style="background-color: plum;"><p>Alcalinotérreos</p></div>
                <div class="col" style="background-color: goldenrod;"><p>Metales de Transicion</p></div>
                <div class="col" style="background-color: sandybrown;">
                  <p>Lantánidos</p>
                  <div class="row">
                    <div class="col-12" style="background-color:lightcoral;"><p>Actínidos</p></div>
                  </div>
                </div>
                <div class="col" style="background-color:gold;"><p>Otros Metales</p></div>
              </div>
            </div>
                 <div class="col-2" style="background-color: rgb(204, 202, 105);"><p>Metaloides</p></div>
          <div class="col-5">
            <p id="nomet">No Metales</p>
            <div class="row">
            <div class="col" style="background-color:darkseagreen;">Otros No Metales</div>
                <div class="col" style="background-color: rgba(45, 187, 168, 0.863)"><p>Halógenos</p></div>
                <div class="col" style="background-color:cornflowerblue;">Gases Nobles</div>
            </div>
          </div>
      </div>
    </div>
   <div class="container-fluid">
     <table>
       <!--primera fila-->
        <tr>
          <?php
          $fila = $elementos['fila1'];
           echo tabla($fila);
          ?>       
        </tr>
        <!--segunda fila-->
        <tr>
          <?php 
            $fila = $elementos['fila2'];
            echo tabla($fila);
          ?>
        </tr>
        <!--tercera fila-->
        <tr>
          <?php 
           $fila = $elementos['fila3'];
           echo tabla($fila);
          ?>
        </tr>
        <!--cuarta fila-->
        <tr>
          <?php 
            $fila = $elementos['fila4'];
            echo tabla($fila);
          ?>
        </tr>
        <!--quinta fila-->
        <tr>
          <?php
            $fila = $elementos['fila5'];
            echo tabla($fila);
          ?>
        </tr>
        <!--sexta fila-->
        <tr>
          <?php 
            $fila = $elementos['fila6'];
            echo tabla($fila);
          ?>
        </tr>
        <!--septima fila-->
        <tr>
          <?php 
            $fila = $elementos['fila7'];
            echo tabla($fila);
          ?>
        </tr>
        <br>
        <br>
        <br>
        <!--octava fila-->
        <tr>
          <?php 
            $fila = $elementos['fila8'];   
            echo tabla($fila);
          ?>
        </tr>
        <!--novena fila-->
        <tr>
          <?php 
            $fila = $elementos['fila9'];
            echo tabla($fila);      
          ?>
        </tr>
        <br>
        <br>
     </table>
   </div>
 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script></script>
  </body>
</html>