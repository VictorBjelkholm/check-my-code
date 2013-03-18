<?php
class CodeHelper {	
    public static function code_is_long($code) {
        if(strlen($code) >= 203) {
            return substr($code->content,0,198).'<br/>...';
        } else {
            return $code;
        }
    }

    public static function display_code($code) {
    }
}