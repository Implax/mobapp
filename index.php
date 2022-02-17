<?php
    $sessionid = $_POST["sessionId"];

    $serviceCode = $_POST["serviceCode"];

    $phoneNumber = $_POST["phoneNumber"];

    $text = $_POST["text"];

    if ($text == ""){
        //First Request
        $response = "CON What would you want to check \n"."<br>";
        $response .= "1. Ashesi Student Account \n"."<br>";
        $response .= "2. My Phone Number \n"."<br>";

    } else if ($text == "1"){
        //First Level Response
        $response = "CON Student information you want to view \n"."<br>";
        $response .= "1. Student ID Number \n"."<br>";
        $response .= "2. Student Major \n"."<br>";

    } else if ($text == "2"){
        $response = "END Your phone number is ".$phoneNumber;

    } else if ($text == "1*1") {
        $studentID = "12462023"; //HardCoded. Database to be added later

        //A terminal request

        $response = "END Your account Number is".$studentID;
    } else if ($text = "1*2") {
        $major = "Computer Science"; //Hardcoded. Database to be added later

        $response = "END Your major is ".$major;
    }

    // header('Content-type: text/plain');
    echo $response;

?>

