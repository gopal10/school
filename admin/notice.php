
<?php

$con= mysqli_connect("localhost", "root", "", "nmj");

?>
<?php
if(isset($_GET['del']))
{
    $del_id=$_GET['del'];
    $query ="DELETE FROM `notice` WHERE `notice`.`id` = $del_id";
        if(mysqli_query($con,$query))
        {
            echo "user has been deleted";
}
    else
    {
    echo "Not deleted";
    }
}
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
                
                           
                            <li><a href="admin.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li>
                            <li><a href="admin.php"><span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>BACK</a></li>
                            <li><a href="add_notice.php"><span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>ADD NOTICE</a></li>


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
                    <a href="#" class="list-group-item active"> <i class="fa fa-tachometer"></i> ADMIN PANEL </a>
                    <a href="notice.php" class="list-group-item"> <i class="fa fa-file-text-o"></i> All NOTICES
  </a>
                     <a href="alumini.php" class="list-group-item"><i class="fa fa-user"></i>  ALUMINI PAGE
  
  </a> </div>
            </div>
            <div class="col-md-9">
                <h1> NOTICE <small>View All Notice</small><hr>
                </h1>
               
                   
                 <a href="add_notice.php" class="btn btn-info">Add New</a>
                
               
                    </div><hr>
                    
                    
                    <table class="table table-hower table-border table-stripped">
                        <thead>
                            <tr>
                              
                                <th>Sr #</th>
                                <th>content</th>
                                <th>writer</th>
                                <th>date</th>
                                <th>REMOVE</th>
                            </tr>
                        </thead>
                        <tbody>
                     <?php
                $query="SELECT * FROM notice ORDER BY id DESC";
                $run =mysqli_query($con,$query);
                if(mysqli_num_rows($run)>0)
                {
                    
                ?>
                      
                            
                 <?php
                    while($row = mysqli_fetch_array($run))
                    {
                        $id=$row['id'];
                        $content=$row['content'];
                        $writer=$row['writer'];
                        $date=$row['date'];
                       
                
    
                    ?>
                           
                           
                            <tr>
                             
                                <td><?php echo $id; ?></td>
                               
                                <td><?php echo $content; ?></td>
                                <td><?php echo $writer; ?></td>
                
                                <td><?php echo $date; ?></td>
                             
                              
                               <td><a href="notice.php?del=<?php echo $id;?>" class="glyphicon glyphicon-remove"></a></td>
                            </tr>
                      <?php 
                    }
                            ?>
                        </tbody>
                        
                    </table>
                    
                    
                    <?php
                }
                else
                    echo "<h2><center> NO data Available</center></h2>"
                ?>
                    
                    
            </div>
        </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>