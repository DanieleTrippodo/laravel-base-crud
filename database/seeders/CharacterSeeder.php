<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    public function run(): void
    {
        $characters = [
            [
                'name' => 'Welkin Gunther',
                'class_type' => 'Tank Commander',
                'description' => 'Welkin is a lieutenant in the Gallian Militia and the main protagonist.',
                'image_url' => 'https://static.wikia.nocookie.net/valkyria/images/7/7c/EPS_Valkyria_Welkin.jpg',
                'image_path' => null,
            ],
            [
                'name' => 'Alicia Melchiott',
                'class_type' => 'Scout',
                'description' => 'Alicia is a baker turned scout in the Gallian Militia.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Alicia_Melchiott',
                'image_path' => null,
            ],
            [
                'name' => 'Isara Gunther',
                'class_type' => 'Engineer',
                'description' => 'Isara is an engineer and Welkin\'s adopted sister.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Isara_Gunther',
                'image_path' => null,
            ],
            [
                'name' => 'Brigitte "Rosie" Stark',
                'class_type' => 'Shocktrooper',
                'description' => 'Rosie is a former bar singer turned shocktrooper.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Brigitte_%22Rosie%22_Stark',
                'image_path' => null,
            ],
            [
                'name' => 'Largo Potter',
                'class_type' => 'Lancer',
                'description' => 'Largo is a veteran lancer in Squad 7.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Largo_Potter',
                'image_path' => null,
            ],
            [
                'name' => 'Zaka',
                'class_type' => 'Shocktrooper',
                'description' => 'Zaka is a shocktrooper in Squad 7.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Zaka',
                'image_path' => null,
            ],
            [
                'name' => 'Eleanor Varrot',
                'class_type' => 'Officer',
                'description' => 'Eleanor Varrot is an officer in Squad 7.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Eleanor_Varrot',
                'image_path' => null,
            ],
            [
                'name' => 'Cordelia gi Randgriz',
                'class_type' => 'Princess',
                'description' => 'Cordelia is the princess of Gallia.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Cordelia_gi_Randgriz',
                'image_path' => null,
            ],
            [
                'name' => 'Maurits von Borg',
                'class_type' => 'Noble',
                'description' => 'Maurits is a nobleman of Gallia.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Maurits_von_Borg',
                'image_path' => null,
            ],
            [
                'name' => 'Georg von Damon',
                'class_type' => 'General',
                'description' => 'Georg is a general in the Gallian army.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Georg_von_Damon',
                'image_path' => null,
            ],
            [
                'name' => 'Maximilian',
                'class_type' => 'Prince',
                'description' => 'Maximilian is the prince of the East Europan Imperial Alliance.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Maximilian',
                'image_path' => null,
            ],
            [
                'name' => 'Selvaria Bles',
                'class_type' => 'General',
                'description' => 'Selvaria is a general in the East Europan Imperial Alliance.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Selvaria_Bles',
                'image_path' => null,
            ],
            [
                'name' => 'Radi Jaeger',
                'class_type' => 'General',
                'description' => 'Radi is a general in the East Europan Imperial Alliance.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Radi_Jaeger',
                'image_path' => null,
            ],
            [
                'name' => 'Berthold Gregor',
                'class_type' => 'General',
                'description' => 'Berthold is a general in the East Europan Imperial Alliance.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Berthold_Gregor',
                'image_path' => null,
            ],
            [
                'name' => 'Jean Townshend',
                'class_type' => 'Commander',
                'description' => 'Jean is a commander in the Atlantic Federation.',
                'image_url' => 'https://valkyria.fandom.com/it/wiki/Jean_Townshend',
                'image_path' => null,
            ],
            // Aggiungi altri personaggi qui se necessario
        ];

        foreach ($characters as $character) {
            Character::create($character);
        }
    }
}
