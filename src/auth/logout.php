<?php
session_start();
session_destroy();
$array=array();
$array['message']="L'operazione è andata a buon fine, logout effettuato con successo";
echo json_encode($array);