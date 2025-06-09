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
<body class="" style="background-image: url('<?= base_url('img/pic3.png'); ?>'); background-repeat: no-repeat; background-size: cover;">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Glassmorphism Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        h1, label, .small {
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

        @media (min-width: 768px) {
            .p-5 {
                padding: 3rem !important;
            }
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card o-hidden border-0 shadow-lg" style="max-width: 500px; width: 100%;">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">   
                        <div class="text-center mb-4">
                            <i class="fas fa-user-circle fa-3x text-white"></i>
                            <h1 class="h4 mt-3 mb-4">Create Your Account</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('register'); ?>">
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <label for="exampleFirstName">First Name</label>
                                <input type="text" name="first_name" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleMiddleName">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control form-control-user" id="exampleMiddleName" placeholder="Middle Name (Optional)">
                            </div>
                            <div class="form-group">
                                <label for="exampleLastName">Last Name</label>
                                <input type="text" name="last_name" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleUsername" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="exampleInputPassword">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required minlength="6">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleRepeatPassword">Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" name="confirm_password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirm Password" required minlength="6">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
                                <i class="fas fa-user-plus mr-2"></i>Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('forgot-password'); ?>" style="color: rgba(255, 255, 255, 0.8) !important;">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('login'); ?>" style="color: rgba(255, 255, 255, 0.8) !important;">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

    <script src="<?= base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
