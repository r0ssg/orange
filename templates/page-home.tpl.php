<?php include "inc/page.top.tpl.inc"; ?>
	<div id="welcome-message">
		<?php print views_embed_view("frontpage", "block_1"); ?>
	</div>
	
	<div id="front-news-feed">
		<?php print views_embed_view("frontpage", "block_2"); ?>
	</div>
	
	<div id="twitter-feed">
		<a class="twitter-timeline" href="https://twitter.com/KHKBeta" data-widget-id="296551545544245248">Tweets by @KHKBeta</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
<?php include "inc/page.bottom.tpl.inc"; ?>