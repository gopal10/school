<?php 
session_start();
if(!isset($_SESSION['username'])){
header('location: login.php');
exit;
}else{
?>

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

    <body >
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
                          
<li><a href="logout.php"><span class="glyphicon glyphicon-lock-open" aria-hidden="true"></span>logout</a></li>
                          

                    </ul>
                </div>
            </div>
        </div>
    </nav>
          <br>
                         <br>
                         <br>
                          
          
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active"> ADMIN PANEL </a>
                        <a href="notice.php" class="list-group-item"> All NOTICES <span class="badge">14</span> </a>
                        <a href="notice.php" class="list-group-item"> All EVENTS <span class="badge">14</span> </a>
                         <a href="alumini.php" class="list-group-item"> ALUMINI <span class="badge">14</span> </a>
                       
   </div>
                </div>
                <div class="col-md-9">
                    <h1>
          
   ADMIN PANEL <small>ONLY FOR OFFICIAL PURPOSE</small><hr>
                    </h1>

                    <div class="row tag-boxes">
                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3"> </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">18</div>
                                            <div class="text-right">NOTICES</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="notice.php">
                                    <div class="panel-footer"> <span class="pull-left"> View All notices</span> <span class="pull-right"></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3"> <i class="fa fa-users fa-5x"></i> </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">11</div>
                                            <div class="text-right">ALUMINI</div>
                                        </div>
                                    </div>
                                </div>
                       <a href="alumini.php">
                                    <div class="panel-footer"> <span class="pull-left"> View All Alumini</span> <span class="pull-right"></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3"> <i class="fa fa-users fa-5x"></i> </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">+</div>
                                            <div class="text-right">ADD NOTICE</div>
                                        </div>
                                    </div>
                                </div>
                       <a href="add_notice.php">
                                    <div class="panel-footer"> <span class="pull-left"> ADD NOTICE</span> <span class="pull-right"></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script src="../js/bootstrap.min.js"></script><?php
}?>
    </body>

    </html>