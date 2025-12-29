<?php
namespace PhpAPI2 {
  class Segments
  {
    private const SEGMENT_SEPARATOR = "/";
    private const PARAM_MARK = ":";

    public static function ToNodes($uri)
    {
      return explode(self::SEGMENT_SEPARATOR, $uri);
    }
    public static function IsParameter($segment)
    {
      return substr($segment, 0, \strlen(self::PARAM_MARK)) === self::PARAM_MARK;

    }
    public static function NormalizeParameter($segment)
    {
      $length = \strlen($segment);
      return substr($segment, 1, $length - 1);
    }
  }
}
?>