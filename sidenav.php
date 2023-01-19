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
                          <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['fname'].' '.$_SESSION['surname']; ?>
                    </div>
                    </div>