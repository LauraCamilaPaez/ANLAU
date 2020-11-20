<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="all/img/title1.png" type="image/x-icon">
    <title>ANLAU</title>
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
        <div class="container mt-5">
            <div class="col-sm-12">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Descripción</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user) {?>

                    <tr>
                        <td><?php echo $user->id_users ?></td>
                        <td><?php echo $user->names ?></td>
                        <td><?php echo $user->last_names ?></td>
                        <td><?php echo $user->email ?></td>

                        <td>
                            <a href="?controller=Users&method=Create" class="btn btn-success">CREAR</a>
                            <a href="?controller=Users&method=update&id=<?php echo $user->id_users?>" class="btn btn-primary">EDITAR</a>
                            <a href="?controller=Users&method=destroy&id=<?php echo $user->id_users?>" class="btn btn-danger">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </section>
    
    <script src="all/js/scripts.js"></script>
</body>
</html>