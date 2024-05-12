<div id="signupWindow" style="display: none;  margin-top: 50px;hight:600px">
    <section class="ftco-section">
        <div class="container justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-11 text-center ">
                    <h2 class="heading-section mt-3">Sign up</h2>
                    <button type="button" class="close position-absolute top-0 end-0 mt-3 " aria-label="Close"
                        onclick="closeSignupWindow()">
                        <span class="fas fa-times " aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 ">
                    <div class=" d-md-flex justify-content-center">
                        <div class="login-wrap ">
                            <form action="php%20&%20database/users.php" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required>
                                </div>
                                <label class="label">Account type</label>
                                <select class="form-select mb-3" id="type" name="type" required>
                                    <option value="Individual Account">Individual account </option>
                                    <option value="Businiss Account">Businiss account</option>
                                </select>
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
                                    <div class="w-50 text-md-center">
                                        <a href="#" onclick="closeSignupWindow(),showLoginWindow()">already have
                                            account</a>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <p>sign up with:</p>
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