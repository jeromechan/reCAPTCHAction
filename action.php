<?php
/**
 * Copyright © 2014 Jerome Chan. All rights reserved.
 * 
 * @author chenjinlong
 * @date 8/27/14
 * @time 1:09 PM
 * @description action.php
 * @reference Google reCAPTCHA v1.11
 * @package lib clone from http://developers.google.com/recaptcha
 */
require_once('recaptchalib.php');
require_once('config.php');

/**
 * Generate the reCAPTCHA form html
 */
function echo_captcha_form()
{
    $publickey = CAP_PUBLIC_KEY;
    echo recaptcha_get_html($publickey);
}

/**
 * Verify user captcha data
 */
function verify_captcha_response()
{
    if(isset($_POST["recaptcha_response_field"])){
        if(empty($_POST["recaptcha_response_field"])){
            die ("The reCAPTCHA wasn't entered correctly. Go back and try it again.");
        }else{
            $privatekey = CAP_PRIVATE_KEY;
            $resp = recaptcha_check_answer ($privatekey,
                $_SERVER["REMOTE_ADDR"],
                $_POST["recaptcha_challenge_field"],
                $_POST["recaptcha_response_field"]);

            if (!$resp->is_valid) {
                die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
                    "(reCAPTCHA said: " . $resp->error . ")");
            }
        }
    }else{
        die ("The reCAPTCHA wasn't installed correctly. Go back and try to reinstall it again.");
    }
}