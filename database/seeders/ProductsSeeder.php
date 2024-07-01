<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlFiles = [
            'products.sql',
        ];
        foreach ($sqlFiles as $sqlFile) {
            $sqlFilePath = base_path("database/seeders/sql/$sqlFile");
            if (file_exists($sqlFilePath)) {
                $sql = file_get_contents($sqlFilePath);
                DB::unprepared($sql);
                $this->command->info("¡Se importó correctamente el archivo: $sqlFile!");
            }
        }
    }
}
