<?php

namespace Book\Model;

class Book
{
    public $id;
    public $title;
    public $author;
    public $published_date;
    public $isbn;
    public $price;

    public function exchangeArray(array $data)
    {
        $this->id             = !empty($data['id']) ? $data['id'] : null;
        $this->title          = !empty($data['title']) ? $data['title'] : null;
        $this->author         = !empty($data['author']) ? $data['author'] : null;
        $this->published_date = !empty($data['published_date']) ? $data['published_date'] : null;
        $this->isbn           = !empty($data['isbn']) ? $data['isbn'] : null;
        $this->price          = !empty($data['price']) ? $data['price'] : null;
    }
}
