<!doctype html>

<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ChatApp</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
  <body>

    <div class="container">
          <!-- Jumbotron -->
        <div class="jumbotron text-center mdb-color lighten-2 white-text mx-2 mb-5">

        <!-- Title -->
        <h2 class="card-title h2">Chat Application With PHP &amp; MySQL</h2>

        </div>

        <div class="row">
            <!-- Card -->
            <div class="card mx-xl-6 col-md-6 mx-auto">

            <!-- Card body -->
                <div class="card-body">

                    <!-- Default form subscription -->
                    <form action="logincode.php" method="POST" onsubmit="return check();">
                        <p class="h4 text-center py-4">Login</p>

                        <!-- Default input username -->
                        <label for="username" class="grey-text font-weight-light">Your username</label>
                        <input type="text" id="username" name="username" class="form-control">

                        <br>

                        <!-- Default input password -->
                        <label for="password" class="grey-text font-weight-light">Your password</label>
                        <input type="password" id="password" name="password" class="form-control">

                        <div class="text-center py-4 mt-3">
                            <button class="btn btn-outline-purple" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
                        </div>
                        <p class="font-small grey-text d-flex justify-content-center">Don't have an account? <a href="signup.php" class="dark-grey-text font-weight-bold ml-1"> Sign up</a></p>
                    </form>
                    <!-- Default form subscription -->

                </div>
                <!-- Card body -->

            </div>
            <!-- Card -->
            <!-- Default form login -->
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
        function check(){
            if(document.login.username.value === "" || document.login.password.value === ""){
                alert("Username or Password Must Not Be Empty");
                return false;
            }
            else{ return true;}
        }
    </script>
  </body>
</html>