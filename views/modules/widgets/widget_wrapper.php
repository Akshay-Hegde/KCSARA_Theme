<?php if ($widget->slug == 'sidebar_article'): ?>
	<article>
		<?php
			if( $widget->options['sidebar_link'] )
			{
				echo '<h2><a href="' . $widget->options['sidebar_link'] . '">' . $widget->instance_title . '</a></h2>';
			}
			else
			{
				echo '<h2>' . $widget->instance_title . '</h2>';
			}
			echo $widget->body;
		?>
	</article>
<?php elseif ($widget->widget_area_slug == 'footer_copyright' or
	$widget->widget_area_slug == 'last_updated'): ?>
		<?php echo $widget->body; ?>
<?php elseif ($widget->widget_area_slug == 'footer_about_us' or
	$widget->widget_area_slug == 'footer_upcoming_events' or
	$widget->widget_area_slug == 'footer_downloads' or
	$widget->widget_area_slug == 'footer_contacts' or
	$widget->widget_area_slug == '404'): ?>
		<?php if ($widget->options['show_title']): ?>
			<h2><?php echo $widget->instance_title; ?></h2>
		<?php endif ?>
		<?php echo $widget->body; ?>
<?php else: ?>
	<div class="widget <?php echo $widget->slug; ?>">
		<?php if ($widget->options['show_title']): ?>
			<h3><?php echo $widget->instance_title; ?></h3>
		<?php endif ?>
		<?php echo $widget->body; ?>
		<div class="divider"></div>
	</div>
<?php endif ?>