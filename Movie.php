<?php

class Movie{
  public $title;
  public $genre;
  public $year;
  public $cast;
  public $movie_director;
  public $description;
  public $reviews;

  function __construct($_title, $_genre, $_year, $_reviews)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->reviews = $_reviews; 
  }

  public function getReviews(){
    $stringReviews = 'eccellente';
    if ($this->reviews <= 3) {
      $stringReviews = 'scarso';
    } else if ($this->reviews <= 8) {
      $stringReviews = 'accettabile';
    }
    return $stringReviews;
  }

  public function getExceptedDescription($length = 20) {
    return substr($this->description, 0, $length) . "...";
  }
}


