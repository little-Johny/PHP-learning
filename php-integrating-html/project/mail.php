<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false)
{
  // initial configuration
  $phpmailer = new PHPMailer();
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.gmail.com';
  $phpmailer->SMTPAuth = true;
  $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $phpmailer->Port = 465;
  $phpmailer->Username = 'molano.johny721@gmail.com';
  $phpmailer->Password = $_ENV["GMAIL_PASS"];

  $phpmailer->SMTPDebug = 2;
  $phpmailer->Debugoutput = 'html';

  // adding recipient
  $phpmailer->setFrom('contact@mycompany.com', 'My company');
  $phpmailer->addAddress($email, $name);

  // defining the content
  $phpmailer->isHTML($html); // set email format to HTML
  $phpmailer->Subject = $subject;
  $phpmailer->Body = $body;

  // send mail
  $phpmailer->send();

}

