<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
  if( !function_exists('swiftMailer') ) {
    function swiftMailer($sendTo, $subject, $body) {
        //SwiftMailer Integration
        require_once APPPATH . 'libraries/swiftMailer/swift_required.php';
        // Create the mail transport configuration
        $transport = Swift_MailTransport::newInstance();

        // Create the message
        $message = Swift_Message::newInstance();
        $logger = new \Swift_Plugins_Loggers_EchoLogger();

        $message->setTo($sendTo);
        $message->setContentType("text/html");
        $message->setSubject($subject);
        $message->setBody($body);
        $message->setFrom('mail@saghealthscience.com', 'Sag Health Science');

        // Send the email
        $mailer = Swift_Mailer::newInstance($transport);

        if ($mailer->send($message, $errors)) {
            $json = array('status' => true, 'message' => 'Mail Sent');
        } else {
            $json = array('status' => false, 'message' => 'Fail to send email');
        }
        return json_encode($json);

        //Email sent
    }
  }