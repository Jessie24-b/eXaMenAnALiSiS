<?php

interface IObserver
{
    public function update(Client $cliente,$product);
}