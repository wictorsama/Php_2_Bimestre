<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pessoa
 *
 * @author Laboratorio
 */
include 'Endereco.php';
include 'Telefone.php';

abstract class Pessoa {
    private $id;
    private $nome;
    private $email;
    private $listaEndereco = array();
    private $listaTelefone = array();
    
    function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getListaEndereco() {
        foreach ($this->listaEndereco as $end) {
            echo $end;
        }        
    }

    function getListaTelefone() {
        foreach ($this->listaTelefone as $tel) {
            echo $tel;
        }        
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        if(validaEmail($email)){
            $this->email = $email;        
        }        
    }

    function setListaEndereco($rua, $bairro, $numero) {
        $newEndereco = new Endereco();
        $newEndereco.setRua($rua);
        $newEndereco.setBairro($bairro);
        $newEndereco.setNumero($numero);
    
        array_push($this->listaEndereco, $rua, $bairro, $numero);
    }

    function setListaTelefone($Tipo, $Numero) {
        $newTelefone = new Telefone();
        $newTelefone.setNumero($Tipo);
        $newTelefone.setNumero($Numero);
        array_push($this->listaTelefone, $Tipo, $Numero );
    }
    
    function validaEmail($email){
        //verifica se e-mail esta no formato correto de escrita
        if (!ereg('^([a-zA-Z0-9.-_])*([@])([a-z0-9]).([a-z]{2,3})',$email)){
            $mensagem='E-mail Inválido!';
            return $mensagem;
        }
        else{
            //Valida o dominio
            $dominio=explode('@',$email);
            if(!checkdnsrr($dominio[1],'A')){
                    $mensagem='E-mail Inválido!';
                    return $mensagem;
            }
            else{
                return true;                
            }
        }
    }

}