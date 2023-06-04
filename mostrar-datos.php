<?php
    if(!isset($_POST)){
        //redireccionar a la Index si no llegan datos
        header('Location: index.php');
    }//end if
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Enlace</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Acción</a></li>
            <li><a class="dropdown-item" href="#">Otra acción</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Deshabilitado</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-info" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
    <div class="row g-3">
        <div class="col text-center">
            <h1>Información del Cliente</h1>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Direccion2</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Telefono 2</th>
                </tr>
            </thead>    
            <tbody>
                <tr>
                    <td><?php echo $_POST['txtNombre']; ?></td>
                    <td><?php echo $_POST['txtApellido']; ?></td>
                    <td><?php echo $_POST['txtDireccion']; ?></td>
                    <td><?php echo $_POST['txtDireccion2']; ?></td>
                    <td><?php echo $_POST['txtEmail']; ?></td>
                    <td><?php echo $_POST['txtTelefono']; ?></td>
                    <td><?php echo $_POST['txtTelefono2']; ?></td>

                </tr>
                <tr>
                    <td>Sara</td>
                    <td>Mejia</td>
                    <td>via perimetral</td>
                    <td>isla trinitaria</td>
                    <td>jefranc@est.istg.edu.ec</td>
                    <td>0941124144</td>
                    <td>0985311277</td>
                </tr>                
            </tbody>

        </table>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>