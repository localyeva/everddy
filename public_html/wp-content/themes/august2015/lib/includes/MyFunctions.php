<?php

/*
 * Author: Khang Le
 * 
 * 
 *  
 */

function convert_newline($text = '', $open_tag = '<p>', $close_tag = '</p>') {
    if ($text != '') {
        $arr = preg_split('/(\r?\n)+/', $text);
        $result = '';
        foreach ($arr as $value) {
            $result .= $open_tag . $value . $close_tag;
        }
        return $result;
    }
}
