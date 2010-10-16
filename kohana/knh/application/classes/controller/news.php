<?php
/**
 * Description of news
 *
 * @author aquilax
 */
class Controller_News extends Controller_DefaultTemplate{

  public function  __construct($request) {
    parent::__construct($request);
    /*
     * Load the news model
     */
    $this->news = new Model_News();
  }

  public function action_index(){
    $this->data['news'] = $this->news->loadFirstPageNews(30);
    $this->render();
  }

}
?>
