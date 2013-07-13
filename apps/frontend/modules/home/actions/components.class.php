<?php

/**
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeComponents extends sfComponents 
{
	public function executeContactForm(sfWebRequest $request) 
	{
		$this->form = new ContactForm();
		$this->sended = false;
		
		if ($request->isMethod(sfRequest::POST))
		{
			$this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
		
			if ($this->form->isValid())
			{
				$values = $this->form->getValues();
		
				// and start up to setting up:
				$subject = '[Mirasol] Contacto desde la web';
				$to  = "songecko@gmail.com";
				$from_mail = strip_tags($values['email']);
		
				$body = get_partial('home/mail_template', array('values' => $values));
		
				$message = $this->getMailer()->compose();
				$message->setSubject($subject);
				$message->setBody($body, 'text/html');
				$message->setFrom(array($values['email'] => $values['name']));
				$message->setTo(array($to => 'Mirasol'));
				$message->setCharset("utf-8");
		
				//Sending email
				$this->getMailer()->send($message);
				
				$this->sended = true;
			}
		}		
	}
}
