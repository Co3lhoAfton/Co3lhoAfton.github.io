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
        <div class="card">
            <div class="card-body">
                    <h3>login</h3>
                </div>
            <div class="card-body">
                
            <form action="login.php" method="POST">
                    <div>
                        <div class="mb-3">
                            <label>usuario</label>
                            <input type="text" name="usuario" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <label>senha</label>
                            <input type="password" name="senha" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <label></label>
                            <button type="submit" class="btn btn-secondary">entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
</body>
</html>