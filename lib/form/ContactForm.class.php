<?php

/**
 * Contact form.
 *
 * @package    dekorart
 * @subpackage form
 * @author     Diego Damico <songecko@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContactForm extends sfForm
{
	public function configure()
	{
		//Name
		$this->widgetSchema['name'] = new sfWidgetFormInputText();
		$this->validatorSchema['name'] = new sfValidatorString(array('max_length' => 255), array('required' => 'Este campo es obligatorio.'));
						
		//Email
		$this->widgetSchema['email'] = new sfWidgetFormInputText();
		$this->validatorSchema['email'] = new sfValidatorEmail(array(), array('required' => 'Este campo es obligatorio.'));
		
		//Comments
		$this->widgetSchema['comments'] = new sfWidgetFormTextarea();
		$this->validatorSchema['comments'] = new sfValidatorString(array('max_length' => 255, 'required' => false), array('required' => 'Este campo es obligatorio.'));
		
		// this is required, don't forget this!
		$this->widgetSchema->setNameFormat('contact[%s]');		
	}
}
