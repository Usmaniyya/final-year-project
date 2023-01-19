<?php
include 'connection.php';

if (isset($_POST['cpassword'])) {
    $fname = $_POST['fname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $result = [];
    if (
        $cpassword == $password &&
        $fname &&
        $email &&
        $password &&
        $cpassword
    ) {
        mysqli_query(
            $connection,
            "INSERT INTO users_tbl(fname,surname,email,password) VALUES('$fname','$surname','$email','$password')"
        );
        $result =
            " <span class='badge badge-success'>Admin Added Successful</span>";
    } else {
        $result =
            " <span class='badge badge-danger'>Problem with Adding User or Confirm Password not match</span>";
    }
}
?>

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
                        <?php include 'sidenav.php'; ?>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Add User</h2>
                        <center><?php if (isset($result)) {
                            echo "$result";
                        } ?></center>
                        <div class="container">
                            <div class="row">
                              <form method="POST" action="">
                                
                                <div class="col-3">
                                  <!-- Name input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example1">First Name</label>
                                    <input type="text" id="form8Example1" name="fname" class="form-control" />
                                    
                                  </div>
                                </div>
                                <div class="col-3">
                                    <!-- Name input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example1">Last Name</label>
                                      <input type="text" id="form8Example1" name="surname" class="form-control" />
                                      
                                    </div>
                                  </div>
                                <div class="col">
                                  <!-- Email input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example2">Email address</label>
                                    <input type="email" id="form8Example2" name="email" class="form-control" />
                                    
                                  </div>
                                </div>
                              </div>
                              
                              <hr />
                              
                              <div class="row">
                                <div class="col-6">
                                  <!-- Password input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example3">Passowrd</label>
                                    <input type="password" id="form8Example3" name="password" class="form-control" />
                                    
                                  </div>
                                </div>
                                <div class="col-6">
                                  <!-- Password input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example4">Confirm Pssword</label>
                                    <input type="password" id="form8Example4" name="cpassword" class="form-control" />
                                    
                                  </div>
                                </div>
                              </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mt-4">
                                          <input type="submit" value="Add"class="btn btn-primary px-5" name="">
                                          
                                        </div>
                                      </div>
                                </div>
                                </form>
                              </div>
                            
                        
                        </div>
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
