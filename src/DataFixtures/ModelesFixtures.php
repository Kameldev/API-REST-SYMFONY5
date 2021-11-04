<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Annonce;
use App\Entity\Marque;
use App\Entity\Modele;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

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
                'canonical_name' => 'cabriolet',
            ],
            [
                'name' => 'Q2',
                'canonical_name' => 'q2',

            ],
            [
                'name' => 'Q3',
                'canonical_name' => 'q3',

            ],
            [
                'name' => 'Q5',
                'canonical_name' => 'q5',

            ],
            [
                'name' => 'Q7',
                'canonical_name' => 'q7',

            ],
            [
                'name' => 'Q8',
                'canonical_name' => 'q8',

            ],
            [
                'name' => 'R8',
                'canonical_name' => 'r8',

            ],
            [
                'name' => 'Rs3',
                'canonical_name' => 'rs3',

            ],
            [
                'name' => 'Rs4',
                'canonical_name' => 'rs4',

            ],
            [
                'name' => 'Rs5',
                'canonical_name' => 'rs5',

            ],
            [
                'name' => 'Rs7',
                'canonical_name' => 'rs7',

            ],
            [
                'name' => 'S3',
                'canonical_name' => 's3',

            ],
            [
                'name' => 'S4',
                'canonical_name' => 's4',

            ],
            [
                'name' => 'S4 Avant',
                'canonical_name' => 's4avant',

            ],
            [
                'name' => 'S4 Cabriolet',
                'canonical_name' => 's4cabriolet',

            ],
            [
                'name' => 'S5',
                'canonical_name' => 's5',

            ],
            [
                'name' => 'S7',
                'canonical_name' => 's7',

            ],
            [
                'name' => 'S8',
                'canonical_name' => 's8',

            ],
            [
                'name' => 'SQ5',
                'canonical_name' => 'sq5',

            ],
            [
                'name' => 'SQ7',
                'canonical_name' => 'sq7',

            ],
            [
                'name' => 'Tt',
                'canonical_name' => 'tt',

            ],
            [
                'name' => 'Tts',
                'canonical_name' => 'tts',

            ],
            [
                'name' => 'V8',
                'canonical_name' => 'v8',

            ],
        ];
        foreach ($modeles as $modele) {
            $m = new Modele();
            $m->setName($modele['name']);
            $m->setCanonicalName($modele['canonical_name']);
            $m->setMarque($marque);
            $manager->persist($m);
            $manager->flush();

        }

        //Marque BMW
        $marque = $repository->findOneBy(['name' => 'BMW']);
        $modeles = [
            [
                'name' => 'M3',
                'canonical_name' => 'm3',
            ],
            [
                'name' => 'M4',
                'canonical_name' => 'm4',

            ],
            [
                'name' => 'M5',
                'canonical_name' => 'm5',

            ],
            [
                'name' => 'M535',
                'canonical_name' => 'm535',

            ],
            [
                'name' => 'M6',
                'canonical_name' => 'm6',

            ],
            [
                'name' => 'M635',
                'canonical_name' => 'm635',

            ],
            [
                'name' => 'Serie 1',
                'canonical_name' => 'serie1',

            ],
            [
                'name' => 'Serie 2',
                'canonical_name' => 'serie2',

            ],
            [
                'name' => 'Serie 3',
                'canonical_name' => 'serie3',

            ],
            [
                'name' => 'Serie 4',
                'canonical_name' => 'serie4',

            ],
            [
                'name' => 'Serie 5',
                'canonical_name' => 'serie5',

            ],
            [
                'name' => 'Serie 6',
                'canonical_name' => 'serie6',

            ],
            [
                'name' => 'Serie 7',
                'canonical_name' => 'serie7',

            ],
            [
                'name' => 'Serie 8',
                'canonical_name' => 'serie8',

            ],
        ];
        foreach ($modeles as $modele) {
            $m = new Modele();
            $m->setName($modele['name']);
            $m->setCanonicalName($modele['canonical_name']);
            $m->setMarque($marque);
            $manager->persist($m);
            $manager->flush();

        }

        //Marque Citroen
        $marque = $repository->findOneBy(['name' => 'Citroen']);
        $modeles = [
            [
                'name' => 'C1',
                'canonical_name' => 'c1',
            ],
            [
                'name' => 'C15',
                'canonical_name' => 'c15',

            ],
            [
                'name' => 'C2',
                'canonical_name' => 'c2',

            ],
            [
                'name' => 'C25',
                'canonical_name' => 'c25',

            ],
            [
                'name' => 'C25D',
                'canonical_name' => 'c25d',

            ],
            [
                'name' => 'C25E',
                'canonical_name' => 'c25e',

            ],
            [
                'name' => 'C25TD',
                'canonical_name' => 'c25td',

            ],
            [
                'name' => 'C3',
                'canonical_name' => 'c3',

            ],
            [
                'name' => 'C3 Aircross',
                'canonical_name' => 'c3aircross',

            ],
            [
                'name' => 'C3 Picasso',
                'canonical_name' => 'c3picasso',

            ],
            [
                'name' => 'C4',
                'canonical_name' => 'c4',

            ],
            [
                'name' => 'C4 Picasso',
                'canonical_name' => 'c4picasso',

            ],
            [
                'name' => 'C5',
                'canonical_name' => 'c5',

            ],
            [
                'name' => 'C6',
                'canonical_name' => 'c6',

            ],
            [
                'name' => 'C8',
                'canonical_name' => 'c8',

            ],
            [
                'name' => 'Ds3',
                'canonical_name' => 'ds3',

            ],
            [
                'name' => 'Ds4',
                'canonical_name' => 'ds4',

            ],
            [
                'name' => 'Ds5',
                'canonical_name' => 'ds5',

            ],
        ];
        foreach ($modeles as $modele) {
            $m = new Modele();
            $m->setName($modele['name']);
            $m->setCanonicalName($modele['canonical_name']);
            $m->setMarque($marque);
            $manager->persist($m);
            $manager->flush();

        }

    }
}
