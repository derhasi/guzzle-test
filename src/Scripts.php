<?php

namespace derhasi\GuzzleTest;

use GuzzleHttp\Client;

class Scripts {

  /**
   * Script callback for putting in composer scripts.
   *
   * @param \Composer\Script\Event $event
   */
  public static function test(\Composer\Script\Event $event) {
    $composer = $event->getComposer();
    new Client();

  }


}
