<?php

  require_once 'conexion.php';
  
  //listar los productos
  function listarCitas(){    
      $citas = array();
      $sql = "SELECT * FROM CITAS ORDER BY NOMBREDUENO ASC";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);
            
      while($cita = mysqli_fetch_assoc($resultado)){
          array_push($citas, $cita);
      } 
      
      return $citas;
  }

  //registar un producto
  function registrarCita($nombredueno,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones){
      
      $sql = "INSERT INTO CITAS VALUES($nombredueno,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones))";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);      
  }

   //eliminar un producto 
  function eliminarCitaNombre($nombredueno){
      $sql = "DELETE FROM CITAS WHERE NOMBREDUENO = '$nombredueno'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);   
  }
  
  //Buscar producto por nombre
  function buscarCita($nombredueno){
      $sql = "SELECT * FROM CITAS WHERE NOMBREDUENO = '$nombredueno'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $cita = mysqli_fetch_assoc($resultado);
       
       return $cita;
  }

  //modificar un producto
  function modificarCita($nombredueno,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones){
      $sql = "UPDATE CITAS SET NOMBREDUENO='$nombredueno',NOMBREMASCOTA='$nombremascota',RAZA=$raza,EDADMASCOTA=$edadmascota,FECHACITA=$fechacita,OBSERVACIONES=$observaciones WHERE NOMBREDUENO='$nombredueno'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }


?>