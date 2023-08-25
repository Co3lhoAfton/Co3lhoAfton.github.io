<?php
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php';</script>";
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sitezin/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-4">
            <div class="card-body">
            <h5 class="card-title">Prosseguir para o site</h5>
            <p class="card-text">Clique neste botão para prosseguir.</p>
            <a href="sitezin/index.html" class="btn btn-secondary">Prosseguir</a>
          </div>
</body>
</html>

            </div>
        </div>
    </div>
