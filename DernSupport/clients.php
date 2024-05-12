<?php
session_start();

?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dern Support client site</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="css/styles.css" rel="stylesheet" />

    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container-fluid px-4 px-lg-5">
                <img class="navbar-brand col-3" id="logo" src="assets\Logo.png" href="#page-top" />
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse col-4" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#shop">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav col-5 d-flex justify-content-end">
                    <?php
                        if(isset($_SESSION['username'])) {
                            
                            echo '<a class="nav-link" href="./php & database/session/logout.php" >
                                          <Label>log out </Label>  <i class="fa-solid fa-right-from-bracket"></i>
                                    </a>';

                        } else {
                            echo '<li class="nav-item">
                                        <a class="nav-link" href="#" onclick="showLoginWindow()">
                                            <Label>log In </Label> <i class="fas fa-sign-in-alt"></i>
                                        </a>
                                   </li>';
                            echo '
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" onclick="showSignupWindow()">
                                            <label>Sign Up</label> <i class="fas fa-user-plus"></i>
                                        </a>
                                    </li>';
                        }
                    ?>

                    <li class="nav-item">
                        <a data-toggle="tab" class="text-sm nav-link" href="http://localhost/DernSupport/business.php#">
                            business account
                            <i class="fa-solid fa-business-time"></i>
                        </a>
                    </li>


                </ul>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Dern Support</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Your Trusted Technical Support Partner
                        </h2>
                        <a class="btn btn-primary" href="#about">Get Started</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Dern support</h2>
                        <p class="text-white-50">
                            Soume Computing, a dynamic software development company, partners with
                            Dern-Support to
                            enhance
                            their IT technical support services, facilitating streamlined repair processes
                            for
                            businesses
                            and individuals. Through innovative software solutions, we aim to optimize
                            customer
                            interactions, improve inventory management, and provide insightful analytics for
                            informed
                            decision-making.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <h1 class="mx-auto my-0 text-dark d-flex justify-content-center mb-5">Common problems and their
                solutions
            </h1>
            <div class="container px-4 px-lg-5">
                <!-- problem 1-->
                <div class="row gx-0 mb-5 mb-lg-5 align-items-center">
                    <div class="col-6"><img class="img-fluid mb-3 mb-lg-0"
                            src="https://us.v-cdn.net/6036147/uploads/J1VLL1E8YD0G/l-20-1-1-1200x675.jpg" alt="..."
                            width="500" /></div>
                    <div class="col-6">
                        <div class="featured-text text-center text-lg-left">
                            <h3 class="text-primary">Device overheating</h3>
                            <p class="text-black mb-0">Ensure proper ventilation, clean dust from vents,
                                avoid using the
                                device on soft surfaces, update device firmware if available.</p>
                        </div>
                    </div>
                </div>
                <!-- problem 2-->
                <div class="row gx-0 mb-5 mb-lg-5 align-items-center">
                    <div class="col-6">
                        <div class="featured-text-right text-center text-lg-left">
                            <h3 class="text-primary">Slow performance</h3>
                            <p class="text-black mb-0"> Close unnecessary applications, clear cache and
                                temporary files,
                                update device drivers, upgrade hardware components if necessary.</p>
                        </div>
                    </div>
                    <div class="col-6"><img class="img-fluid mb-3 mb-lg-0"
                            src="https://www.auslogics.com/en/articles/wp-content/uploads/2023/05/F7B1330F-C693-4CD8-BCA5-5F8295C4167A-scaled.jpeg"
                            alt="..." width="500" /></div>
                </div>
                <!-- problem 3-->
                <div class="row gx-0 mb-5 mb-lg-5 align-items-center">
                    <div class="col-6"><img class="img-fluid mb-3 mb-lg-0"
                            src="https://support.content.office.net/en-us/media/4c10ecfd-3008-4b00-9f98-d41b6f899c2d.png"
                            alt="..." width="500" /></div>
                    <div class="col-6">
                        <div class="featured-text text-center text-lg-left">
                            <h3 class="text-primary">Blue screen of death (BSOD) on Windows</h3>
                            <p class="text-black mb-0">
                                Update device drivers, scan for malware, check for hardware issues
                                such as faulty RAM or hard drive, perform system restore or reinstall
                                Windows if
                                necessary.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- problem 4-->
                <div class="row gx-0 mb-5 mb-lg-5 align-items-center">
                    <div class="col-6">
                        <div class="featured-text-right text-center text-lg-left">
                            <h3 class="text-primary">Device not charging</h3>
                            <p class="text-black mb-0">
                                Check charging cable and adapter for damage, clean charging port, try
                                using a different power source, restart the device, update device firmware.
                            </p>
                        </div>
                    </div>
                    <div class="col-6"><img class="img-fluid mb-3 mb-lg-0"
                            src="https://i.pcmag.com/imagery/articles/01QrMgyTzeIkB5MzfJmQ3nT-53..v1701979388.jpg"
                            alt="..." width="500" /></div>
                </div>
                <!-- problem 5-->
                <div class="row gx-0 mb-5 mb-lg-5 align-items-center">
                    <div class="col-6"><img class="img-fluid mb-3 mb-lg-0"
                            src="https://www.electric.ai/wp-content/uploads/BLOG-How-to-Fix-a-Frozen-Computer.jpg"
                            alt="..." width="500" /></div>
                    <div class="col-6">
                        <div class="featured-text text-center text-lg-left">
                            <h3 class="text-primary">Software crashes or freezes</h3>
                            <p class="text-black mb-0">
                                Update software to the latest version, clear app cache, uninstall and
                                reinstall problematic applications, perform a factory reset if necessary.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- shop-->
        <section class="py-5" id="shop">
            <h1 class="mx-auto my-0 text-light d-flex justify-content-center">Our shop</h1>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top"
                                src="https://kimostore.net/cdn/shop/files/LenovoLaptopCharger20V-11.5A_USBSquarePin_Original_1.jpg?v=1689065113&width=600"
                                alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Laptop Charger </h5>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success  mt-auto" onclick="cart()"
                                        href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Sale
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top"
                                src="https://kimostore.net/cdn/shop/products/SamsungRV511-RV509-RV580-R428-R438-NP300LaptopBattery_2.jpg?v=1684745432&width=130"
                                alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Laptop Battery</h5>

                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success  mt-auto" onclick="cart()"
                                        href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Sale
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top"
                                src="https://kimostore.net/cdn/shop/files/ToshibaSatelliteC660LaptopInternalFan_2.jpg?v=1694437954&width=600"
                                alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fan</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success  mt-auto" onclick="cart()"
                                        href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top"
                                src="https://kimostore.net/cdn/shop/files/ToshibaSatelliteC850-L850LaptopInternalKeyboard.png?v=1696856935&width=1000"
                                alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">keyboard</h5>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success  mt-auto" onclick="cart()"
                                        href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Sale
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top"
                                src="https://90a1c75758623581b3f8-5c119c3de181c9857fcb2784776b17ef.ssl.cf2.rackcdn.com/642027_326157_01_front_thumbnail.jpg"
                                alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Power Supplie</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $45.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success  mt-auto" onclick="cart()"
                                        href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top"
                                src="https://m.media-amazon.com/images/I/61WgIToO55L._AC._SR360,460.jpg" alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $50.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success  mt-auto" onclick="cart()"
                                        href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-success text-white position-absolute"
                                style="top: 0.5rem; right: 0.5rem">
                                Sale
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top"
                                src="https://m.media-amazon.com/images/I/51ktk8Db0TL._AC_UL320_T1F_.jpg" alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Intel Core i5 </h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$250.00</span>
                                    $200.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success  mt-auto" onclick="cart()"
                                        href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top"
                                src="https://m.media-amazon.com/images/I/61JkeSh75NL._AC._SR360,460.jpg" alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">RAM</h5>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success  mt-auto" onclick="cart()"
                                        href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Requests-->
        <section class="signup-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Send your problem!</h2>
                        <form action="http://localhost/DernSupport/php%20&%20database/request.php" method="post">
                            <div class=" mb-3" style="display:none;">
                                <input class="form-control" rows="3" id="username" name="username"
                                    placeholder="Enter your username "
                                    value=<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'please login '; ?>
                                    required>

                                <input class="form-control" rows="3" id="email" name="email"
                                    placeholder="Enter your username "
                                    value=<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?> required>

                            </div>
                            <div class="mb-3">
                                <label for="problemTextarea" class="form-label text-white">Your
                                    Problem</label>
                                <textarea class="form-control" placeholder="Enter your problem" id="problemTextarea"
                                    rows="3" name="problem" required></textarea>

                            </div>
                            <div class="mb-3">
                                <label for="requestTypeSelect" class="form-label text-white">Request
                                    Type</label>
                                <select class="form-select" id="requestTypeSelect" name="requestType" required>
                                    <option value="">Enter your Request Type</option>
                                    <option value="hardware">Hardware</option>
                                    <option value="software">Software</option>
                                </select>
                                <div class="invalid-feedback">Please select a request type.</div>
                            </div>

                            <div class="mb-3">
                                <label for="deliveryDateInput" class="form-label text-white">Date and Time
                                    of
                                    Delivery</label>
                                <input type="datetime-local" class="form-control" id="deliveryDateInput"
                                    name="deliveryDate" required>
                            </div>
                            <p id="priceDisplay" class="text-white">Price: </p><br>
                            <?php
                            if(isset($_SESSION['username'])) {
                            
                                echo ' <button type="submit" class="btn btn-primary">Submit </button>';
    
                            } else {
                                echo '
                                <button class="btn btn-primary" href="#about" onclick="showLoginWindow()">
                                    You must log in first <i class="fas fa-sign-in-alt"></i>
                                </button>
                           ';
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <!-- Existing contact information -->
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">dernsupport@dern.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+1 (555) 902-8832</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6">
                        <form class="d-block text-center">
                            <div class="form-group">
                                <label for="feedback" class="text-light">Your Feedback</label>
                                <textarea class="form-control" id="feedback" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>




        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50">
            <div class="container px-4 px-lg-5">Copyright &copy; Dern Support 2024</div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
    <?php
include('php & database/session/login.php');
include('php & database/session/signup.php');
?>



    </html>