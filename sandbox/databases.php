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
    //2.Perform database query
    $query = "SELECT * FROM subjects";
    
    // (Assembling a query - alternate method)
    // $query = "SELECT * ";
    // $query.= "FROM subjects ";
    // $query.= "WHERE visible = 1 ";
    // $query.= "ODER BY position ASC";
    
    
    $result = mysqli_query($connection,$query);
    // Test if there was a query error
    if (!$result){
        die ("Database query failed.");
    }
?>

<!DOCTYPE html>

<html lang="en">
   <head>
      <title>Databases </title>
   </head>
   <body>
    
    <!--3. Use returned data (if any)-->
    <ul>
    <?php
    while($subject = mysqli_fetch_assoc($result)) {
        // output data from each row
    ?>
        <li><?php echo $subject ["menu_name"] . "<br />"; ?></li>
    <?php 
    } 
    ?>
    </ul>
    
    <?php
    // 4. Release returned data
    mysqli_free_result($result);
    ?>

   </body>
</html>

<?php
// 5. Close database connection
   mysqli_close($connection);
?>