<?php

class BasesfGuardRegisterActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    if ($this->getUser()->isAuthenticated())
    {
      $this->getUser()->setFlash('notice', 'You are already registered and signed in!');
      $this->redirect('@homepage');
    }

    $this->form = new sfGuardRegisterForm();

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid())
      {
      	$values = $this->form->getValues();
      	if(isset($values['accept_bases']) && $values['accept_bases'] === true)
      	{
        	$user = $this->form->save();
        	$this->getUser()->signIn($user);

	        $this->redirect('@homepage');
    	}
      }
    }
  }
}