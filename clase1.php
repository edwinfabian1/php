<?php

class automovil {
    public $marca;
    public $modelo;
    public $matricula;
    public $precio;

    public function __construct($marca,$modelo,$matricula,$precio){
        $this ->marca=$marca;
        $this ->modelo=$modelo;
        $this ->matricula=$matricula;
        $this ->precio=$precio;
    }
    //metodos getter y setter

    public function set_marca ($marca){
        $this ->marca =$marca;
    }
    public function get_marca (){
        return $this ->marca;
    }

    public function set_modelo ($modelo){
        $this ->modelo =$modelo;
    }
    public function get_modelo (){
        return $this ->modelo;
    }

    public function set_matricula ($matricula){
        $this ->atricula =$matricula;
    }
    public function get_matricula (){
        return $this ->matricula;
    }
    
    public function set_precio($precio){
        $this ->precio =$precio;
    }
    public function get_precio (){
        return $this ->precio;
    }

}



$auto_angelo=new automovil ('ferrari','2023','ang200',200000000);
$auto_jersio=new automovil ('renold 4','1961','jersi055',40000000);
$auto_miguela=new automovil ('BMW Group Classic','1960','migle100',6000000);

echo ' la marca es: ' .$auto_angelo ->marca.'<br>';
echo ' el modelo es: ' .$auto_angelo ->modelo.'<br>';
echo ' la marca es: '.$auto_angelo ->marca.'<br>';

echo $auto_angelo->get_marca ();

$auto_angelo->set_marca ('bmw');
$auto_angelo->set_modelo ('1999');

echo $auto_angelo->get_marca ().'<br>';
echo $auto_angelo->get_modelo ();



