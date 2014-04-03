<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRolesValidator
 *
 * @author Artem Mihelson <artem.mihelson@gmail.com>
 */
final class UserValidator {
    public static function validateRole($role){
        if (!self::isValidRole($role)){
            throw new Exception('Unknown role' . $role);
        }
    }
    
    private static function isValidRole($role){
        return in_array($role, Users::allRoles());
    }
}
