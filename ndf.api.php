<?php

/**
 * @file
 * Hooks provided by Nuke Drupal Frontend module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Defines a default white list of allowed paths to be spared.
 *
 * @return array
 *   A list of internal drupal path patterns, suitable for the $patterns param
 *   of drupal_match_path(). Invocations of this hook will explode the array
 *   with "\n", so just return an array.
 *
 * @see ndf_menu_alter()
 */
function hook_ndf_allowed_paths() {
  $allowed_paths = array();

  // Example: Allow private files directory.
  $allowed_paths[] = file_stream_wrapper_get_instance_by_scheme('private')->getDirectoryPath() . '*';

  // Example: Allow some Devel menu paths.
  $allowed_paths[] = 'devel/cache/clear';
  $allowed_paths[] = 'node/*/devel';

  return $allowed_paths;
}

/**
 * @} End of "addtogroup hooks".
 */
