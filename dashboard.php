<?php

$userid = $_POST["userid"];
$password = $_POST["password"];

if($userid == "GTCoding" && $password == "123456"){
    echo "<h1>Welcome, $userid</h1>";
} else {
    echo "Incorrect Login Details";
}


?>