<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class admin {

    var $CI;

    function __construct() {
        date_default_timezone_set('Asia/Calcutta');
        if (!class_exists("phpmailer")) {
//            include('lib/class.phpmailer.php');
            require 'lib/PHPMailer/src/Exception.php';
            require 'lib/PHPMailer/src/PHPMailer.php';
            require 'lib/PHPMailer/src/SMTP.php';
        }
        $this->CI = & get_instance();
    }

    function headers() {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: X-Requested-With, content-type, templateCode, encryptedValue, authorization');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT');
    }

    function no_cache() {
        header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
    }

    function escape_special_chrs($text) {
        return str_replace("'", "''", $text);
    }

    function send_mail($from_txt, $to, $cc, $sub, $txt) {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPSecure = "tls";
        $mail->Host = 'smtp.gmail.com'; //$sett->row()->host; // specify main and backup server
        $mail->Port = '587'; //$sett->row()->port;
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = 'web@honeycombindia.net'; //$sett->row()->hostUsername; // SMTP username
        $mail->Password = 'web($Honey#@18';
        $mail->From = 'web@honeycombindia.net';
        $mail->FromName = $from_txt;
        $address = explode(",", $to);
        foreach ($address as $t) {
            $mail->AddAddress($t); // Email on which you want to send mail
        }
        if ($cc != "") {
            $addresscc = explode(",", $cc);
            //		
            foreach ($addresscc as $tcc) {
                $mail->AddCC($tcc);
            }
        }
        $mail->IsHTML(true);
        $mail->Subject = $sub;
        $mail->Body = $txt;
        return $mail->Send();
    }

    function send_mail_attachment($from, $from_txt, $to, $cc, $sub, $txt, $attachment) {


        $mail = new PHPMailer();
//		
        $mail->IsSMTP();
        $mail->SMTPSecure = "tls";
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '587';
        $mail->SMTPAuth = true;
        $mail->Username = 'web@honeycombindia.net';
        $mail->Password = 'web($Honey#@18';
        $mail->From = $from;
        $mail->FromName = $from_txt;
        $address = explode(",", $to);
//		
        foreach ($address as $t) {
            $mail->AddAddress($t); // Email on which you want to send mail
        }

        if ($cc != "") {
            $addresscc = explode(",", $cc);
//		
            foreach ($addresscc as $tcc) {
                $mail->AddCC($tcc);
            }
        }

        if ($attachment != "") {

            $mail->AddAttachment($attachment);
        }
//		
//		
//        $mail->AddReplyTo($sett->row()->from, 'Info'); //optional
//		
        $mail->IsHTML(true);
//		
        $mail->Subject = $sub;
//		
        $mail->Body = $txt;
//		
        return $mail->Send();
    }

    function get_custom_date($dateFormat, $date) {
        if (is_nan($date)) {
            //date_default_timezone_set('UTC');
            return mdate($dateFormat, strtotime(trim($date)));
        } else {
            return mdate($dateFormat, trim($date));
        }
    }

    function clean($string) {
        $string = str_replace(' ', '-', strtolower($string)); // Replaces all spaces with hyphens.
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

}
