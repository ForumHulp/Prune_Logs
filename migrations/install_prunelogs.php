<?php
/**
*
* @package Prune Log's
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\prunelogs\migrations;

class install_prunelogs extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['prune_logs_version']) && version_compare($this->config['prune_logs_version'], '3.1.0', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('prune_logs_gc', 86400)),
			array('config.add', array('prune_logs_last_gc', '0', 1)),
			array('config.add', array('prune_logs_days', 30)),
			array('config.add', array('prune_logs_version', '3.1.0'))
		);
	}
}
