--TEST--
IntlCalendar::getSkipped/RepeatedWallTimeOption(): bad arguments
--INI--
date.timezone=Atlantic/Azores
--EXTENSIONS--
intl
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);

var_dump(intlcal_get_skipped_wall_time_option(1));
?>
--EXPECTF--
Fatal error: Uncaught TypeError: intlcal_get_skipped_wall_time_option(): Argument #1 ($calendar) must be of type IntlCalendar, int given in %s:%d
Stack trace:
#0 %s(%d): intlcal_get_skipped_wall_time_option(1)
#1 {main}
  thrown in %s on line %d
