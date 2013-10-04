<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Pc_skype
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'PcSkype'        => 'system/modules/pc_skype/classes/PcSkype.php',

	// Modules
	'ContentPcSkype' => 'system/modules/pc_skype/modules/ContentPcSkype.php',
	'ModulePcSkype'  => 'system/modules/pc_skype/modules/ModulePcSkype.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_pc_skype'  => 'system/modules/pc_skype/templates/elements',
	'mod_pc_skype' => 'system/modules/pc_skype/templates/modules',
));
