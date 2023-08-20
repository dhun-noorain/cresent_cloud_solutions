<?php 	
include '../functions.php';


if(isset($_POST)){
    $full_name =  sanitize($_POST['full_name']);
    $email = sanitize ($_POST['email']);
    $subject =  sanitize($_POST['subject']);
    $message = sanitize($_POST['message']);
 
   if(empty($full_name)){
      echo "<script>alert('Enter valid full name');window.history.back();/</script>";
      exit();
   }

     if(empty($email)){
      echo "<script>alert('Enter valid email');window.history.back();/</script>";
      exit();
   }

     if(empty($subject)){
      echo "<script>alert('Enter valid  subject');window.history.back();/</script>";
      exit();
   }

     if(empty($message)){
      echo "<script>alert('Enter valid message');window.history.back();/</script>";
      exit();
   }
   
   $to = 'ibrahimmo2012@gmail.com';
   $headers = 'From: '.$email.'\r\n';

   $send = mail($to,$subject,$message,$headers);  
   
   if($send == true){
     echo "<script>alert('successfully sent message');window.location.href='index.php'</script>";
   }else{
      echo "<script>alert('Error occured,try again later');window.history.back();/</script>";
      exit();
   } 


}else{
   header('location:index.php');
}



 ?>