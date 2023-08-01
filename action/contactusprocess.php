<?php
require_once('../classes/admin.php');

if($_POST){
    if(isset($_POST['btn'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['msg'];
    }
    if(empty($name) && empty($email) && empty($phone) && empty($message)){
        echo "Your cannot submit an empty message";
    }else{
        echo "Message sent successfully";
    }
    $contact = new Admin();
    $contactus = $contact->contactUs($name, $email, $phone, $message);
}else{
    header("Location:../contactus.php");
}

?>