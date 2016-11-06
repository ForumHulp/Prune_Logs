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
	'PRUNE_LOGS_DAYS' 			=> 'Purgar registros',
	'PRUNE_LOGS_DAYS_EXPLAIN'	=> 'Días antes que el cron purgará los registros. Establecer el valor 0 para deshabilitar esto.',

	'LOG_PRUNE_LOGS'			=> '<strong>Registros purgados</strong><br />%s',
	'NO_PRUNE_LOGS'				=> '<strong>Registros purgados</strong><br />» No hay registros borrados',
	'PRUNE_LOGS_NOTICE'			=> '<div class="phpinfo"><p class="entry">Los ajustes de configuración están en %1$s » %2$s » %3$s.</p></div>',
));
