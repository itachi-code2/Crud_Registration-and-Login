<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Project</title>
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>
<body class="" style="background-image: url('<?= base_url('img/bg.png'); ?>'); background-repeat: no-repeat; background-size: cover;">
<style>
        body {
            background: linear-gradient(135deg, #0d47a1, #1976d2);
            min-height: 100vh;
        }

        .card {
            background: rgba(255, 255, 255, 0.05) !important;
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            box-shadow: 0 8px 32px 0 rgba(13, 71, 161, 0.37) !important;
            border-radius: 15px;
        }

        .form-control-user {
            background: rgba(255, 255, 255, 0.08) !important;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            color: #fff !important;
            transition: all 0.3s ease;
            padding: 1rem 1.25rem;
        }

        .form-control-user:focus {
            background: rgba(255, 255, 255, 0.15) !important;
            box-shadow: 0 0 0 0.2rem rgba(25, 118, 210, 0.25) !important;
        }

        .input-group-text {
            background: rgba(255, 255, 255, 0.08) !important;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            color: #fff !important;
        }

        .btn-primary {
            background: rgba(25, 118, 210, 0.7) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            color: #fff !important;
            transition: all 0.3s ease;
            padding: 0.75rem 1.5rem;
        }

        .btn-primary:hover {
            background: rgba(25, 118, 210, 0.9) !important;
            transform: translateY(-2px);
        }

        h1, label, .small, h3 {
            color: #fff !important;
        }

        ::placeholder {
            color: rgba(255, 255, 255, 0.6) !important;
        }

        hr {
            border-color: rgba(255, 255, 255, 0.15) !important;
        }

        .p-5 {
            padding: 2.5rem !important;
        }

        @media (max-width: 576px) {
            .p-5 {
                padding: 1.5rem !important;
            }
            .form-control-user {
                padding: 0.75rem 1rem;
            }
            .btn-user {
                padding: 0.6rem 1rem;
            }
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card o-hidden border-0 shadow-lg" style="width: 30rem;">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <form class="user p-4 shadow-lg rounded-lg" method="POST" action="<?= base_url('login'); ?>">
                            <?= csrf_field() ?>
                            
                            <h3 class="text-center font-weight-bold mb-3">Login to Your Account</h3>

                            <!-- Username Field -->
                            <div class="form-group">
                                <label for="username" class="font-weight-bold">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control form-control-user" 
                                        id="username" placeholder="Enter your username" required>
                                </div>
                                <small class="text-danger"></small>
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <label for="password" class="font-weight-bold">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-user" 
                                        id="password" placeholder="Enter your password" required>
                                </div>
                                <small class="text-danger"></small>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
                                <i class="fas fa-sign-in-alt mr-2"></i> Login Now
                            </button>

                            <!-- Additional Links -->
                            <div class="text-center mt-3">
                                <a class="small" href="<?= base_url('forgot-password'); ?>" style="color: rgba(255, 255, 255, 0.8) !important;">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('register'); ?>" style="color: rgba(255, 255, 255, 0.8) !important;">
                                    Create New Account
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

</body>
</html>
