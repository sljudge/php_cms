<?php
  define("DB_SERVER", "127.0.0.1");
  define("DB_USER", "widget_cms");
  define("DB_PASS", "password");
  define("DB_NAME", "widget_corp");
  define("DB_PORT", "3306");
    
   
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, DB_PORT);
  

  //And now to perform a simple query to make sure it's working
  if(mysqli_connect_errno()) {
    die("Database connection failed: ". mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
    );
  }
?>