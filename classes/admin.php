<?php
require_once("dbconnection.php");

            class Admin extends Db{
            public function loginAdmin($email,$password){
            $sql="SELECT * FROM admin WHERE admin_email=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$email]);
            $numadmin=$stmt->rowCount();
                if($numadmin < 1 ){
                    print "Account does not exist";
                    return $numadmin;
                    exit();
                }
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $admin["admin_password"])){
            $_SESSION["admin_id"] = $admin["admin_id"];
            $_SESSION["admin_email"] = $admin["admin_email"];
            header("location:../adminprofile.php");
            }else if($password != $admin['admin_password']){
                echo "Email or password does not exist";
                exit();
        }else{
            session_destroy();
             header("location:../useregisteration.php");
            exit();
        }
        }

            public function updatePassword($admin_id, $oldpassword, $newpassword){
            $sql = "SELECT * FROM admin WHERE admin_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$admin_id]);
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            //return $user;
            //checking if the password they provided matches with the password stored for them
            if(password_verify($oldpassword, $admin["admin_password"])){
                $sql = "UPDATE admin SET admin_password = ? WHERE admin_id = ?";
                $stmt = $this->connect()->prepare($sql);
                $updatedadmin = $stmt->execute([$newpassword, $admin_id]);
                 return "Your password has been changed successfully";

            }else{
                
                return "Old password is not correct, please try again";
            }
        }
                
            public function fetchProperty(){
            $sql="SELECT * FROM landlord_house INNER JOIN landlord ON landlord_house.landlord_id = 
            landlord.landlord_id ORDER BY house_id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $property = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $property;

        }

            public function contactUs($name,$email,$phone,$message){
            $sql = "INSERT INTO contactus (name,email,phone,message)
            VALUES(?,?,?,?)";
            $stmt=$this->connect()->prepare($sql);
            $man= $stmt->execute([$name,$email,$phone,$message]);
                    if($man){
                        return "Message sent Successfully";

                    }else{
                        return "Message not sent, please try again";
                    }
                }
    
                }

                

    
?>

