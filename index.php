<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CRUD PHP MAIN</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
</head>

<body>

    <!-- Start your project here-->
    <div class="container">
        <div class="jumbotron text-center mdb-color lighten-2 white-text mx-2 mb-5">

            <!-- Title -->
            <h2 class="card-title h2">Student Information</h2>
        </div>
        <div class="card card-body">

            <div class="">
                <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#addStudent">Add New Student</a>
                </div>
            <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th colspan="2">Action</th>
                    </tr>
                        <!-- PHP Code -->
                        <?php
                        include('config.php');
                        $sql = "SELECT * FROM login";
                        $result = mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($result)){
                        
                        
                        echo "<tr>";
                        echo "<td> $row[name]</td>";
                        echo "<td> $row[email]</td>";
                        echo "<td> $row[phone]</td>";
                        echo "<td> $row[pass]</td>";
                        echo "<td><a href='updateform.php?name=$row[name]' class='btn btn-sm btn-warning'>Edit</a></td>";//updated
                        echo "<td><a href='delete.php?name=$row[name]' class='btn btn-sm btn-danger'>Delete</a></td>";//updated
                    echo "</tr>";


                    
                        }   


                        ?>
            </table>
    </div>
    <!-- /Start your project here-->






    <!-- Modal Update Form -->


<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add New Student</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="add.php" method="POST" autocomplete>
                <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="name" class="form-control validate" name="name">
                            <label data-error="wrong" data-success="right" for="name">Your Name</label>
                        </div>

                        <div class="md-form mb-5">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="email" class="form-control validate" name="email">
                            <label data-error="wrong" data-success="right" for="email">Your email</label>
                        </div>

                        <div class="md-form mb-5">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="phone" class="form-control validate" name="phone">
                            <label data-error="wrong" data-success="right" for="phone">Your Phone</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-key prefix grey-text"></i>
                            <input type="text" id="pass" class="form-control validate" name="pass">
                            <label data-error="wrong" data-success="right" for="pass">Your Password</label>
                        </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default">Add Student</button>
                </div>

            </form>
        </div>
  </div>  
</div>



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>