<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer.php';
require_once '../conection/index.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

// $phpmailer = new PHPMailer();
// $phpmailer->isSMTP();
// $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
// $phpmailer->SMTPAuth = true;
// $phpmailer->Port = 2525;
// $phpmailer->Username = 'e7355b9530299d';
// $phpmailer->Password = 'a1277ade6e6e0a';

$data_response = [];
try {



    if (setting('smtp_status', $con) == 'on') {





        
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = setting('smtp_server',$con);                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = setting('smtp_name',$con);                     //SMTP username
        $mail->Password = setting('smtp_password',$con);                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = setting('smtp_port',$con);                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom(setting('smtp_email',$con), 'D Engr Web');

        if(isset($_REQUEST['project_id'])){
            // when received project id
            $select_message=$con->query('SELECT * FROM `suscribe`');
            $to='';
            while($r_m=$select_message->fetch_assoc()){
                $mail->addAddress($r_m['email']);
            }
    
        }else{
            $mail->addAddress($_REQUEST['to'], $_REQUEST['name']);     //Add a recipient
        }
        
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo(setting('smtp_email',$con), 'D Engr Web');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('Screenshot_2.png', 'Screenshot_2.png');    //Optional name


        $mail->isHTML(true);     

        if (isset($_REQUEST['project_id'])) {
            $id = $_REQUEST['project_id'];
            $select_project=mysqli_fetch_assoc($con->query("SELECT * FROM `project_info` WHERE `id`='$id'"));
            $description=$select_project['description'];
            $image=$select_project['file'];
            $feature=$select_project['feture'];
            
             $mail->Subject = "Dengrweb || ".$select_project['name']; 
             $mail->Body ="<img src='".APP_URL."/assets/img/".$image."'/>". $select_project['description'];
             $mail->AltBody = $select_project['description'];
        }else{
            $mail->Subject = $_REQUEST['subject'];
            $mail->Body = ' <img src="' . APP_URL . '/email/mail_track/?v=8768" /><br/>'.$_REQUEST['body'];
            $mail->AltBody = $_REQUEST['body'];
        }



        //Content
                                 //Set email format to HTML
     

        $mail->send();
        // echo 'Message has been sent';
        $data_response['status'] = 'success';
        $data_response['code'] = '200';
    }
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $data_response['status'] = 'failed';
    $data_response['code'] = '22000';
}

echo json_encode($data_response);