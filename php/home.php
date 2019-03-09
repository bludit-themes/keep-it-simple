<div class="content section-inner">
	<div class="posts">
	<?php foreach($content as $page): ?>
		<div class="post format-standard">
			<div class="post-bubbles">
				<a href="<?php echo $page->permalink() ?>" class="format-bubble" title="<?php echo $page->title() ?>"></a>
			</div>
			<div class="content-inner">
				<div class="post-header">
				
					<?php if($page->coverImage()) {
							echo '<div class="featured-media">';
							echo 	'<img class="attachment-post-image wp-post-image cover-image" src="'.$page->coverImage().'" alt="Cover Image">';
							echo		'<div class="media-caption-container">';
							echo			'<a href="'.$page->permalink().'" rel="bookmark" title="'.$page->title().'">';
							echo				'<p class="media-caption">'.$page->description().'</p>';
							echo			'</a>';
							echo		'</div>';
							echo '</div> <!-- /featured-media -->';
					} ?>
					
					<h2 class="post-title"><a href="<?php echo $page->permalink() ?>" rel="bookmark" title="<?php echo $page->title() ?>"><?php echo $page->title() ?></a></h2>
					<div class="post-meta">

						<span class="post-date"><a href="<?php echo $page->permalink() ?>" title="<?php echo $page->date() ?>"><?php echo $page->date() ?></a></span>
						<span class="date-sep"> / </span>
						<span class="post-author"><?php
							if( Text::isNotEmpty($page->user('firstName')) || Text::isNotEmpty($page->user('lastName')) ) {
								echo $page->user('firstName').' '.$page->user('lastName');
							}
							else {
								echo $page->user('username');
							}
						?></span>
												
					</div>
				</div>
				
				<div class="post-content">
					<!-- Page content until the pagebreak -->
					<?php echo $page->contentBreak(); ?>
					
					<?php if($page->readMore()) { ?>
						<a class="read-more" href="<?php echo $page->permalink() ?>"><?php $L->printMe('Read more') ?></a>
					<?php } ?>
					
				</div>
				<div class="clear"></div>				
			</div>
			<div class="clear"></div>
			<div class="clear"></div>
		</div>
		<?php endforeach; ?>
		
		<div class="post-nav archive-nav">
			<?php echo Paginator::html(); ?>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
