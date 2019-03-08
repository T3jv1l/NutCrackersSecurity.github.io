<?php
    if(isset($_POST['submit']))
    {
   $nume = isset($_POST['name']) ? $_POST['name'] : '';
         $email = isset($_POST['email']) ? $_POST['email'] : '';
         $mesaj = isset($_POST['message']) ? $_POST['message'] : '';

        mail('moldo_darius97@yahoo.com', '$nume' . ' ' . '$email', '$mesaj');
    }
?>
