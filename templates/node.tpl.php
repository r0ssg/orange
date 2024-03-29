<?php
// $Id: node.tpl.php,v 1.2 2010/06/30 20:23:04 nomonstersinme Exp $

/**
 * @file node.tpl.php
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with
 *   format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $name: Themed username of node author output from theme_user().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
?>
<div<?php print $attributes; ?>>

  <?php if (!$page): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>

  <?php if ($submitted || $terms): ?>
  <div class="info">
    <?php if ($submitted): ?>
      <?php print $submitted; ?>  &mdash; 
	  <?php
			$result = db_query('SELECT f.name, f.type, v.value FROM {profile_fields} f INNER JOIN {profile_values} v ON f.fid = v.fid WHERE uid = %d', $uid);
			  while ($field = db_fetch_object($result)) {
				if (empty($auth->{$field->name})) {
				  $auth->{$field->name} = _profile_field_serialize($field->type) ? unserialize($field->value) : $field->value;
				}
			  } 
	  ?>
	  <?php
		$auth_name = "";
		if($auth->profile_full_name){
			$auth_name = $auth->profile_full_name;
		} else { $auth_name = theme('username', $node); }
	  ?>
      <?php print $auth_name; //theme('username', $node); ?>
    <?php endif; ?>
    <?php if ($terms): ?>
      <div class="taxonomy">
        <strong><?php print t('Filed under'); ?>:</strong> <?php print $terms; ?>
      </div>
    <?php endif;?>
  </div>
  <?php endif; ?>

  <div class="node-content">
    <?php print $content; ?>
    <?php if($node_inner): ?>
    	<div id="node-inner">
    		<?php print $node_inner; ?>
    	</div>
    <?php endif; ?>
  </div>

  <div class="node-links">
    <?php print $links; ?>
  </div>
</div>