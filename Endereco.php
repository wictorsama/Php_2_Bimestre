<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of endereco
 *
 * @author Laboratorio
 */
class Endereco {
    private $id;
    private $rua;
    private $bairro;
    private $numero;
    
    function __construct($rua, $bairro, $numero) { 
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->numero = $numero;
    }

    function getId() {
        return $this->id;
    }

    function getRua() {
        return $this->rua;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getNumero() {
        return $this->numero;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRua($rua) {
        if (len($rua) > 20){
            $this->rua = $rua;
        }else{
            echo '<p> A rua deve conter mais que 20 caracteres! </p>';
        }
    }

    function setBairro($bairro) {
        if (len($bairro) > 5){
            $this->bairro = $bairro;
        }else{
            echo '<p> O bairro deve conter mais que 5 caracteres! </p>';
        }
    }

    function setNumero($numero) {        
        $this->numero = $numero;        
    }


}
