<!DOCTYPE html>
<html lang="en">

<?php include APPPATH . 'views/header.php'; ?>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <h2>SEBAWEB</h2>
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            <!-- <form> -->
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>
                                        <a href="/forgot-password" class="float-end">
                                            Forgot Password?
                                        </a>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary ms-auto" id="loginBtn">
                                        Login
                                    </button>
                                </div>
                            <!-- </form> -->
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Don't have an account? <a href="/register" class="text-dark">Create One</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; 2017-2021 &mdash; Your Company
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include APPPATH . 'views/footer.php'; ?>
    <script>
        $(document).ready(function() {
            $("#loginBtn").click(function() {
                var email = $("#email").val();
                var password = $("#password").val();
                console.log("<?= base_url('member/login') ?>",)
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('member/login') ?>",
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.href = "/laporan-grafik"; // Redirect to dashboard upon successful login
                        } else {
                            // console.error("Login failed:", response.error);
                            Toastify({
                                text: response.error,
                                duration: 3000, // Duration in milliseconds
                                close: true,
                                gravity: "top", // bottom right corner
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #e74c3c, #c0392b)", // Customize the background color
                                stopOnFocus: true,
                            }).showToast();
                        }
                    },
                    error: function(error) {
                        console.log(error,"error")
                        // window.location.href = "/dashboard";
                        console.error("Error during login", error);
                    }
                });
            });
        });
    </script>
</body>

</html>