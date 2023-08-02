<?php 


    
    extract($_POST);
    //ini_set('display_errors', 'On');

    require_once("../../inc/connection.php");
    require_once("../../firebase/firebase.php");
    require_once ("../../firebase/push.php");

    $firebase = new Firebase(); //object oriented programming in php 
    $push = new Push();
    $payload['subject'] = $txttitle;
    $payload['detail'] = $txtcontent;
    $payload['activityindex'] = "1"; //means app must open categorycontainer
    $push->setIsBackground(FALSE);
    $push->setPayload($payload);
    $json = '';
    $response = '';
    $json = $push->getPush();
    if($regid==-1) //send message to all users (global message)
    {
        $TopicName = "global";
        $response = $firebase->sendToTopic($TopicName,$json);
        //echo $response; //debug message;
    }
    else //send message to only selected user (personal message)
    {
        $response = $firebase->send($regid,$json);
        //echo $response; //debug message;
    }
    header("location:../customer.php?msg=Message Sent successfully");
?>