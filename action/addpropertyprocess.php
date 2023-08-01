<?php

require_once("../classes/landlord.php");

session_start();

if($_POST){
    if(isset($_POST["submit"])){

       
        $owner = $_POST["owner"];
        $amount = $_POST["amount"];
        $desc = $_POST["desc"];
        $location = $_POST["location"];
        $category = $_POST["choose"];
        $landlordid = $_SESSION["landlord_id"];

        if(empty($owner)|| empty($amount) ||  empty($desc)|| empty($location) || empty($category)){
            echo "All fields are required";
            exit();
        }
         
        $fileName = $_FILES["image"]["name"];
        $fileType = $_FILES["image"]["type"];
        $fileSize = $_FILES["image"]["size"];
        $fileError = $_FILES["image"]["error"];
        $fileTempName = $_FILES["image"]["tmp_name"];

        $allowed = ["jpeg", "png", "jpg", "webp", "jfif"];
        $file_ext =strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if(!in_array($file_ext, $allowed)){
            echo "File type not allowed.";
            exit();
        }
        if($fileSize > 500000){
            echo "File size is too big";
            exit();
        }
        if($fileError == 0){
            $fileName = "house_uploads/"."naijatenants".time().".".$file_ext;
            $savedfile = move_uploaded_file($fileTempName, $fileName);
            if($savedfile){
                echo "File Uploaded successfully";
                header("../houselistings.php");

                $mylandlord = new Landlord();
                $mylandlord->addProperty($landlordid, $amount,$desc,$location, $category, $fileName);
            }
        }
    
}


}       

?>
