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
                            <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                            <form id="registrationForm" method="POST" class="needs-validation" autocomplete="off">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">Name</label>
                                    <input id="" type="text" class="form-control" name="name" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Name is required
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" value="" required>
                                    <div class="invalid-feedback">
                                        username is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <div class="d-flex bd-highlight">
                                        <div class="w-100 bd-highlight"><input id="password" type="password" class="form-control" name="password" required></div>
                                        <div class="flex-shrink-1 bd-highlight" style="margin:7px">
                                            <div class="password-toggle-icon"  style="border: 1px solid black;" onclick="togglePasswordVisibility('password')">
                                                <i id="password-toggle-icon" class="fa-solid fa-eye-slash"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div>

                                        <!-- <input id="password" type="password" class="form-control" name="password" required>
                                        <div class="password-toggle-icon" onclick="togglePasswordVisibility('password')">
                                            <i id="password-toggle-icon" class="fa-solid fa-eye-slash"></i>
                                        </div> -->
                                    </div>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <p class="form-text text-muted mb-3">
                                    By registering you agree with our terms and condition.
                                </p>

                                <div class="align-items-center d-flex">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Already have an account? <a href="/" class="text-dark">Login</a>
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
            $("#registrationForm").submit(function(e) {
                e.preventDefault();
                if (this.checkValidity()) {
                    var formData = $(this).serialize();
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('users/register-member') ?>",
                        data: formData,
                        success: function(response) {
                            if (response.success) {
                                Toastify({
                                    text: "Registration successful!",
                                    duration: 3000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                                    stopOnFocus: true,
                                    callback: function() {
                                        window.location.href = "/";
                                    }
                                }).showToast();
                            } else {
                                Toastify({
                                    text: response.message,
                                    duration: 3000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor:  "#FF0000",
                                    stopOnFocus: true,
                                }).showToast();
                            }
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                } else {
                    console.log("Form is not valid");
                }
            });
        });

        function togglePasswordVisibility(fieldId) {
            var passwordField = document.getElementById(fieldId);
            var icon = document.getElementById("password-toggle-icon");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                passwordField.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        }
    </script>
</body>

</html>