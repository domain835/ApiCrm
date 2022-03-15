<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Modules\Admin\Role\Services;

use App\Modules\Admin\Role\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Description of PermService
 *
 * @author D835
 */
class PermService {
    public function save(Request $request) {
        
        $data = $request->except('_token');
        
        $roles = Role::all();
        
        foreach ($roles as $role) {
            
            if(isset($data[$role->id])) {
                $role->savePermissions($data[$role->id]);
            }
            else {
                $role->savePermissions([]);
            }
        }
        
        return true;
    }
}
