<?php
/**
* @version		1.5j
* @copyright		Copyright (C) 2007-2009 Stephen Brandon
* @license		GNU/GPL
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

class JElementDonate extends JElement
{
	/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
	var	$_name = 'Donate';

	function fetchElement($name, $value, &$node, $control_name)
	{
		return '
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" alt="PayPal - The safer, easier way to pay online!" onclick="javascript: window.open (\'' . JURI::root() . 'modules/mod_simplefileuploadv1.1/elements/donate.html\', \'donate\',\'\');">
	Donate through PayPal - If you like it, why not support it... ;)
		';

	}
}