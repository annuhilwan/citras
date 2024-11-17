<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
  'smtp_host' => 'ssl://smtp.googlemail.com', 
	//'smtp_host' => 'smtp.gmail.com', 
	//'smtp_crypto' => 'ssl', # Add this
    'smtp_port' => 465,
    'smtp_user' => 'mastercoding.indonesia@gmail.com',
    'smtp_pass' => 're2311za',
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'utf-8',
	'newline' => "\r\n" 
);