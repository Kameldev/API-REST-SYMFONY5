<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Annonce;
use App\Entity\Marque;
use App\Entity\Modele;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = [
            [
                'name' => 'Emploi',
            ],
            [
                'name' => 'Automobile',

            ],
            [
                'name' => 'Immobilier',

            ]
        ];
        foreach ($categories as $category) {
            $c = new Category();
            $c->setName($category['name']);
            $manager->persist($c);
            $manager->flush();
        }

    }
}
