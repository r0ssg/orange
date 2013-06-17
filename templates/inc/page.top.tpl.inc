<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head; ?>
    <title>
      <?php print $head_title; ?>
    </title>
    <?php print $styles; ?>
    <?php print $ie_styles; ?>
    <?php print $scripts; ?>
    <script type="text/javascript">
      //<![CDATA[
      <?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> 
      //]]>
    </script>
  </head>
  <body<?php print $attributes; ?>>
    <div id="wrapper">
      <div id="header-top">
      <?php if($site_slogan): ?>
        <span id="slogan">
          <?php print $site_slogan; ?>
        </span>
      <?php endif; ?>
        <span id="member-login">
          <?php print $member_login; ?>
        </span>
      </div><!-- end header-top -->
      <div id="header">
        <div id="logo">
         <?php if (!empty($logo)): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
           <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
         <?php endif; ?>
         <?php if (!empty($site_name)): ?>
           <h1 id="site-name">
             <a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home">
             <?php print $site_name; ?>
             </a>
           </h1>
         <?php endif; ?>
			<div id="khk-slogan">
				A Professional Engineering Fraternity
			</div>
        </div>
        <div id="nav">
         <?php if ($nav): ?>
           <?php print $nav; ?>
         <?php endif; ?>
        </div><!-- end nav -->
      </div><!-- end header -->
      <div id="container">
      <?php if($content_top): ?>
        <div id="content-top">
          <?php print $content_top; ?>
        </div>
      <?php endif; ?><!-- end content top -->
      <div id="main">
        <?php print $breadcrumb; ?>
        <?php if($content_inner): ?>
          <div id="content-inner">
            <?php print $content_inner; ?>
            <div class="clear"> </div>
          </div>
        <?php endif; ?>
        <?php if (!empty($title)): ?>
          <h1 class="title"><?php print $title; ?></h1>
        <?php endif; ?> <!-- END TITLE -->
         <?php if ($tabs): ?>
            <div id="tabs">
            <?php print $tabs; ?>
            </div> <!-- END TABS -->
          <?php endif; ?> 
        <div id="content">
