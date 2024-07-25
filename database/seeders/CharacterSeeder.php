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
                'image_url' => 'https://example.com/images/welkin_gunther.jpg',
                'image_path' => null,
            ],
            [
                'name' => 'Alicia Melchiott',
                'class_type' => 'Scout',
                'description' => 'Alicia is a baker turned scout in the Gallian Militia.',
                'image_url' => 'https://example.com/images/alicia_melchiott.jpg',
                'image_path' => null,
            ],
            [
                'name' => 'Largo Potter',
                'class_type' => 'Lancer',
                'description' => 'Largo is a veteran lancer in Squad 7.',
                'image_url' => 'https://example.com/images/largo_potter.jpg',
                'image_path' => null,
            ],
            [
                'name' => 'Rosie Stark',
                'class_type' => 'Shocktrooper',
                'description' => 'Rosie is a shocktrooper in Squad 7.',
                'image_url' => 'https://example.com/images/rosie_stark.jpg',
                'image_path' => null,
            ],
            [
                'name' => 'Isara Gunther',
                'class_type' => 'Engineer',
                'description' => 'Isara is an engineer and Welkin\'s adopted sister.',
                'image_url' => 'https://example.com/images/isara_gunther.jpg',
                'image_path' => null,
            ],
        ];

        foreach ($characters as $character) {
            Character::create($character);
        }
    }
}
