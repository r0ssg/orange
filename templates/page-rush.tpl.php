<?php include "inc/page.top.tpl.inc"; ?>
	<div id="rush-chair-wrapper">
		<div class="wrapper-label">
			Rush Chairs
		</div>
		<div id="rush-chairs">
			<?php
				print views_embed_view("khk_rush", "block_2");
			?>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="rush-posts">
		<?php
			print views_embed_view("khk_rush", "block_1");
		?>
	</div>
	<?php /*
	<div id="rush-info">
		<?php
			print views_embed_view("khk_rush", "block_3");
		?>
	</div>
	*/ ?>
	<div id="twitter-feed">
		<a class="twitter-timeline" href="https://twitter.com/KHKBeta" data-widget-id="296551545544245248">Tweets by @KHKBeta</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	<div class="clear"></div>
<?php include "inc/page.bottom.tpl.inc"; ?>