<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $to = 'ejazzzzkhanej@gmail.com';
    $subject = 'form subbmission';
    $message = "from".$name."\n"."the message is"."\n\n".$msg;
    $headers = "from".$email;
    if(mail($to, $subject, $message, $headers))
    {
      echo "message send successfuly";
    }else {
      echo "something went wrong";
    }
}
 ?>
