<?php
session_start();

$url = "https://script.google.com/macros/s/AKfycbx1HXiVbnQqeUpmTXXi_HtbI4i0uriaeZX3LRs1Q1griJrtlgO-DZ10ky2DHokGqVcY/exec";
$postData = [
   "action" => "signup",
   "name" => $_POST['name'],
   "email" => $_POST['email'],
   "password" => $_POST['password']
];

$ch = curl_init($url);
curl_setopt_array($ch, [
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_POSTFIELDS => $postData
]);

$result = curl_exec($ch);
$result = json_decode($result, 1);

if($result['status'] == "success"){
   $_SESSION['success'] = "Аккаунт был создан!";
   header("location: signup.php");
}else{
   $_SESSION['error'] = $result['message'];
   header("location: signup.php");
}
