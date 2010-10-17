<?php
defined('SYSPATH') or die('No direct script access.');
/**
 * Description of user
 *
 * @author aquilax
 */
class Controller_User extends Controller_DefaultTemplate{

  public function  __construct($request) {
    parent::__construct($request);
  }

  public function action_index(){

  }

  public function action_login(){
    if (Auth::instance()->logged_in()){
      Request::instance()->redirect('user');
    } else {
      if ($_POST){
        $remember = isset($_POST['remember']) ? TRUE : FALSE;

        $auth = Auth::instance();
        if ($auth->login($_POST['username'], $_POST['password'], $remember)){
          Request::instance()->redirect('user');
				}
			}
    }
    $this->render();
  }

  public function action_register() {
    $this->data['form'] = array(
        'username' => '',
        'password' => '',
        'email' => ''
    );
    $this->data['errors'] = $this->data['form'];

    if (Auth::instance()->logged_in() != 0) {
      Request::instance()->redirect('/');
    }

    if ($_POST) {
      $user = ORM::factory('user');
      $post = $user->validate_create($_POST);
      if ($post->check()) {
        $user->username = $_POST['username'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        $user->add('roles',ORM::factory('role', array('name' => 'login')));
        Request::instance()->redirect('user');
      } else {
        $this->data['form'] = arr::overwrite($this->data['form'], $post->as_array());
        $this->data['errors'] = arr::overwrite($this->data['errors'], $post->errors('register'));
      }
    }
    $this->render();
  }


  public function action_logout(){
    Auth::instance()->logout();
    Request::instance()->redirect('/');
  }

}
?>