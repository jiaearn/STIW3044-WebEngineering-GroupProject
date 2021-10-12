<?php
$servername = "localhost";
$username   = "hubbuddi_asiatopuadmin";
$password   = "UiW#vf.^qlVW";
$dbname     = "hubbuddi_asiatopu";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>