<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Annonce;
use App\Entity\Marque;
use App\Entity\Modele;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MarquesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categorie = $manager->getRepository('App\Entity\Category')->find(5);

        $marques = [
            [
                'name' => 'Audi',
            ],
            [
                'name' => 'BMW',

            ],
            [
                'name' => 'Citroen',

            ]
        ];
        foreach ($marques as $marque) {
            $m = new Marque();
            $m->setName($marque['name']);
            $manager->persist($m);
            $m->setCategory($this->getReference($m));
            $manager->flush();

        }

    }
}
