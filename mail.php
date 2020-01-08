<?php
    $to = 'alenvik@inbox.ru';
    $firstname = $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $text= $_POST["name"];
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.$laststname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Phone: '.$phone.'</td></tr>
        <tr><td>Name: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Письмо отправлено. Благодарим за обращение!';
    }else{
        echo 'Не удалось отправить сообщение.';
    }

?>
