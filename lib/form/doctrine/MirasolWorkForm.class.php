<?php

/**
 * MirasolWork form.
 *
 * @package    amarok
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MirasolWorkForm extends BaseMirasolWorkForm
{
  public function configure()
  {
  		unset(
  			$this['created_at'],
  			$this['updated_at']
  		);
  		
  		$file_src = sfContext::getInstance()->getController()->genUrl(array(
  				'sf_route' => 'sf_image',
  				'format'   => '150x81_size',
  				'filepath' => '/'.$this->getObject()->image
  		), false);
  		 
  		$this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
  				'label' => 'Imagen',
  				'is_image' => true,
  				'with_delete' => true,
  				'template' => '%file% <br /> %input% <br />%delete% Eliminar imagen',
  				'file_src' => $file_src
  		));
  		 
  		$this->validatorSchema['image'] = new sfValidatorFile(array(
  				'required'   => false,
  				'path'       => sfConfig::get('sf_upload_dir').'/',
  				'mime_types' => 'web_images',
  		));
  		
  		$this->validatorSchema['image_delete'] = new sfValidatorPass();
  }
}
