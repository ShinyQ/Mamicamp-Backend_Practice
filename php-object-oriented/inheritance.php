<?php

class Collection
{
   protected $items;
   
   public function __construct(array $items)
   {
       $this->items = $items;
   }

   public function sum($key)
   {
       return array_sum(array_column($this->items, $key));
   }
}

class Video
{
    public $title;
    public $length;

    
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

$video = new VideosCollection([
    new Video('Video 1', 100),
    new Video('Video 2', 200),
    new Video('Video 3', 300),
]);

var_dump($video);

echo $video->sum('length');