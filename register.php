<?php

if (!empty($_POST)) {
    $email = $_POST['email'];

   if (empty($email)) {
     $errors[] = 'Email is empty';
   }

    if (empty($errors)) {
        $client = $_POST['client'];
        $phone = $_POST['phone'];
        $kid = $_POST['kid'];
        $package = $_POST['package'];
        $notes = $_POST['notes'];

       $toEmail = 'chudesino@abv.bg';
      // $toEmail = 'nt@mail.bg';
        $emailSubject = 'Chudesino - new order';

        $headers = "Content-Type: text/html; charset=utf-8";
        $body = "<html>Родител: {$client} \r\n <br/> Email: {$email} \r\n <br/>Телефон: {$phone} \r\n<br/>  Въпроси: \r\n<br/> " . $notes ."</html>";

//echo $body 
        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: https://online.chudesino.com/thank-you');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <head>
    <title>Успешно пратено съобщение</title>
  </head>
  <body>
    <h4>Благодарим ви! Вашето съобщение беше изпратено успешно.</h4>
    <a href="https://online.chudesino.com">Кликнете тук</a> за да се върнете на
    началната страница.
  </body>
</html>
