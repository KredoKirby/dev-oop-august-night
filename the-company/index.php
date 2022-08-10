<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LOGIN</title>
</head>
<body>
    <div class="container">
        <div class="card w-50 my-5 mx-auto border-0">
            <div class="card-header border-0 bg-white">
                <h1 class="display-4 fw-bold text-primary text-center">LOGIN</h1>
            </div>

            <div class="card-body">
                <form action="actions/login.php" method="post">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    
                    <p class="text-center mt-3 small">
                        <a href="views/registration.php">Create an Account</a>
                    </p>

                </form>
            </div>
        </div>
    </div>
</body>
</html>