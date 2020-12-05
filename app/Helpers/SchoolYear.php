<?php

namespace App\Helpers;

use DateTime;

/**
 * School Year Abstraction
 *
 * @author Gustavo Rizzon
 */
abstract class SchoolYear
{
  /**
   * Get the school year representation based on semesters
   *
   * @param int $plus If ZERO, the result is the actual one, otherwise the respective next or previous
   */
  public static function get(int $plus = 0) {
    $date = new DateTime;

    if ($plus) {
      $date->modify((6 * $plus) . ' months');
    }

    return $date->format('Y') . '/' . (($date->format('n') > 6) ? 2 : 1);
  }
}
