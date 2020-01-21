<?php

// Sessions use cookies which use headers.
// Must start before any HTML output
// unless output buffering is turned on.

session_start();

?>

<html lang="en">
   <head>
      <title>Sessions </title>
   </head>
   <body>
      <?php
         $_SESSION["first_name"] = "Sam";
         $name = $_SESSION["first_name"];
         echo $name;
         
         // Can access in the same request/response cycle
      ?>

   </body>
</html>