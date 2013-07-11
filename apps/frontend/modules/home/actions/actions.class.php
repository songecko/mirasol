<?php

/**
 * home actions.
 *
 * @package    amarok
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions 
{
	
	public function executeIndex(sfWebRequest $request) 
	{
		/*if (!$request->getParameter('sf_culture'))
		{
			if ($this->getUser()->isFirstRequest())
			{
				$culture = $request->getPreferredCulture(array('en', 'es'));
				$this->getUser()->setCulture($culture);
				$this->getUser()->isFirstRequest(false);
			}
			else
			{
				$culture = $this->getUser()->getCulture();
			}
		
			$this->redirect('homepage_localized');
		}*/
		
		$this->works = MirasolWorkTable::getInstance()->findAll();
	}
}
