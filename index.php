<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sign Up</title>
</head>

<body>

    <?php require_once 'components/_nav.php' ?>
    <div class="container md">
        <div class="card mt-5">
            <div class="card-body">
                <!-- form suru vayo -->
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <form action="./sign-in.php" method="post">
                                <button type="submit" class="btn btn-success">Sign In</button>
                            </form>
                        </div>
                        <div class="col">
                            <form action="./log-in.php" method="post">
                                <button type="submit" class="btn btn-outline-success">Log In</button>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>