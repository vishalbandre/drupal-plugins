<?php

namespace Drupal\block_plugin\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "block_plugin",
 *   admin_label = @Translation("Hello block Plugin"),
 *   category = @Translation("Custom"),
 * )
 */
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc} 
   */
  public function build() {
    return [
      '#markup' => $this->t('Block Plugin! This is a sample block plugin module.'),
    ];
  }
}
