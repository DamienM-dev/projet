<?php

class Card 
{
    private string $title;
    private string $img;
    private string $alt;
    private string $contents;

    function __construct( string $title, string $img, string $alt, string $contents) 
    {
        $this->title = $title;
        $this->img = $img;
        $this->alt = $alt;
        $this->contents = $contents;
    }

    public function returnTitle() {
        return $this->title;
    }
    public function returnImage() {
        return $this->img;
    }
    public function returnAlt() {
        return $this->alt;
    }
    public function returnContent() {
        return $this->contents;
    }
    public function maxContents () {
        $max = 50;

        if(strlen($this->contents) >= $max)
        {
            $this->contents = substr($this->contents, 0, $max);
        }
    }
}
   

