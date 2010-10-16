<?php
/**
 * Description of news
 *
 * @author aquilax
 */
class Model_News extends Model{

  private $order_string = '((points - 1) / ((UNIX_TIMESTAMP(CURRENT_TIMESTAMP)-UNIX_TIMESTAMP(created))*3600 +2)^1.5)';

  /*
   * Load the news for the first page
   */
  public function loadFirstPageNews($n){
    return DB::select('id', 'title', 'user_id', 'user_name', 'comments', 'points', new Database_Expression('UNIX_TIMESTAMP(created) AS created'))
      ->from('news')
      ->order_by(new Database_Expression($this->order_string), 'DESC')
      ->order_by('created')
      ->limit($n)
      ->execute()
      ->as_array();
  }
}
?>
