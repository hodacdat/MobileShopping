// <?php
// use function couchbase\extension\query;

// // use to fetch product data
// class Blog
// {

//     public $db = null;

//     public function __construct(DBController $db)
//     {
//         if (! isset($db->con)) {
//             return null;
//         }
//         $this->db = $db;
//     }

//     // fetch ussing getData method
//     public function getData($table = 'product')
//     {
//         $result = $this->db->con->query("Select * from {$table}");

//         $resultArray = array();

//         // fetch product data one by one
//         while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//             $resultArray[] = $item;
//         }

//         return $resultArray;
//     }
// }
