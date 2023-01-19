<?php include 'connection.php'; ?>

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <style type="text/css">
        .center{ font-size: 30px;font-weight: 40px; }
    </style>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="home.php">SIPS</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-1" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php echo $_SESSION[
                        'fname'
                    ] .
                        ' ' .
                        $_SESSION['surname']; ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <hr>
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <!-- <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav> -->
                            </div>
                            <a class="nav-link collapsed" href="generate.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Generate
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="requested.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                                Requested
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="ready.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-check-circle"></i></div>
                                Ready
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="add-user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Add User
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="Logout.php" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Logout
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="mb-5"></div>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                
                            </div>
                          
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['fname'] .
                            ' ' .
                            $_SESSION['surname']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Admin Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4 p-3">
                                    <div class="card-body text-uppercase">
                                    <div class="row">
                                        <div class="col-md-10">
                                           Requested
                                        </div>
                                        <div class="col-md-2">
                                         
                                        <?php
                                        $query = mysqli_query(
                                            $connection,
                                            'SELECT * FROM generated_id_cards'
                                        );
                                        $i = 0;
                                        while (
                                            $row = mysqli_fetch_array($query)
                                        ) {
                                            $i++;
                                        }
                                        echo "<br><center class='center'>" .
                                            $i .
                                            '</center>';
                                        ?>
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4 p-3">
                                    <div class="card-body text-uppercase">Requested</div>
                                    
                                </div>
                            </div> -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4 p-3">
                                    <div class="card-body text-uppercase">
                                    <div class="row">
                                        <div class="col-md-10">
                                           Approved
                                        </div>
                                        <div class="col-md-2">
                                         
                                        <?php
                                        $query = mysqli_query(
                                            $connection,
                                            "SELECT * FROM generated_id_cards WHERE card_Approvement = 'Ready'"
                                        );
                                        $i = 0;
                                        while (
                                            $row = mysqli_fetch_array($query)
                                        ) {
                                            $i++;
                                        }
                                        echo "<br><center class='center'>" .
                                            $i .
                                            '</center>';
                                        ?>
                                        </div>
                                    </div>
                                </div>
                                    

                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4 p-3">
                                    <div class="card-body text-uppercase">
                                        <div class="row">
                                        <div class="col-md-10">
                                           Pending
                                        </div>
                                        <div class="col-md-2">
                                         
                                        <?php
                                        $query = mysqli_query(
                                            $connection,
                                            "SELECT * FROM generated_id_cards WHERE card_Approvement != 'Ready'"
                                        );
                                        $i = 0;
                                        while (
                                            $row = mysqli_fetch_array($query)
                                        ) {
                                            $i++;
                                        }
                                        echo "<br><center class='center'>" .
                                            $i .
                                            '</center>';
                                        ?>
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                             <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4 p-3">
                                    <div class="card-body text-uppercase">Declined</div>
                                    
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div> -->
                            </div>
                            <div class="col-xl-6">
                                <!-- <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            
                    </div> -->
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SIPS 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
