<?php
/*
3.13 Using Non-Gregorian Calendars
Problem
You want to use a non-Gregorian calendar, such as a Julian, Jewish, or French Republican
calendar.
*/

// March 8, 1876
// $jd is 2406323, the Julian day count
$jd = gregoriantojd(3,9,1876);
$gregorian = cal_from_jd($jd, CAL_GREGORIAN);
/* $gregorian is array('date' => '3/9/1876',
  'month' => 3,
  'day' => 9,
  'year' => 1876,
  'dow' => 4,
  'abbrevdayname' => 'Thu',
  'dayname' => 'Thursday',
  'abbrevmonth' => 'Mar',
  'monthname' => 'March'));
*/
print_r($gregorian);

// February 29, 1900 (not a Gregorian leap year)
// $jd is 2415092, the Julian day count
$jd = cal_to_jd(CAL_JULIAN, 2, 29, 1900);
$julian = cal_from_jd($jd, CAL_JULIAN);
/* $julian is array('date' => '2/29/1900',
  'month' => 2,
  'day' => 29,
  'year' => 1900,
  'dow' => 2,
  'abbrevdayname' => 'Tue',
  'dayname' => 'Tuesday',
  'abbrevmonth' => 'Feb',
  'monthname' => 'February'));
*/
print_r($julian);

$gregorian = cal_from_jd($jd, CAL_GREGORIAN);
/* $gregorian is array('date' => '3/13/1900',
  'month' => 3,
  'day' => 13,
  'year' => 1900,
  'dow' => 2,
  'abbrevdayname' => 'Tue',
  'dayname' => 'Tuesday',
  'abbrevmonth' => 'Mar',
  'monthname' => 'March'));
*/
print_r($gregorian);

// 13 Floréal XI
// $jd is 2379714, the Julian day count
$jd = cal_to_jd(CAL_FRENCH, 8, 13, 11);
$french = cal_from_jd($jd, CAL_FRENCH);
/* $french is array('date' => '8/13/11',
  'month' => 8,
  'day' => 13,
  'year' => 11,
  'dow' => 2,
  'abbrevdayname' => 'Tue',
  'dayname' => 'Tuesday',
  'abbrevmonth' => 'Floreal',
  'monthname' => 'Floreal'));
*/
print_r($french);

// May 3, 1803 - sale of Louisiana to the US
$gregorian = cal_from_jd($jd, CAL_GREGORIAN);
/* $gregorian is array('date' => '5/3/1803',
  'month' => 5,
  'day' => 3,
  'year' => 1803,
  'dow' => 2,
  'abbrevdayname' => 'Tue',
  'dayname' => 'Tuesday',
  'abbrevmonth' => 'May',
  'monthname' => 'May'));
*/
print_r($gregorian);

// 25 Kislev 5774 is the first night/day of Hanukah
// $jd is 2456625, the Julian day count
$jd = cal_to_jd(CAL_JEWISH, 3, 25, 5774);
$jewish = cal_from_jd($jd, CAL_JEWISH);
/* $jewish is array('date' => '3/25/5774',
  'month' => 3,
  'day' => 25,
  'year' => 5774,
  'dow' => 4,
  'abbrevdayname' => 'Thu',
  'dayname' => 'Thursday',
  'abbrevmonth' => 'Kislev',
  'monthname' => 'Kislev'));
*/
print_r($jewish);

// November 28, 2013 is US Thanksgiving holiday
$gregorian = cal_from_jd($jd, CAL_GREGORIAN);
/* $gregorian is array('date' => '11/28/2013',
  'month' => 11,
  'day' => 28,
  'year' => 2013,
  'dow' => 4,
  'abbrevdayname' => 'Thu',
  'dayname' => 'Thursday',
  'abbrevmonth' => 'Nov',
  'monthname' => 'November'));
*/
print_r($gregorian);

?>