<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - user</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="userdash.php">SIPS</a>
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
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
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
                            <a class="nav-link" href="userdash.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <hr>
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                               
                            </div>
                            <a class="nav-link collapsed" href="usergenerate.html" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Generate
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="edit.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-edit"></i></i></i></div>
                                Edit Profile
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-exclamation"></i></div>
                                Check Status
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
                                Print
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Logout
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="mb-5"></div>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            </div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        User
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Edit Profile</h2>
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                  <!-- Name input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example1">First Name</label>
                                    <input type="text" id="form8Example1" class="form-control" />
                                    
                                  </div>
                                </div>
                                <div class="col-4">
                                    <!-- Name input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example1">Middle Name</label>
                                      <input type="text" id="form8Example1" class="form-control" />
                                      
                                    </div>
                                  </div>
                                <div class="col">
                                  <!-- Name input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example2">Last Name</label>
                                    <input type="text" id="form8Example2" class="form-control" />
                                    
                                  </div>
                                </div>
                              </div>
                              
                              <hr />
                              
                              <div class="row">
                                <div class="col">
                                  <!-- Reg.no input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example3">Reg. No</label>
                                    <input type="text" id="form8Example3" class="form-control" />
                                    
                                  </div>
                                </div>
                                <div class="col">
                                  <!-- Faculty input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example4">Faculty</label>
                                    <input type="text" id="form8Example4" class="form-control" />
                                    
                                  </div>
                                </div>
                                <div class="col">
                                  <!--Department  input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example5">Department</label>
                                    <input type="text" id="form8Example5" class="form-control" />
                                   
                                  </div>
                                </div>
                              </div>
                              <hr />
                              <div class="row">
                                <div class="col">
                                    <!-- Phone input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example3">Phone Number</label>
                                      <input type="text" id="form8Example3" class="form-control" />
                                      
                                    </div>
                                  </div>
                                  <div class="col">
                                    <!--N.O.K input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example4">Next of Kin</label>
                                      <input type="text" id="form8Example4" class="form-control" />
                                      
                                    </div>
                                  </div>
                                  <div class="col">
                                    <!--N.O.K Phone  input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example5">Next of Kin Phone</label>
                                      <input type="text" id="form8Example5" class="form-control" />
                                     
                                    </div>
                                  </div>
                              </div>
                              <hr />
                              <div class="row">
                                <div class="col-4">
                                    <!--Blood  input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example5">Blood Group</label>
                                      <input type="text" id="form8Example5"  class="form-control" />
                                     
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <!--File  input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example5">Upload Passport</label>
                                      <input type="file" id="form8Example5" class="form-control" />
                                     
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="form-outline">
                                        <div class="mt-4">
                                            <button type="button" class="btn btn-primary">Edit</button>
                                        </div>
                                    </div>
                                  </div>
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
