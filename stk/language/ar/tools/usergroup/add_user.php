<?php
/**
*
* @package Support Toolkit - Add User
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translated by phpBBArabia http://www.phpbbarabia.com
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADD_USER'				=> 'إضافة مستخدم',
	'ADD_USER_GROUP'		=> 'إضافة مستخدم إلى المجموعات',

	'DEFAULT_GROUP'			=> 'المجموعة الافتراضية',
	'DEFAULT_GROUP_EXPLAIN'	=> 'المجموعة الافتراضية لهذا العضو.',

	'GROUP_LEADER'			=> 'رئيس المجموعة',
	'GROUP_LEADER_EXPLAIN'	=> 'جعل هذا العضو هو رئيس المجموعات المختارة.',

	'USER_ADDED'			=> 'تم إنشاء المستخدم بنجاح!',
	'USER_GROUPS'			=> 'مجموعات المستخدمين',
	'USER_GROUPS_EXPLAIN'	=> 'جعل هذا المستخدم عضوا في المجموعات المختارة.',
));
