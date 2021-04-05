<?php session_start(); ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <div class="container-fluid bg-light pt-2 pb-2 border">
            <div class="col-md-12 text-center"><h4>Platform</h4></div>
        </div>

        <div class="container mt-4">

            <form action="sys_login.php" method="post">
                <div class="row justify-content-md-center">
                    <div class="col-md-2 mb-3 text-sm-start text-md-end">Username</div>
                    <div class="col-md-3 mb-3">
                        <input type="text" name="username" id="username" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-2 mb-3 text-sm-start text-md-end">Password</div>
                    <div class="col-md-3 mb-3">
                        <input type="password" name="password" id="password" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-sm btn-primary">LOGIN</button>
                    </div>
                </div>
            </form>

        </div>
        
    </body>
</html>