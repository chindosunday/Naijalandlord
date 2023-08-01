<?php

require_once("../classes/utility.php");

if($_POST){


    if(isset($_POST["button"])){
        
    // echo "hello ... 1 "; 
    // die();
        $mail = $_POST["email"];
        $password= $_POST["password"];
        $select = $_POST["choose"];

        if(empty($mail) || empty($password)){
         echo "All fields are required";
            exit();
        }
         
    $myrole = new userRole();
    $result= $myrole->userIdentity($select,$mail,$password);
    echo "$result";
        
    }

}else{
    header("Location:../tenantlogin.php");
}

?>