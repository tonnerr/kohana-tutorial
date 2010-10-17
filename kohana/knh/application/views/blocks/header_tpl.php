<div id="header">
<?php
echo '<b>'.html::anchor('/', $site_title).'</b> | ';
echo html::anchor('submit', __('submit')).' | ';
echo html::anchor('latest', __('latest'));
echo '<span class="fr">';
if ($logged){
  echo html::anchor('user', $username).' | ';
  echo html::anchor('user/logout', __('logout'));
} else {
  echo html::anchor('user/login', __('login')).' | ';
  echo html::anchor('user/register', __('register'));
}
echo '</span>';
?>
</div>