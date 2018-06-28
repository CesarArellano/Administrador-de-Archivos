<?php
    $formatos  = array('.docx', '.pptx', '.xlsx', '.doc', '.pdf', '.ppt', '.zip', '.rar');
  if (isset($_POST['equipo1'])){
    $directorio = 'GV/621/Equipo1'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
       if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=621&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=621&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=621&t=error');
    }
  }
    if (isset($_POST['equipo2'])){
    $directorio = 'GV/621/Equipo2'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
    if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=621&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=621&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=621&t=error');
    }
  }
  if (isset($_POST['equipo3'])){
    $directorio = 'GV/621/Equipo3'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
        if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=621&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=621&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=621&t=error');
    }
  }
  if (isset($_POST['equipo4'])){
    $directorio = 'GV/621/Equipo4'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
        if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=621&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=621&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=621&t=error');
    }
  }
  if (isset($_POST['equipo5'])){
    $directorio = 'GV/621/Equipo5'; 
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
        if (in_array($ext, $formatos)){
      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
        header('location: alerta.php?mensaje=Felicitaciones, su archivo se ha subido exitosamente&p=621&t=success');
      }else{
              header('location: alerta.php?mensaje=Ocurrió un error subiendo el archivo,<br>Valida los permisos de tus archivos.&p=621&t=error');
      }
    }else{
        header('location: alerta.php?mensaje=Archivo no admitido. Archivos permitidos (.docx .pptx .xlsx .pdf .doc .ppt .zip .rar), intenta de nuevo.&p=621&t=error');
    }
  }
?>