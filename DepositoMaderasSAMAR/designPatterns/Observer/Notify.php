<?php

class Notify
{   
    protected $db;
    private $observers = [];
    public function attach($ob)
    {
        array_push($this->observers, $ob);
       // print_r($this->observers);
    }

    public function detach($ob)
    {
           
    }
    public function notify($obj)
    {
        foreach ($this->observers as $ob) {
            $ob->update($obj);
        }
    }
    public function getObservers(){
        return $this->observers;
    }
}
