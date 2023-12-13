<?php
use function couchbase\extension\query;

// use to fetch product data
class Product
{

    public $db = null;

    public function __construct(DBController $db)
    {
        if (! isset($db->con)) {
            return null;
        }
        $this->db = $db;
    }

    // fetch ussing getData method
    public function getData($table = 'product')
    {
        $result = $this->db->con->query("Select * from {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using product_id
    public function getProduct($item_id = null, $table = 'product')
    {
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM $table WHERE item_id={$item_id}");

            $result_array = array();

            // fetch data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $result_array[] = $item;
            }

            return $result_array;
        }
    }
}
