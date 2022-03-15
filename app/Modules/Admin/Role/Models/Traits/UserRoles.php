<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Modules\Admin\Role\Models\Traits;

/**
 * Description of UserRoles
 *
 * @author D835
 */
class UserRoles 
{
    public function roles() {
        return $this->belongsToMany(Role::class, 'role_user');
    }
    
    public function canDo($alias, $require = false) {
        
    }
    
    public function hasRole($alias, $require = false) {
        
    }
    
    public function getMergedPermissions() {
        
    }
    
    public function getRoles() {
        
    }
}
