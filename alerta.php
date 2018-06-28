<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="utf-8">
    <title>Administrador de archivos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
  </head>
  <body>
    <?php
      $mensaje = htmlentities($_GET['mensaje']);
      $p= htmlentities($_GET['p']);
      $t= htmlentities($_GET['t']);
      
      switch ($p) {
        case '611':
          $pagina = '611.html';
          break;
        case '612':
          $pagina = '612.html';
          break;
        case '613':
          $pagina = '613.html';
            break;
        case '621':
          $pagina = '621.html';
            break;
        case '622':
          $pagina = '622.html';
            break;
      }
      if ($t == "error") {
        $titulo = "Oppss..";
      }else {
        $titulo = "¡Buen trabajo!";
      }

     ?>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity = "sha2556-hWnYaiADRTO2PzUGmuLJr88LUSjGIZsDYGnIJLv2b8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
    <script>
            swal({
        title: '<?php echo $titulo ?>',
        text: "<?php echo $mensaje ?>",
        type: '<?php echo $t ?>',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ok!'

         }).then(function () {
          location.href = '<?php echo $pagina ?>';
        });
    </script>
  </body>
</html>
