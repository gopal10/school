
<?php

$con= mysqli_connect("localhost", "root", "", "nmj");
?>
  <?php
            if(isset($_POST['submit']))
            {
                $content = mysqli_real_escape_string($con,$_POST['content']);
                $writer = mysqli_real_escape_string($con,$_POST['writer']);
                $date = mysqli_real_escape_string($con,$_POST['date']);
         
               
              
            
                if(empty($content) or empty($writer) or empty($date) ) {
                    
                  echo"<script>alert('Something Went Wrong. Please Try Again !!')</script>";
         echo"<script>window.open('add_notice.php','_self')</script>"; 
                    
                }
          
                else{
                    
                $insert ="INSERT INTO `notice` (`id`, `content`, `writer`, `date`) VALUES (NULL, '$content', '$writer', '$date')";
                    
                    if(mysqli_query($con,$insert))
                    {
                           echo"<script>alert('added successfully.')</script>";
         echo"<script>window.open('add_notice.php','_self')</script>"; 
                    }
                    else{
                           echo"<script>alert('Something Went Wrong. Please Try Again !!')</script>";
         echo"<script>window.open('add_notice.php','_self')</script>"; 
                    }
                }
            }
            ?>

      <?php 
                      if(isset($error))
                      {
                          echo "<span
                        class='pull-right' style='color:red;'>$error</span>"
    ;                      
                      }?>