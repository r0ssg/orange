        <?php if($is_admin): ?>
			<?php print $messages; ?>
		<?php endif; ?>
        <?php print $help; ?>
        <?php print $content; ?>
        </div><!-- end content -->
      </div><!-- end main -->
      <?php if($sidebar): ?>
        <div class="sidebar">
          <?php print $sidebar; ?>
        </div>
      <?php endif; ?>
      <div class="clear"> </div>
      <?php if($content_bottom): ?>
      	<div id="content-bottom">
      		<?php print $content_bottom; ?>
      		<div class="clear"> &nbsp;</div>
      	</div>
      <?php endif; ?>
      </div>
      </div> <!-- end wrapper -->
      <div id="footer">
        <div id="footerwrap">
          <?php if ($footer_content): ?>
              <?php print $footer_content; ?>
          <?php endif; ?>
          <div id="footer-message">
            <?php print $footer_message; ?>
          </div>
          <div class="clear"> </div>
        </div>
      </div> <!-- end footer -->
    <?php print $closure; ?>
  </body>
</html>
