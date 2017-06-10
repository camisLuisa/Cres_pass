<?php
/* --------------------------------------------------
 * FILES INCLUDES
 * --------------------------------------------------
 * There are 2 ways to include a file:
 * 		$load['type'][] = 'file_name';
 *		$load['type']['folder'][] = 'file_name';
 *
 * THE ORDER OF INCLUSIONS MATTER.
 */

/* --------------------------------------------------
 * assets/css/core/
 * --------------------------------------------------
 */
$load['css']['core'][] = 'bootstrap.min';
$load['css']['core'][] = 'bootstrap-theme.min';
$load['css']['core'][] = 'font-awesome.min';
$load['css']['core'][] = 'w3';

/* --------------------------------------------------
 * assets/css/
 * --------------------------------------------------
 */
$load['css'][] = 'general';
$load['css'][] = 'home';
$load['css'][] = 'login-signup';
$load['css'][] = 'header-footer';

/* --------------------------------------------------
 * assets/js/core/
 * --------------------------------------------------
 */
$load['js']['core'][] = 'angular.min';
$load['js']['core'][] = 'angular-ui-router.min';
$load['js']['core'][] = 'jquery.min';
$load['js']['core'][] = 'bootstrap.min';
$load['js']['core'][] = 'ngMask.min';
$load['js']['core'][] = 'angular-file-upload.min';

/* --------------------------------------------------
 * assets/js/
 * --------------------------------------------------
 */
$load['js'][] = 'app';
$load['js'][] = 'config';
$load['js'][] = 'directives';

/* --------------------------------------------------
 * assets/js/controllers/
 * --------------------------------------------------
 */
$load['js']['controllers'][] = 'root-controller';
$load['js']['controllers'][] = 'home-controller';
$load['js']['controllers'][] = 'signup-controller';
$load['js']['controllers'][] = 'panel-controller';
$load['js']['controllers'][] = 'panel-home-controller';
$load['js']['controllers'][] = 'panel-signup-controller';
$load['js']['controllers'][] = 'panel-products-controller';
$load['js']['controllers'][] = 'panel-create-store-controller';




