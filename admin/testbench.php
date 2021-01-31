<?php

require_once '../GFirestore.php';

$cleaners = new Firestore("Cleaners");

// var_dump($cleaners->getAllDocuments());
// $arr=[];
$arr=$cleaners->getWhere("Name","==","Cleaner 1");

printf(count($arr));
// for($i=0; $i<count($arr); $i++){
//     echo ($arr[$i]["Name"]);
// }

// print_r(count($arr));
//   dataString = 'totalGP=' + allgr + '&totalCR=' + allcr;
      // AJAX code to submit form.

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body> -->
    <!-- <p id='test'></p> -->
    <!-- <script type='text/javascript' src='script.js'></script> -->
<!-- </body> -->
<!-- </html> -->