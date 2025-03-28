<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';
$alertType = '';
$alertDiv = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $model = $_POST['model'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'promijeni@gmail.com';
        $mail->Password = 'tajna-sigra-promijeni';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('ante.klincic@gmail.com');

        $mail->addAddress('atvprodaja@gmail.com'); //na ovu adresu dolazi

        $mail->isHTML(true);
        $mail->Subject = 'MandarinaMoto poruka sa stranice';
        $mail->Body = <<<EOT
        Ime pošiljatelja: $name <br>
        Email: $email<br>
        Mobitel: $phone<br>
        Zemlja: $country<br>
        Model: $model<br>
        Poruka: $message
        EOT;
        
        $mail->AltBody = <<<EOT
        Ime pošiljatelja: $name <br>
        Email: $email<br>
        Mobitel: $phone<br>
        Zemlja: $country<br>
        Model: $model<br>
        Poruka: $message
        EOT;

        $mail->send();
        $alert = 'Poruka je uspješno poslana! Hvala na Vašem upitu.';
        $alertType = 'alert-success';
        $alertDiv = <<<EOD
        <div class="alert $alertType alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        $alert
        </div>
        EOD;

    } catch (Exception $e) {
        $alert = 'There was an error while submitting the form. Please contact us via atvprodaja@gmail.com';
        $alertType = 'alert-danger';
        $alertDiv = <<<EOD
        <div class="alert $alertType alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        $alert
        </div>
        EOD;
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

}

?>
