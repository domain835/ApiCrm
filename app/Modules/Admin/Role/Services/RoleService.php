<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Modules\Admin\Role\Services;

use App\Modules\Admin\Role\Requests\RoleRequest;
use Illuminate\Database\Eloquent\Model;

/**
 * Description of RoleService
 *
 * @author D835
 */
class RoleService 
{
    public function save(RoleRequest $request, Model $model) {
        
        $model->fill($request->only($model->getFillable()));
        $model->save();
        
        return true;
    }
}
