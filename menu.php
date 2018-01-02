<?php
require_once('date.php');
require_once('menu-index.php');
// require_once('date.php');
// 上のdataをmenu-indexのmenu.php直下に
// ココで読み込んでいる。と・・・なるほど。
// menu-indexを読み込んでいる必要性はあまり無いように見えます…フォームでアクションを渡す前提なら、基本的にrequireしなくてもいいはずです・・・
class Menu{
  private $genre;
  private $name;
  private $comment;
  private $price;

  private $orderCount = 0;

  public function __construct($genre,$name,$comment,$price){
    $this->genre = $genre;
    $this->name = $name;//そろえられたｗ　＝そろえてみたかったｗ
    $this->comment = $comment;
    $this->price = $price;
  }
  //エラーにならないかなぁ・・・開けると
  // エラーにならなければもちろんいいが…俺もやったことないｗ
  // もしエラーにならないなら戻す。
  // それとゲッターは見つけたがセッターは・・・・いや、まだ処理の流れ理解しきってないか俺。
  // シンタックス的におかしくなってたので…💧
//gettar--------------------------------------
  public function getGenre(){
    return $this->genre;
  }

  public function getName(){
    return $this->name;
  }

  public function getComment(){
    return $this->comment;
  }

  public function getPrice(){
    return $this->price;
  }
  //setter----------------------------------
  public function setOrderCount(){
    $this->orderCount = $orderCount;
  }

}

?>
