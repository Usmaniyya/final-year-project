<?php
include 'connection.php';

$query = mysqli_query(
    $connection,
    "SELECT * FROM generated_id_cards WHERE card_Approvement = 'Ready' ORDER BY `id` DESC"
);
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
                        <h1 class="mt-4">Ready</h1>
                        <div class="container">
                            <div class="row">
                                
                                <div class="container">
                                    
                                    <div class="row m-5">
                                        
                                            <div class="col-4">
                                                <div class="input-group rounded">
                                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                                    <span class="input-group-text border-0" id="search-addon">
                                                      <i class="fas fa-search"></i>
                                                    </span>
                                                  </div>
                                            </div>
                                       
                                    <table class="table table-white table-striped mt-3">
                                    <thead class="m-4">
                                        <tr class="bg-light table-dark">
                                            <th>Reg. NO</th>
                                            <th>Faculty</th>
                                            <th>Department</th>
                                            <th>Phone No.</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
 
                                    <tbody>
                                        <?php
                                        while (
                                            $row = mysqli_fetch_array($query)
                                        ) {
                                            $fname = $row['fname'];
                                            $mname = $row['mname'];
                                            $lname = $row['lname'];
                                            $reg = $row['reg'];
                                            $faculty = $row['faculty'];
                                            $department = $row['department'];
                                            $phone = $row['phone'];
                                            $next_of_kin = $row['next_of_kin'];
                                            $next_of_kin_phone =
                                                $row['next_of_kin_phone'];
                                            $blood_group = $row['blood_group'];
                                            $image = $row['image'];
                                            $picture =
                                                "<img src='uploaded_imgs/" .
                                                $row['image'] .
                                                "' width='50' height='50'>";
                                            $card_Approvement =
                                                $row['card_Approvement'];
                                            $id = $row['id'];
                                            $value_element =
                                                $row['card_Approvement'] ==
                                                'Approve'
                                                    ? 'Approved'
                                                    : 'Approve';
                                            if ($card_Approvement == 'Ready') {
                                                echo "
        <tr>
            <td>$reg</td>
            <td>$faculty</td>
            <td>$department</td>
            <td>$phone</td>
            <td>
                <a href=\"view.php?id=$id&fnames=$fname&mnames=$mname&lnames=$lname&regs=$reg&facultys=$faculty&phones=$phone&next_of_kins=$next_of_kin&next_of_kin_phones=$next_of_kin_phone&blood_groups=$blood_group&images=$picture\" class='btn btn-sm btn-info'>View</a>
            </td>
        </tr>

    ";
                                            }
                                        }

                                        echo '</table>';

                                        echo '<center>';
                                        ?>
                                    </tbody>
                                </table>
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
