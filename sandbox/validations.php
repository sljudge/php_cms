<!DOCTYPE html>

<html lang="en">
   <head>
      <title> Validations </title>
   </head>
   <body>

      <?php
      
      // * presence
      // use trim() so empty spaces don't count
      // use === to avoid false positives
      // empty() would consider "0" to be empty
      $value = trim( "" );
      if (!isset($value) || $value === ""){
         echo "Validation failed.<br />";
      }
      
      // * string length
      // minimum length
      $value = "";
      $min = 3;
      if (strlen($value) < $min) {
         echo "Validation failed.<br />";
      }
      // max length
      $max = 6;
      if (strlen($value) > $max) {
         echo "Validation failed.<br />";
      }
      
      // * type
      $value = "";
      if (!is_string($value)){
         echo "Validation is failed.<br />";
      }
      
      // * inclusion in a set
      $value = "";
      $set = array("1" , "2", "3" , "4");
      if (!in_array($value, $set)){
         echo "Validation is failed.<br />";
      }
      
      
      // * uniqueness
      // uses a database to check uniqueness
      
      // * format
      // use a regex on a string
      // preg_match($regex, $subject)
      if (preg_match("/PHP/", "PHP is fun.")){
         echo "A match was found.";
      } else{
         echo "A match was not found.";
      }
      
      $value = "nobody@nowhere.com";
      if (!preg_match("/@/", $value)) {
         echo "Validation failed.<br />";
      }
      
      if (strpos($value, "@") === false) {
         echo "Validation failed.<br />";
      }
   
      
      
      ?>
   </body>
</html>