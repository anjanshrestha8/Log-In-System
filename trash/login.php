<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Log In</title>
</head>

<body>

    <?php require_once 'components/_nav.php' ?>
    <div class="container md">
        <div class="card">
            <div class="card-body">


                <!-- login form start -->
                <form method="post" action="">
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" placeholder="username">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" placeholder="at least 8 character">
                    </div>

                    <button type="submit" class="btn btn-success">Log In</button>

                </form>


            </div>
        </div>
    </div>

</body>

</html>