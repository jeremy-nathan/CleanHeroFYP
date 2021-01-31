<?php

require_once '../GFirestore.php';
require_once '../GSubFirestore.php';


$cleaners = new Firestore("Cleaners");
$bookings = new Firestore("Bookings");


$newCleanerID = $_POST["ID"];
$bookingID = $_POST["bookingID"];

$currentCleanerName = $bookings->retrieveField($bookingID,"Cleaner");
$currentCleanerDocID = $cleaners->getID("Name","==",$currentCleanerName);

$newCleanerDocID = $cleaners->getID("ID","==",$newCleanerID);
$newCleanerName = $cleaners->retrieveField($newCleanerDocID,"Name");

$updateData = [
    ['path' => 'Cleaner', 'value' => $newCleanerName]
];

$currentCleanerBooking = new SubFirestore("Cleaners",$currentCleanerDocID,"BookingQueue");
$newCleanerBooking = new SubFirestore("Cleaners",$newCleanerDocID,"BookingQueue");

$bookingData = $currentCleanerBooking->getDocument($bookingID);

$currentCleanerBooking->dropDocument($bookingID);
$newCleanerBooking->createDocument($bookingID,$bookingData);

$bookings->updateDocument($bookingID,$updateData);

echo json_encode(array('booking' => $bookingID, 'newCleaner' => $newCleanerName));

