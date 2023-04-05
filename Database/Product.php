<?php

ob_start();

class Product
{
    public $db = null;

    public function __construct(Database $db)
    {
        if (!isset($db->con))
            return null;
        $this->db = $db;
    }

    public function getProduct($table = 'product')
    {
        $result =  $this->db->con->query("SELECT * FROM ($table)");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getProductOfCategory($category, $table = 'product')
    {
        $result =  $this->db->con->query("SELECT * FROM ($table) WHERE item_category = '$category'");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }
    public function getProductbyGender($gender, $table = 'product')
    {
        $result =  $this->db->con->query("SELECT * FROM ($table) WHERE gender = '$gender'");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}
