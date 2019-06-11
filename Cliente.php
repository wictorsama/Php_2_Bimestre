<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clientebd
 *
 * @author Laboratorio
 */
include 'ibd.interface.php';
include 'cliente.class.php';

class Cliente extends Bd{
    function insert($ob){
       echo $ob->getNome();
       echo $ob->getEmail();
       echo $ob->getListaTelefone();
       echo $ob->getListaEndereco();
       echo $ob->getCPF();       
    }
    
    function update($ob);
    function delete($ob);
    function search($ob);
}
