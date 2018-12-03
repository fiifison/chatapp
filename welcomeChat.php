<!doctype html>

<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chat Web</title>
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

            <div class="jumbotron mx-xl-6 col-md-6 col-lg-6 col-sm-6 mx-auto">
            <div class="float-right">
                <a href="logout.php" class="btn btn-warning font-weight-bold ml-1 action">Logout</a>
            </div>
                    <h2 class="h2-responsive">Greetings:-<?php echo $_SESSION['username']; ?></h2>
                   
                <div class="chatbox">
                    <div class="chatlogs">
                        <div id="name">
                            <div class="output"></div>
                        </div>                
                    </div>
                </div>
                <div class="chat-form">
                    <form action="sendmessage.php" method="post">
                        <div class="text-center py-4 mt-3">
                            <textarea name="message" id="message" cols="50" rows="5" placeholder="Type a message..."></textarea>
                        </div>

                        <div class="text-center py-2 mt-1">
                            <button type="submit" class="btn btn-outline-purple" type="submit">Send</button>
                        </div>                  
                    </form>
                </div>
            </div><!-- Jumbotron -->
        </div>   <!-- row -->       
    </div><!-- container -->


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
        $(document).ready(function(e){

            setInterval(function(){

                $('#name').load('refresh.php');

            },2000);

        });
    </script>
  </body>
</html>