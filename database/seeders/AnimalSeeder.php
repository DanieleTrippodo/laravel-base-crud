<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;
use League\Csv\Reader;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Leggi il file CSV
        $csv = Reader::createFromPath(database_path('seeders/animals.csv'), 'r');
        $csv->setHeaderOffset(0); // Imposta la prima riga come intestazione

        // Itera su ciascuna riga del CSV
        foreach ($csv as $record) {
            Animal::create([
                'name' => $record['name'],
                'species' => $record['species'],
                'description' => $record['description'],
            ]);
        }
    }
}
