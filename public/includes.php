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

/* --------------------------------------------------
 * assets/js/
 * --------------------------------------------------
 */
$load['js'][] = 'app';
$load['js'][] = 'routes';
$load['js'][] = 'directives';

/* --------------------------------------------------
 * assets/js/controllers/
 * --------------------------------------------------
 */
$load['js']['controllers'][] = 'base-controller';
$load['js']['controllers'][] = 'home-controller';
$load['js']['controllers'][] = 'panel-controller';
$load['js']['controllers'][] = 'signup-controller';
$load['js']['controllers'][] = 'signupedit-controller';



