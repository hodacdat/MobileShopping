<?php

class Cart
{

    public $db = NULL;

    public function __construct(DBController $db)
    {
        if (! isset($db->con))
            return null;
        $this->db = $db;
    }

    // insert into cart table
    public function insertIntoCart($params = null, $table = "cart")
    {
        if ($this->db->con != null) {
            if ($params != null) {
                // insert into cart(user_id) values (O)
                // get table columns
                $columns = implode(',', array_keys($params));
                // print_r($params);
                $values = implode(',', array_values($params));
                // print_r($values);

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                // print_r($query_string);

                // execute query
                $result = $this->db->con->query($query_string);
            }
        }
    }

    // get id when press add to cart and insert into cart table
    public function addToCart($userId, $itemId)
    {
        if (isset($userId) && isset($itemId)) {
            $params = array(
                "user_id" => $userId,
                "item_id" => $itemId
            );

            // insert into cart
            $result = $this->insertIntoCart($params);
            if ($result) {
                // reload page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    // calculate subtotal
    public function getSum($arr)
    {
        if (isset($arr)) {
            $sum = 0;
        }
        foreach ($arr as $item) {
            $sum += floatval($item[0]);
        }

        return sprintf('%.2f', $sum);
    }
}