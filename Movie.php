<?php

class Movie{
  public $title;
  public $genre;
  public $year;
  public $duration;
  public $cast;
  public $movie_director;
  public $description;
  public $reviews;

  function __construct($_title)
  {
    $this->title = $_title;
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

  public function getExceptedDescription($length = 100) {
    return substr($this->description, 0, $length) . "...";
  }
}


