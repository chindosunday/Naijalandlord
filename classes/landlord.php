<?php


require_once("dbconnection.php");

class Landlord extends Db{

        public function registerLandlord($firstname,$lastname,$phone,$email,$password){

        $sql="SELECT * FROM landlord WHERE email=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $checkemail = $stmt->rowCount();

        

        if ($checkemail > 1){
            return "Error:Email already exists";
        }
        

        
        $sql = "INSERT INTO landlord(firstname,lastname,email,contact,password)
        VALUES(?,?,?,?,?)";
         $stmt=$this->connect()->prepare($sql);
        $man= $stmt->execute([$firstname,$lastname,$email,$phone,$password]);
                if($man){
                echo  "Account Created Successfully";

                }else{
                    return "Unable to create an account, please try again";
                }


        }


                public function loginLandlord($email,$password){
                    $sql="SELECT * FROM landlord WHERE email=?";
                    $stmt=$this->connect()->prepare($sql);
                    $stmt->execute([$email]);
                    $numlandlord=$stmt->rowCount();
                        if($numlandlord < 1 ){
                            echo "Account does not exist";
                            return $numlandlord;
                            exit();

                        }

                        
                    $landlord = $stmt->fetch(PDO::FETCH_ASSOC);
    
                    if(password_verify($password, $landlord["password"])){
   
                    session_start();
           
                    $_SESSION["landlord_id"] = $landlord["landlord_id"];
   
                    $_SESSION["email"] = $landlord["email"];
                    header("location:../landlordprofile.php");

                    }else if($password != $landlord['password']){
                            echo "Email or password does not exist";
                            exit();
                    }else{
                        session_destroy();
                         header("location:../useregisteration.php");
                        exit();
                    }
                }



                                   
        public function addProperty($owner, $amount, $desc, $location, $category,$fileName){
        $sql = "INSERT INTO landlord_house(landlord_id, house_amount, house_description,location_id,cat_id,house_image)
        VALUES(?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $addprop = $stmt->execute([$owner, $amount,$desc,$location, $category, $fileName]);
        if($addprop){

            // header("location:../house_listings.php");
            return "Image uploaded successfully";
            exit();
        }else{
            return "Error:Failed to upload image";
            exit();
        }

    }

            
       public function fetchProperty(){
        $sql = "SELECT * FROM landlord_house ORDER BY house_id LIMIT 6";
        $stmt = $this->connect()->prepare($sql);
         $stmt->execute();
        $property = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $property;

     }



     
        public function getLandlordDetails($landlord_id){
        $sql = "SELECT * FROM landlord WHERE landlord_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$landlord_id]);
        $landlord = $stmt->fetch(PDO::FETCH_ASSOC);
        return $landlord;
    }


        public function updateLandlordProfile($firstname, $lastname, $phonenumber, $image, $landlord_id){
        $sql = "UPDATE landlord SET firstname=?, lastname=?, contact=?, image=? WHERE landlord_id=?";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$firstname, $lastname, $phonenumber, $image, $landlord_id]);
        return $result;

 }
        
        
        public function updatePassword($landlord_id, $oldpassword, $newpassword){
        $sql = "SELECT * FROM landlord WHERE landlord_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$landlord_id]);
        $landlord = $stmt->fetch(PDO::FETCH_ASSOC);
        //return $user;
        //checking if the password they provided matches with the password stored for them
        if(password_verify($oldpassword, $landlord["password"])){
            $sql = "UPDATE landlord SET password = ? WHERE landlord_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $updatedtenant = $stmt->execute([$newpassword, $landlord_id]);
            return "Your password has been changed successfully";

        }else{
            
            return "Old password is not correct, please try again";
        }
    }




                
}
                 


    
?>