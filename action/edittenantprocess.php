 <?php


require_once("../classes/tenant.php");


if($_POST){
    if(isset($_POST["update"])){
        $tenant_id= $_SESSION["tenant_id"];
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $phone = $_POST["phone"];
}
        $fileName = $_FILES["file"]["name"];
        $fileType = $_FILES["file"]["type"];
        $fileSize = $_FILES["file"]["size"];
        $fileError = $_FILES["file"]["error"];
        $fileTempName = $_FILES["file"]["tmp_name"];

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
                $editone = new Tenant();
                $edited = $editone->updateTenantProfile($firstname, $lastname, $phone,$fileName, $tenant_id);
                if($edited){
                    header("Location:../tenantprofile.php");
                    exit();
    
                }
    }

}
    
}
?>

