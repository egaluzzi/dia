<?php session_start();
  include 'funct/conexion.php';

  //CONSULTA historial de cuotas.
        $sql_cargar = "SELECT * FROM dia";
        $query = mysqli_query($enlace, $sql_cargar);
        $row = mysqli_fetch_array($query);

        $EE1 = $row['EE1'];
        $ER1 = $row['ER1'];
        $EE2 = $row['EE2'];
        $ER2 = $row['ER2'];
        $EE3 = $row['EE3'];
        $ER3 = $row['ER3'];

        $B1E1 = $row['B1E1'];
        $B1E2 = $row['B1E2'];
        $B1E3 = $row['B1E3'];
        $B1E4 = $row['B1E4'];
        $B1R = $row['B1R'];
        $B1M = $row['B1M'];

        $B2E1 = $row['B2E1'];
        $B2E2 = $row['B2E2'];
        $B2E3 = $row['B2E3'];
        $B2E4 = $row['B2E4'];
        $B2R = $row['B2R'];
        $B2M = $row['B2M'];

        $B3E1 = $row['B3E1'];
        $B3E2 = $row['B3E2'];
        $B3E3 = $row['B3E3'];
        $B3E4 = $row['B3E4'];
        $B3R = $row['B3R'];
        $B3M = $row['B3M'];
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Vukova Training Club</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="html/css/style.min.css" rel="stylesheet">

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" style="background-color: #E92468;">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ali">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="carga.php" id="navbarDropdown" role="button" >
                                <img src="assets/images/logo2.png">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row align-items-center">

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/entradaencalor.png"
                                    alt="Card image cap">
                                <div class="card-body little-profile text-center">
                                    <h3 class="mb-0"><?php echo strtoupper($EE1); ?></h3>
                                    <h4 class="mb-0 "><?php echo strtoupper($ER1); ?></h4>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($EE2); ?></h3>
                                    <h4 class="mb-0 "><?php echo strtoupper($ER2); ?></h4>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($EE3); ?></h3>
                                    <h4 class="mb-0 "><?php echo strtoupper($ER3); ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/bloqueuno.png"
                                    alt="Card image cap">
                                <div class="card-body little-profile text-center">
                                    <h3 class="mb-0"><?php echo strtoupper($B1E1); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B1E2); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B1E3); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B1E4); ?></h3>
                                    <br>
                                    <h2 class="mb-0 "><?php echo strtoupper($B1R); ?></h2>
                                    <h2 class="mb-0 "><?php echo strtoupper($B1M); ?></h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/bloquedos.png"
                                    alt="Card image cap">
                                <div class="card-body little-profile text-center">
                                    <h3 class="mb-0"><?php echo strtoupper($B2E1); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B2E2); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B2E3); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B2E4); ?></h3>
                                    <br>
                                    <h2 class="mb-0 "><?php echo strtoupper($B2R); ?></h2>
                                    <h2 class="mb-0 "><?php echo strtoupper($B2M); ?></h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/bloquetres.png"
                                    alt="Card image cap">
                                <div class="card-body little-profile text-center">
                                    <h3 class="mb-0"><?php echo strtoupper($B3E1); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B3E2); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B3E3); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B3E4); ?></h3>
                                    <br>
                                    <h2 class="mb-0 "><?php echo strtoupper($B3R); ?></h2>
                                    <h2 class="mb-0 "><?php echo strtoupper($B3M); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h1><div class="reloj card-body text-center" id="reloj"></div></h1>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="html/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="html/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="html/js/custom.js"></script>
    <script type="text/javascript">
        // Define una función para actualizar la hora mostrada en la página web.
    function actualizarHora() {
    // Obtiene el elemento HTML con el ID 'reloj'.
    const reloj = document.getElementById('reloj');
    
    // Crea un nuevo objeto Date que contiene la fecha y hora actual.
    const ahora = new Date();
    
    // Obtiene las horas de la fecha actual y agrega un cero al principio si es necesario.
    const horas = agregarCero(ahora.getHours());
    
    // Obtiene los minutos de la fecha actual y agrega un cero al principio si es necesario.
    const minutos = agregarCero(ahora.getMinutes());
    
    // Obtiene los segundos de la fecha actual y agrega un cero al principio si es necesario.
    const segundos = agregarCero(ahora.getSeconds());
    
    // Actualiza el contenido del elemento 'reloj' con la hora actual en formato HH:MM:SS.
    reloj.textContent = `${horas}:${minutos}:${segundos}`;
    }
    // Define una función para agregar un cero al principio de los números menores a 10.
    function agregarCero(numero) {
    // Si el número es menor que 10, devuelve el número con un '0' al principio.
    // De lo contrario, devuelve el número tal cual.
    return numero < 10 ? '0' + numero : numero;
    }

// Establece un temporizador que llama a la función `actualizarHora` cada 1000 milisegundos (1 segundo),
// para actualizar la hora mostrada en la página web de manera continua.
setInterval(actualizarHora, 1000);

// Llama a la función `actualizarHora` inmediatamente al cargar la página para mostrar la hora actual sin esperar el primer intervalo de 1 segundo.
actualizarHora();
    </script>
</body>

</html>