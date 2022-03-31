<?php
/**
 * @file
 * Contains \Drupal\block_plugin\Controller\HelloController.
 */
namespace Drupal\block_plugin\Controller;

class BlockPluginController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Block Plugin! This is a sample block plugin module.'),
    );
  }
}
