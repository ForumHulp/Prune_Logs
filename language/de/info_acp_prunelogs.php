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
	'PRUNE_LOGS_DAYS' 			=> 'Automatisches Löschen von Protokollen',
	'PRUNE_LOGS_DAYS_EXPLAIN'	=> 'Die Anzahl der Tage seit dem Protokoll-Eintrag. Protokoll-Einträge bleiben dauerhaft erhalten, wenn 0 als Wert eingestellt wird.',

	'LOG_PRUNE_LOGS'			=> '<strong>Protokoll-Einträge gelöscht</strong><br />%s',
	'NO_PRUNE_LOGS'				=> 'Keine Protokoll-Einträge gelöscht.',
));
