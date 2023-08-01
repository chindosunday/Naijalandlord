<?php

require_once("dbconnection.php");
    class Location extends Db{

        public function fetchLocation(){

            $sql = "SELECT * FROM house_location ORDER BY location_id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $location = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $location;
        }


    }


// echo "<pre>";
// print_r($location);
// echo "</pre>";