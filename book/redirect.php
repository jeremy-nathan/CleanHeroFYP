<?php

session_start();

require_once "./fpdf.php";
require_once '../GFirestore.php';
require_once '../GSubFirestore.php';

$bookings = new Firestore("Bookings");
$cleaners = new Firestore("Cleaners");


$data = [
    "Booking ID" => $_SESSION["tid"],
    "Address" => $_SESSION["address1"] . ' ' . $_SESSION["address2"] . ' ' . $_SESSION["postcode"] .  ' ' . $_SESSION["city"],
    "Date" => $_SESSION["bookDate"],
    "Start Time" => $_SESSION["startTime"],
    "Number Of Hours" => $_SESSION["noOfHours"],
    "Full Name" => $_SESSION["fullName"],
    "Phone Number" => $_SESSION["phoneNumber"],
    "IC Number" => $_SESSION["icNo"],
    "Amount" => $_SESSION["totalPrice"],
    "CurrentAmount" => $_SESSION["currentAmount"],
    "RemainderAmount" => $_SESSION["remainderAmount"],
    "Cleaner" => 'Unassigned',
    "Completed" => false,
    "Services" => $_SESSION["categories"],
];

$bookingQueueData = [
    "Booking ID" => $_SESSION["tid"],
    "Address" => $_SESSION["address1"] . ' ' . $_SESSION["address2"] . ' ' . $_SESSION["postcode"] .  ' ' . $_SESSION["city"],
    "Date" => $_SESSION["bookDate"],
    "Start Time" => $_SESSION["startTime"],
    "Number Of Hours" => $_SESSION["noOfHours"],
    "Earnings" => (0.4 * $_SESSION["totalPrice"]),
    "Completed" => false,
];

// Create a new document for the new booking
$bookings->createDocument($_SESSION["tid"],$data);


// Retrieve list of all cleaners
$listOfCleaners = $cleaners->getAllDocuments();

$listOfCleanersID; //empty variable

$listOfCleanersEarnings;


foreach($listOfCleaners as $cleaner){

    $listOfCleanersID[] = $cleaner["ID"]; //Insert all the cleaner's ID into the empty variable (as an array)

    $cleanerDocID = $cleaners->getID("ID","==",$cleaner["ID"]);

    // Retrieve current income of each cleaner. Key is the document ID, value is the income of the cleaner
    $listOfCleanersEarnings[$cleanerDocID] =  $cleaners->retrieveField($cleanerDocID,"Income");

}

$numOfUnassignedCleaners = 0; //Initialise the number of unassigned cleaner to 0
$listOfUnassignedCleaners; // empty variable
$unassignedCleanersEarnings; // empty list of unassigned cleaner's total income

// Find a cleaner that is not assigned yet
foreach($listOfCleanersID as $cleanerID){

    // Get the document ID of the cleaner
    $cleanerDocID = $cleaners->getID("ID","==",$cleanerID);

    $currentQueue = new SubFirestore("Cleaners",$cleanerDocID,"BookingQueue");

    // Get list of all current bookings assigned to that cleaner
    $currentQueueDoc = $currentQueue->getAllDocuments();

    // If the cleaner has no bookings
    if(empty($currentQueueDoc)){   
        $listOfUnassignedCleaners[] = $cleanerDocID; //Cleaner's document ID is inserted into the list of unassigned cleaners
        $numOfUnassignedCleaners++; //Increase the number of unassigned cleaners by 1
    }
}

if ($numOfUnassignedCleaners >= 1){ // checks if the number of unassigned cleaners is more than 1

    foreach($listOfUnassignedCleaners as $unassignedCleaner){

        $emptyQueue = new SubFirestore("Cleaners",$unassignedCleaner,"BookingQueue");

        // key is document ID, value is the Income of the unassigned cleaner,
        $unassignedCleanersEarnings[$unassignedCleaner] = $cleaners->retrieveField($unassignedCleaner,"Income");
    }
    
    $lowestIncomeUnassignedCleaner = array_keys($unassignedCleanersEarnings,min($unassignedCleanersEarnings));
    $currentQueue = new SubFirestore("Cleaners",$lowestIncomeUnassignedCleaner[0],"BookingQueue");
    $currentQueue->createDocument($_SESSION["tid"],$bookingQueueData);

    $chosenCleaner = $cleaners->retrieveField($lowestIncomeUnassignedCleaner[0],"Name");
    $newBookingData = [
        ['path' => "Cleaner", 'value' => $chosenCleaner]
    ];
    $bookings->updateDocument($_SESSION["tid"],$newBookingData);



}
else{
    
    $lowestIncomeCleaner = array_keys($listOfCleanersEarnings,min($listOfCleanersEarnings));
    $currentQueue = new SubFirestore("Cleaners",$lowestIncomeCleaner[0],"BookingQueue");
    $currentQueue->createDocument($_SESSION["tid"],$bookingQueueData);

    $chosenCleaner = $cleaners->retrieveField($lowestIncomeCleaner[0],"Name");
    $newBookingData = [
        ['path' => "Cleaner", 'value' => $chosenCleaner]
    ];
    $bookings->updateDocument($_SESSION["tid"],$newBookingData);

}

