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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="carga.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/logo2.png" alt="user" class="">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>

<form name="ingreso" action="funct/publicar.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="">
                    <button type="submit" class="btn btn-warning mx-auto mx-md-0">PUBLICAR</button>
                    </div>
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

                                    <div class="form-group">

                                        <label class="col-sm-12">MOVILIDAD</label>
                                        <div class="col-sm-12 border-bottom">
                                        <input type="text" placeholder="Ejercicio" maxlength="40" class="form-control ps-0 form-control-line"
                                        name="EE1">
                                        </div>
                                        <div class="col-md-12">
                                        <input type="text" placeholder="Repeticiones Ej: 12x3" class="form-control ps-0 form-control-line"
                                        name="ER1">
                                        </div>

                                        <br>

                                        <label class="col-sm-12">CORE</label>
                                        <div class="col-sm-12 border-bottom">
                                        <input type="text" placeholder="Ejercicio" class="form-control ps-0 form-control-line"
                                        name="EE2">
                                        </div>
                                        <div class="col-md-12">
                                        <input type="text" placeholder="Repeticiones Ej: 12x3" class="form-control ps-0 form-control-line"
                                        name="ER2">
                                        </div>

                                        <br>

                                        <label class="col-sm-12">ELEVADORES DE FC</label>
                                        <div class="col-sm-12 border-bottom">
                                        <input type="text" placeholder="Ejercicio" class="form-control ps-0 form-control-line"
                                        name="EE3">
                                        </div>
                                        <div class="col-md-12">
                                        <input type="text" placeholder="Repeticiones Ej: 12x3" class="form-control ps-0 form-control-line"
                                        name="ER3">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/bloqueuno.png"
                                    alt="Card image cap">
                                <div class="card-body little-profile text-center">

                                    <div class="form-group">
                                        <label class="col-sm-12">EJERCICIOS BLOQUE UNO</label>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 1" name="B1E1" maxlength="40" class="form-control ps-0 form-control-line">
                                        </div>
                                        <br>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 2" name="B1E2" maxlength="40" class="form-control ps-0 form-control-line">
                                        </div>
                                        <br>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 3" name="B1E3" maxlength="40" class="form-control ps-0 form-control-line">  
                                        </div>
                                        <br>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 4" name="B1E4" maxlength="40" class="form-control ps-0 form-control-line">  
                                        </div>
                                        <br>

                                        <br>

                                        <div class="col-md-12">
                                        <input type="text" placeholder="Repeticiones Ej: 10 12 14 16" name="B1R" class="form-control ps-0 form-control-line">
                                        </div>
                                        <br>

                                        <div class="col-md-12">
                                            <input type="text" placeholder="Modalidad Ej: EMOM 3min" name="B1M" class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/bloquedos.png"
                                    alt="Card image cap">
                                <div class="card-body little-profile text-center">

                                    <div class="form-group">
                                        <label class="col-sm-12">EJERCICIOS BLOQUE DOS</label>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 1" name="B2E1" maxlength="40" class="form-control ps-0 form-control-line">
                                        </div>
                                        <br>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 2" name="B2E2" maxlength="40" class="form-control ps-0 form-control-line">
                                        </div>
                                        <br>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 3" name="B2E3" maxlength="40" class="form-control ps-0 form-control-line">  
                                        </div>
                                        <br>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 4" name="B2E4" maxlength="40" class="form-control ps-0 form-control-line">  
                                        </div>
                                        <br>

                                        <br>

                                        <div class="col-md-12">
                                        <input type="text" placeholder="Repeticiones Ej: 10 12 14 16" name="B2R" class="form-control ps-0 form-control-line">
                                        </div>
                                        <br>

                                        <div class="col-md-12">
                                            <input type="text" placeholder="Modalidad Ej: EMOM 3min" name="B2M" class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card message-box contact-box">
                                <img class="card-img-top" src="assets/images/bloquetres.png"
                                    alt="Card image cap">
                                <div class="card-body little-profile text-center">

                                    <div class="form-group">
                                        <label class="col-sm-12">EJERCICIOS BLOQUE TRES</label>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 1" name="B3E1" maxlength="40" class="form-control ps-0 form-control-line">
                                        </div>
                                        <br>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 2" name="B3E2" maxlength="40" class="form-control ps-0 form-control-line">
                                        </div>
                                        <br>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 3" name="B3E3" maxlength="40" class="form-control ps-0 form-control-line">  
                                        </div>
                                        <br>

                                        <div class="col-sm-12 border-bottom">
                                            <input type="text" placeholder="Ejercicio 4" name="B3E4" maxlength="40" class="form-control ps-0 form-control-line">  
                                        </div>
                                        <br>

                                        <br>

                                        <div class="col-md-12">
                                        <input type="text" placeholder="Repeticiones Ej: 10 12 14 16" name="B3R" class="form-control ps-0 form-control-line">
                                        </div>
                                        <br>

                                        <div class="col-md-12">
                                            <input type="text" placeholder="Modalidad Ej: EMOM 3min" name="B3M" class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
</form>

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
</body>

</html>