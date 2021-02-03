<?php

namespace Acquia\BltIdeLocal\Blt\Plugin\EnvironmentDetector;

use Acquia\Blt\Robo\Common\EnvironmentDetector;

class IdeDetector extends EnvironmentDetector {
  /**
   * Is AH IDE.
   */
  public static function isAhProdEnv() {
    $ah_env = self::getAhEnv();

    var_dump($ah_env);
    die();

    // ACE prod is 'prod'; ACSF can be '01live', '02live', ...
    return $ah_env == 'prod' || preg_match('/^\d*live$/', $ah_env);
  }

}
