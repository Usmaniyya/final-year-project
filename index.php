<?php
include 'connection.php';

if (isset($_POST['password'])) {
    if ($_POST) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        $message = [];

        if ($_SESSION['email'] && $_SESSION['password']) {
            $query = mysqli_query(
                $connection,
                "SELECT * FROM users_tbl WHERE email = '" .
                    $_SESSION['email'] .
                    "'"
            );
            $numrows = mysqli_num_rows($query);

            if ($numrows != 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $dbemail = $row['email'];
                    $dbpassword = $row['password'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['surname'] = $row['surname'];
                    $_SESSION['email'] = $row['email'];
                    $id = $_SESSION['id'] = $row['id'];
                }
                if ($_SESSION['email'] == $dbemail) {
                    if ($_SESSION['password'] == $dbpassword) {
                        $message =
                            "<font class='alert alert-success'>You have login successfully</font>";
                        header("refresh:1; url='home.php'");
                    } else {
                        $message =
                            "<font class='alert alert-danger'>your password is incorrect!</font>";
                    }
                } else {
                    $message =
                        "<font class='alert alert-danger'>your name is incorrect!</font>";
                }
            } else {
                $message =
                    "<font class='alert alert-danger'>Invalid email!</font>";
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
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <input type="submit" value="Login"class="btn btn-primary px-5" name="">
                                                
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
