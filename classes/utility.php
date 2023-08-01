<?php

    require_once("landlord.php");
    require_once("tenant.php");
    require_once("admin.php");


    class userRole{
        public function userRole($user, $firstname, $lastname,$phone, $email,$password){

        // A function to check who a user is before sending his/her records to the database
        // If the user is a landlord, his/her records should be sent to the landlord table 
        // Otherwise, his/her details should be sent to the tenant table.
        
        if($user == 'landlord'){
            $landlord = new Landlord();
            $landlord->registerLandlord($firstname, $lastname,$phone, $email,$password);
        }else if($user == 'tenant' ){
            $mytenant = new Tenant();
            $mytenant->registerTenant($firstname, $lastname,$phone, $email,$password);

        }

    }

    public function userIdentity($user,$email,$password){
        
        // A function to check who a user is before login the user in
        // If the user is a landlord, the system goes to the landlord table
        // to fetch the details of the user 
        // Otherwise, the system proceeds to the tenant table tofetch the details of the tenant
        // and the logs him/her in

        if($user == 'landlord'){
            $landlord = new Landlord();
            $landlord->loginLandlord($email,$password);
        }else if($user == 'tenant' ){
            $mytenant = new Tenant();
            $mytenant->loginTenant($email,$password);

        }elseif($user == "admin" ){
            $admin = new Admin();
            $admin->loginAdmin($email,$password);
        }

    }
    

    }







?>