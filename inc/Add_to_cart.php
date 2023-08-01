<?php
session_start();
include("./functions.php");
//prevent browsing to this script
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(403);
    echo "<h1>" . http_response_code() . " Forbidden</h1>";
    exit();
}
//add to cart script
$code = "";
//Response Message
$msg = "";
//add to cart from POST request
$service_id = $_POST['service_id'];
$service = new Service;
$code = $service->add_to_cart($service_id);
$status = array("response_code" => $code, "message" => $msg);
//echo out the response in a JSON file
echo json_encode($status);
