<?php



$con = new mysqli('localhost', 'root', '', 'personal');

if ($con->connect_errno) {
    printf("Connect failed: %s\n", $con->connect_error);
    exit();
}
