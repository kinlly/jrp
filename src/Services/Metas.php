<?php namespace App\Services;

class Metas{

    function set($page, $language){
        $file_directory = file_get_contents(__DIR__ ."/../../assets/metas/$page/$language.json");
        $json_text = json_decode($file_directory,1);
    
        return $json_text;
    }
}