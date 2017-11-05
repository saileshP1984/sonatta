<?php

   $name = $_POST['name'];
   $email = $_POST['email'];
   $mobile = $_POST['contact'];
   $one_bhk = $_POST['one_bhk'];
   $two_bhk = $_POST['two_bhk'];
   $two5_bhk = $_POST['two5_bhk'];
   $messg = $_POST['comments'];
   

   $to = "sales@sonattaonella.com";
   $subject = 'Enquiry Details';
   
   $message = "<h2><strong>Welcome To Sonatta Onella<strong></h2>";
   $message .= "<p>This is the enquiry form which the customer fills when he comes to survey a particular flat.
   \r\n The following details for the customer is given below:</p>";
   $message .= "<p>Customer Name: $name</p>";
   $message .= "<p>Email: $email</p>";
   $message .= "<p>Mobile No: $mobile</p>";
   $message .= "<p>Flat: $one_bhk, $two_bhk, $two5_bhk</p>";
   $message .= "<p>Message: $messg</p>";
   
   $message .= "<p>Best Regards.</p>";
   
   $header = "From:project@sonattaonella.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )
   {
      echo "<script>alert('Mail Sent Successfully');if(alert){ window.location='contact-us.html';}</script>";
   }
   else
   {
      echo "<script>alert('Mail Not Sent');if(alert){ window.location='contact-us.html';}</script>";
   }
?>