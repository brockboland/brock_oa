<?php

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 */
function brock_oa_preprocess_node(&$variables) {
  if ($variables['type'] == 'casetracker_basic_case') {
    $variables['title'] = '#' . $variables['nid'] . ': ' . $variables['title'];
    drupal_set_title($variables['title']);
  }
}

