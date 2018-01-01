<?php
require_once('menu-index.php');
require_once('date.php');

class Menu{
  private $genre;
  private $name;
  private $comment;
  private $price;

  public function __construct($genre,$name,$comment,$price){
    $this->   genre = $genre;
    $this->    name = $name;
    $this-> comment = $comment;
    $this->   price = $price;
  }

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

}

?>
