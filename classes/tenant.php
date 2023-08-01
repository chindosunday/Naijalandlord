<?php

session_start();
require_once("dbconnection.php");

class Tenant extends Db{

        public function registerTenant($firstname,$lastname,$phone,$email,$password){
        $sql="SELECT * FROM tenant WHERE email=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $checkemail = $stmt->rowCount();
        if ($checkemail > 1){
            return "Error:Email already exists";
        }
        
        $sql = "INSERT INTO tenant(firstname, lastname, contact, email, password)
        VALUES(?,?,?,?,?)";
         $stmt=$this->connect()->prepare($sql);
        $man= $stmt->execute([$firstname,$lastname,$phone,$email,$password]);
                if($man){
                echo  "Account Created Successfully";

                }else{
                    return "Unable to create an account, please try again";
                }

        }



             public function loginTenant($email,$password){
            $sql="SELECT * FROM tenant WHERE email=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$email]);
            $numtenant=$stmt->rowCount();
                if($numtenant < 1 ){
                    print "Account does not exist";
                }
            $tenant = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $tenant["password"])){
             session_start();
             $_SESSION["tenant_id"] = $tenant["tenant_id"];
             $_SESSION["email"] = $tenant["email"];
            header("location:../tenantprofile.php"); 
            }else if($password != $tenant['password']){
                echo "Email or password is incorrect";
                exit();
        }else{
            session_destroy();
             header("location:../useregisteration.php");
            exit();
        }

        }
        
            public function getTenantDetails($tenant_id){
            $sql = "SELECT * FROM tenant WHERE tenant_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$tenant_id]);
            $tenant = $stmt->fetch(PDO::FETCH_ASSOC);
            return $tenant;
        }


            public function updateTenantProfile($firstname, $lastname, $phonenumber, $image, $tenant_id){
            $sql = "UPDATE  tenant SET firstname=?, lastname=?, contact=?,image=? WHERE tenant_id=?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$firstname, $lastname, $phonenumber,  $image, $tenant_id]);
            return $result;
     }

                public function updatePassword($tenant_id, $oldpassword, $newpassword){
                $sql = "SELECT * FROM tenant WHERE tenant_id = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$tenant_id]);
                $tenant = $stmt->fetch(PDO::FETCH_ASSOC);
                
                //checking if the password they provided matches with the password stored for them
                if(password_verify($oldpassword, $tenant["password"])){
                    $sql = "UPDATE tenant SET password = ? WHERE tenant_id = ?";
                    $stmt = $this->connect()->prepare($sql);
                    $updatedtenant = $stmt->execute([$newpassword, $tenant_id]);
                     return "Your password has been changed successfully";

                }else{
                    
                    return "Old password is not correct, please try again";
                }
            }
            



            }


        
                    
?>


