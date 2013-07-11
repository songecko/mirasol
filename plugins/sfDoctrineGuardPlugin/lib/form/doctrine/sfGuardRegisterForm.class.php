<?php

/**
 * sfGuardRegisterForm for registering new users
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Jonathan H. Wage <jonwage@gmail.com>
 * @version    SVN: $Id: BasesfGuardChangeUserPasswordForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardRegisterForm extends BasesfGuardRegisterForm
{
  /**
   * @see sfForm
   */
	public function configure()
	{
	  parent::configure();
	 
	  unset(
	  		$this['id'],
	  		$this['password_again']
	  );
	  
	  //First name
	  $this->validatorSchema['first_name']->setOption('required', true);
	  $this->validatorSchema['last_name']->setOption('required', true);
	  
	  //Accept bases
	  $this->setWidget('accept_bases', new sfWidgetFormInputCheckbox());
	  $this->setValidator('accept_bases', new sfValidatorBoolean());
	  $this->setDefault('accept_bases', false);
	  
	  //Profile
	  //$profileForm = new sfGuardUserProfileForm($this->object->Profile);
	  //unset($profileForm['id'], $profileForm['sf_guard_user_id']);
	  //$this->embedForm('Profile', $profileForm);
	  
	  $this->validatorSchema->setPostValidator(new sfValidatorPass());
	  
	}
}