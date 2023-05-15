<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <!-- main content - start -->
        <div class="container">
            <form action="login.php" method="post" class="was-validated">
                    <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control"
                        id="uname" placeholder="Enter username"
                        name="username" required>
                    <div class="valid-feedback">the fields have been filled in</div>
                    <div class="invalid-feedback">
                        Please fill out this field.
                    </div>
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control"
                        id="pwd" placeholder="Enter password"
                        name="password" required>
                    <div class="valid-feedback">the fields have been filled in</div>
                    <div class="invalid-feedback">
                        Please fill out this field.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit <a href="registrasi.php"></a>
                </button>
            </form>
        </div>
        <!-- main content - end -->

        <!--
        Bootstrap core JavaScript
        Placed at the end of the document so the pages load faster
        -->
        <script src="js/jquery-3.6.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
    </body>
</html>

