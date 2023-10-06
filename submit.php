<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $oth = $_POST['oth'];
  
  $to = "roughwaterguy@gmail.com";
  $subject = "Form emails";
  $body = $name . $email . $oth;
  
  if (mail($to, $subject, $body)) {
    echo "There was an issue Please try again";
  } else {
    echo "Please try again later.";
  }
?>