<?php
$hostname="ec2-54-165-9-180.compute-1.amazonaws.com";
$username="user";
$password="user";
$database="progetto_cloud";
$port="3306";

$conn=new mysqli($hostname,$username,$password,$database,$port);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}