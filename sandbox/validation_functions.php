   <?php
   
   // * presence
   // use trim() so empty spaces don't count
   // use === to avoid false positives
   // empty() would consider "0" to be empty
   function has_presence($value) {
      return isset($value) && $value !== "";
   }
   
   function validate_presences($required_fields){
       global $errors;
       foreach($required_fields as $field) {
           $value = trim($_POST[$field]);
           if (!has_presence($value)){
               $errors[$field] = ucfirst($field) . " can't be blank";
           }
       }
   }
   
   
   // * string length
   // minimum length
   function has_min_length($value, $min) {
      return strlen($value) >= $min;
   }
   
   // max length
   function has_max_length($value, $max) {
    return strlen($value) <= $max;
   }
   
   // Max length using an assoc. array
   function validate_max_lengths($fields_with_max_lengths){
      global $errors;
       // Using an assoc. array
      $fields_with_max_lengths = array("username" => 30, "password" => 8);
      foreach(fields_with_max_lengths as $field => $max){
         $value = trim($_POST[$field]);
         if (!has_max_length($value,$max)){
            $errors[$field] = ucfirst($field) . " is too long";
         }
      }
   }
   
   
   // * inclusion in a set
   function has_inclusion_in($value, $set){
      return in_array($value, $set);
   }
   
   
   function form_errors($errors=array()){
      $output = "";
      if(!empty($errors)){
         $output = "div class=\"error\">";
         $output .= "Please fix the following errors:" ;
         $output .= "<ul>";
         foreach ($errors as $key => $error) {
            $output .= "<li> {$error}</li>";
         }
         $output .= "</ul>";
         $output .= "</div>";
      }
      return $output;
   }
   ?>