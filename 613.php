<?php
    $formatos  = array('.docx', '.pptx', '.xlsx', '.doc', '.pdf', '.ppt', '.zip', '.rar');
  if (isset($_POST['equipo1'])){
    $directorio = 'GM/613/Equipo1'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
      if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=613&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=613&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=613&t=error');
    }
  }
    if (isset($_POST['equipo2'])){
    $directorio = 'GM/613/Equipo2'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
      if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=613&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=613&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=613&t=error');
    }
  }
  if (isset($_POST['equipo3'])){
    $directorio = 'GM/613/Equipo3'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
      if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=613&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=613&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=613&t=error');
    }
  }
  if (isset($_POST['equipo4'])){
    $directorio = 'GM/613/Equipo4'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
       if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=613&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=613&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=613&t=error');
    }
  }
  if (isset($_POST['equipo5'])){
    $directorio = 'GM/613/Equipo5'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
      if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=613&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=613&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=613&t=error');
    }
  }
?>