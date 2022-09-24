<?php

$ip = '192.333.0.1';

 // validate ip address
if (filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is not a valid IP address");
} else {
    echo("$ip is a valid IP address");
}



?>