<?php

namespace App;


class Compare
{
    public $items;
    public $totalQty = 0;

    public function __construct($oldCompare){
        if ($oldCompare)
        {
            $this->items = $oldCompare->items;
            $this->totalQty = $oldCompare->totalQty;

        }
    }

    public function add($item, $id){
        $storedItem = ['qty' => 0, 'item' => $item];
        if ($this->items){
            if (array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $this->items[$id] = $storedItem;
        $this->totalQty++;
    }



}
