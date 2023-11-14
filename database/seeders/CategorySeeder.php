<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Reparaciones del Hogar' => [
                'Fontanería',
                'Electricidad',
                'Carpintería',
                'Pintura',
                'Albañilería',
                'Cerrajería',
                'Climatización y Calefacción',
            ],
            'Mantenimiento y Jardinería' => [
                'Mantenimiento de Jardines',
                'Paisajismo',
                'Limpieza de Exteriores',
                'Podado de Árboles',
                'Limpieza de Piscinas',
                'Mantenimiento de Toldos y Pérgolas',
            ],
            'Servicios de Construcción' => [
                'Construcción de Viviendas',
                'Reformas',
                'Construcción de Piscinas',
                'Instalación de Techos',
                'Construcción de Garajes',
                'Construcción de Patios',
            ],
            'Servicios de Mudanza y Transporte' => [
                'Mudanzas Residenciales',
                'Mudanzas Comerciales',
                'Transporte de Carga',
                'Alquiler de Vehículos',
                'Mudanzas Internacionales',
            ],
            // Agregar más categorías según sea necesario.
        ];

        foreach ($categories as $categoryName => $subcategories) {
            $category = Category::create([
                'name' => $categoryName,
            ]);

            foreach ($subcategories as $subcategoryName) {
                $category->skills()->create([
                    'name' => $subcategoryName,
                ]);
            }
        }
    }
}