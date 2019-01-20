<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Basic
 *
 * @copyright   Copyright (C) 2019 SergioIglesiasNET
 * @license     GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */

defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

$value = $field->value;

echo '<p>'.$value.'</p>';

/*
To get params (params/cfbasic.xml):
$field->fieldparams->get('name_param', 'default');

EXAMPLE:
if($field->fieldparams->get('showvalue', 1)):
	echo '<p>'.$value.'</p>'; 
endif;

To add styles:
$css = 'ADD STYLES';
$doc = JFactory::getDocument();
$doc->addStyleDeclaration($css);
*/
?>