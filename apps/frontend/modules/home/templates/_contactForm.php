<form class="contactForm" action="<?php echo url_for('homepage_localized', array('sf_culture' => $sf_user->getCulture())) ?>#contact" method="post">
<?php if(isset($sended) && $sended == true): ?>
<p class="sended"><?php echo __('Mensaje enviado con éxito, le responderemos a la brevedad.') ?></p>
<?php else: ?>
	<?php echo $form['_csrf_token']->render() ?>
	<?php echo $form['name']->render(array(
			'placeholder' => __('Name'),	
			'required' => 'required',  
			'data-validation-required-message' => __('Not valid field')
	)); ?>
	<?php echo $form['email']->render(array(
			'placeholder' => __('Email'),			
			'type' => 'email', 
			'required' => 'required',
			'data-validation-required-message' => __('Not valid field'),
			'data-validation-email-message' => __('Not valid field')
	)); ?>
	<?php echo $form['comments']->render(array(
			'placeholder' => __('Message'),	
			'required' => 'required',
			'data-validation-required-message' => __('Not valid field')
	)); ?>
	
	<button class="btn" type="submit"><?php echo __('Send') ?></button>
<?php endif; ?>
</form>