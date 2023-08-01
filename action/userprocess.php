<?php

    require_once("../classes/utility.php");
    
    require_once('../partials/sanitizer.php');

    if($_POST){
        if(isset($_POST["register"])){

            $firstname = sanitizer($_POST["firstname"]);
            $lastname = sanitizer ($_POST["lastname"]);
            $phone = sanitizer($_POST["phone"]);
            $email = $_POST["email"];
            $password = $_POST["password"];
            $conpassword = $_POST["conpassword"];
            $select= $_POST["choose"];

            if(empty($firstname) || empty( $lastname)|| empty($phone) || empty($email) || empty($password)
            || empty($conpassword) || empty($select)){
            print "All fields are required";
            exit ();
        }
        if(strlen($password) < 8){
            echo "Password must be at least 8 characters";
           exit();
      }   
      if($password !== $conpassword){
        echo "Password do not match";
        exit;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
        }
             $myrole = new userRole();
            $myrole->userRole($select, $firstname, $lastname,$phone, $email,$password);

    }else{
        
            header("Location:../useregisteration.php");
    }

?>