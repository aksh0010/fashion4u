<?php
// php Cart class

class Cart
{
    public $db = null;

    public function __construct(Database $db)
    {
        if (!isset($db->con))
            return null;
        $this->db = $db;
    }


    public function addToTable($item_id, $table = 'cart', $user_id = '1')
    {
        $query_string = "INSERT INTO `$table` VALUES (NULL, '$user_id', '$item_id');";

        $result = $this->db->con->query($query_string);
        if ($result) {
            header("Location:" . $_SERVER['PHP_SELF']);
        }
    }

    public function getCount($user_id = 1, $table = 'cart')
    {
        $result = $this->db->con->query("SELECT COUNT(item_id) FROM $table WHERE user_id = '$user_id';");

        return mysqli_fetch_row($result)[0];
    }



    public function getCartItems($table = 'cart', $user_id = '1')
    {
        // $result = $this->db->con->query("SELECT item_id FROM `cart`");
        if ($table == 'cart')
            $result = $this->db->con->query("SELECT * FROM `product`,`cart` WHERE cart.item_id = product.item_id AND user_id = '$user_id';");
        else if ($table == 'wishlist')
            $result = $this->db->con->query("SELECT * FROM `product`,`wishlist` WHERE wishlist.item_id = product.item_id AND user_id = '$user_id';");

        $num = mysqli_num_rows($result);

        $resultArray = array();

        if ($num > 0) {
            while ($item = mysqli_fetch_assoc($result)) {
                $resultArray[] = $item;
            }
        }

        return $resultArray;
    }

    public function getCartTotal($user_id = 1)
    {
        $result = $this->db->con->query("SELECT item_price FROM `product`,`cart` WHERE cart.item_id = product.item_id AND user_id = '$user_id';");

        $num = mysqli_num_rows($result);

        $resultArray = array();

        if ($num > 0) {
            while ($item = mysqli_fetch_assoc($result)) {
                $resultArray[] = $item;
            }
        }

        $total = 0;
        foreach ($resultArray  as $price) {
            $total = $total + $price['item_price'];
        }

        return $total;
    }

    public function deleteFromCart($table = 'cart', $user_id = '1', $item_id)
    {
        if ($item_id != null) {
            $result = $this->db->con->query("DELETE FROM `$table`  WHERE item_id = '$item_id' AND user_id = '$user_id';");
            if ($result) {
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function getItemIdFromCartId($table = 'cart', $user_id = '1')
    {
        $result = $this->db->con->query("SELECT item_id FROM `$table` WHERE user_id = '$user_id';");

        $num = mysqli_num_rows($result);

        $resultArray = array();
        $itemIds = array();
        if ($num > 0) {
            while ($item = mysqli_fetch_assoc($result)) {

                $resultArray[] = $item;
            }
        }

        foreach ($resultArray  as $item) {
            array_push($itemIds, $item['item_id']);
        }

        return $itemIds;
    }
}
