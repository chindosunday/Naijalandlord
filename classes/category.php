<?php

require_once("dbconnection.php");
    class Category extends Db{

        public function fetchCategories(){

            $sql = "SELECT * FROM category ORDER BY cat_id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $categories;
        }


    }


// echo "<pre>";
// print_r($category);
// echo "</pre>";


?>