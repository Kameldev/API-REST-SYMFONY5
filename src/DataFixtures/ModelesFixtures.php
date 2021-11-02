<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Annonce;
use App\Entity\Marque;
use App\Entity\Modele;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;id

class ModelesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $repository = $manager->getRepository(Marque::class);
        //Marque Audi
        $marque = $repository->findOneBy(['name' => 'Audi']);
        $modeles = [
            [
                'name' => 'Cabriolet',
            ],
            [
                'name' => 'Q2',

            ],
            [
                'name' => 'Q3',

            ],
            [
                'name' => 'Q5',

            ],
            [
                'name' => 'Q7',

            ],
            [
                'name' => 'Q8',

            ],
            [
                'name' => 'R8',

            ],
            [
                'name' => 'Rs3',

            ],
            [
                'name' => 'Rs4',

            ],
            [
                'name' => 'Rs5',

            ],
            [
                'name' => 'Rs7',

            ],
            [
                'name' => 'S3',

            ],
            [
                'name' => 'S4',

            ],
            [
                'name' => 'S4 Avant',

            ],
            [
                'name' => 'S4 Cabriolet',

            ],
            [
                'name' => 'S5',

            ],
            [
                'name' => 'S7',

            ],
            [
                'name' => 'S8',

            ],
            [
                'name' => 'SQ5',

            ],
            [
                'name' => 'SQ7',

            ],
            [
                'name' => 'Tt',

            ],
            [
                'name' => 'Tts'

            ],
            [
                'name' => 'V8',

            ],
        ];
        foreach ($modeles as $modele) {
            $m = new Modele();
            $m->setName($modele['name']);
            $m->setMarque($marque);
            $manager->persist($m);
            $manager->flush();

        }

        //Marque BMW
        $marque = $repository->findOneBy(['name' => 'BMW']);
        $modeles = [
            [
                'name' => 'M3',
            ],
            [
                'name' => 'M4',

            ],
            [
                'name' => 'M5',

            ],
            [
                'name' => 'M535',

            ],
            [
                'name' => 'M6',

            ],
            [
                'name' => 'M635',

            ],
            [
                'name' => 'Serie 1',

            ],
            [
                'name' => 'Serie 2',

            ],
            [
                'name' => 'Serie 3',

            ],
            [
                'name' => 'Serie 4',

            ],
            [
                'name' => 'Serie 5',

            ],
            [
                'name' => 'Serie 6',

            ],
            [
                'name' => 'Serie 7',

            ],
            [
                'name' => 'Serie 8',

            ],
        ];
        foreach ($modeles as $modele) {
            $m = new Modele();
            $m->setName($modele['name']);
            $m->setMarque($marque);
            $manager->persist($m);
            $manager->flush();

        }

        //Marque Citroen
        $marque = $repository->findOneBy(['name' => 'Citroen']);
        $modeles = [
            [
                'name' => 'C1',
            ],
            [
                'name' => 'C15',

            ],
            [
                'name' => 'C2',

            ],
            [
                'name' => 'C25',

            ],
            [
                'name' => 'C25D',

            ],
            [
                'name' => 'C25E',

            ],
            [
                'name' => 'C25TD',

            ],
            [
                'name' => 'C3',

            ],
            [
                'name' => 'C3 Aircross',

            ],
            [
                'name' => 'C3 Picasso',

            ],
            [
                'name' => 'C4',

            ],
            [
                'name' => 'C4 Picasso',

            ],
            [
                'name' => 'C5',

            ],
            [
                'name' => 'C6',

            ],
            [
                'name' => 'C8',

            ],
            [
                'name' => 'Ds3',

            ],
            [
                'name' => 'Ds4',

            ],
            [
                'name' => 'Ds5',

            ],
        ];
        foreach ($modeles as $modele) {
            $m = new Modele();
            $m->setName($modele['name']);
            $m->setMarque($marque);
            $manager->persist($m);
            $manager->flush();

        }

    }
}
