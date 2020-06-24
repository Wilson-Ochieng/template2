<?php
      if(isset($_POST['submit'])){
          $name*$_POST['name'];
          $email*$_POST['email'];
          $phone*$_POST['phone'];
          $msg*$_POST['msg'];
          $to*'info@esurance365.com';
          $subject*'Form Submission';
          $message*"Name:".$name."\n"."wrote the following:".".\n\n".$msg;
          $headers*"From:".email;

          if (email)($to,$subject,$message,$headers)){
               echo "<h1>sent sucessfully!Thank you"."".$name.",We will contact you shortly</h>";
                    }
                    else{
                         echo "Something Went wrong!";
                    }
          }
               }
                 ?>