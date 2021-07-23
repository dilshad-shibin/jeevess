<?php

if(isset($_POST['submit']) and !empty($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $source=$_POST['esource'];

    $mail1_subject="Jeevess Enquiry from Website, " . $name;
    $mail1_txt="Name :" . $name . "<br>" . "Mobile :" . $phone . "<br>" . "E-Mail :" . $email . "<br>" . "Message :" . $message . "<br>" . "Source :" . $source . "<br>";


// More headers
$headers .= 'From: <info@jeevess.in>' . "\r\n";

$to = "viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com, leads.viralmafia@gmail.com, info@jeevess.in, jeevessayurvedam@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmailerjeevess.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:sucess/index.html");
    }
}


if(isset($_POST['booknow']) and !empty($_POST['booknow'])){
    $arriving=$_POST['arriving'];
    $guests=$_POST['guests'];
    $cottagetype=$_POST['cottagetype'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $source=$_POST['esource'];

    $mail1_subject="Jeevess Booking Enquiry from Website, " . $name;
    $mail1_txt="Name :" . $name . "<br>" . "Mobile :" . $phone . "<br>" . "E-Mail :" . $email . "<br>" . "Arriving Date :" . $arriving . "<br>" . "No of Guests :" . $guests . "<br>" . "Cottage Type :" . $cottagetype . "<br>" . "Source :" . $source . "<br>";


// More headers
$headers .= 'From: <info@jeevess.in>' . "\r\n";

$to = "viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com, leads.viralmafia@gmail.com, info@jeevess.in, jeevessayurvedam@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmailerjeevess.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:sucess/index.html");
    }
}


?>