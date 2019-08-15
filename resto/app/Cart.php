<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cart
{
    //op basis van een tutorial https://www.youtube.com/watch?v=4J939dDUH4M&t=154s

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item,$id){
        $storedItem = ['qty'=>0,'prijs'=> $item->prijs, 'item'=> $item ];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['prijs'] = $item->prijs * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->prijs;
    }

    public function verminderMetEén($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['prijs'] -= $this->items[$id]['item']['prijs'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['prijs'];

        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }
    }

    public function verwijderItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['prijs'];
        unset($this->items[$id]);

    }
}







