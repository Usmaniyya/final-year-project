
<?php
include 'connection.php';

if (isset($_POST['blood_group'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $reg = $_POST['reg'];
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
    $next_of_kin = $_POST['next_of_kin'];
    $next_of_kin_phone = $_POST['next_of_kin_phone'];
    $blood_group = $_POST['blood_group'];
    $image = $_FILES['image']['name'];

    $result = [];
    if (
        $fname &&
        $lname &&
        $reg &&
        $faculty &&
        $department &&
        $phone &&
        $next_of_kin &&
        $next_of_kin_phone &&
        $blood_group
    ) {
        mysqli_query(
            $connection,
            "INSERT INTO
             generated_id_cards(fname,mname,lname,reg,faculty,department,phone,next_of_kin,next_of_kin_phone,blood_group,image) 
             VALUES('$fname','$mname','$lname','$reg','$faculty','$department','$phone','$next_of_kin','$next_of_kin_phone','$blood_group','$image')"
        );
        if ($_FILES['image']['error'] == 0) {
            $image = $_FILES['image']['name'];
            $target = 'uploaded_imgs/' . basename($image);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            } else {
            }
        }
        $result =
            " <span class='badge badge-success'>Generated Successful</span>";
    } else {
        $result =
            " <span class='badge badge-danger'>Problem with Generating</span>";
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
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SIPS</a>
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
                        <h1 class="mt-4">Generate ID card</h1>
                      <center><?php if (isset($result)) {
                          echo "$result";
                      } ?></center>
                    
                        <div class="container">
                          <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-4">
                                  <!-- Name input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example1">First Name</label>
                                    <input type="text" name="fname" id="form8Example1" class="form-control" />
                                    
                                  </div>
                                </div>
                                <div class="col-4">
                                    <!-- Name input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example1">Middle Name</label>
                                      <input type="text" name="mname" id="form8Example1" class="form-control" />
                                      
                                    </div>
                                  </div>
                                <div class="col-4">
                                  <!--Name input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example2">Last Name</label>
                                    <input type="text" name="lname" id="form8Example2" class="form-control" />
                                    
                                  </div>
                                </div>
                              </div>
                              
                              <hr />
                              
                              <div class="row">
                                <div class="col">
                                  <!-- Reg.no input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example3">Reg. No</label>
                                    <input type="text" name="reg" id="form8Example3" class="form-control" />
                                    
                                  </div>
                                </div>
                                <div class="col">
                                  <!-- Faculty input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example4">Faculty</label>
                                    <input type="text" name="faculty" id="form8Example4" class="form-control" />
                                    
                                  </div>
                                </div>
                                <div class="col">
                                  <!--Department  input -->
                                  <div class="form-outline">
                                    <label class="form-label" for="form8Example5">Department</label>
                                    <input type="text" name="department" id="form8Example5" class="form-control" />
                                   
                                  </div>
                                </div>
                              </div>
                              <hr />
                              <div class="row">
                                <div class="col">
                                    <!-- Phone input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example3">Phone Number</label>
                                      <input type="number" name="phone" id="form8Example3" class="form-control" />
                                      
                                    </div>
                                  </div>
                                  <div class="col">
                                    <!--N.O.K input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example4">Next of Kin</label>
                                      <input type="text" name="next_of_kin" id="form8Example4" class="form-control" />
                                      
                                    </div>
                                  </div>
                                  <div class="col">
                                    <!--N.O.K Phone  input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example5">Next of Kin Phone</label>
                                      <input type="number" name="next_of_kin_phone" id="form8Example5" class="form-control" />
                                     
                                    </div>
                                  </div>
                              </div>
                              <hr />
                              <div class="row">
                                <div class="col-4">
                                    <!--Blood  input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example5">Blood Group</label>
                                      <input type="text" name="blood_group" id="form8Example5"  class="form-control" />
                                     
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <!--File  input -->
                                    <div class="form-outline">
                                      <label class="form-label" for="form8Example5">Upload Passport</label>
                                      <input type="file" name="image" id="form8Example5" class="form-control" />
                                     
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="form-outline">
                                        <div class="mt-4">
                                            <input type="submit" value="Generate" class="btn btn-primary"  name="submit">
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </form>
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
