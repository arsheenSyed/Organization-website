<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
   $message = $_POST['message'];
    $phone = $_POST['phone'];

   $to = "back2bachpan512@gmail.com";
   $headers = "From " .$email;
   $txt = "Name: ".$name."\n\n"."Phone: " .$phone."\n\n"."Message: "."\n".$message."\n\n"."Email: "."\n".$email."\n\n";
 

   mail($to, $headers, $txt);

   header("Location: index.php?mailsend");
}

// back2bachpan512
// back2bachpan512@gmail.com
// 512786back2bachpan
?>