<?php
// função valindo  que são numeros
function valida($numero1, $numero2){
    return is_numeric($numero1) && is_numeric($numero2);
}
// função multiplicando 
function multiplica ($numero1, $numero2){
    return $numero1*$numero2;
}
// função subitraindo
function subitrair ($numero1, $numero2){
    return $numero1-$numero2;
}
// função dividindo 
function dividir ($numero1, $numero2){
    return $numero1/$numero2;
}
// função somando 
function somar ($numero1, $numero2){
    return $numero1+ $numero2;
}
 //verificando se se as variaves estão preenchida 
if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["opera"])){

    //recebendo os valores das variaves e qual operação 
    $numero1=$_POST["numero1"];
    $numero2=$_POST["numero2"];
    $opera=$_POST["opera"];
    $erro= "Número Inválido";
    // comprando se são numeros se for comparando qual função  foi escolhida 
    if(valida($numero1, $numero1)){
        if($opera=='somar'){
            $resultado= somar($numero1, $numero2);
        }
        if($opera=='multiplica'){
            $resultado= multiplica($numero1, $numero2);
        }
        if($opera=='dividir'){
            $resultado= dividir($numero1, $numero2);
        }
        if($opera=='subitrai'){
            $resultado= subitrair($numero1, $numero2);
        }
    }else{
         echo "<table id='erro'><tr><td>$erro</td></tr></table>";
    }
}
