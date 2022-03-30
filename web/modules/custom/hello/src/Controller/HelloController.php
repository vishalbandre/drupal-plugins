<?php
/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */
namespace Drupal\hello\Controller;

class HelloController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello! This is a sample module.'),
    );
  }
}
