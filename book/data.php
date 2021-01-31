<?php

session_start();

require_once '../GFirestore.php';
require_once '../GSubFirestore.php';

$category=$_POST["category"];

$services = new Firestore("Services");

$data = $services->getDocument("$category");

echo json_encode($data);

        /**
         * var test = JSON.parse( '<?php echo json_encode($data) ?>' );
         * console.log(test.Price[0]);
         * **/
    


