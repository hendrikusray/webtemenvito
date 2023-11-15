<!DOCTYPE html>
<html lang="en">

<?php include APPPATH . 'views/header.php'; ?>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Reset Password</h1>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">New Password</label>
                                    <div class="d-flex bd-highlight">
                                        <div class="w-100 bd-highlight"><input id="password" type="password" class="form-control" name="password" value="" required autofocus></div>
                                        <div class="flex-shrink-1 bd-highlight" style="margin:7px">
                                            <div class="password-toggle-icon" onclick="togglePasswordVisibility('password','password-toggle-icon')">
                                                <i id="password-toggle-icon" class="fa-solid fa-eye-slash"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>
                                <input type="hidden" id="user_id" name="user_id" value="<?= $id ?>">

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password-confirm">Confirm Password</label>
                                    <div class="d-flex bd-highlight">
                                        <div class="w-100 bd-highlight"> <input id="password-confirm" type="password" class="form-control" name="password_confirm" required></div>
                                        <div class="flex-shrink-1 bd-highlight" style="margin:7px">
                                            <div class="password-toggle-icon-confirm" onclick="togglePasswordVisibility('password-confirm','password-toggle-icon-confirm')">
                                                <i id="password-toggle-icon-confirm" class="fa-solid fa-eye-slash"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please confirm your new password
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
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
    <!-- Add this script at the end of your HTML body -->
    <script>
        $(document).ready(function() {
            $('form').submit(function(e) {
                e.preventDefault();

                var password = $('#password').val();
                var confirmPassword = $('#password-confirm').val();
                var userId = $('#user_id').val();


                // Password match validation
                if (password !== confirmPassword) {
                    alert('Passwords do not match');
                    return;
                }

                // AJAX request
                $.ajax({
                    type: 'POST',
                    url: '/password-confirm', // Update with your actual endpoint
                    data: {
                        password: password,
                        user_id: userId
                    },
                    success: function(response) {
                        Toastify({
                            text: "Password berhasil diubah",
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
                    },
                    error: function() {
                        Toastify({
                            text: 'gagal update',
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#FF0000",
                            stopOnFocus: true,
                        }).showToast();
                    }
                });
            });
        });

        function togglePasswordVisibility(fieldId, fiel) {
            var passwordField = document.getElementById(fieldId);
            var icon = document.getElementById(fiel);

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