<?php
/**
*
* @package Prune Log's
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\prunelogs\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\controller\helper;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/* @var \phpbb\controller\helper */
	protected $helper;

	/**
	* Constructor
	*
	* @param \phpbb\controller\helper    $helper        Controller helper object
	*/
	public function __construct(helper $helper)
	{
		$this->helper = $helper;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.acp_board_config_edit_add'	=> 'load_config_on_setup',
		);
	}

	public function load_config_on_setup($event)
	{
		if ($event['mode'] == 'features')
		{
			$display_vars = $event['display_vars'];

			$add_config_var['prune_logs_days'] =
				array(
					'lang' 		=> 'PRUNE_LOGS_DAYS',
					'validate'	=> 'int',
					'type'		=> 'number:0:99',
					'explain'	=> true
				);

			$display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $add_config_var, array('after' =>'allow_quick_reply'));
			$event['display_vars'] = array('title' => $display_vars['title'], 'vars' => $display_vars['vars']);
		}
	}
}
