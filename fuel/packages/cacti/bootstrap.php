<?php

/**
 * Part of the Cacti package 
 *
 * @package    Cacti
 * @version    1.0
 * @author     Noclayer
 * @license    MIT License
 * @copyright  2012 Noclayer
 * @link       http://noclayer.com
 */

Autoloader::add_core_namespace('Cacti');

Autoloader::add_classes(array(
	'Cacti\\Cacti'                              => __DIR__.'/classes/cacti.php',
	'Cacti\\Parser'                              => __DIR__.'/classes/parser.php',

/*
	'Sentry\\SentryAuthException'                 => __DIR__.'/classes/sentry.php',
	'Sentry\\SentryAuthUserNotActivatedException' => __DIR__.'/classes/sentry.php',
	'Sentry\\SentryAuthConfigException'           => __DIR__.'/classes/sentry.php',

	'Sentry\\Sentry_Attempts'                     => __DIR__.'/classes/sentry/attempts.php',
	'Sentry\\SentryAttemptsException'             => __DIR__.'/classes/sentry/attempts/php',
	'Sentry\\SentryUserSuspendedException'        => __DIR__.'/classes/sentry/attempts.php',

	'Sentry\\Sentry_User'                         => __DIR__.'/classes/sentry/user.php',
	'Sentry\\SentryUserException'                 => __DIR__.'/classes/sentry/user.php',
	'Sentry\\SentryUserNotFoundException'         => __DIR__.'/classes/sentry/user.php',

	'Sentry\\Sentry_Group'                        => __DIR__.'/classes/sentry/group.php',
	'Sentry\\SentryGroupException'                => __DIR__.'/classes/sentry/group.php',
	'Sentry\\SentryGroupNotFoundException'        => __DIR__.'/classes/sentry/group.php',
	*/
));
