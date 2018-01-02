<?php

class Menu{
  private $genre;
  private $name;
  private $comment;
  private $price;

  private $orderCount;


// 追加開始 つかうｗ合計金額出すw




// 追加終了
// これを書く場所に配置して使ってみるといいかも

  public function __construct($genre,$name,$comment,$price){
    $this->genre   = $genre;
    $this->name    = $name;
    $this->comment = $comment;
    $this->price   = $price;
  }

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

  public function getOrderCount(){
    return $this->orderCount;
  }

  //セッターーーーーーーーーーーーーーーーーーーー

  public function setOrderCount($orderCount){
    $this->orderCount = $orderCount;
  }

}

?>
