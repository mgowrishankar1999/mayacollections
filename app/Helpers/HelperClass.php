<?php

namespace App\Helpers;

class HelperClass
{
    public static function encrypt_decrypt($string, $action = 'e')
    {
        // you may change these values to your own
        $secret_key = 'radypay@isthehiddenkey#$%';
        $secret_iv = '08062023';

        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'e') {
            $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
        } else if ($action == 'd') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }
    
    
    
    //==== SMS Gateway ====//
    public static function sendSms($mobileNo, $otp = null, $expTime = 10, $smsFor, $headers = array()) {
        $senderId = 'SIPMAA';
        $apiKey   = '28c9dd4cc359b970e29649de6f014bfd';
        $routeId  = 2;
        
        
        //=== SMS For  1 => Otp validation, 2 => Password change otp, 3 => User request, 4 => Profile verified
        
        $templateId = '';
        $message    = '';
        if($smsFor == '1') {
            $templateId = '1607100000000270964';
            $message    = $otp.' is the OTP to validate your Mobile number for SIPMAA Registration. This OTP is valid for next '.$expTime.' Minutes'; 
        }
        
        if($smsFor == '2') {
            $templateId = '1607100000000270968';
            $message    = ' Dear Member, '.$otp.' is the OTP to change your Password. The same OTP has been Sent to your Registered Email. This OTP is Valid for next '.$expTime.' Minutes.'; 
        }
        
        if($smsFor == '3') {
            $templateId = '1607100000000270965';
            $message    = 'Dear User, Your request to get added as a Member in SIPMAA HR Forum is sent to admin for Approval'; 
        }
        
         if($smsFor == '4') {
            $templateId = '1607100000000270966';
            $message    = 'Congratulations! Dear Member, Your Profile has been successfully verified and Approved by SIPMAA Admin. You Can redeem benefits from now onwards.'; 
        }
        
        $msg = urlencode($message);
        
        
        $smsUrl  = "http://site.ping4sms.com/api/smsapi?key=$apiKey&route=$routeId&sender=$senderId&number=$mobileNo&sms=$msg&templateid=$templateId";

        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $smsUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);

        $r = curl_exec($ch);
        
    }
    
    public static function forgetpasswordMail($email, $name, $new_otp, $sub, $msg)
    {
        $apiKey = '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';
        $frmMail = 'support@batechdemo.in';
        $frmName = 'Support';
        $apiUrl = 'https://api.brevo.com/v3/smtp/email';

        $headers = array(
            'api-key: ' . $apiKey,
            'Content-Type: application/json',
            'Content-Type: application/json'
        );

        $subject = $sub;
        $msgContent = $msg;
        $postData = array(
                            "sender" => array("name" => $frmName, "email" => $frmMail),
                            "to" => array(
                                array("name" => $name, "email" => $email)
                            ),
                            "replyTo" => array("name" => $frmName, "email" => $frmMail),
                            "subject" => $subject,
                            "htmlContent" => $msgContent
                        );
                
                        $jsonpostData = json_encode($postData, true);
                
                        //=== Curl  ===//
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $apiUrl);
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonpostData);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $response = curl_exec($ch);
                        curl_close($ch);
                        return $response;
    }
    
}
