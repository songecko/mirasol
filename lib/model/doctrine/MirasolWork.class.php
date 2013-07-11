<?php

/**
 * MirasolWork
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    amarok
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class MirasolWork extends BaseMirasolWork
{
	public function getImageWithPath()
	{
		$image = $this->getImage(); 
		if($image)
		{
			$request = sfContext::getInstance()->getRequest();
			$image = $request->getRelativeUrlRoot().'/uploads/'.$image;
		}
		
		return $image;
	}
	
	public function getVideoHost()
	{
		$url = $this->getLinkVideo();
		if($url)
		{
			return (Utility::isYoutube($url))?'youtube':'vimeo';
		}else 	
		{	
			return null;
		}
	}
	
	public function getVideoId()
	{
		$url = $this->getLinkVideo();
		if($url)
		{
			return (Utility::isYoutube($url))?Utility::getYoutubeId($url):Utility::getVimeoId($url);
		}else
		{
			return null;
		}
	}
	
	public function getPreferredImage()
	{
		$image = $this->getImage();
		if($image)
		{
			$context = sfContext::getInstance();
			$image = $context->getController()->genUrl(array('sf_route' => 'sf_image', 'format' => '853x480_size', 'filepath' => $image));
		}
				
		if(!$image && $this->getLinkVideo())
		{
			$image = Utility::getVideoImage($this->getLinkVideo());
		}
		
		return $image;
	}
}