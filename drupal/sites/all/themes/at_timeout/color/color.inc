<?php
// AT Timeout
$info = array(
  // Fields
  'fields' => array(
    'base'                  => t('Base'),
    'pagebg'                => t('Page'),
    'link'                  => t('Links'),
    'highlights'            => t('Highlights'),
    'header'                => t('Header text'),
    'menubar'               => t('Main menu'),
    'menubarhover'          => t('Main menu hover'),
    'text'                  => t('Text'),
    'block_titles'          => t('Block titles'),
    'featured_blocks'       => t('Featured blocks'),
    'tripanel_blocks'       => t('Tri panel blocks'),
    'main_content_blocks'   => t('Content blocks'),
    'sidebar_blocks'        => t('Sidebar blocks'),
    'footer_panel_blocks'   => t('Footer blocks'),
    'borders'               => t('Borders'),
    'sticky'                => t('Sticky teaser'),
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Time out'),
      'colors' => array(
        'base'                => '#ffffff',
        'highlights'          => '#f9f5f2',
        'pagebg'              => '#8bd5f3',
        'link'                => '#315690',
        'header'              => '#feffff',
        'menubar'             => '#68a6eb',
        'menubarhover'        => '#8fc5ff',
        'text'                => '#555555',
        'block_titles'        => '#fffff1',
        'featured_blocks'     => '#6dc1e6',
        'tripanel_blocks'     => '#76c048',
        'main_content_blocks' => '#9edcf8',
        'sidebar_blocks'      => '#68a6ea',
        'footer_panel_blocks' => '#2b78cd',
        'borders'             => '#7dbfda',
        'sticky'              => '#f9f5f1',
      ),
    ),
    'coffee_break' => array(
      'title' => t('Coffee break'),
      'colors' => array(
        'base'                => '#ffffff',
        'highlights'          => '#efefd1',
        'pagebg'              => '#cccc99',
        'link'                => '#666633',
        'header'              => '#feffff',
        'menubar'             => '#666633',
        'menubarhover'        => '#6d6d3c',
        'text'                => '#444444',
        'block_titles'        => '#fffff1',
        'featured_blocks'     => '#cc9966',
        'tripanel_blocks'     => '#660000',
        'main_content_blocks' => '#ffcc66',
        'sidebar_blocks'      => '#6f6f45',
        'footer_panel_blocks' => '#333333',
        'borders'             => '#666336',
        'sticky'              => '#eeefde',
      ),
    ),
    'night_garden' => array(
      'title' => t('Night garden'),
      'colors' => array(
        'base'                => '#ffffff',
        'highlights'          => '#ece9d4',
        'pagebg'              => '#294e56',
        'link'                => '#4b95ae',
        'header'              => '#f7f8f8',
        'menubar'             => '#213e45',
        'menubarhover'        => '#35545b',
        'text'                => '#0d1e2b',
        'block_titles'        => '#fffff1',
        'featured_blocks'     => '#7bb4bb',
        'tripanel_blocks'     => '#124e63',
        'main_content_blocks' => '#5c8c92',
        'sidebar_blocks'      => '#4c7976',
        'footer_panel_blocks' => '#223545',
        'borders'             => '#588b88',
        'sticky'              => '#f0f0f0',
      ),
    ),
    'muted_wedding' => array(
      'title' => t('Muted wedding'),
      'colors' => array(
        'base'                => '#ffffff',
        'highlights'          => '#f6f3e8',
        'pagebg'              => '#e4dfcf',
        'link'                => '#8e7c75',
        'header'              => '#5e574e',
        'menubar'             => '#a38f87',
        'menubarhover'        => '#b49f96',
        'text'                => '#42413f',
        'block_titles'        => '#fffff1',
        'featured_blocks'     => '#908477',
        'tripanel_blocks'     => '#736a5f',
        'main_content_blocks' => '#94887c',
        'sidebar_blocks'      => '#978d79',
        'footer_panel_blocks' => '#4f4131',
        'borders'             => '#c0b39b',
        'sticky'              => '#f6f3e7',
      ),
    ),
  ),

  // CSS files
  'css' => array(
    'color/colors.css',
  ),

  // Images to copy over
  'copy' => array(
    'logo.png',
  ),

  // Gradient definitions.
  'gradients' => array(
    array(
      // (x, y, width, height).
      'dimension' => array(0, 0, 0, 0),
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => array('base', 'header'),
    ),
  ),

  // Color areas to fill (x, y, width, height)
  'fill' => array(),

  // Coordinates of all the theme slices (x, y, width, height).
  'slices' => array(),

  // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',

  // Preview files.
  'preview_image' => 'color/color-preview.png',
  'preview_css' => 'color/preview.css',

  // Base file for image generation
  'base_image' => 'color/base.png',
);