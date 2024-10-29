<?php

/*header('Access-Control-Allow-Headers: x-requested-with');
 header('Access-Control-Allow-Origin: *');*/

// Define constants. Put your desired values here.
define('RECIPIENT_NAME', 'OPEN YOUR EYES');
define('RECIPIENT_EMAIL', 'contact@openyoureyes.info');
define('EMAIL_SUBJECT', 'OPEN YOUR EYES WEB CONTACT EMAIL');

//	if (!isset($_SESSION)) session_start();
//	if(!$_POST) exit;

$privatekey = '6LfaCLsUAAAAAIxOk1bEbrzekAdJCXJZ5jrfdpd7';
$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$privatekey}&response={$_POST['captcha']}");

$captcha_success = json_decode($verify);

if (false == $captcha_success->success) {
    echo -200;
} else {
    // tornem a comprovar email per si acas
    //echo $result;
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $organisation = $_POST['organisation'];
    $message = $_POST['message'];
    
    $error = '';
    if ('' == trim($name)) {
        $error = 'Your name is required.';
    } elseif ('' == trim($email)) {
        $error = 'Your e-mail address is required.';
    } elseif (!isEmail($email)) {
        $error = 'You have entered an invalid e-mail address.';
    } elseif ('' == trim($organisation)) {
        $error = 'You must enter a subject.';
    } elseif ('' == trim($message)) {
        $error = 'You must enter a message to send.';
    }
    
    if (!strlen($error)) {
        if (get_magic_quotes_gpc()) {
            $message = stripslashes($message);
        }
        $message_body = <<<ENDOFMESSAGE
	<!DOCTYPE HTML>
	<html>
	<head>
	  <meta http-equiv="Content-Type"  content="text/html charset=UTF-8" />
	  <title>{$organisation} at OpenYourEyes</title>
	</head>
	<body>
	  <h3>{$subject}</h3>
	  <p>A new message has been sent from OPEN YOUR EYES website:</p>
	  <table>
	    <tr>
	      <th>Name:</th>
	      <td>{$name}</td>
	    </tr>
	    <tr>
	      <th>Email:</th>
	      <td>{$email}</td>
	    </tr>
	    <tr>
	      <th>Message:</th>
	      <td>{$message}</td>
	    </tr>
	  </table>
	</body>
	</html>
ENDOFMESSAGE;
    }
    
    // Set the required headers:
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-UTF-8'."\r\n";
    $headers .= 'From: '.$name.' <'.$email.'>'."\r\n";
    $headers .= 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
    $headers .= 'X-Mailer: PHP/'.phpversion()."\r\n";
    $recipient = RECIPIENT_NAME.' <'.RECIPIENT_EMAIL.'>';
    try {
        mail($recipient, $organisation, $message_body, $headers);
        $status = 'success';
    } catch (Exception $e) {
        $status = $e->getMessage();
    }
    if ('success' == $status) {
        echo '1';
    } else {
        echo '2';
    }
    
    
}

///////////////////////////////////////////////////////////////////////////
//Check if e-mail address
function isEmail($value)
{
    return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $value);
}



?>