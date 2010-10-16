<?php
if ($news) {
  foreach ($news as $row) {
    echo '<table>';
    echo '<tr>';
    echo '<td class="vote">'.html::anchor('#', '&#9652;').'</td>';
    echo '<td class="title">';
    echo html::anchor('news/'.$row['id'], html::entities($row['title']));
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td></td>';
    echo '<td class="cohead">';
    echo $row['points'].' by '.html::anchor('user/'.$row['user_id'], html::entities($row['user_name'])).' '.date('m.d.Y H.y', $row['created']).' | '.html::anchor('news/'.$row['id'], $row['comments'].__(' comments'));
    echo '</td>';
    echo '</tr>';
    echo '</table>';
  }
}
?>