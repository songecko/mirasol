$(document).ready(function()
{
	$('.menu ul li.aboutus').click(function(e)
	{
		$.scrollTo('section#aboutUs', 800);		
		e.preventDefault();
	});
	
	$('.menu ul li.work').click(function(e)
	{
		$.scrollTo('section#work', 800);		
		e.preventDefault();
	});
	
	$('.menu ul li.contact').click(function(e)
	{
		$.scrollTo('section#contact', 800);		
		e.preventDefault();
	});
	
	$($('#aboutUs .description p').get().reverse()).each(function (i) 
	{
		$(this).css('text-indent', (10+(i*3))+'px');
	});
	
	$('#works .workItem').click(function(e)
	{
		$('#workDetails .name').html($(this).children('h4').html());
		$('#workDetails .place').html($(this).children('p.place').html());
		$('#workDetails .description').html($(this).data('workDescription'));
		
		var videoHost = $(this).data('videoHost');
		var videoId = $(this).data('videoId');
		
		$('#workDetails .video').hide();
		$('#workDetails .image').hide();
		if(videoHost == 'youtube')
		{
			$('#workDetails .video').attr('src', '//www.youtube-nocookie.com/embed/'+videoId+'?rel=0');
			$('#workDetails .video').show();
		}else if(videoHost == 'vimeo')
		{
			$('#workDetails .video').attr('src', 'http://player.vimeo.com/video/'+videoId+'?title=0&byline=0&portrait=0');
			$('#workDetails .video').show();			
		}else
		{
			$('#workDetails .image').attr('src', $(this).children('img').attr('src'));
			$('#workDetails .image').show();
		}
		
		
		$('#workDetails').modal('show');		
		e.preventDefault();
	});
	
	$('#workDetails').on('hide', function () {
		$('#workDetails .video').attr('src', '');
		$('#workDetails .image').attr('src', '');
	});
	
	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
});