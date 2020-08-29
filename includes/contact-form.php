<?php
/**
 * This example shows how to handle a simple contact form.
 */

$msg = '';
//Don't run this unless we're handling a form submission
if (isset($_POST['myname']) and (empty($_POST['honeypot']))) {
		$myName = $_POST['myname'];
		$myEmail = $_POST['myemail'];
		$myComment = $_POST['mycomment'];
        $myRole = $_POST['role'];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.zero.webhostingforstudents.com';
    $mail->Port = 587;
		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;
		//Provide username and password
		$mail->Username = "aceinthehole@zero.webhostingforstudents.com";
		$mail->Password = "70FxgPirbO!N";
		
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('aceinthehole@zero.webhostingforstudents.com', 'Ace Contact');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('alison.bonisteel@pcc.edu', 'Aster Bonisteel');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->addReplyTo($myName, $myEmail);
        $mail->Subject = 'Ace in the Hole Message';
        //Keep it simple - don't use HTML
        $mail->isHTML(true);
        //Build a simple message body
        $mail->Body = <<<EOT
Name: $myName<br>
Email: $myEmail<br>
Role: $myRole<br>
Message: $myComment<br>
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            echo "Mailer Error:" . ' ' .  $mail->ErrorInfo;
        } else {
            include '../submitted.php';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
?>
