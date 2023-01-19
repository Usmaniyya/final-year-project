<div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="userdash.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <hr>
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                               
                            </div>
                            <a class="nav-link collapsed" href="usergenerate.php" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Request
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="check&print.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-exclamation"></i></div>
                                Check Status
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            
                            <div class="mt-3"></div>
                            <a class="nav-link collapsed" href="slogout.php">
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
                        <?php echo $_SESSION['fname'] .
                            ' ' .
                            $_SESSION['lname']; ?>
                    </div>