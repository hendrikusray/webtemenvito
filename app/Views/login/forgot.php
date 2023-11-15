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
                            <h1 class="fs-4 card-title fw-bold mb-4">Forgot Password</h1>
                            <form id="forgotPasswordForm" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="button" id="sendLinkBtn" class="btn btn-primary ms-auto">
                                        Send Link
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Remember your password? <a href="/" class="text-dark">Login</a>
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
            $("#sendLinkBtn").click(function() {
                var email = $("#email").val();

                $.ajax({
                    type: "POST",
                    url: "/forgot-password/users",
                    data: {
                        email: email
                    },
                    success: function(response) {
                        Toastify({
                            text: "Silahkan cek email anda!",
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
                    error: function(error) {
                        Toastify({
                            text: 'email tidak terdaftar',
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
    </script>
</body>

</html>