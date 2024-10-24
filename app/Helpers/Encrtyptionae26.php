<?php

namespace App\Helpers;

class Encrtyptionae26
{


    function pad_zero($data)
    {

        $len = 16;
        if (strlen($data) % $len) {
            $padLength = $len - strlen($data) % $len;
            $data .= str_repeat("\0", $padLength);
        }

        return $data;
    }

    function encrypt($data, $key)
    {

        $key = hex2bin($key);
        $iv_size = openssl_cipher_iv_length('AES-128-CBC');
        $iv = openssl_random_pseudo_bytes($iv_size);
        $blocksize = 16;
        $pad = $blocksize - (strlen($data) % $blocksize);
        $data = $data . str_repeat(chr($pad), $pad);
        return base64_encode($iv . openssl_encrypt($this->pad_zero($data), 'AES-128-CBC', $key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv));
    }


    function decrypt($data, $key)
    {

        $key = hex2bin($key);
        $ciphertext_dec = base64_decode($data);
        $iv_size = openssl_cipher_iv_length('AES-128-CBC');
        $iv_dec = substr($ciphertext_dec, 0, $iv_size);
        $ciphertext_dec = substr($ciphertext_dec, $iv_size);
        $dc = openssl_decrypt($ciphertext_dec, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv_dec);
        return rtrim($dc, "\x00..\x1F");
    }

    public  function createOpenAPIRequest($request, $reqName, $reqBodyName)
    {

        if (isset($request[$reqName]['SubHeader']['channelId'])) {
            $AES_key = '';
            $env = '';
            $channelId = $request[$reqName]['SubHeader']['channelId'];
            if ($env == 'prod') {
                $secretKeyArr = array("STRADE" => "04e1a3469e540455229a53ab75c2d29b");
                $AES_key = 'FB5ECE9C87AF979E275D3B90AF77F46C';
            } else {
                $secretKeyArr = array("STRADE" => "04e1a3469e540455229a53ab75c2d29b");
                $AES_key = 'FB5ECE9C87AF979E275D3B90AF77F46C';
            }

            $secret = $secretKeyArr[$channelId] ?? '';
            if (isset($request[$reqName][$reqBodyName]) && (!empty($secret))) {

                $requestArr = array();
                $jsondata = json_encode($request[$reqName][$reqBodyName]);
                $encryptedTextToSendToAxis = $this->encrypt($jsondata, $AES_key);
                $decrypt  = $this->decrypt($encryptedTextToSendToAxis, $AES_key);
                $request[$reqName][$reqBodyName . '' . 'Encrypted'] = $encryptedTextToSendToAxis;
                //remove plain body object
                unset($request[$reqName][$reqBodyName]);
            }
        }

        return  json_encode($request);
    }

    public  function decryptOpenAPIResponse($request, $reqName, $reqBodyName)
    {


        if (isset($request[$reqName]['SubHeader']['channelId'])) {
            $AES_key = '';
            $env = "";

            $channelId = $request[$reqName]['SubHeader']['channelId'];


            if ($env == 'prod') {
                $secretKeyArr = array("STRADE" => "04e1a3469e540455229a53ab75c2d29b");
                $AES_key = 'FB5ECE9C87AF979E275D3B90AF77F46C';
            } else {
                $secretKeyArr = array("STRADE" => "04e1a3469e540455229a53ab75c2d29b");
                $AES_key = 'FB5ECE9C87AF979E275D3B90AF77F46C';
            }
            $secret = $secretKeyArr[$channelId] ?? '';

            if (isset($request[$reqName][$reqBodyName . '' . 'Encrypted']) && (!empty($secret))) {

                $requestArr = array();
                $jsondata = json_encode($request[$reqName][$reqBodyName . '' . 'Encrypted']);
                $dencryptedResponseFromAxis = $this->decrypt($jsondata, $AES_key);
                $request[$reqName][$reqBodyName] = $dencryptedResponseFromAxis;

                //remove ecnrypted  body object
                unset($request[$reqName][$reqBodyName . '' . 'Encrypted']);
            }
        }
        return  json_encode($request);
    }
} // class closed
