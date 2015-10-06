<?php
/**
 * @package     ContactEvents
 * @subpackage  content
 *
 * @copyright   Copyright (C) 2015 Constantin Romankiewicz.
 * @license     GNU GPL 3.0
 */
defined('_JEXEC') or die;

/**
 * Small plugin to test the newly added plugin events for com_contact.
 *
 * @author  Constantin Romankiewicz <constantin@zweiiconkram.de>
 * @since   1.0
 */
class PlgContentContactEvents extends JPlugin
{
	/**
	 * Event called at preparation of content.
	 *
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   mixed    &$item    The item displayed.
	 * @param   mixed    $params   Additional parameters.
	 * @param   integer  $page     Optional page number.
	 *
	 * @return  boolean	True on success.
	 */
	public function onContentPrepare($context, &$item, $params, $page = 0)
	{
		$allowed_contexts = array('com_contact.contact', 'com_contact.category', 'com_contact.category.title', 'com_contact.featured');

		if (!in_array($context, $allowed_contexts))
		{
			return true;
		}

		if ($context === 'com_contact.category.title')
		{
			$item->text .= " (edited)";
		}
		elseif ($context === 'com_contact.category')
		{
			$item->name .= " (edited)";
		}

		return true;
	}

	/**
	 * Event called after the content title.
	 *
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   mixed    &$item    The item displayed.
	 * @param   mixed    $params   Additional parameters.
	 * @param   integer  $page     Optional page number.
	 *
	 * @return  string  Returned value from this event will be displayed after the title.
	 */
	public function onContentAfterTitle($context, &$item, $params, $page = 0)
	{
		$allowed_contexts = array('com_contact.contact', 'com_contact.category');

		if (!in_array($context, $allowed_contexts))
		{
			return true;
		}

		return "onContentAfterTitle at " . $context . "<br />";
	}

	/**
	 * Event called before display of content.
	 *
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   mixed    &$item    The item displayed.
	 * @param   mixed    $params   Additional parameters.
	 * @param   integer  $page     Optional page number.
	 *
	 * @return  string  Returned value from this event will be displayed before the content of the item.
	 */
	public function onContentBeforeDisplay($context, &$item, $params, $page = 0)
	{
		$allowed_contexts = array('com_contact.contact', 'com_contact.category');

		if (!in_array($context, $allowed_contexts))
		{
			return true;
		}

		return "onContentBeforeDisplay at " . $context . "<br />";
	}

	/**
	 * Event called after display of content.
	 *
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   mixed    &$item    The item displayed.
	 * @param   mixed    $params   Additional parameters.
	 * @param   integer  $page     Optional page number.
	 *
	 * @return  string  Returned value from this event will be displayed after the content of the item.
	 */
	public function onContentAfterDisplay($context, &$item, $params, $page = 0)
	{
		$allowed_contexts = array('com_contact.contact', 'com_contact.category');

		if (!in_array($context, $allowed_contexts))
		{
			return true;
		}

		return "onContentAfterDisplay at " . $context . "<br />";
	}
}
