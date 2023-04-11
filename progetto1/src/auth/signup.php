<?php
session_start();

require_once('../functions/sanitize_string.php');
require_once('../config/db_connection.php');

//prendo i dati
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$username = sanitize_string($username);
$email = sanitize_string($email);
$password = sanitize_string($password);

//se lo username contiene una @
if (str_contains($username, '@')) {
    $array['message'] = "L'operazione non è andata a buon fine, l'username non deve contenere il carattere @";
    echo json_encode($array);
}

$password_hash=password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO accounts (username, email, password) VALUES (?,?,?)";
$prpstm_insert = $conn->prepare($sql);
$prpstm_insert->bind_param('sss', $username, $email, $password_hash);

//se la query è andata a buon fine
if ($prpstm_insert->execute()) {
    http_response_code(200);
    header("Location:../../public/login.php");
} else {
    http_response_code(400);
    $array['message'] = "L'operazione non è andata a buon fine";
    echo json_encode($array);
}