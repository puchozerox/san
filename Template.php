<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Template
 *
 * @author puchozerox
 */
class Template {
    
    public function mostrarTitulo(){
        return "Liz - Carteras y Accesorios";
    }
    
    public function mostrarMenuSuperior(){
        return '<ul id="menu">'.
                    $this->linkIndexMenuSuperior("Inicio", "index.php").
                    $this->linkMenuSuperio("Clientes", "#").
                    $this->linkMenuSuperio("Vender", "#")
                .'</ul>';
    }
    
    private function linkIndexMenuSuperior($nombre, $link){
        return '<li class="active"><a href="'.$link.'" title="Click aqui para ir al inicio"</a>'.$nombre.'</li>';
    }
    
    private function linkMenuSuperio($nombre, $link){
        return '<li><a href="'.$link.'" title="Clic para ir a '.$nombre.'"</a>'.$nombre.'</li>';
    }
}

?>
