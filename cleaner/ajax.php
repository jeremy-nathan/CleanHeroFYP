<?php

require_once '../GFirestore.php';

$cleaners = new Firestore("Cleaners");

$cleanerID = $_POST["cleaner"];

$cleanerDocID = $cleaners->getID("ID","==",$cleanerID);

$cleaner = $cleaners->getDocument($cleanerDocID);

echo(json_encode($cleaner));


