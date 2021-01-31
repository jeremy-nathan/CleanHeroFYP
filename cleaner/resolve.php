<?php

require_once '../GFirestore.php';

$complaints = new Firestore("Complaints");

$resolveValue = $_POST["resolve"];

$complaintID = $complaints->getID("Booking ID","==",$resolveValue);

$newData = [
    ['path' => "Status", 'value' => "Resolved"]
];

$complaints->updateDocument($complaintID,$newData);

echo $complaintID;


