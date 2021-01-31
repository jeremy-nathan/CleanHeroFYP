<?php

require_once '../GFirestore.php';
require_once '../GSubFirestore.php';


$cleaners = new Firestore("Cleaners");
$bookings = new Firestore("Bookings");


$bookingID = $_POST["bookID"];

$cleanerName = ($bookings->getDocument($bookingID))["Cleaner"];

$cleanerDocID = $cleaners->getID("Name","==",$cleanerName);

// Get current amount values
$bookingCurrentAmount = ($bookings->getDocument($bookingID))["CurrentAmount"];
$bookingRemainderAmount = ($bookings->getDocument($bookingID))["RemainderAmount"];

// Update amount values
$bookingCurrentAmount = $bookingCurrentAmount + $bookingRemainderAmount;

$cleanersBookings = new SubFirestore("Cleaners",$cleanerDocID,"BookingQueue");
$cleanerPreviousBookings = new SubFirestore("Cleaners",$cleanerDocID,"PreviousBookings");

$bookingData = $cleanersBookings->getDocument($bookingID);

$bookingEarnings = $bookingData["Earnings"];


$cleanersBookings->dropDocument($bookingID);

$cleanerPreviousBookings->createDocument($bookingID,$bookingData);

$updateBookingData = [
    [ 'path'=>'Completed' , 'value'=>true],
    [ 'path'=>'CurrentAmount' , 'value'=>$bookingCurrentAmount],
    [ 'path'=>'RemainderAmount' , 'value'=>0]    
];

$cleanerData = $cleaners->getDocument($cleanerDocID);
$currentIncome = $cleanerData["Income"];


$bookings->updateDocument($bookingID,$updateBookingData);



$newCleanerData = [
    [ 'path'=>'Income' , 'value'=>($currentIncome+$bookingEarnings) ]
];

$cleaners->updateDocument($cleanerDocID,$newCleanerData);

