<?php

/**
 * Movierack
 *
 * @version   0.0.1
 * @copyright Joshua Priddle <jpriddle@nevercraft.net>, 2011
 */

class Movierack {

  /**
   * Return a formatted URI string
   *
   * @return string
   */

  public static function uri_string() {
    $uri = preg_replace('|([\/]+)|', '/', $_SERVER['REQUEST_URI']);
    $uri = preg_replace("|/+?(.*)/+?$|", '\1', $uri);

    return $uri;
  }

  // --------------------------------------------------------------------

  /**
   * Return page title
   *
   * @return string | void
   */

  public static function page_title() {
    $uri = self::uri_string();

    if ($uri != "/") {
      $html = "";
      $segs = explode('/', $uri);

      foreach ($segs as $key => $page) {
        $name = urldecode($page);
        $html .= "&raquo; {$name} ";
      }
      return $html;
    }
  }

  // --------------------------------------------------------------------

  /**
   * Print navigation menu
   *
   * @return string | void
   */

  public static function navigation() {
    $uri = self::uri_string();

    if ($uri != "/") {
      $html = "";
      $segs = explode('/', $uri);

      foreach ($segs as $key => $page) {
        $url = join('/', array_slice($segs, 0, ($key + 1)));
        $name = urldecode($page);
        $html .= "&raquo; <a href=\"/{$url}/\">{$name}</a>";
      }
      return $html;
    }
  }

  // --------------------------------------------------------------------

}
