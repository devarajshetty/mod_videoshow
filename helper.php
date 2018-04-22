<?php

class ModVideoShow
{
    public static function getvideo($params)
    {
        if ($params->get('bg_video')){
          $video=$params->get('bg_video'); 
          return $video;
        } 
       
       
    }
}
?>