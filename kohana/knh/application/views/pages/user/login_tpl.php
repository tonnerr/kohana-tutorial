	<?php defined('SYSPATH') or die('No direct access allowed.');

	echo form::open();
  echo '<table>';

  echo '<tr>';
  echo '<td>';
	echo form::label('username', __('username'));
  echo '</td>';
  echo '<td>';
	echo form::input('username','',array('id' => 'username'));
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>';
	echo form::label('password', __('password'));
  echo '</td>';
  echo '<td>';
	echo form::password('password','',array('id' => 'password'));
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>';
	echo form::label('remember', __('remember me'));
  echo '</td>';
  echo '<td>';
	echo form::checkbox('remember','1', FALSE, array('id' => 'remember'));
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>&nbsp;</td>';
  echo '<td>';
	echo form::submit('login', __('login'));
  echo '</td>';
  echo '</tr>';

  echo '</table>';
	echo form::close();

	?>