<?php if($mirasol_work->getImage()): ?>
<img src="<?php echo url_for('sf_image', array('format' => '150x81_size', 'filepath' => $mirasol_work->getImage())); ?>" alt="Imagen" />
<?php else: ?>
-
<?php endif; ?>