<html lang="en">
   <head>
      <title>Form Processing</title>
   </head>
   <body>
      
      <pre>
      <?php
         print_r($_POST);
      ?>
      </pre>
      <br />
      
      
      
      <!--detect form submission-->
      <?php
         if (isset($_POST['submit'])){
            echo "form was submitted";
         
            // <!-- set default values -->
            if (isset($_POST["username"])){
               $username = $_POST["username"];
            } else{
               $username ="";
            }
            if (isset($_POST["username"])){
            $password = $_POST["password"];
            } else{
               $password = "";
            }
            
            // set default values using ternary operator
            $username = isset($_POST['username']) ? $_POST['username'] : "";
            $password = isset($_POST['username']) ? $_POST['username'] : "";
         
         } else {
            $username = "";
            $password = "";
         }
      ?>
      
   </body>
</html>