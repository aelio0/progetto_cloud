<?php
session_start();
if( isset($_SESSION['id_user'])) { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php require "../components/header.php"?>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-200">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <h2 class="fw-bold mb-2 text-uppercase" id="h2">Introduzione</h2>
                    <p class="text-white-50 mb-5" id="p">
                    Questo è un progetto scolastico per la materia Sistemi e Reti che consiste nell'utilizzo di tecnologie imparate nel corso del quinto anno dell'ITIS informatico della scuola superiore ISIS Bernocchi. Le tecnologie utilizzate si trovano nell'header, premile per avere una descrizione sul loro utilizzo all'interno di questa pagina.
                    </p>

                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <script src="../scripts/aws.js"></script>
    <script src="../scripts/css.js"></script>
    <script src="../scripts/docker.js"></script>
    <script src="../scripts/homepage.js"></script>
    <script src="../scripts/html.js"></script>
    <script src="../scripts/introduction.js"></script>
    <script src="../scripts/javascript.js"></script>
    <script src="../scripts/mysql.js"></script>
    <script src="../scripts/php.js"></script>
</body>
</html>
<?php
}else{
    http_response_code(403);
    $array['message'] = "Non puoi accedere alla pagina senza aver eseguito il login";
    echo json_encode($array);
}
?>