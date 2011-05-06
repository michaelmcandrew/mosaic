<?php
// $Id: template.php,v 1.10 2011/01/14 02:57:57 jmburnz Exp $

/**
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function to match your mosaics name,
 *    e.g. if you name your theme "themeName" then the function
 *    name will be "themeName_preprocess_hook". Tip - you can
 *    search/replace on "genesis_mosaic".
 * 2. Uncomment the required function to use.
 */

/**
 * Override or insert variables into all templates.
 */

function genesis_mosaic_preprocess(&$vars, $hook) {
}
function genesis_mosaic_process(&$vars, $hook) {
}
// */

/**
 * Override or insert variables into the html templates.
 */

function genesis_mosaic_preprocess_html(&$vars) {
  // Uncomment the folowing line to add a conditional stylesheet for IE 7 or less.
  // drupal_add_css(path_to_theme() . '/css/ie/ie-lte-7.css', array('weight' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
}
function genesis_mosaic_process_html(&$vars) {
}
// */

/**
 * Override or insert variables into the page templates.
 */

function genesis_mosaic_preprocess_page(&$vars) {
}
function genesis_mosaic_process_page(&$vars) {
}
// */

/**
 * Override or insert variables into the node templates.
 */

function genesis_mosaic_preprocess_node(&$vars) {
}
function genesis_mosaic_process_node(&$vars) {
}
// */

/**
 * Override or insert variables into the comment templates.
 */

function genesis_mosaic_preprocess_comment(&$vars) {
}
function genesis_mosaic_process_comment(&$vars) {
}
// */

/**
 * Override or insert variables into the block templates.
 */

function genesis_mosaic_preprocess_block(&$vars) {
}
function genesis_mosaic_process_block(&$vars) {
}
// */
