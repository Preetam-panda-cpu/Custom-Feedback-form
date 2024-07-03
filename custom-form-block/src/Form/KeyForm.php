<?php
/**
 * @file
 * Contains \Drupal\custom_form_in_block\Form\KeyForm.
 */
namespace Drupal\custom_form_in_block\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class keyForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'key_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Name:'),
      '#required' => TRUE,
    );

    $form['mail'] = array(
      '#type' => 'email',
      '#title' => t('Email ID:'),
      '#required' => TRUE,
    );
	
	$form['phone'] = array (
	  '#type'=> 'tel',
	  '#title'=> t('Phone:'),
	  '#required'=> TRUE,
	  );
	  
	
	$form['candidate_dob'] = array (
      '#type' => 'date',
      '#title' => t('DOB'),
      '#required' => TRUE,
    );
    $form['candidate_gender'] = array (
      '#type' => 'select',
      '#title' => ('Gender'),
      '#options' => array(
        'Female' => t('Female'),
        'male' => t('Male'),
      ),
    );
	
	$form['message'] = array(
      '#type' => 'textarea',
      '#title' => t('Message:'),
      '#required' => TRUE,
    );
	
    $form['candidate_confirmation'] = array (
      '#type' => 'radios',
      '#title' => ('Are you above 18 years old?'),
      '#options' => array(
        'Yes' =>t('Yes'),
        'No' =>t('No')
      ),
    );
      
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    drupal_set_message($this->t('Hello @name ,Your @email is being submitted!', array('@name' => $form_state->getValue('name'),'@email' => $form_state->getValue('mail'))));

  }
}