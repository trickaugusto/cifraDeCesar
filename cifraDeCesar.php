<?php

require_once 'Instancia.php';

class CifraDeCesar
{
    protected $str;
    protected $alfabeto;

    public function __construct($texto)
    {
        $this->setStr($texto);

        $alfabeto = [];
        foreach (range('A', 'Z') as $letter) {
            $alfabeto[] .= $letter;
        }

        $this->setAlfabeto($alfabeto);

    }

    ###########################################################
    ######################## GETTERS ##########################
    ###########################################################

    public function getStr()
    {
        return $this->str;
    }

    public function getAlfabeto()
    {
        return $this->alfabeto;
    }

    ###########################################################
    ######################## SETTERS ##########################
    ###########################################################

    public function setStr($str)
    {
        $str = strtoupper($str);
        $this->str = $str;
    }

    public function setAlfabeto($alfabeto)
    {
        $this->alfabeto = $alfabeto;
    }

    ###########################################################
    ######################## METHODS ##########################
    ###########################################################

    public function principal($param = TRUE)
    {
        
        // Percorre a string passada letra por letra e baseado no parâmetro da função verifica se é pra criptografar ou descriptografar a frase
        $str = $this->getStr();

        for($i = 0; $i < strlen($str); $i++){
            
            if($str[$i] === ' '){
                continue;
            }

            if($param) {
                $letraCriptografada = $this->criptografa($str[$i]);
                $this->str[$i] = $letraCriptografada;

            } else {
                $letraDesriptografada = $this->descriptografa($str[$i]);
                $this->str[$i] = $letraDesriptografada;
            }  
        }

        echo "<br> ";
        echo $this->str;
    }

    public function criptografa($letra)
    {
        $alfabeto = $this->getAlfabeto();
        $size = count($alfabeto);

        for($x = 0; $x < $alfabeto; $x++){

            if($letra === $alfabeto[$x]){

                $posicao = $x + 3;

                if($posicao >= $size){
                    $posicao -= $size;
                } 

                $subst = $alfabeto[$posicao];
                return $subst;
            }
        }
    }

    public function descriptografa($letra)
    {
        $alfabeto = $this->getAlfabeto();
        $size = count($alfabeto);

        for($x = 0; $x < $alfabeto; $x++){

            if($letra === $alfabeto[$x]){

                $posicao = $x - 3;

                if($posicao < 0){
                    $posicao += $size;
                } 

                $subst = $alfabeto[$posicao];
                return $subst;
            }
        }
    }
}
