<?php

class Notify
{   
    protected $db;
    private $observers = [];
    public function attach($ob)
    {
        array_push($this->observers, $ob);
    }

    public function detach($ob)
    {
           
    }
    public function notify($product)
    {
        foreach ($this->observers as $ob) {
            $ob->update($ob,$product);
        }
    }
    public function getObservers(){
        return $this->observers;
    }
}

