<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Encryption extends CI_Encryption
{
   /**
 * Encodes a string.
 * 
 * @param string $string The string to encrypt.
 * @param string $key[optional] The key to encrypt with.
 * @param bool $url_safe[optional] Specifies whether or not the
 *                returned string should be url-safe.
 * @return string
 */
    public $encrypt_method = ENCRYPT_METHOD;

    public $secret_key = SECRET_KEY; //This is my secret key

    public $secret_iv = SECRET_IV; //This is my secret iv

    public $output = false;

    public function __construct() {
        parent::__construct();
    }

function encode_string($string)
{  
    $ret = parent::encrypt($string);
    if ( !empty($string) )
    {
        $ret = strtr(
                $ret,
                array(
                    '+' => '.',
                    '=' => '-',
                    '/' => '~'
                )
            );
    }

    return $ret;
}

/**
 * Decodes the given string.
 * 
 * @access public
 * @param string $string The encrypted string to decrypt.
 * @param string $key[optional] The key to use for decryption.
 * @return string
 */
function decode_string($string)
{
    $string = strtr(
            $string,
            array(
                '.' => '+',
                '-' => '=',
                '~' => '/'
            )
    );

    return parent::decrypt($string);
}

    function openssl_encrypt($string) {

           // hash
           $key = hash('sha256', $this->secret_key);

           // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
           $iv = substr(hash('sha256', $this->secret_iv), 0, 16);

           $output = openssl_encrypt($string, $this->encrypt_method, $key, 0, $iv);
           $output = base64_encode($output);

           return $output;
       }

       function openssl_decrypt($string) {

           // hash
           $key = hash('sha256', $this->secret_key);

           // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
           $iv = substr(hash('sha256', $this->secret_iv), 0, 16);

           $output = openssl_decrypt(base64_decode($string), $this->encrypt_method, $key, 0, $iv);

           return $output;
       }
}