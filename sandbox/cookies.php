
 <?php
   //REMEMBER: Setting cookies must be before *any* HTML output unless output buffering is turned on.
 
   // Set cookie
      $name = "test";
      $value = 45;
      $expire = time() + (60*60*24*7); //add seconds!
      setcookie($name, 45, $expire);
      
   // Unset cookie
      // setcookie($name);
      // setcookie($name, null, $expire);
      // setcookie($name, $value, time() - 3600);
      // ***Best way:***
      // setcookie($name, null, time() - 3600);
   ?>
   
<html lang="en">
   <head>
      <title>Cookies </title>
   </head>
   <body>
      
      // <?php
      // if (isset($_COOKIE["test"])) {
      //    $test = $_COOKIE["test"];
      // }
      // else {
      //    $test = "";
      // }
      // echo $test;
      
      $test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
      
      
      ?>


   </body>
</html>