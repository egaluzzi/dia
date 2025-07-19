<?php
session_start();
include 'funct/conexion.php';

// CONSULTA historial de cuotas.
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
    <!-- Existing head content -->
    <meta charset="utf-8">
    <!-- ... other meta tags ... -->
    <title>Vukova Training Club</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="html/css/style.min.css" rel="stylesheet">
    <!-- Include Bootstrap CSS if not already included -->
    <link href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Remove bullet points from lists */
        #reservation-container ul {
            list-style-type: none; /* Remove bullet points */
            padding-left: 0; /* Remove default left padding */
            text-align: left; /* Ensure the text is left-aligned */
        }

        /* Style for individual list items */
        #reservation-container li {
            text-align: left; /* Left align list items */
            margin-bottom: 5px; /* Add some spacing between items */
        }

        /* Ensure the container aligns its content to the left */
        #reservation-container {
            text-align: left; /* Align the entire container content to the left */
        }

        /* Additional card styling if needed */
        .card {
            border: 1px solid #ccc; /* Basic border */
            padding: 20px; /* Padding inside the card */
            border-radius: 8px; /* Rounded corners */
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <!-- ... existing preloader content ... -->
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Main wrapper -->
    <div id="main-wrapper" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- Header section -->
        <header class="topbar" style="background-color: #E92468;">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ali">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="carga.php" id="navbarDropdown" role="button">
                                <img src="assets/images/logo2.png">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Page wrapper -->
        <div class="page-wrapper">
            <!-- Breadcrumb and page content -->
            <div class="page-breadcrumb">
                <div class="container-fluid">
                    <!-- Adjusted row to include the new column -->
                    <div class="row row-cols-1 row-cols-md-5">
                        <!-- New Column: Turnos Reservados -->
                        <div class="col mb-4">
                            <div class="card message-box contact-box">
                                <div class="card-body little-profile text-center">
                                    <div id="reservation-container">
                                            <!-- Reservation data will be displayed here -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Existing Column 1 -->
                        <div class="col mb-4">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/entradaencalor.png" alt="Card image cap">
                                <div class="card-body little-profile text-center">
                                    <h3 class="mb-0"><?php echo strtoupper($EE1); ?></h3>
                                    <h4 class="mb-0"><?php echo strtoupper($ER1); ?></h4>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($EE2); ?></h3>
                                    <h4 class="mb-0"><?php echo strtoupper($ER2); ?></h4>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($EE3); ?></h3>
                                    <h4 class="mb-0"><?php echo strtoupper($ER3); ?></h4>
                                </div>
                            </div>
                        </div>

                        <!-- Existing Column 2 -->
                        <div class="col mb-4">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/bloqueuno.png" alt="Card image cap">
                                <div class="card-body little-profile text-center">
                                    <h3 class="mb-0"><?php echo strtoupper($B1E1); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B1E2); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B1E3); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B1E4); ?></h3>
                                    <br>
                                    <h2 class="mb-0"><?php echo strtoupper($B1R); ?></h2>
                                    <h2 class="mb-0"><?php echo strtoupper($B1M); ?></h2>
                                </div>
                            </div>
                        </div>

                        <!-- Existing Column 3 -->
                        <div class="col mb-4">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/bloquedos.png" alt="Card image cap">
                                <div class="card-body little-profile text-center">
                                    <h3 class="mb-0"><?php echo strtoupper($B2E1); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B2E2); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B2E3); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B2E4); ?></h3>
                                    <br>
                                    <h2 class="mb-0"><?php echo strtoupper($B2R); ?></h2>
                                    <h2 class="mb-0"><?php echo strtoupper($B2M); ?></h2>
                                </div>
                            </div>
                        </div>

                        <!-- Existing Column 4 -->
                        <div class="col mb-4">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/bloquetres.png" alt="Card image cap">
                                <div class="card-body little-profile text-center">
                                    <h3 class="mb-0"><?php echo strtoupper($B3E1); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B3E2); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B3E3); ?></h3>
                                    <br>
                                    <h3 class="mb-0"><?php echo strtoupper($B3E4); ?></h3>
                                    <br>
                                    <h2 class="mb-0"><?php echo strtoupper($B3R); ?></h2>
                                    <h2 class="mb-0"><?php echo strtoupper($B3M); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of columns -->

                    <!-- Moved Clock Row to the bottom -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1><div class="reloj card-body text-center" id="reloj"></div></h1>
                        </div>
                    </div>
                    <!-- End of clock row -->
                </div>
            </div>
        </div>

    </div>
    <!-- Scripts -->
    <script src="scriptvic.js"></script>
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="html/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="html/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="html/js/custom.js"></script>
    <script type="text/javascript">
        // Function to update the time displayed on the webpage.
        function actualizarHora() {
            const reloj = document.getElementById('reloj');
            const ahora = new Date();
            const horas = agregarCero(ahora.getHours());
            const minutos = agregarCero(ahora.getMinutes());
            const segundos = agregarCero(ahora.getSeconds());
            reloj.textContent = `${horas}:${minutos}:${segundos}`;
        }

        // Function to add a leading zero to numbers less than 10.
        function agregarCero(numero) {
            return numero < 10 ? '0' + numero : numero;
        }

        // Set an interval to update the time every second.
        setInterval(actualizarHora, 1000);

        // Initial call to display the time immediately when the page loads.
        actualizarHora();
    </script>

</body>

</html>

