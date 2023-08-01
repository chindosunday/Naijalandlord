<?php


require_once("dbconnection.php");

    class Property extends Db{
        public function getPropertyDetail($house_id){
        $sql="SELECT * FROM landlord_house INNER JOIN landlord ON landlord_house.landlord_id = 
        landlord.landlord_id JOIN house_location WHERE house_id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$house_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //     public function deleteProperty($house_id){
    //     $sql = "DELETE FROM landlord_house WHERE house_id = ?";
    //     $stmt = $this->connect()->prepare($sql);
    //     $housedeleted = $stmt->execute([$house_id]);
    //     if($housedeleted){
    //         header("location:../houselistings.php");
    //         exit();
    //     }
    // }

}






?>