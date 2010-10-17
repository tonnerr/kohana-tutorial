<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Description of news
 *
 * @author aquilax
 */
class Model_User extends Model_Auth_User {

  protected $_callbacks = array(
    'username' => array('username_available'),
    'email' => array('email_available')
  );

  public function validate_create(&$array) {
    $array = Validate::factory($array)
        ->filter(TRUE, 'trim')
        ->rules('password', $this->_rules['password'])
        ->rules('username', $this->_rules['username'])
        ->rules('email', $this->_rules['email']);

    foreach ($this->_callbacks as $field => $callbacks) {
      foreach ($callbacks as $callback) {
        $array->callback($field, array($this, $callback));
      }
    }
    return $array;
  }
}