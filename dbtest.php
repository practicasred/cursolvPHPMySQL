<?php
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("MYSQL_USER");
  $dbpwd = getenv("MYSQL_PASSWORD");
  $dbname = getenv("MYSQL_DATABASE");
  
  $conexión = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
  if ($conexión->connect_errno) {
      printf("Conexión fallida a la base de datos: %s\n", $mysqli->connect_error);
      exit();
  } else {
      printf("¡¡¡ Bien, se ha establecido la conexión con la base de datos !!!");
  }
  $conexión->close();
?>
