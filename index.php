<!doctype html>
<html lang="en">
<!-- [Head] start -->
<head>
    <title>Login | CMS</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Gradient Able is trending dashboard template made using Bootstrap 5 design framework. Gradient Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="codedthemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <!-- [Google Font : Poppins] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="assets/css/style-preset.css" />

    <style>
        /* Chrome, Safari, Edge, Opera */
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main v1 bg-grd-primary">
        <div class="auth-wrapper">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="assets/images/index_logo.png" alt="images" class="img-fluid mb-4" style="height: 55px; width: 220px;" />
                            <h4 class="f-w-500 mb-4">Login with your account</h4>
                            <!-- <p class="mb-4">Don't have an Account? <a href="../pages/register-v1.html" class="link-primary ms-1">Create Account</a></p> -->
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" class="form-control" id="txt_id_number" placeholder="Employee ID Number" />
                        </div>
                        <div class="form-group mb-3 position-relative">
                            <input type="password" class="form-control pe-5" id="txt_password" placeholder="Password" />
                            <!-- Eye icon button -->
                            <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword()" style="cursor: pointer;">
                                <i id="togglePasswordIcon" class="ti ti-eye" style="font-size: 1.3rem;"></i>
                            </span>
                        </div>
                        <div class="d-flex mt-1 justify-content-end">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#passwordContactModal"><h6 class="f-w-400 mb-0">Forgot Password?</h6></a>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="button" class="btn btn-primary d-flex align-items-center justify-content-center">
                                <i class="ti ti-login me-2" style="font-size: 1.3rem;"></i>
                                <span>Login</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- [ Modal Information ] start -->
    <div class="modal fade" id="passwordContactModal" tabindex="-1" aria-labelledby="passwordContactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="passwordContactModalLabel">
                        <i class="bi bi-info-circle-fill me-2"></i> 
                        Password Change Policy
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <p class="lead">
                        For security and system synchronization, all **password changes** must be processed by the IT Department.
                    </p>
                    
                    <p>
                        Kindly contact the Help Desk below, and they will assist you with securely resetting your password.
                    </p>

                    <h6 class="mt-4 text-primary">IT Help Desk Contact:</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-telephone-fill me-2"></i>
                            **Telephone:** IT-HELP (155) or IT-TECHNICAL (154)
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-envelope-fill me-2"></i>
                            **Email:** <a href="mailto:royvincent.paring@007.fujifilm.com">royvincent.paring@007.fujifilm.com</a>
                        </li>
                    </ul>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="mailto:royvincent.paring@007.fujifilm.com" class="btn btn-primary">Email IT Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Modal Information ] end -->

    <!-- Required Js -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/simplebar.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/fonts/custom-font.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>    

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('txt_password');
            const icon = document.getElementById('togglePasswordIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('ti-eye');
                icon.classList.add('ti-eye-off');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('ti-eye-off');
                icon.classList.add('ti-eye');
            }
        }
    </script>

</body>
<!-- [Body] end -->
</html>
