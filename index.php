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
    <nav class="navbar navbar-expand-lg bg-dark">
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
            <h1>Datos del Cliente</h1>
        </div>
    </div>
    <div class="container">
        <form class="row g-3 needs-validation" action="mostrar-datos.php" method="post" novalidate>
            <div class="col-sm-6 position-relative">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="Ej. Ariel" required>
                <div class="valid-tooltip">
                    Campo OK
                </div>
                <div class="invalid-tooltip">
                digite su nombres!
                </div>
            </div>
            <div class="col-sm-6 position-relative">
                <label for="txtApellido" class="form-label">Apellido</label>
                <input type="text" name="txtApellido" id="txtApellido" class="form-control" placeholder="Ej. Mendoza" required>
                <div class="valid-tooltip">
                    Campo OK
                </div>
                <div class="invalid-tooltip">
                digite su apellidos!
                </div>
            </div>
            <div class="col-sm-6 position-relative">
                <label for="txtDireccion" class="form-label">Direccion</label>
                <input type="text" name="txtDireccion" id="txtDireccion" class="form-control" placeholder="Ej. Via Perimetral" required>
                <div class="valid-tooltip">
                    Campo OK
                </div>
                <div class="invalid-tooltip">
                digite su direccion!
                </div>
            </div>
            <div class="col-sm-6 position-relative">
                <label for="txtDireccion2" class="form-label">Direccion2</label>
                <input type="text" name="txtDireccion2" id="txtDireccion2" class="form-control" placeholder="Ej. Via Perimetral" required>
                <div class="valid-tooltip">
                    Campo OK
                </div>
                <div class="invalid-tooltip">
                digite su direccion2!
                </div>
            </div>
            <div class="col-sm-6 position-relative">
                <label for="txtEmail" class="form-label">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Ej. jefranco@est.istg.edu.ec" required>
                <div class="valid-tooltip">
                    Campo OK
                </div>
                <div class="invalid-tooltip">
                digite su correo electronico!
                </div>
            </div>
            <div class="col-sm-6 position-relative">
                <label for="txtTelefono" class="form-label">Telefono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control" placeholder="Ej. 0954272442" required>
                <div class="valid-tooltip">
                    Campo OK
                </div>
                <div class="invalid-tooltip">
                digite su numero de telefono !
                </div>
            </div>
            <div class="col-sm-6 position-relative">
                <label for="txtTelefono2" class="form-label">Telefono 2</label>
                <input type="tel" name="txtTelefono2" id="txtTelefono2" class="form-control" placeholder="Ej. 0954272442" required>
                <div class="valid-tooltip">
                    Campo OK
                </div>
                <div class="invalid-tooltip">
                digite su numero de telefono 2 !
                </div>
            </div>

            <div class="col-sm-12 ">
                <button type="submit" name="btnEnviar" class="btn btn-outline-dark bg-primary" value="Enviar">Enviar</button>
            </div>

        </form>
    </div>

    <script>
        // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
(function () {
  'use strict'

  // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
  var forms = document.querySelectorAll('.needs-validation')

  // Bucle sobre ellos y evitar el envío
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>