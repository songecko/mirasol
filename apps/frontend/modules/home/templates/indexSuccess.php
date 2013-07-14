<p class="sectionTitle"><?php echo __('Recent work') ?></p>
<div id="works" class="carousel slide">
	<!-- Carousel items -->
	<div class="carousel-inner">
		<?php $page = 0; ?>
		<?php $i = 0;?>
		<?php foreach ($works as $work): ?>
		<?php   if($i % 6 == 0): $page++; ?>
		<div class="item<?php echo ($page == 1)?' active':'' ?>">
		<?php   endif; ?>
			<div class="workItem" data-work-description="<?php echo $work->getDescription() ?>" data-video-host="<?php echo $work->getVideoHost() ?>" data-video-id="<?php echo $work->getVideoId() ?>">
				<h4><?php echo $work->getName() ?></h4>
				<p class="place"><?php echo $work->getPlace() ?></p>
				<p class="description"><?php echo truncate_text($work->getDescription(), 65) ?></p>
				<img src="<?php echo $work->getPreferredImage(); ?>" alt="Mirasol Work" />
			</div>
		<?php $i++; ?>
		<?php   if($i % 6 == 0):?>
		</div>
		<?php   endif; ?>
		<?php endforeach; ?>
	</div>
	<?php if(count($works) > 6): ?>
	<!-- Carousel nav -->
	<a class="carousel-control left" href="#works" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#works" data-slide="next">&rsaquo;</a>
	<?php endif; ?>
</div>

<!-- Modal -->
<div id="workDetails" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="workLabel" aria-hidden="true">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 class="name"></h3>
    	<p class="place"></p>    	
  	</div>
  	<div class="modal-body">
	    <p class="description"></p>
	    <img class="image" src="" />
	    <iframe class="video" width="853" height="480" src="" frameborder="0" allowfullscreen></iframe>
  	</div>
</div>