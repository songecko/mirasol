<?php
/**
* We need to make sure this plugin is backward compatible. 
* The in the original, this template was invoked by "include_partial",
* which means that now it won't work. Therefore, we set a variable in the 
* component code, and if it is not present - we call the component
*/

if (!isset($called_from_component)):
  include_component('sfAdminDash', 'header');
else:
?>


<?php 
  use_helper('I18N');
  /** @var Array of menu items */ $items = $sf_data->getRaw('items');
  /** @var Array of categories, each containing an array of menu items and settings */ $categories = $sf_data->getRaw('categories');
  /** @var string|null Link to the module (for breadcrumbs) */ $module_link = $sf_data->getRaw('module_link');
  /** @var string|null Link to the action (for breadcrumbs) */ $action_link = $sf_data->getRaw('action_link');
?> 

<?php if ($sf_user->isAuthenticated()): ?> 
  <div id='sf_admin_theme_header'>
    <a href='<?php echo url_for('homepage') ?>'>Panel de Administración de Mirasol</a>
  </div>

  <div id='sf_admin_menu'>    
    <?php include_partial('sfAdminDash/menu', array('items' => $items, 'categories' => $categories)); ?>
    
    <?php if (sfAdminDash::getProperty('logout') && $sf_user->isAuthenticated()): ?>
      <div id="logout"><?php echo link_to(__('Logout', null, 'sf_admin_dash'), sfAdminDash::getProperty('logout_route', '@sf_guard_signout ')); ?> <?php echo $sf_user; ?></div>
    <?php endif; ?>
    <div class="clear"></div>
  </div>


<?php endif; ?>


<?php endif; // BC check if ?>