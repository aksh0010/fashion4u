<?php

ob_start();

class User
{
    public $db = null;

    public function __construct(Database $db)
    {
        if (!isset($db->con))
            return null;
        $this->db = $db;
    }

    public function addUser($user_name, $user_password)
    {
        $query_string = "INSERT INTO `user` VALUES (NULL, '$user_name', '$user_password');";

        $result = $this->db->con->query($query_string);
        if ($result) {
            header("Location:" . $_SERVER['PHP_SELF']);
        }

        return $this->getUserId($user_name, $user_password);
    }

    public function getUserName($user_id = 1)
    {
        $result = $this->db->con->query("SELECT user_name FROM `user` WHERE user_id = '$user_id';");
        $count = $result->num_rows;
        if ($count > 0)
            return mysqli_fetch_row($result)[0];
        else
            return 'User';
    }

    public function getUserId($user_name, $user_password)
    {

        $result = $this->db->con->query("SELECT user_id FROM `user` WHERE user_name = '$user_name' AND user_password = '$user_password';");

        $count = $result->num_rows;

        if ($count > 0)
            return mysqli_fetch_row($result)[0];
        return 1;
    }

    public function verifyNewUser($user_name, $user_password)
    {
        $result = $this->db->con->query("SELECT user_name FROM `user` WHERE user_name = '$user_name';");

        $count = $result->num_rows;
        if ($count > 0)
            return true;
        else
            return false;
    }
}
