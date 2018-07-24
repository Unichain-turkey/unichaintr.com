<?php

if(isset($_[POST]['name']) && isset($_[POST]['email']) && isset($_[POST]['subject']) && isset($_[POST]['message']))
{
   if(empty($_[POST]['name']) || empty($_[POST]['email']) || empty($_[POST]['subject']) || empty($_[POST]['message']))
   {
      echo "Lütfen formu tam doldurunuz";
   }
   else
   {
      $name    = strip_tags($_POST['name']);
      $email   = strip_tags($_POST['email']);
      $subject = strip_tags($_POST['subject']);
      $message = strip_tags($_POST['message']);
      $icerik  = 'İsim: ' .$name. '<br/>E-Mail: ' .$email. '<br/>'. $mesaj;
      mail('metalhayalc@gmail.com', $subject, $icerik);
      
      echo "Mesajınız başarı ile gönderildi.";
   }
}
else
{
   echo 'Lütfen Formu Doldurun';
}


?>