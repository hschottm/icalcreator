<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package ical_creator
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'vcalendar'              => 'system/modules/ical_creator/vendor/iCalcreator.class.php',
	'calendarComponent'      => 'system/modules/ical_creator/vendor/iCalcreator.class.php',
	'vevent'                 => 'system/modules/ical_creator/vendor/iCalcreator.class.php',
	'vtodo'                  => 'system/modules/ical_creator/vendor/iCalcreator.class.php',
	'vjournal'               => 'system/modules/ical_creator/vendor/iCalcreator.class.php',
	'vfreebusy'              => 'system/modules/ical_creator/vendor/iCalcreator.class.php',
	'valarm'                 => 'system/modules/ical_creator/vendor/iCalcreator.class.php',
	'vtimezone'              => 'system/modules/ical_creator/vendor/iCalcreator.class.php',
	'iCalUtilityFunctions'   => 'system/modules/ical_creator/vendor/iCalcreator.class.php',
));
