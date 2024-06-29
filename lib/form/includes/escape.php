<?php

class escapeValue {
    public function escapeGet($array){
        $result = [];
        foreach($array as $val) {
            $result[$val] = filter_input(INPUT_GET, $val, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        return $result;
    }
    public function escapePost($array){
        $result = [];
        foreach($array as $val) {
            $result[$val] = filter_input(INPUT_POST, $val, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        return $result;
    }
}

$escaper = new escapeValue();
$keysToEscape = [
    'inquiry', 
    'fullname', 
    'furigananame', 
    'email', 
    'tel', 
    'publicrelations', 
    'attachment_file', 
    'agree', 
    'confirm', 
    'submit'
];
$esc = $escaper->escapePost($keysToEscape);