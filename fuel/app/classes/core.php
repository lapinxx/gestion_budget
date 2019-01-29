<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of core
 *
 * @author jkonczak
 */
class Core {
    
    public static function getMonths() {
        $months = array();
        
        for ($i=1; $i<=12; $i++) {
            $dateTime = DateTime::createFromFormat('!m', $i);
            $months[$i] = $dateTime->format('F');
        }
        
        return $months;
    }
    
   public static function getYears() {
        $years = array();
         
        for ($i=2017; $i<=date('Y'); $i++){
            $years[$i] = $i;    
        }
        return $years;
    }
    
}
