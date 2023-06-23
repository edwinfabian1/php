<?php

class libro {
    private string $titulo;
    private string $editorial;
    private string $autor;
    private float $precio_base;
    private float $descuento;
    private float $impuestos;


    public function __construct($titulo,$editorial,$autor,$precio_base,$descuento, $impuestos){
        $this ->titulo=$titulo;
        $this ->editorial=$editorial;
        $this ->autor=$autor;
        $this ->precio_base=$precio_base;
        $this ->descuento=$descuento;
        $this ->impuestos=$impuestos;

    }

    public function set_titulo ($titulo){
        $this ->titulo =$titulo;
    }
    public function get_titulo (){
        return $this ->titulo;
    }

    public function set_editorial ($editorial){
        $this ->editorial =$editorial;
    }
    public function get_editorial (){
        return $this ->editorial;
    }

    public function set_autor ($autor){
        $this ->autor =$autor;
    }
    public function get_autor (){
        return $this ->autor;
    }

    public function set_precio_base ($precio_base){
        $this ->precio_base =$precio_base;
    }
    public function get_precio_base (){
        return $this ->precio_base;
    }

    public function set_descuento ($descuento){
        $this ->descuento =$descuento;
    }
    public function get_descuento (){
        return $this ->descuento;
    }

    public function set_impuestos ($impuestos){
        $this ->impuestos =$impuestos;
    }
    public function get_impuestos (){
        return $this ->impuestos;
    }

}

$libro1=new libro ('harry potter y la piedra filosofal','Salamandra S.A.','Libro de J. K. Rowling',450000,3.0,2.5);
$libro2=new libro ('el poder de ahora','Connie Kellough','Eckhart Tolle',90000,2.5,2.5);

echo 'titulo : '.$libro1->get_titulo ().'<br>';
echo 'editorial: '.$libro1->get_editorial().'<br>';
echo 'autor: ' .$libro1->get_autor().'<br>';
echo 'precio base: ' .$libro1->get_precio_base().'<br>';
echo 'descuento: '  .$libro1->get_descuento().'<br>';
echo 'impuestos: '  .$libro1->get_impuestos().'<br>';

echo $libro1->get_titulo().'<br>';

$libro1->set_titulo ('larry potter ');
$libro1->set_precio_base (550000);
$libro1->set_descuento (1.0);

echo $libro1->get_titulo().'<br>';
echo $libro1->get_precio_base ().'<br>';
echo $libro1->get_descuento ();