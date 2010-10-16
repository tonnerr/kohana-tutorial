<div id="header">
<?php
echo '<b>'.html::anchor('/', $site_title).'</b> | ';
echo html::anchor('submit', __('submit')).' | ';
echo html::anchor('latest', __('latest'));
echo '<span class="fr">';
echo html::anchor('#', 'user');
echo '</span>';
?>
</div>