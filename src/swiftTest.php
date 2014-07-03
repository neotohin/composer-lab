<?php

/**
 *  Nice Tutorial: http://sssslide.com/speakerdeck.com/suzuki/swift-mailer-the-missing-manual-and-more
 */

require_once '../vendor/autoload.php';


$message = Swift_message::newInstance();
$message->setFrom('amzad.hossain@sourcetop.com')
        ->setTo('amjad.hossain@gmail.com')
        ->setSubject('Multipart Sample Email')
        ->setBody('I am a  test Email from swift');


// $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -t');
$transport = Swift_MailTransport::newInstance();

$mailer = Swift_Mailer::newInstance( $transport );

$logger = new Swift_Plugins_Loggers_ArrayLogger();
$mailer->registerPlugin(
    new Swift_Plugins_LoggerPlugin( $logger )
  );

$result = $mailer->send( $message );

echo $logger->dump();
