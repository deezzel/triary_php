<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PublicationsValidator
 *
 * @author Artem Mihelson <artem.mihelson@gmail.com>
 */
final class PublicationsValidator {
    public static function validatePublicationsType($type){
        if (!self::isValidPublicationType($type)){
            throw new Exception('Unknown publication type' . $type);
        }
    }
    
    private static function isValidPublicationType($type){
        return in_array($type, Publications::allTypes());
    }
}
