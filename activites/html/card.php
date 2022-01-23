<?php

class Card 
{
    private string $title;
    private string $img;
    private string $contents;

    function __construct( string $title, string $img, string $contents) 
    {
        $this->title = $title;
        $this->img = $img;
        $this->contents = $contents;
    }
    public function maxContents () {

    }
}
   

