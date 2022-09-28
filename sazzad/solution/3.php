<?php

$ip = '192.333.0.1';

 // validate ip address
if (filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is not a valid IP address");
} else {
    echo("$ip is a valid IP address");
}

// email validation by curl by function
function validate_email($email)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://apilayer.net/api/check?access_key=YOUR_ACCESS_KEY&email=$email&smtp=1&format=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($output, true);
    if ($data['format_valid'] == 1 && $data['smtp_check'] == 1) {
        return true;
    } else {
        return false;
    }
}

// if validate email is true then print valid email
if (validate_email('sazzad.sumon35@gmail.com')) {
    echo 'Valid Email';
} else {
    echo 'Invalid Email';
}

// sms otp by mobile number by function
function send_sms($mobile, $message)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.greenweb.com.bd/api.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "token=YOUR_TOKEN&to=$mobile&message=$message");
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}

?>