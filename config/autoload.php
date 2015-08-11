<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'calendarComponent'      => 'system/modules/ical_creator/vendor/lib/calendarComponent.class.php',
	'iCalBase'               => 'system/modules/ical_creator/vendor/lib/iCalBase.class.php',
	'iCaldateTime'           => 'system/modules/ical_creator/vendor/lib/iCaldateTime.class.php',
	'iCalUtilityFunctions'   => 'system/modules/ical_creator/vendor/lib/iCalUtilityFunctions.class.php',
	'valarm'                 => 'system/modules/ical_creator/vendor/lib/valarm.class.php',
	'vcalendar'              => 'system/modules/ical_creator/vendor/lib/vcalendar.class.php',
	'vevent'                 => 'system/modules/ical_creator/vendor/lib/vevent.class.php',
	'vfreebusy'              => 'system/modules/ical_creator/vendor/lib/vfreebusy.class.php',
	'vjournal'               => 'system/modules/ical_creator/vendor/lib/vjournal.class.php',
	'vtimezone'              => 'system/modules/ical_creator/vendor/lib/vtimezone.class.php',
	'vtodo'                  => 'system/modules/ical_creator/vendor/lib/vtodo.class.php',
));
