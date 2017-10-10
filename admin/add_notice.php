
   <?php

$con= mysqli_connect("localhost", "root", "", "nmj");

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NMJ ADMIN panel</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="../images/omoran.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.2.1.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="admin.php"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> HOME </a>
                            </li>
                            <li><a href="admin.php"><span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>Admin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br> <a href="#" class="list-group-item">  ADD NOTICE

  </a>
        <div class="col-md-9">
            <h1>Add new notice</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="admin.php" class="active"> <i class="fa fa-tachometer"></i> admin</a>
                </li>
                <li class="active"> Add new notice</li>
            </ol>
          
                <div class="container col-md-8">
                    <form action="add.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="Content"> content* </label>
                      
                                <input type="text" name="content" id="content" class="form-control" placeholder="content"> </div>
                        <div class="form-group">
                            <label for="writer"> writer:* </label>
                            <input type="text" name="writer" id="writer" class="form-control" placeholder="writer"> </div>
                        <div class="form-group">
                            <label for="date"> date:* </label>
                            <input type="text" name="date"  class="form-control" placeholder="date"> </div>
                        <input type="submit" value="Add Notice" name="submit" class="btn btn-primary"> </form>
                </div>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script></div>
    </body>

    </html>