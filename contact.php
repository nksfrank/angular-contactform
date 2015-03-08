<?php
$ra = json_decode(file_get_contents('php://input'));

$err = array();
$r = array();

if(empty($ra->{"name"}))
    $err['name'] = "Name is required";
if(empty($ra->{"alias"}))
    $err['alias'] = "What shall we call you?";
if(empty($ra->{"email"}))
    $err['email'] = "Valid Email is required";
if(empty($ra->{"message"}))
    $err['message'] = "Message can't be empty";

$data['success'] = true;
if(!empty($err)) {
    $data['success'] = false;
    $data['err'] = $err;
}

echo json_encode($data);
?>