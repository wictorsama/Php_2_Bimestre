<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Laboratorio
 */
interface Bd {
    function insert($ob);
    function update($ob);
    function delete($ob);
    function search($ob);
}
