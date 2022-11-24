<?php

$formData = $_POST;
$validateData = [];

// Regex //

$charRegex = "/^([a-zA-Z' ]+)$/";
$msgRegex = "/^([a-z0-9,?!;.: ]+)$/";
$phoneNumberRegex = "/^[0-9]{10}$/";

// Data validation // 

foreach($formData as $key => $value) {
    switch($key) {
        case "firstname" :
            if(!empty($value)) {
                if(is_string($value)) {
                    if(!is_numeric($value)) {
                        if(preg_match($charRegex, $value)) {
                            if(strlen($value) > 1) {
                               $validateData["firstame"] = htmlspecialchars($value);
                            }
                        }
                    }
                }
            }
            break;

        case "lastname" :
            if(!empty($value)) {
                if(is_string($value)) {
                    if(!is_numeric($value)) {
                        if(preg_match($charRegex, $value)) {
                            if(strlen($value) > 1) {
                               $validateData["lastame"] = htmlspecialchars($value);
                            }
                        }
                    }
                }
            }
            break;

        case "phone_number" :
            if(!empty($value)) {
                if(is_numeric($value)) {
                    if(preg_match($phoneNumberRegex, $value)) {
                        $validateData["phone_number"] = htmlspecialchars($value);
                    }
                }
            }
            break;

        case "message" :
            if(!empty($value)) {
                if(is_string($value)) {
                    if(preg_match($msgRegex, $value)) {
                        $validateData["message"] = htmlspecialchars($value);
                    }
                }
            }
        break;
    }        
}

require_once("mailer.php");