<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function assignRoles(Request $request)
    {
        // Crear un rol
        $adminRole = Role::create(['name' => 'admin']);
        
        // Crear un permiso
        $viewDashboardPermission = Permission::create(['name' => 'view dashboard']);
        
        // Asignar el permiso al rol
        $adminRole->givePermissionTo($viewDashboardPermission);
        
        // Obtener el usuario actual (puedes obtenerlo según tus necesidades)
        $user = $request->user();
        
        // Asignar el rol a un usuario
        $user->assignRole('admin');
        
        // Asignar varios roles
        $user->assignRole('writer', 'admin');
        
        // Quitar roles
        $user->removeRole('writer');
        
        // Establecer roles específicos y eliminar los anteriores
        $user->syncRoles(['writer', 'admin']);
        
        // Comprobar si el usuario tiene un rol específico
        $hasWriterRole = $user->hasRole('writer');
        
    }
}
