<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="datatables/css/dataTables.bootstrap5.min.css"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="datatables/js/dataTables.bootstrap5.min.js"></script>
  </head>

  <body>
    <?php
      session_start();

      switch ($_SESSION['type']) {
        case '0':
          include("navBars/USERnavbar.php");
          break;
        case '1':
          include("navBars/ADMnavbar.php");
          break;
      }
    ?>
  </body>
</html>