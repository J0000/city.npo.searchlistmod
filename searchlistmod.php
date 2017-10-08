<?php

require_once 'searchlistmod.civix.php';
use CRM_Searchlistmod_ExtensionUtil as E;


function searchlistmod_civicrm_searchColumns( $objectName, &$headers,  &$values, &$selector ) {

    if ( $objectName == 'contact' ) {

        $custom_fields = array('nicht_beliefern' => 'custom_2');
        $headers['postal_code']['name'] = 'PLZ';
        $get_params = array('entityID' => 2, $custom_fields['nicht_beliefern'] => 1);
  
        require_once 'CRM/Core/BAO/CustomValueTable.php';
 //       $values = CRM_Core_BAO_CustomValueTable::getValues($get_params);

        $my_cfoo = $values[$custom_fields['nicht_beliefern']];
        CRM_Core_Error::debug_log_message($my_cfoo);
    }

}
/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function searchlistmod_civicrm_config(&$config) {
  _searchlistmod_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function searchlistmod_civicrm_xmlMenu(&$files) {
  _searchlistmod_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function searchlistmod_civicrm_install() {
  _searchlistmod_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function searchlistmod_civicrm_postInstall() {
  _searchlistmod_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function searchlistmod_civicrm_uninstall() {
  _searchlistmod_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function searchlistmod_civicrm_enable() {
  _searchlistmod_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function searchlistmod_civicrm_disable() {
  _searchlistmod_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function searchlistmod_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _searchlistmod_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function searchlistmod_civicrm_managed(&$entities) {
  _searchlistmod_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function searchlistmod_civicrm_caseTypes(&$caseTypes) {
  _searchlistmod_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function searchlistmod_civicrm_angularModules(&$angularModules) {
  _searchlistmod_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function searchlistmod_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _searchlistmod_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function searchlistmod_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function searchlistmod_civicrm_navigationMenu(&$menu) {
  _searchlistmod_civix_insert_navigation_menu($menu, NULL, array(
    'label' => E::ts('The Page'),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _searchlistmod_civix_navigationMenu($menu);
} // */
