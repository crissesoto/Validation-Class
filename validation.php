<?php 
// create a user validator class to handle validation
// create a constructor that takes in the data from the form
// check if required data are present
// create methods to validate individual fields
// --> a method to validate name
// --> a method to validate email
// return an error array once everything is check 
//and if founds an error
require "index.php";


class UserValidation{

  private $data;
  private $errors = [];
  private static $fields = ["username", "email"];

  public function _construct($post_data){
    $this->data = $post_data;
  }

  public function validateForm(){
    
  }
}


?>