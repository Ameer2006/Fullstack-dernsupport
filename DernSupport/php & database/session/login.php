<?php

// Dummy login logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    exit;
}
?>
<div id="loginWindow" style="display: none;  margin-top: 50px;">
    <section class="ftco-section">
        <div class="container justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-11 text-center ">
                    <h2 class="heading-section mt-3">Login</h2>
                    <button type="button" class="close position-absolute top-0 end-0 mt-3 " aria-label="Close"
                        onclick="closeLoginWindow()">
                        <span class="fas fa-times " aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 ">
                    <div class=" d-md-flex justify-content-center">
                        <div class="login-wrap ">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                                class="signin-form" id="loginForm">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder=" Password"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group d-flex justify-content-center ">
                                    <button class="btn btn-primary" type="submit">submit</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-100 text-left">
                                        <label class=" checkbox-primary">Remember Me
                                            <span class="checkmark"></span>
                                        </label>
                                        <input type="checkbox" name="remember" checked>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#" onclick="closeLoginWindow(),showSignupWindow()">Sign Up</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p>Log in with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="js/scripts.js"></script>