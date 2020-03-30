<?php
require_once "acoesvideo.php";
class video implements acoesvideo{
    private $title, $review, $views,$likes,$playing;

// construct
    public function __construct($title){
        $this->title = $title;
        $this->views=0;
        $this->review=1;
        $this->likes=0;
        $this->playing=false;
    }

//funcoes
    public function play(){
        $this->playing=true;
    }
    public function pause(){
        $this->playing=false;
    }
    public function like(){
        $this->likes++;
    }

//getter e setters
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getReview(){
        return $this->review;
    }
    public function setReview($review){
        $media = ($this->review + $review)/$this->views;
        $this->review=$media;
    }
    public function getViews(){
        return $this->views;
    }
    public function setViews($views){
        $this->views = $views;
    }
    public function getLikes(){
        return $this->likes;
    }
    public function setLikes($likes){
        $this->likes = $likes;
    }
    public function getPlaying(){
        return $this->playing;
    }
    public function setPlaying($playing){
        $this->playing = $playing;
    }
}
?>