<?php 
    require_once'./config.php';


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sign In</title>
</head>

<body>

    <?php require_once 'components/_nav.php' ?>
    <div class="container">
        <div class="card">
            <div class="card-body">

                <u>
                    <h1 style="text-align:center">Signup to your account</h1>
                </u>

                <!-- login form start -->
                <form method="post" action="">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">User Name :</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Password :</label>
                        <input type="text" class="form-control" name="password" placeholder="Enter password">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Confirm Password :</label>
                        <input type="text" class="form-control" name="confirm-password" placeholder="Enter password">
                        <small class="form-text text-muted">Make sure to type the same password</small>
                    </div>

                    <button type="submit" class="btn btn-outline-success">Sign In</button>

                </form>


            </div>
        </div>
    </div>

</body>

</html>