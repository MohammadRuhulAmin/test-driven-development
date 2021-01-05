<?php 

namespace App\Support;

class Collection{
    protected $items=[];

    public function __construct($itemList)
    {
        $this->items = $itemList;
    }

    public function get(){
        return $this->items;
    }
    public function count(){
        return count($this->items);
    }
}
