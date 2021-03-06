<?php
/**
*
* @package Prune Log's
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'PRUNE_LOGS_DAYS' 			=> 'Prune Logs',
	'PRUNE_LOGS_DAYS_EXPLAIN'	=> 'Days before the cron will prune the logs. Setting the value to 0 disables this behaviour.',

	'LOG_PRUNE_LOGS'			=> '<strong>Logs pruned</strong><br />» %s',
	'NO_PRUNE_LOGS'				=> '<strong>Prune Logs</strong><br />» No logs deleted',
	'PRUNE_LOGS_NOTICE'			=> '<div class="phpinfo"><p class="entry">Config settings are in %1$s » %2$s » %3$s.</p></div>',
));
