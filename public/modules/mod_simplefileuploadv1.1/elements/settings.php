<?php

/**
* @version		1.5j
* @copyright		Copyright (C) 2007-2009 Stephen Brandon
* @license		GNU/GPL
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

class JElementSettings extends JElement
{
	/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */

	var	$_name = 'Settings';

	function fetchElement($name, $value, &$node, $control_name)
	{
		$db = &JFactory::getDBO();

		$section  = $node->attributes('section');
		$class    = $node->attributes('class');
		if (!$class) {
		  $class = "inputbox";
		}

		if (!isset ($section)) {
		  // alias for section
		  $section = $node->attributes('scope');
		  if (!isset ($section)) {
			$section = 'content';
		  }
		}

		if ($section == 'content') {
		  // This might get a conflict with the dynamic translation
		  // - TODO: search for better solution
		  $query = 'SELECT c.id AS value, CONCAT_WS( "/",s.title, c.title ) AS text' .
			' FROM #__categories AS c' .
			' LEFT JOIN #__sections AS s ON s.id=c.section' .
			' WHERE c.published = 1' .
			' AND s.scope = '.$db->Quote($section).
			' ORDER BY s.title, c.title';
		} else {
		  $query = 'SELECT c.id AS value, c.title AS text' .
			' FROM #__categories AS c' .
			' WHERE c.published = 1' .
			' AND c.section = '.$db->Quote($section).
			' ORDER BY c.title';
		}
		
		$query = 'SELECT id AS value, name AS text'
 		. ' FROM #__users'
 		. ' WHERE block=0 ORDER BY name';

		
		$db->setQuery($query);
		$optionsAll[] = JHTML::_('select.option', "[ALL]", JText::_($text));
		$optionsDB = $db->loadObjectList();
		
		$options = array_merge($optionsAll, $optionsDB);
	  
		return JHTML::_('select.genericlist',  $options, ''.$control_name.'['.$name.'][]', 
		  'class="inputbox" size="12" multiple="multiple"',
		  'value', 'text', $value, $control_name.$name);
	}

}