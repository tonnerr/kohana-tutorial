<?php
  if ($news){
    echo '<ul>';
    foreach ($news as $row){
      echo '<li>'.html::entities($row['title']).'</li>';
    }
    echo '</ul>';
  }
?>