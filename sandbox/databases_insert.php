<?php
    
    //1.Connect to the database
    $host = "127.0.0.1";
    $user = "widget_cms";                     //Your Cloud 9 username
    $pass = "password";                                  //Remember, there is NO password by default!
    $db = "widget_corp";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    $connection = mysqli_connect($host, $user, $pass, $db, $port);
    

    //And now to perform a simple query to make sure it's working
    if(mysqli_connect_errno()) {
      die("Database connection failed: ". mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
      );
    }
?>

<?php
    // Often these are form values in $_POST
    $menu_name = "Edit me";
    $position = 4;
    $visible = 1;
    
   //  Safeguard against injection
    $menu_name = mysqli_real_escape_string($connection, $menu_name);
    
    
    //2.Perform database query
   $query = "INSERT INTO subjects (menu_name, position, visible)
            VALUES ('{$menu_name}', {$position}, {$visible})";
    
    $result = mysqli_query($connection,$query);
    if ($result){
        // Success
        // redirect_to ("somepage.php");
        echo "Success!";
    } else{
        // Failure
        // $message = "Subject creation failed";
        die ("Database query failed." . mysqli_error($connection));
    }
?>

<!DOCTYPE html>

<html lang="en">
   <head>
      <title>Databases </title>
   </head>
   <body>
    
    

   </body>
</html>

<?php
// 5. Close database connection
   mysqli_close($connection);
?>