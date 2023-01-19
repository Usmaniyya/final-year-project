
    <?php
    include 'connection.php';

    if (isset($_POST['submit'])) {
        if ($_POST) {
            $_SESSION['reg'] = $_POST['reg'];
            $_SESSION['phone'] = $_POST['phone'];

            $message = [];

            if ($_SESSION['reg'] && $_SESSION['phone']) {
                $query = mysqli_query(
                    $connection,
                    "SELECT * FROM generated_id_cards WHERE reg = '" .
                        $_SESSION['reg'] .
                        "'"
                );
                $numrows = mysqli_num_rows($query);

                if ($numrows != 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $dbreg = $row['reg'];
                        $dbphone = $row['phone'];
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['fname'] = $row['fname'];
                        $_SESSION['lname'] = $row['lname'];
                        $_SESSION['mname'] = $row['mname'];
                        $id = $_SESSION['id'] = $row['id'];
                    }
                    if ($_SESSION['reg'] == $dbreg) {
                        if ($_SESSION['phone'] == $dbphone) {
                            $message =
                                "<font class='alert alert-success'>You have login successfully</font>";
                            header("refresh:1; url='userdash.php'");
                        } else {
                            $message =
                                "<font class='alert alert-danger'>your phone is incorrect!</font>";
                        }
                    } else {
                        $message =
                            "<font class='alert alert-danger'>your name is incorrect!</font>";
                    }
                } else {
                    $message =
                        "<font class='alert alert-danger'>Invalid reg!</font>";
                }
            } else {
                $message =
                    "<font class='alert alert-danger'>Can't submit an empty fields</font>";
            }
        } else {
            echo 'Access Denied!';
            exit();
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
        <title>Login - User</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <style type="text/css">
      #layoutAuthentication #layoutAuthentication_content {
    min-width: 0;
    flex-grow: 1;
    background-color: #eee;
}
    </style>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                          <?php if (isset($message)) {
                                              echo "$message";
                                          } ?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputreEmail" name="reg" type="text" placeholder="REGISTRATION NUM" />
                                                <label for="inputEmail">REG NO</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputphone" name="phone" type="phone" placeholder="Enter registered Phone" />
                                                <label for="inputphone">PHONE</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input type="submit" name="Login" class="btn btn-primary px-5">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SIPS 2023</div>
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
