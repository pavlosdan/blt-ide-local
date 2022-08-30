<?php

namespace Acquia\BltIdeLocal\Blt\Plugin\EnvironmentDetector;

use Acquia\Blt\Robo\Common\EnvironmentDetector;

class IdeDetector extends EnvironmentDetector {

  /**
   * Is AH IDE.
   */
  public static function isLocalEnv(): bool {
    // Check if we are on an Acquia Environment that is an IDE as well.
    $is_local = (self::isAhEnv() && self::getAhEnv() == 'ide') ||
      (!self::isAhEnv() && !self::isPantheonEnv() && !self::isCiEnv());

    return $is_local;
  }

}
