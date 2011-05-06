<?php // AT Timeout ?>

<div id="menu-top-wrapper"><div class="container clearfix">
 <?php print render($page['menu_bar_top']); ?> <!-- /menu bar top -->
</div></div>

<div id="page" class="container">

  <header id="header">
    <div id="branding">
      <?php if ($linked_site_logo): ?>
        <div id="logo"><?php print $linked_site_logo; ?></div>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
        <hgroup<?php if (!$site_slogan && $hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>>
          <?php if ($site_name): ?>
            <h1 id="site-name"<?php if ($hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>><?php print $site_name; ?></h1>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </hgroup>
      <?php endif; ?>
    </div>
    <?php print render($page['header']); ?> <!-- /header region -->
  </header> <!-- /header -->

  <?php if ($page['menu_bar']):?>
    <div id="menu-bar-wrapper">
      <?php print render($page['menu_bar']); ?> <!-- /menu bar -->
    </div>
  <?php endif; ?>

  <?php print $breadcrumb; ?> <!-- /breadcrumb -->
  <?php if ($messages): ?>
    <div id="messages-wrapper"><?php print $messages; ?></div> <!-- /message -->
  <?php endif; ?>
  <?php print render($page['help']); ?> <!-- /help -->

  <?php print render($page['secondary_content']); ?> <!-- /secondary-content -->

  <!-- Three column 3x33 Gpanel -->
  <?php if ($page['three_33_first'] || $page['three_33_second'] || $page['three_33_third']): ?>
    <div id="tripanel" class="three-3x33 gpanel clearfix">
      <?php print render($page['three_33_first']); ?>
      <?php print render($page['three_33_second']); ?>
      <?php print render($page['three_33_third']); ?>
    </div>
  <?php endif; ?>

  <div id="columns"><div class="columns-inner clearfix">
    <div id="content-column"><div class="content-inner">
      <?php print render($page['highlight']); ?> <!-- /highlight -->
      <!-- Two column 2x50 Gpanel -->
      <?php if ($page['two_50_first'] || $page['two_50_second']): ?>
        <div id="bipanel" class="two-50 gpanel clearfix">
          <?php print render($page['two_50_first']); ?>
          <?php print render($page['two_50_second']); ?>
        </div>
      <?php endif; ?>
      <?php $tag = $title ? 'section' : 'div'; ?>
      <<?php print $tag; ?> id="main-content">
        <?php if ($title || $tabs = render($tabs) || $action_links = render($action_links)): ?>
          <header class="clearfix">
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 id="page-title"><?php print $title; ?></h1> <!-- /page title -->
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs = render($tabs)): print $tabs; endif ?> <!-- /local task tabs -->
            <?php if ($action_links = render($action_links)): ?><ul class="action-links"><?php print $action_links; ?></ul><?php endif; ?> <!-- /action links -->
          </header>
        <?php endif; ?>
        <?php print render($page['content']); ?> <!-- /content -->
      </<?php print $tag; ?>> <!-- /main-content -->
      <?php print render($page['content_aside']); ?> <!-- /content-aside -->
    </div></div> <!-- /content-column -->
    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
  </div></div> <!-- /columns -->

  <?php print render($page['tertiary_content']); ?> <!-- /tertiary-content -->

  <!-- Three column 50-25-25 Gpanel -->
  <?php if ($page['three_50_25_25_first'] || $page['three_50_25_25_second'] || $page['three_50_25_25_third']): ?>
    <div id="tripanel-2" class="three-50-25-25 gpanel clearfix">
      <?php print render($page['three_50_25_25_first']); ?>
      <?php print render($page['three_50_25_25_second']); ?>
      <?php print render($page['three_50_25_25_third']); ?>
    </div>
  <?php endif; ?>

  <!-- Three column 25-25-50 Gpanel -->
  <?php if ($page['three_25_25_50_first'] || $page['three_25_25_50_second'] || $page['three_25_25_50_third']): ?>
    <div id="tripanel-3" class="three-25-25-50 gpanel clearfix">
      <?php print render($page['three_25_25_50_first']); ?>
      <?php print render($page['three_25_25_50_second']); ?>
      <?php print render($page['three_25_25_50_third']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['footer'] || $page['four_first'] || $page['four_second'] || $page['four_third'] || $page['four_fourth']): ?>
    <footer id="footer"><div id="footer-inner" class="clearfix">
      <!-- Four column Gpanel -->
      <?php if ($page['four_first'] || $page['four_second'] || $page['four_third'] || $page['four_fourth']): ?>
        <div id="footerpanel" class="four-4x25 gpanel clearfix">
          <?php print render($page['four_first']); ?>
          <?php print render($page['four_second']); ?>
          <?php print render($page['four_third']); ?>
          <?php print render($page['four_fourth']); ?>
        </div>
      <?php endif; ?>
      <?php if ($page['footer']): print render($page['footer']); endif; ?> <!-- /footer region -->
    </div></footer> <!-- /footer/footer-inner -->
  <?php endif; ?>

  <?php if ($feed_icons):?>
    <div id="feed-icon"><?php print $feed_icons; ?></div>
  <?php endif; ?>

</div> <!-- /page -->
