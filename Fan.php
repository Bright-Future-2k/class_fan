<?php


class Fan
{
//    public $slow = 1;
//    public $medium = 2;
//    public $fast = 3;

    private $speed = "SLOW";
    private $status = false;
    private $radius = 5;
    private $color = "blue";

    public function setSpeed ($speed){
        $this->speed = $speed;
    }
    public function getSpeed () {
        return $this->speed;
    }

    public function setStatus ($status){
        $this->status = $status;
    }
    public function getStatus () {
        return $this->status;
    }

    public function setRadius ($radius){
        $this->radius = $radius;
    }
    public function getRadius () {
        return $this->radius;
    }

    public function setColor ($color){
        $this->color = $color;
    }
    public function getColor () {
        return $this->color;
    }
    public function toString (){
        if ($this->status = true){
            echo $this->status . $this->speed . $this->color . $this->radius . "Fan is on";
        }else if ($this->status = false){
            echo $this->status . $this->speed . $this->color . $this->radius . "Fan is off";

        }
    }

}