<?php
echo '<table>';
echo '<tr>';
echo '<th>'.__('username').':</th>';
echo '<td>'.$user_data['username'].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th>'.__('last login').':</th>';
echo '<td>'.date('m.d.Y H.i', $user_data['last_login']).'</td>';
echo '</tr>';
echo '<tr>';
echo '<th>'.__('logins').':</th>';
echo '<td>'.$user_data['logins'].'</td>';
echo '</tr>';
echo '</table>';
?>
