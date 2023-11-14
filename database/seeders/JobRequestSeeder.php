<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de solicitudes de trabajo
        $jobRequests = [
            // Ejemplo de solicitud de trabajo para usuario 'Cliente 1'
            [
                'user' => 'Cliente 1',
                'category' => 'Fontanería',
                'skill' => 'Instalación de tuberías',
                'title' => 'Reparación de fuga en la tubería del baño',
                'description' => 'Se requiere reparar una fuga de agua en la tubería del baño. El baño se encuentra en el segundo piso de la casa.',
                'location' => 'Calle 123, Ciudad ABC',
                'status' => 'pending',
            ],
            // Ejemplo de solicitud de trabajo para usuario 'Cliente 2'
            [
                'user' => 'Cliente 2',
                'category' => 'Electricidad',
                'skill' => 'Instalación de enchufes',
                'title' => 'Instalación de nuevos enchufes en la cocina',
                'description' => 'Necesito instalar tres nuevos enchufes en la cocina para conectar electrodomésticos adicionales.',
                'location' => 'Av. XYZ, Ciudad DEF',
                'status' => 'pending',
            ],
            // Agrega más solicitudes de trabajo según sea necesario
        ];

        foreach ($jobRequests as $jobRequestData) {
            $user = DB::table('users')->where('name', $jobRequestData['user'])->first();
            $category = DB::table('categories')->where('name', $jobRequestData['category'])->first();
            $skill = DB::table('skills')->where('name', $jobRequestData['skill'])->first();
            if ($user && $category && $skill) {
                DB::table('job_requests')->insert([
                    'user_id' => $user->id,
                    'category_id' => $category->id,
                    'skill_id' => $skill->id,
                    'title' => $jobRequestData['title'],
                    'description' => $jobRequestData['description'],
                    'location' => $jobRequestData['location'],
                    'status' => $jobRequestData['status'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
