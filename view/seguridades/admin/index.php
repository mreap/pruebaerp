<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Seguridades Admin</title>
</head>
<body>
    <style>
        body {
  margin: 0;
  padding: 0;
}

/* Estilos del menú */
.menu {
  width: 200px; /* Ancho del menú */
  background-color: #f2f2f2;
}

.menu ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.menu ul li a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #333;
}

.menu ul li a:hover {
  background-color: #ddd;
}

/* Estilos responsivos */
@media screen and (max-width: 600px) {
  .menu {
    width: 100%; /* Menú ocupa todo el ancho en pantallas pequeñas */
  }
}
    </style>
    <div class="menu">
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Acerca de</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </div>
</body>
</html>