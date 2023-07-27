<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

<body>

    <div class="container">
        <br> <h1 class="text-center"> Welcome to Quiz World </h1> <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                <h2 class= "text-center card-header">Login</h2>

                <form action="validation.php" method="POST">
                    <div class="form-group">
                        <label> username </label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Password </label>
                        <input type="Password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary"> Login </button>

                </form>
                </div>
            </div>

                <div class="col-lg-6">
                    <div class="card">

                <h2 class="text-center card-header">Register</h2>

                <form action="registration.php" method="POST">
                    <div class="form-group">
                        <label> Username </label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Password </label>
                        <input type="Password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary"> Register </button>

                </form>
                </div>
            </div>
        </div>
        <h7>Please Register before you Login </h7>
    </div>
    
</body>
</html>