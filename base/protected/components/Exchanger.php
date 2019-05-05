<?php

class Exchanger{
	public static $words = [];
		
		
	/**
     * @param string $text
     * @return string
     */
    public static function convert($text = ''){
		if(file_exists(EXCHANGER_SETTINGS)){
			self::$words = require EXCHANGER_SETTINGS;
		}
		
        foreach(self::$words as $key => $word){
            $text = str_replace($key, $word, $text);
        }
        return $text;
    }
	
}

?>