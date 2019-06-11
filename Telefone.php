<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of telefone
 *
 * @author Laboratorio
 */
class Telefone {
    private $id;
    private $tipo;
    private $numero;

    function __construct($tipo, $numero) {   
        $this->tipo = $tipo;
        $this->numero = $numero;
    }
       
    function getTipo() {
        return $this->tipo;
    }

    function setTipo($tipo) {
        if(len($tipo) > 5){
            $this->tipo = $tipo;
        }
        else{
            echo "<p> 'Tipo de telefone inválido!' </p>";
        }        
    }

    function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        if (celular($numero)){
            $this->numero = $numero;
        }
        else {
            echo "<p> 'Número inválido!' </p>";
         }
    }

    function celular($telefone){
        $telefone= trim(str_replace('/', '', str_replace(' ', '', str_replace('-', '', str_replace(')', '', str_replace('(', '', $telefone))))));

        $regexTelefone = "^[0-9]{11}$";

        //$regexCel = '/[0-9]{2}[6789][0-9]{3,4}[0-9]{4}/'; // Regex para validar somente celular
        if (preg_match($regexCel, $telefone)) {
            return true;
        }else{
            return false;
        }
    }
    function __toString() {
        //;
    }
}
