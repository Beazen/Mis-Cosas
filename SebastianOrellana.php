<?php
class deportista {
    private $nombre;
    private $rut;
    private $edad;
    private $peso;
    private $altura;


    function __construct($nombre,$rut,$edad,$peso,$altura){

        $this->nombre=$nombre;
        $this->rut=$rut;
        $this->edad=$edad;
        $this->peso=$peso;
        $this->altura=$altura;
     }
    function vernombre(){
        return $this->nombre;
    }
    function verrut(){
        return $this->rut;
    }
    function veredad(){
        return $this->edad;
    }
    function verpeso(){
        return $this->peso;
    }
    function veraltura(){
        return $this->altura;
    }
    function verimc(){
        return $this->imc=$this->verpeso()/($this->veraltura()*$this->veraltura());
    }
}
$persona1=new deportista ("leandro","21.334.233-5","19",70,1.60);

echo "El nombre de la Persona es: ";
echo $persona1->vernombre();
echo "<br>";
echo "El rut de la Persona es: ";
echo $persona1->verrut();
echo "<br>";
echo "La edad de la Persona es: ";
echo $persona1->veredad();
echo "<br>";
echo "El peso de la Persona es de: ";
echo $persona1->verpeso();
echo "kg <br>";
echo "La altura de la Persona es: ";
echo $persona1->veraltura();
echo " metros <br>";
echo " El IMC de la Persona es de: ";
if($persona1->verimc()<18.5){
    echo $persona1->verimc();
     echo " bajo peso";
}elseif($persona1->verimc()<=24.9){
    echo $persona1->verimc();
     echo " normal";
}elseif($persona1->verimc()<=29.9){ 
    echo $persona1->verimc();
 echo " sobre peso";
}elseif($persona1->verimc() >=30){
    echo $persona1->verimc();
    echo " obesidad";
}

?>