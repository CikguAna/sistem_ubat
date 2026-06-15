<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login  ke Sistem Ubat </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">

            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    LOGIN KE SISTEM fARMASI
                </div>

                <div class="card-body">

                    <form method="POST" action="proses_login.php">

                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Login
                        </button>
                         <a href="daftar.php" class="btn btn-success btn-sm"> daftar</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>