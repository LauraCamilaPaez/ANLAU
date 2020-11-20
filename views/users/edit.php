<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="all/img/title1.png" type="image/x-icon">
    <title>Editar Usuario</title>
</head>
<body>

<header>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="all/img/nav1.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            ANLAU
        </a>
    </nav>
</header>

<section>
    <form action="?controller=Users&method=update_user&id=<?php echo $user->id_users?>" method="post">
        <div class="container mt-5">
            <div class="col-md-8 ml-5"">
            <h3 class="mb-4">Aquí podrás actualizar tus credenciales como Usuario de ANLAU</h3>
            <div class="form-group">
                <label for="names">Nombres</label>
                <input value="<?php echo $user->names?>" type="text" class="form-control" id="names" aria-describedby="emailHelp" name="names" required>
            </div>
            <div class="form-group">
                <label for="last_names">Apellidos</label>
                <input value="<?php echo $user->last_names?>" type="text" class="form-control" id="last_names" name="last_names" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input value="<?php echo $user->email?>" type="email" class="form-control" id="email" name="email" required>

                <button type="submit" class="btn btn-success mt-3">Actualizar Usuario</button>
            </div>
        </div>
        </div>


    </form>
</section>
</body>
</html>