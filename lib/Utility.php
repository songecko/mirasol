<?php
class Utility{
	
	public static function getSelectedMenu($seccion){
		
		if ($seccion == sfContext::getInstance()->getModuleName()){
			return ' class="selected"';
		}
		return '';
	}
	
	public static function getVideoImage($url)
	{
		if(self::isYoutube($url))
		{
			return "http://img.youtube.com/vi/".self::getYoutubeId($url)."/0.jpg";
		}else if(self::isVimeo($url))
		{
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".self::getVimeoId($url).".php"));
			return $hash[0]["thumbnail_large"];
		}		
	}
	
	public static function getYoutubeId($url)
	{		
		parse_str( parse_url( html_entity_decode($url) , PHP_URL_QUERY ), $my_array_of_vars );		
		
		return $my_array_of_vars['v'];		
	}
	
	public static function getVimeoId($url)
	{
    	$image_url = parse_url($url);
    	
    	return substr($image_url['path'], 7);
	}
	
	public static function isYoutube($url)
	{
  		return (preg_match('/youtu\.be/i', $url) || preg_match('/youtube\.com\/watch/i', $url));
	}

	public static function isVimeo($url)
	{
		return (preg_match('/vimeo\.com/i', $url));
	}
}