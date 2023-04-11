<?php
session_start();

require_once('../functions/sanitize_string.php');
require_once('../config/db_connection.php');

//prende i valori dal form e li assegna alle variabili
$username = sanitize_string($_POST['username']); // sanitize
$password = sanitize_string($_POST['password']);

$prpstm = $conn->prepare("SELECT id, password FROM accounts WHERE email LIKE ? OR username LIKE ?");

$prpstm->bind_param('ss', $username, $username);

if($prpstm->execute()) {
    $prpstm->store_result();
    $prpstm->bind_result($id, $password_hash);
    $prpstm->fetch();

    if(!password_verify($password, $password_hash)){
        http_response_code(400);
        $array['message'] = "L'operazione non è andata a buon fine";
        echo json_encode($array);
    }

    if($id===NULL) {
        http_response_code(401);
        $array['message']="L'operazione non è andata a buon fine";
        echo json_encode($array);
    } else if ($id!=NULL) {
        $_SESSION['id_user']=$id;
        http_response_code(200);
        header("Location:../../public/homepage.php");
    }
}