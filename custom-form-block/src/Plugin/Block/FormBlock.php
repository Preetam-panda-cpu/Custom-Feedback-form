<?php
/**
 * @file
 * Contains \Drupal\custom_form_in_block\Plugin\Block\FormBlock.
 */

namespace Drupal\custom_form_in_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'Form' block.
 *
 * @Block(
 *   id = "form_block",
 *   admin_label = @Translation("Form block"),
 *   category = @Translation("Custom Form block example")
 * )
 */
class FormBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\custom_form_in_block\Form\KeyForm');

    return $form;
   }
}