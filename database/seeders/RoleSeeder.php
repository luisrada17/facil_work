<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        $roles = [
            'admin',
            'worker',
            'client',
        ];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Definir permisos comunes
        $commonPermissions = [
            'home',
            'work_request.index',
            'work_request.show',
            'quotation.show',
            'certification.index',
            'certification.show',
            'message.send',
            'message.show',
        ];

        // Asignar permisos a roles
        $rolePermissions = [
            'admin' => [
                'work_request.create',
                'work_request.store',
                'work_request.edit',
                'work_request.update',
                'work_request.destroy',
                'quotation.create',
                'quotation.edit',
                'quotation.update',
                'quotation.destroy',
                'payment.create',
                'payment.show',
                'certification.create',
                'certification.store',
                'certification.edit',
                'certification.update',
                'certification.destroy',
                'admin.users.index',
                'admin.users.create',
                'admin.users.store',
                'admin.users.show',
                'admin.users.edit',
                'admin.users.update',
                'admin.users.destroy',
                'admin.work_requests.index',
                'admin.work_requests.edit',
                'admin.work_requests.update',
                'admin.work_requests.destroy',
                'admin.quotations.index',
                'admin.quotations.edit',
                'admin.quotations.update',
                'admin.quotations.destroy',
                'admin.certifications.index',
                'admin.certifications.create',
                'admin.certifications.store',
                'admin.certifications.edit',
                'admin.certifications.update',
                'admin.certifications.destroy',
            ],
            'worker' => array_merge($commonPermissions, [
                'quotation.create',
                'quotation.store',
                'quotation.edit',
                'quotation.update',
                'quotation.destroy',
                'certification.create',
                'certification.store',
                'certification.edit',
                'certification.update',
                'certification.destroy',
            ]),
            'client' => array_merge($commonPermissions, [
                'work_request.create',
                'work_request.store',
                'work_request.edit',
                'work_request.update',
                'work_request.destroy',
                'quotation.show',
                'payment.create',
                'payment.show',
                'certification.index',
                'certification.show',
            ]),
        ];

        foreach ($rolePermissions as $roleName => $permissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            foreach ($permissions as $permissionName) {
                Permission::firstOrCreate(['name' => $permissionName]);
                $role->givePermissionTo($permissionName);
            }
        }
    }
}
