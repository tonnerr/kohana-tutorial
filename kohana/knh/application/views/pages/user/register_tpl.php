<?php
  echo form::open();
  echo '<table>';
  echo '<tr>';
  echo '<td>';
  echo form::label('username', __('username'));
  echo '</td>';
  echo '<td>';
  echo form::input('username', $form['username'], array('id' => 'username', 'class' => 'text' ));
  echo '</td>';
  echo '</tr>';
  echo (empty($errors['username'])) ? '' : '<tr><td>&nbsp;</td><td style="color:red">'.$errors['username'].'</td></tr>';

  echo '<tr>';
  echo '<td>';
  echo form::label('password', __('password'));
  echo '</td>';
  echo '<td>';
  echo form::password('password', $form['password'], array('id' => 'password', 'class' => 'text' ));
  echo '</td>';
  echo '</tr>';
  echo (empty($errors['password'])) ? '' : '<tr><td>&nbsp;</td><td style="color:red">'.$errors['password'].'</td></tr>';

  echo '<tr>';
  echo '<td>';
  echo form::label('email', __('e-mail'));
  echo '</td>';
  echo '<td>';
  echo form::input('email', $form['email'], array('id' => 'email', 'class' => 'text' ));
  echo '</td>';
  echo '</tr>';
  echo (empty($errors['email'])) ? '' : '<tr><td>&nbsp;</td><td style="color:red">'.$errors['email'].'</td></tr>';

  echo '<tr>';
  echo '<td>&nbsp;</td>';
  echo "<td>".form::submit('submit', __('register'))."</td>";
  echo '</tr>';
  echo '</table>';
  echo form::close();
?>