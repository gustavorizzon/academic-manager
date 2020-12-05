<?php

namespace App\Helpers;

use Carbon\Carbon;
use DateTime;

/**
 * Useful Date Operations
 *
 * @author Gustavo Rizzon
 */
abstract class Date
{
  const SUNDAY = 0;
  const MONDAY = 1;
  const TUESDAY = 2;
  const WEDNESDAY = 3;
  const THURSDAY = 4;
  const FRIDAY = 5;
  const SATURDAY = 6;

  /**
   * Recursively get the next date after a week of the current date
   *
   * As its using a DateTime instance, the date is updated by reference
   *
   * @param DateTime $baseDate the base date to get the next one
   * @param array $ecxept array of exceptions
   * @param string $exceptFormat the format of the date exceptions
   *
   * @return DateTime
   */
  public static function nextDateAfterWeek(DateTime $baseDate, array $except = [], string $exceptFormat = 'Y-m-d') {
    $baseDate->modify('1 week');

    return in_array($baseDate->format($exceptFormat), $except)
      ? self::nextDateAfterWeek($baseDate, $except, $exceptFormat)
      : $baseDate ;
  }

  /**
   * Get a weekday date from a base date
   *
   * As its using a DateTime instance, the date is updated by reference
   *
   * @param DateTime $baseDate the base date to get de weekday date
   * @param int $weekDay The week day number (0 = sunday)
   *
   * @return DateTime
   */
  public static function getWeekdayDate(DateTime $baseDate, int $weekDay) {
    $actualWeekDay = $baseDate->format('w');

    return $baseDate->modify(($weekDay - $actualWeekDay) . ' days');
  }

  /**
   * Add semesters to the $dateTime
   *
   * As its using a DateTime instance, the date is updated by reference
   *
   * @param DateTime $dateTime The date to add semesters
   * @param int $semesters If ZERO, no changes are made... otherwise the number of specified semesters are added
   *
   * @return DateTime
   */
  public static function addSemester(DateTime $dateTime, int $semesters = 0) {
    if ($semesters) {
      $dateTime->modify((6 * $semesters) . ' months');
    }

    return $dateTime;
  }
}
