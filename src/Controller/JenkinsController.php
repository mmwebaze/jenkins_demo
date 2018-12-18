<?php

namespace Drupal\jenkins_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class JenkinsController extends ControllerBase{

  public function greeting(){

    return array(
      '#type' => 'markup',
      '#markup' => 'Hello',
    );
  }
}