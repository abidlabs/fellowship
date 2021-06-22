<?php 
if(isset($_POST['email']) && $_POST['email'] != ''){
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $to = "a12d@stanford.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    echo mail($to,$subject,$message,$headers);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
   
  }
    }
   else {
       die( 'Unable to load');
     }
?>