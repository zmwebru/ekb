<?php
namespace yupe\components;

class Exchanger{
	public  $words = require EXCHANGER_SETTINGS;
		
	/**
     * @param string $text
     * @return string
     */
    public  function convert($text = ''){
        foreach($this->$words as $key => $word){
            $text = str_replace($key, $word, $text);
        }
        return $text;
    }
	
}