$fullAddress = $_SESSION["address1"] . ' ' . $_SESSION["address2"];



/*A4 width : 219mm*/

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
/*output the result*/

/*set font to arial, bold, 14pt*/
$pdf->SetFont('Arial','B',20);

/*Cell(width , height , text , border , end line , [align] )*/

$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,5,'CleanHero Invoice',0,0);
$pdf->Cell(59 ,10,'',0,1);

$pdf->SetFont('Arial','B',15);
// $pdf->Cell(71 ,5,'WET',0,0);
$pdf->Cell(5,5,'',0,0);
$pdf->Cell(59 ,5,'Details',0,1);
$pdf->Ln(7);
$pdf->SetFont('Arial','',10);

// $pdf->Cell(130 ,5,'Near DAV',0,0);
$pdf->Cell(25 ,5,'Customer :',0,0);
$pdf->Cell(34 ,5,$_SESSION["fullName"],0,1);

// $pdf->Cell(130 ,5,'Delhi, 751001',0,0);
$pdf->Cell(25 ,5,'Invoice Date:',0,0);
$pdf->Cell(34 ,5,$_SESSION["bookDate"],0,1);
 
$pdf->Cell(80 ,5,'',0,0);
$pdf->Cell(50 ,5,'Invoice No:',0,0,'R');
$pdf->Cell(10 ,5,$_SESSION["tid"],0,1,'L');


$pdf->SetFont('Arial','B',15);
// $pdf->Cell(130 ,5,'Bill To',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(90 ,6,'Service',1,0,'C');
// $pdf->Cell(80 ,6,'Items',1,0,'C');
// $pdf->Cell(23 ,6,'Qty',1,0,'C');
$pdf->Cell(90 ,6,'Price',1,0,'C');
$pdf->Ln(7);
// $pdf->Cell(20 ,6,'Sales Tax',1,0,'C');
// $pdf->Cell(25 ,6,'Total',1,1,'C');/*end of line*/


/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);

$items = $_SESSION["items"]; 

foreach($_SESSION["items"] as $str){
    preg_match_all('!\d+!', $str, $matches);
    $arr[]=$matches;
}

foreach($items as $item){
    foreach($_SESSION["categories"] as $category){
        if(strpos($item,$category)){

            $a=str_replace($category,'',$item);
            $pdf->Cell(90 ,6,$category,1,0);
            // $pdf->Ln(7);
            $pdf->Cell(90 ,6,$a,1,0,'L');
            $pdf->Ln(7);

                }
            }
        }


// //EIS
// $pdf->Cell(38,6,'EIS',1,0,'C');
// $pdf->Cell(3,8,'',0); //cell without borders
// $pdf->Cell(45,6,number_format(243546,2),1,0,'R');
// $pdf->Cell(3,8,'',0); //cell without borders
// $pdf->Cell(45,6,number_format(43576,2),1,0,'R');
// $pdf->Cell(3,8,'',0); //cell without borders
// $pdf->Cell(45,6,number_format(432543654,2),1,0,'R');
// // Line break
// $pdf->Ln(7);


// foreach ($_SESSION["priceList"] as $priceList) {
//     $pdf->Cell(10 ,6,$i,1,0);
//     $pdf->Cell(80 ,6,'HP Laptop',1,0);
//     $pdf->Cell(23 ,6,'1',1,0,'R');
//     $pdf->Cell(30 ,6,'15000.00',1,0,'R');
//     $pdf->Cell(20 ,6,'100.00',1,0,'R');
//     $pdf->Cell(25 ,6,'15100.00',1,1,'R');
// }
		
$pdf->Ln(7);
$pdf->Cell(90 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',1,0,'L');
$pdf->Cell(55 ,6,'RM '.$_SESSION["totalPrice"].'',1,1,'L');


$pdf->Output();

// header("Location: redirect.php");
?>
