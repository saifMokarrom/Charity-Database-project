<?php

$scon = mysqli_connect('localhost','root');

if ($scon){
    echo "Connection Successful";
}
else{
    echo "Connection Failed";
}

mysqli_select_db($scon, 'receiver_request');

$id = $_POST['personal_userId'];
$nid = $_POST['personal_nid'];
$name = $_POST['personal_name'];
$email = $_POST['personal_email'];
$address = $_POST['personal_address'];
$request_reason = $_POST['personal_whyrequest'];

$query = "INSERT INTO personal (personal_userId, personal_nid, personal_name, personal_email, personal_address, personal_whyrequest) VALUES('$id', '$nid', '$name', '$email',  '$address', '$request_reason')";
mysqli_query($scon,$query);

header('location:receiver.php');

?>