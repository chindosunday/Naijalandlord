<?php

require_once "../classes/tenant.php";



if($_POST){
    if(isset($_POST["changepassword"]))

    //echo "you clicked password";
    $oldpassword = $_POST["oldpassword"];    
    $newpassword = $_POST["newpassword"];
    $tenant_id = $_SESSION["tenant_id"];
    //hash the new password before sending it to the method
    $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
    if(empty($oldpassword) || empty($newpassword)){
        echo "all fields are required";
        exit();
    }
}
$userone = new Tenant();
$result = $userone->updatePassword($tenant_id, $oldpassword, $newpassword); 
echo $result;


?>